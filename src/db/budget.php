<?php

include('db.php');

function db_budget_init() {
	pg_query('CREATE TABLE IF NOT EXISTS accounts (name varchar(256) PRIMARY KEY, parent varchar(256))') or die('Query failed: ' . pg_last_error());
}


function db_budget_get() {
	$children = [];
	$query = 'SELECT * FROM accounts';
	$result = pg_query($query);
	if(!$result) return NULL;

	while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
		if(!isset($children[$line['parent']])) $children[$line['parent']] = [];
		$children[$line['parent']][] = $line['name'];
	}
	pg_free_result($result);
	return $children;
}

function db_budget_reparent($item, $parent) {
	pg_query("UPDATE accounts SET parent='".$parent."' WHERE name='".$item."'");
}


 ?>
