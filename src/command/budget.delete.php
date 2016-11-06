<?php

include('../src/db/budget.php');

db_open();

db_budget_delete($ARGS['item']);

echo "ok";

?>
