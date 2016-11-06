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

function db_budget_create($item, $parent) {
	pg_query("INSERT INTO accounts (name, parent) VALUES ('".$item."','".$parent."')");
}

function db_budget_delete($item) {
	$parent = db_budget_get_parent($item);
	pg_query("UPDATE accounts SET parent='".$parent."' WHERE parent='".$item."'");
	pg_query("DELETE FROM accounts WHERE name='".$item."'");
}

function db_budget_get_parent($item) {
	$result = pg_query("SELECT parent FROM accounts WHERE name='".$item."'");
	return pg_fetch_array($result, null, PGSQL_ASSOC)['parent'];
}

 ?>
