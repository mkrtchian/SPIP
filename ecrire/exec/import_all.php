<?php

/***************************************************************************\
 *  SPIP, Systeme de publication pour l'internet                           *
 *                                                                         *
 *  Copyright (c) 2001-2010                                                *
 *  Arnaud Martin, Antoine Pitrou, Philippe Riviere, Emmanuel Saint-James  *
 *                                                                         *
 *  Ce programme est un logiciel libre distribue sous licence GNU/GPL.     *
 *  Pour plus de details voir le fichier COPYING.txt ou l'aide en ligne.   *
\***************************************************************************/

if (!defined("_ECRIRE_INC_VERSION")) return;

include_spip('inc/headers');

// Restauration d'une base. Comme ca peut etre interrompu pour cause
// de Timeout, un javascript relance automatiquement (cf inc/import.php)
// Comme il peut relancer une action qui vient de se terminer,
// il faut ignorer son appel si la meta indiquant l'action en cours 
// est absente.

// http://doc.spip.org/@exec_import_all_dist
function exec_import_all_dist()
{
	$archive=_request('archive');
	if (!strlen($archive)) {
		$_POST['archive'] = $archive = _request('archive_perso');
	}
	if ($archive) {
		$dir = import_queldir();
		$_POST['dir'] = $dir;
		$commentaire = verifier_sauvegarde($dir . $archive);
		$insert = _request('insertion');
	} elseif (isset($GLOBALS['meta']['import_all'])) {
		$request = @unserialize($GLOBALS['meta']['import_all']);
		// Tester si l'archive est toujous la:
		// ca sert pour forcer a sortir d'une restauration inachevee
		if (is_readable($request['dir'] . $request['archive'])) {
			$archive = $request['archive'];
			$insert = $request['insertion'];
			$commentaire = '';
		}
	}

	if ($archive) {
	  // il faut changer cette chaine depuis qu'on fait aussi de la fusion
	  // _T('info_restauration_sauvegarde', 
		$action = _T($insert
			     ? 'info_restauration_sauvegarde_insert' 
			     : 'info_restauration_sauvegarde',
			     array('archive' => $archive));
		$admin = charger_fonction('admin', 'inc');
		echo $admin('import_all', $action, $commentaire, !$insert);
	}
	// on ne sait pas quoi importer, il faut sortir de la
	// sauf s'il s'agit du validateur (a ameliorer)
	elseif (_request('exec') <> 'valider_xml')  {
		include_spip('base/import_all');
		import_all_fin(array());
		include_spip('inc/import');
		detruit_restaurateur();
		effacer_meta('admin');
		redirige_url_ecrire();
	}
}

// http://doc.spip.org/@import_queldir
function import_queldir()
{
	global $connect_toutes_rubriques, $connect_login;

	if ($connect_toutes_rubriques) {
		$repertoire = _DIR_DUMP;
		if(!@file_exists($repertoire)) {
			$repertoire = preg_replace(','._DIR_TMP.',', '', $repertoire);
			$repertoire = sous_repertoire(_DIR_TMP, $repertoire);
		}
		return $repertoire;
	} else {
		$repertoire = _DIR_TRANSFERT;
		if(!@file_exists($repertoire)) {
			$repertoire = preg_replace(','._DIR_TMP.',', '', $repertoire);
			$repertoire = sous_repertoire(_DIR_TMP, $repertoire);
		}
		return sous_repertoire($repertoire, $connect_login);
	}
}


// http://doc.spip.org/@verifier_sauvegarde
function verifier_sauvegarde ($archive) {
	global $spip_version_base;

	$g = preg_match(",\.gz$,", $archive);
	$_fopen = $g ? 'gzopen' : 'fopen';
	$_fread = $g ? 'gzread' : 'fread';
	$buf_len = 1024; // la version doit etre dans le premier ko

	if (!(@file_exists($archive) AND $f = $_fopen($archive, "rb")))
		return _T('avis_probleme_archive', array('archive' => $archive));

	$buf = $_fread($f, $buf_len);

	if (preg_match('/<SPIP\s+[^>]*version_base="([0-9.]+)"[^>]*version_archive="([^"]+)"/', $buf, $regs)
	AND $regs[1] == $spip_version_base
	AND import_charge_version($regs[2]) )
		return ''; // c'est bon

	$r = $regs[1] . ' ' . $regs[2];
	return _T('avis_erreur_version_archive', 
		array('archive' => str_replace('/', ' / ', $archive) . " ($r)",
			'spipnet' => $GLOBALS['home_server']
			. '/' .  $GLOBALS['spip_lang'] . '_article1489.html'
			));
}

// http://doc.spip.org/@import_charge_version
function import_charge_version($version_archive)
{
	if (preg_match("{^phpmyadmin::}is",$version_archive)){
		$fimport = 'import_1_3'; 
	} else 	$fimport = 'import_' . str_replace('.','_',$version_archive);

	return  charger_fonction($fimport, 'inc', true);
}
?>
