<?php

include('../src/db/catalogue.php');

db_open();

db_article_set($ARGS['id'], $ARGS['key'], $ARGS['val']);

echo "ok";

?>
