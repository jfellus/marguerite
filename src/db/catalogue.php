<?php

include('db.php');

function db_catalogue_get() {
	$children = [];
	$result = pg_query('SELECT * FROM articles_categories');
	if(!$result) return NULL;

	while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
		if(!isset($children[$line['parent']])) $children[$line['parent']] = [];
		$children[$line['parent']][] = $line['name'];
	}
	pg_free_result($result);

	$result = pg_query('SELECT * FROM articles');
	if(!$result) return NULL;
	while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
		if(!isset($children[$line['category']])) $children[$line['category']] = [];
		$children[$line['category']][] = $line;
	}
	pg_free_result($result);


	return $children;
}

function db_article_create($params) {
	pg_insert_into('articles', $params);
}

function db_article_delete($id) {
	pg_query("DELETE FROM articles WHERE id='".$id."'");
}

function db_article_set($id, $key, $val) {
	pg_query("UPDATE articles SET ".$key."='".$val."' WHERE id='".$id."'");
}

function db_catalogue_reparent_category($item, $parent) {
	pg_query("UPDATE articles_categories SET parent='".$parent."' WHERE name='".$item."'");
}

function db_catalogue_create_category($item, $parent) {
	pg_query("INSERT INTO articles_categories (name, parent) VALUES ('".$item."','".$parent."')");
}

function db_catalogue_delete_category($cat) {
	$parent = db_catalogue_get_parent_category($cat);
	pg_query("UPDATE articles_categories SET parent='".$parent."' WHERE parent='".$cat."'");
	pg_query("DELETE FROM articles_categories WHERE name='".$cat."'");
}

function db_catalogue_get_parent_category($cat) {
	$result = pg_query("SELECT parent FROM articles_categories WHERE name='".$cat."'");
	return pg_fetch_array($result, null, PGSQL_ASSOC)['parent'];
}

 ?>
