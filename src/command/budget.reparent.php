<?php

include('../src/db/budget.php');

db_open();

db_budget_reparent($ARGS['item'], $ARGS['parent']);

echo "ok";

 ?>
