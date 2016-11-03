<?php

global $DB;

function db_open() {
	global $DB;
	if(!$DB) $DB = pg_connect("host=localhost dbname=marguerite user=postgres password=pgsuperstar2016!") or die('Could not connect: ' . pg_last_error());
}


 ?>
