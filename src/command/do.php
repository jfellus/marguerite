<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$ARGS = $_GET;
include($_SERVER['DOCUMENT_ROOT'] . '/../src/command/'. $_GET['cmd'] . '.php');

 ?>
