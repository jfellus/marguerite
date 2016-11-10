<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$ARGS = $_GET;
$cmd = $ARGS['cmd']; unset($ARGS['cmd']);
include($_SERVER['DOCUMENT_ROOT'] . '/../src/command/'. $cmd . '.php');

 ?>
