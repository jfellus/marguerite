<?php

include('../src/db/commandes.php');

db_open();

$commandes = db_commandes_get();

function print_commandes(&$commandes) {
	foreach($commandes as $c) {
		echo '<tr>';
		echo '<td>'.$c['id'].'</td>';
		echo '<td>'.'prout'.'</td>';
		echo '<td>'.'pipi'.'</td>';
		echo '</tr>';
	}
}

echo '<table class="commandes"><tbody>';
print_commandes($commandes, NULL, 0);
echo '</tbody></table>';

?>
