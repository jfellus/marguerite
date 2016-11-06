<?php

include('../src/db/budget.php');

db_open();

$budget = db_budget_get();


function print_budget(&$budget, $account, $level) {
	foreach($budget[$account] as $name) {
		if(isset($budget[$name])) {
			echo '<tr onclick="toggle_fold(this)" class="level_'.$level.'">';
		} else {
			echo '<tr class="leaf level_'.$level.'">';
		}
		echo '<td><div><span class="unfold"></span>' . $name . '</div></td>';
		echo '<td>' . "prout" . '</td>';
		echo '<td>' . "prout" . '</td>';
		echo '<td>' . "12/10/2016" . '</td>';
		echo '</tr>';
		if(isset($budget[$name])) print_budget($budget, $name, $level+1);
	}
}

echo '<table class="budget tree sortable"><tbody>';
print_budget($budget, NULL, 0);
echo '</tbody></table>';

?>
