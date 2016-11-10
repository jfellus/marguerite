<?php

include('../src/db/catalogue.php');

db_open();

db_catalogue_reparent_category($ARGS['item'], $ARGS['parent']);

echo "ok";

?>
