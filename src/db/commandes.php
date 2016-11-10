<?php

include('db.php');

function db_commandes_get() {
	$commandes = [];
	$result = pg_query('SELECT * FROM commandes');
	if(!$result) return NULL;
	while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
		$commandes[] = $line;
	}
	pg_free_result($result);
	return $commandes;
}

function db_commandes_create($params) {
	pg_insert_into('commandes', $params);
}

function db_commande_delete($id) {
	pg_query("DELETE FROM commandes WHERE id='".$id."'");
}

function db_commande_set($id, $key, $val) {
	pg_query("UPDATE commandes SET ".$key."='".$val."' WHERE id='".$id."'");
}

 ?>
