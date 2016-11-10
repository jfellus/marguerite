<?php

include('../src/db/catalogue.php');

db_open();

db_article_delete($ARGS['id']);

echo "ok";

?>
