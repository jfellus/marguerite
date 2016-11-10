<?php

include('../src/db/catalogue.php');

db_open();

db_catalogue_delete_category($ARGS['item']);

echo "ok";

?>
