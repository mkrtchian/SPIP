<?php

/***************************************************************************\
 *  SPIP, Systeme de publication pour l'internet                           *
 *                                                                         *
 *  Copyright (c) 2001-2014                                                *
 *  Arnaud Martin, Antoine Pitrou, Philippe Riviere, Emmanuel Saint-James  *
 *                                                                         *
 *  Ce programme est un logiciel libre distribue sous licence GNU/GPL.     *
 *  Pour plus de details voir le fichier COPYING.txt ou l'aide en ligne.   *
\***************************************************************************/

if (!defined('_ECRIRE_INC_VERSION')) return;

define('_EXPORT_TRANCHES_LIMITE', 200);
define('_EXTENSION_PARTIES', '.gz');

function inc_export_dist($meta)
{
	if (!isset($GLOBALS['meta'][$meta])) {
		include_spip('inc/minipres');
		echo minipres();
	} else {
		while (true) {
			$val = unserialize($GLOBALS['meta'][$meta]);
			if ($dir = export_repertoire($meta, $val))
				export_trace($val, $dir, $meta);
			else break;
		}
		list($gz, $archive, $rub,,,,$serveur,$save) = $val;
		// retour a exec_export_all qui renverra sur action_export_all
		return "end,$gz,$archive,$rub,$serveur,$save";
	}
}

// calcule le repertoire de la sauvegarde
// et le nettoie au premier appel.
// Aux suivants, retourne le nom du repertoire ou rien si c'est fini.

function export_repertoire($meta, $val_meta)
{
	list(, $archive, , $tables, $etape, $sous_etape, , $save) = $val_meta;
	if (!function_exists('inc_export_' . ($save ? $save : 'xml'))) {
		spip_log("fonction inc_export_$save indisponible");
		return false;
	}
	$dir = base_dump_dir($meta);

	// Reperer une situation anormale (echec reprise sur interruption)
	if (($etape == 1) AND !$sous_etape) {
		$file = $dir . $archive;
		$l = preg_files($file .  ".part_[0-9]+_[0-9]+");
		if ($l) {
			spip_log("menage d'une sauvegarde inachevee: " . join(',', $l));
			foreach($l as $dummy) spip_unlink($dummy);
		}
	}
	$all = count($tables);
	return ($etape > $all OR !$all) ? false : $dir;
}

function export_trace($val_meta, $dir, $meta)
{
	list($gz, $archive, $rub, $tables_for_dump, $etape_actuelle, $sous_etape, $serveur, $save) = $val_meta;
	include_spip('inc/minipres');
	// pour permettre l'affichage au fur et a mesure
	@ini_set("zlib.output_compression","0");

	if (!($timeout = ini_get('max_execution_time')*1000));
	$timeout = 30000; // parions sur une valeur tellement courante ...
	// le premier hit est moitie moins long car seulement une phase d'ecriture de morceaux
	// sans ramassage
	// sinon grosse ecriture au 1er hit, puis gros rammassage au deuxieme avec petite ecriture,... ca oscille
	if (!$etape_actuelle AND !$sous_etape) {
		$timeout = round($timeout/2);
		$tables_sauvegardees = array();
	} else {
		$metatable = $meta . '_tables';
		$tables_sauvegardees = isset($GLOBALS['meta'][$metatable])?unserialize($GLOBALS['meta'][$metatable]):array();
	}

	// Les sauvegardes partielles prennent le temps d'indiquer les logos
	// Instancier une fois pour toutes, car on va boucler un max.
	// On complete jusqu'au secteur pour resituer dans l'arborescence)
	if ($rub) {
		$GLOBALS['chercher_logo'] = charger_fonction('chercher_logo', 'inc',true);
		$les_rubriques = complete_fils(array($rub), $serveur);
		$les_meres  = complete_secteurs(array($rub), $serveur);
	} else {
		$GLOBALS['chercher_logo'] = false;
		$les_rubriques = $les_meres = '';
	}

	// script de rechargement auto sur timeout
	$redirect = generer_url_ecrire("export_all");
	$all = count($tables_for_dump);
	echo ( install_debut_html(_T('info_sauvegarde') . " ($all)"));
	echo http_script("window.setTimeout('location.href=\"".$redirect."\";',$timeout)");

	echo "<div style='text-align: left'>\n";
	$etape = 1;
	foreach($tables_for_dump as $table){
		if ($etape_actuelle > $etape) {
			 // sauter les deja faits, mais rappeler qu'ils sont fait
			echo ( "\n<br /><strong>".$etape. '. '."</strong>". $tables_sauvegardees[$table]);
		}
		else {
			echo ( "\n<br /><strong>".$etape. '. '. $table."</strong> ");
			$r = sql_countsel($table, array(), array(), array(), $serveur);
			flush();
			if (!$r) $r = ( _T('texte_vide'));
			else {
			    $f = $dir . $archive . '.part_' . sprintf('%03d',$etape);
			    $r = export_objets($table, $sous_etape, $r, $f, $les_rubriques, $les_meres, $meta);
			    $r += $sous_etape*_EXPORT_TRANCHES_LIMITE;
			    // info pas fiable si interruption+partiel
			    if ($rub AND $etape_actuelle > 1) $r = ">= $r";
			}
			echo " $r";
			flush();
			$sous_etape = 0;
			// on utilise l'index comme ca c'est pas grave si on ecrit plusieurs fois la meme
			$tables_sauvegardees[$table] = "$table ($r)";
			ecrire_meta($meta . '_tables', serialize($tables_sauvegardees),'non');
		}
		$etape++;
		$v = serialize(array($gz, $archive, $rub, $tables_for_dump, $etape,$sous_etape, $serveur, $save));
		ecrire_meta($meta, $v,'non');
	}
	echo ( "</div>\n");
	// si Javascript est dispo, anticiper le Time-out
	echo  ("<script language=\"JavaScript\" type=\"text/javascript\">window.setTimeout('location.href=\"$redirect\";',0);</script>\n");
	echo (install_fin_html());
	flush();
}

// http://doc.spip.org/@complete_secteurs
function complete_secteurs($les_rubriques, $serveur='')
{
	$res = array();
	foreach($les_rubriques as $r) {
		do {
			$r = sql_getfetsel("id_parent", "spip_rubriques", "id_rubrique=$r", array(), array(), '',  array(), $serveur);
			if ($r) {
				if ((isset($les_rubriques[$r])) OR isset($res[$r]))
					$r = false;
				else  $res[$r] = $r;
			}
		} while ($r);
	}
	return $res;
}

// http://doc.spip.org/@complete_fils
function complete_fils($rubriques, $serveur='')
{
	$r = $rubriques;
	do {
		$q = sql_select("id_rubrique", "spip_rubriques", "id_parent IN (".join(',',$r).")", array(), array(), '', array(), $serveur);
		$r = array();
		while ($row = sql_fetch($q, $serveur)) {
			$r[]= $rubriques[] = $row['id_rubrique'];
		}
	} while ($r);


	return $rubriques;
}

//
// Exportation de table SQL au format xml
// La constante ci-dessus determine la taille des tranches,
// chaque tranche etant copiee immediatement dans un fichier 
// et son numero memorisee dans le serveur SQL.
// En cas d'abandon sur Time-out, le travail pourra ainsi avancer.
// Au final, on regroupera les tranches en un seul fichier
// et on memorise dans le serveur qu'on va passer a la table suivante.
// on prefere ne pas faire le ramassage ici de peur d'etre interrompu 
// par le timeout au mauvais moment
// le ramassage aura lieu en debut de hit suivant, 
// et ne sera normalement pas interrompu car le temps pour ramasser
// est plus court que le temps pour creer les parties

// http://doc.spip.org/@export_objets
function export_objets($table, $cpt, $total, $filetable, $les_rubriques, $les_meres, $meta) {
	global $tables_principales;

	$temp = $filetable . '.temp' . _EXTENSION_PARTIES;
	$prim = isset($tables_principales[$table])
	  ? $tables_principales[$table]['key']["PRIMARY KEY"]
	  : '';
	$debut = $cpt * _EXPORT_TRANCHES_LIMITE;
	$effectifs = 0;

	$v = unserialize($GLOBALS['meta'][$meta]);
	while (1){ // on ne connait pas le nb de paquets d'avance

		$cpt++;
		$tranche = build_while($debut, $table, $prim, $les_rubriques, $les_meres, $v[7], $v[6]);
		// attention: vide ne suffit pas a sortir
		// car les sauvegardes partielles peuvent parcourir
		// une table dont la portion qui les concerne sera vide..
		if ($tranche) { 
		// on ecrit dans un fichier generique
		// puis on le renomme pour avoir une operation atomique 
			if (is_array($tranche)) {
				ecrire_fichier ($temp, join('', $tranche));
				$f = $filetable . sprintf('_%04d',$cpt) . _EXTENSION_PARTIES;
				// le fichier destination peut deja exister
				// si on sort d'un timeout entre le rename et le ecrire_meta
				if (file_exists($f)) spip_unlink($f);
				rename($temp, $f);
				$tranche = count($tranche);
			}
			$effectifs += $tranche;
		}
		// incrementer le numero de sous-etape 
		// au cas ou une interruption interviendrait
		$v[5]++;
		ecrire_meta($meta, serialize($v));
		$debut +=  _EXPORT_TRANCHES_LIMITE;
		if ($debut >= $total) {break;}
		/* pour tester la robustesse de la reprise sur interruption
		   decommenter ce qui suit.
		if ($cpt && 1) {
		  spip_log("force interrup $s");
		  include_spip('inc/headers');
		  redirige_par_entete("./?exec=export_all&rub=$rub&x=$s");
		  } /* */
		echo(". ");
		flush();
	}
	return $effectifs;
}

// sauvegarde d'une table par ordre croissant de la cle primaire simple
// sinon les sequences PG seront pertubees a la restauration
// (a ameliorer)
// Retourne un tableau de chaines, d'autant d'element que de Row
// ou leur nombre, selon la fonction utilisee
// http://doc.spip.org/@build_while
function build_while($debut, $table, $prim, $les_rubriques, $les_meres, $save='', $serveur='') {

	$result = sql_select('*', $table, '', '', $prim, "$debut," . _EXPORT_TRANCHES_LIMITE, array(), $serveur);

	$i = 0;
	$res = array();
	$save = 'inc_export_' . ($save ? $save : 'xml');
	while ($r = sql_fetch($result, $serveur)) {
		if (export_select($r, $les_rubriques, $les_meres)) {
			if ($s = $save($r, $table, $prim, $serveur)) $res[]=$s; else $i++;
		}
	}
	sql_free($result, $serveur);
	return $res ? $res : $i;
}

// Construit la version xml des champs d'une table
function inc_export_xml($row, $table, $prim, $serveur) {
	global  $chercher_logo ;
	if ($chercher_logo) {
		$on = $chercher_logo($row[$prim], $prim, 'on');
		$off = $chercher_logo($row[$prim], $prim, 'off');
	} else 	$on = $off = "";
	foreach ($row as $k => $v) {
		$row[$k] = "<$k>" . text_to_xml($v) . "</$k>";
	}
	return "<$table"
	. ($on ? " on='$on[3]'" : '')
	. ($off ? " off='$off[3]'" : '')
	. ">\n"
	. join("\n", $row)
	. "\n</$table>\n\n";
}

// dit si Row est exportable, 
// en particulier quand on se restreint a certaines rubriques
// La table des documents doit etre apres celle des liens de doc
// elle-meme apres celle des objets auxquels elle lie ces documents.

// http://doc.spip.org/@export_select
function export_select($row, $les_rubriques, $les_meres) {
	static $articles = array();
	static $documents = array();

	if (isset($row['impt']) AND $row['impt'] !='oui') return false;
	if (!$les_rubriques) return true;

	// numero de rubrique non determinant pour les forums (0 a 99%)
	if (isset($row['id_rubrique']) AND $row['id_rubrique']) {
		if (in_array($row['id_rubrique'], $les_rubriques)) {
			if (isset($row['id_article']))
				$articles[] = $row['id_article'];
			if (isset($row['id_document']))
				$documents[]=$row['id_document'];
			return true;
		}
		if (!in_array($row['id_rubrique'], $les_meres))
			return false;
		// la rubrique, mais rien d'autre
		return (!isset($row['id_article'])
			AND !isset($row['id_mot'])
			AND !isset($row['id_document'])
			AND !isset($row['id_breve']));
	}
	//  dependances d'articles (mots, petitions, signatures et documents)
	if (isset($row['id_article']) AND $row['id_article']) {
		if (in_array($row['id_article'], $articles)) {
			if (isset($row['id_document']))
				$documents[]= $row['id_document'];
			return true;
		}
		return false;
	}
	if (isset($row['id_objet']) AND isset($row['objet'])) {
		if ($row['objet'] == 'article') {
			if (in_array($row['id_objet'], $articles)) {
				if (isset($row['id_document']))
					$documents[]= $row['id_document'];
				return true;
			}
			return false;
		}
		if ($row['objet'] == 'rubrique') {
			if (in_array($row['id_objet'], $les_rubriques)) {
				if (isset($row['id_document']))
					$documents[]=$row['id_document'];
				return true;
			}
			return false;
		}
	}

	if (isset($row['id_document']) AND $row['id_document']) {
		return array_search($row['id_document'], $documents);
	}
	// a la louche pour le reste, mais c'est a peu pres ca.
	return (isset($row['id_groupe']) OR isset($row['id_mot']) OR isset($row['mime_type']));
}

// Conversion texte -> xml (ajout d'entites)
// http://doc.spip.org/@text_to_xml
function text_to_xml($string) {
	static $old = array('&','<','>');
	static $new = array('&amp;','&lt;','&gt;');
	return str_replace($old, $new, $string);
}

?>
