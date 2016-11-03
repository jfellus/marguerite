<?php

include('db.php');

function db_budget_init() {
	pg_query('CREATE TABLE IF NOT EXISTS accounts (name varchar(256) PRIMARY KEY, parent varchar(256))') or die('Query failed: ' . pg_last_error());
}

function tree_add(&$tree, $parent, $item) {
	if(!$parent) $tree[$name] = [];
	else foreach($tree as $s => &$subtree) {
		if($parent == $s) { $subtree[$item] = []; return; }
		tree_add($subtree, $parent, $item);
	}
}


function db_budget_get() {
	var $res = [];
	$query = 'SELECT * FROM accounts';
	$result = pg_query($query) or return NULL;

	while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
		tree_add($res, $line['parent'], $line['name']);
	}

	pg_free_result($result);
	return $tree;
}


 ?>
