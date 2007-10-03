<?php

/***************************************************************************\
 *  SPIP, Systeme de publication pour l'internet                           *
 *                                                                         *
 *  Copyright (c) 2001-2007                                                *
 *  Arnaud Martin, Antoine Pitrou, Philippe Riviere, Emmanuel Saint-James  *
 *                                                                         *
 *  Ce programme est un logiciel libre distribue sous licence GNU/GPL.     *
 *  Pour plus de details voir le fichier COPYING.txt ou l'aide en ligne.   *
\***************************************************************************/

if (!defined("_ECRIRE_INC_VERSION")) return;
include_spip('base/abstract_sql');

// http://doc.spip.org/@action_editer_mot_dist
function action_editer_mot_dist() {

	$securiser_action = charger_fonction('securiser_action', 'inc');
	$arg = $securiser_action();
	// arg = l'eventuel mot a supprimer pour d'eventuelles Row SQL
	if (!preg_match(',^(\d*)\D(-?\d*)\W(\w*)\W(\w*)\W(\w*)\W?(\d*)$,', $arg, $r)) 
		spip_log("action editer_mot: $arg pas compris");
	else action_editer_mot_post($r);
}

// http://doc.spip.org/@action_editer_mot_post
function action_editer_mot_post($r)
{
	$redirect = _request('redirect');
	$cherche_mot = _request('cherche_mot');
	$select_groupe = _request('select_groupe');

	list($x, $id_objet, $id_mot, $table, $table_id, $objet, $nouv_mot) = $r;
	if ($id_mot) {
			if ($objet)
			  // desassocier un/des mot d'un objet precis
				sql_delete("spip_mots_$table", "$table_id=$id_objet" . (($id_mot <= 0) ? "" : " AND id_mot=$id_mot"));
			else {
			  // disparition complete d'un mot
			sql_delete("spip_mots", "id_mot=$id_mot");
			sql_delete("spip_mots_articles", "id_mot=$id_mot");
			sql_delete("spip_mots_rubriques", "id_mot=$id_mot");
			sql_delete("spip_mots_syndic", "id_mot=$id_mot");
			sql_delete("spip_mots_forum", "id_mot=$id_mot");
			}
	}
	if ($nouv_mot ? $nouv_mot : ($nouv_mot = _request('nouv_mot'))) {
		// recopie de:
		// inserer_mot("spip_mots_$table", $table_id, $id_objet, $nouv_mot);
		$result = sql_countsel("spip_mots_$table", "id_mot=".intval($nouv_mot)." AND $table_id=$id_objet");
		if (!$result)
			spip_query("INSERT INTO spip_mots_$table (id_mot,$table_id) VALUES ("._q($nouv_mot).", $id_objet)");
	}

	// Notifications, gestion des revisions, reindexation...
	if ($table)
		pipeline('post_edition',
			array(
				'args' => array(
					'operation' => 'editer_mot',
					'table' => 'spip_'.$table,
					'id_objet' => $id_objet
				),
				'data' => null
			)
		);

	$redirect = rawurldecode($redirect);

	// hack du retour croise editer/grouper 

	if (preg_match('/^(.*exec=)editer_mot(&.*)script=(grouper_mots)(.*)$/', $redirect, $r))
	    $redirect = $r[1] . $r[3] . $r[2] . $r[4];
	if (preg_match(',exec=grouper_mots,',$redirect)){
		// mettre a jour le total de mots dans la liste pour eviter les pb de cache navigateur avec ajax
		$id_groupe = parametre_url($redirect,'id_groupe'); // recuperer l'id_groupe dans l'url
		$groupe = sql_fetch(spip_query("SELECT COUNT(*) AS n FROM spip_mots WHERE id_groupe="._q($id_groupe)));
		$redirect = parametre_url($redirect,'total',$groupe['n'],'&');
	}
	    
	if ($cherche_mot) {
		if ($p = strpos($redirect, '#')) {
			$a = substr($redirect,$p);
			$redirect = substr($redirect,0,$p);
		} else $a='';
		$redirect .= "&cherche_mot=$cherche_mot&select_groupe=$select_groupe$a";
	}
	redirige_par_entete($redirect);
}
?>
