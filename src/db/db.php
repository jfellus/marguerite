<?php

global $DB;

function db_open() {
	global $DB;
	if(!$DB) $DB = pg_connect("host=localhost dbname=marguerite user=postgres password=pgsuperstar2016!") or die('Could not connect: ' . pg_last_error());
}


function pg_insert_into($table, $params) {
	$s = "INSERT INTO ".$table." (";
	$first = 1;
	foreach($params as $k=>$v) {
		if(!$first) $s .= ", ";
		$s .= $k;
		$first = 0;
	}
	$s .= ') VALUES (';
	$first = 1;
	foreach($params as $k=>$v) {
		if(!$first) $s .= ", ";
		$s .= ("'".$v."'"); 
		$first = 0;
	}
	$s .= ')';
	return pg_query($s);
}

 ?>
