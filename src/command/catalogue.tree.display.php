<?php

include('../src/db/catalogue.php');

db_open();

$catalogue = db_catalogue_get();


function print_articles(&$catalogue, $category, $level) {
	echo '<tr class="articles level_'.$level.'"><td><ul>';
	foreach($catalogue[$category] as $name) {
		if(isset($name['id'])) {
 			echo '<li class="article" article-id="'.$name['id'].'">';
				echo '<img src="prout.jpg">';
				echo '<p>' . $name['designation'] . '</p>';
				echo '<p>' . $name['prix_ht'] . '</p>';
			echo '</li>';
		}
	}
	echo '</ul></td></tr>';
}

function print_catalogue(&$catalogue, $category, $level) {
	foreach($catalogue[$category] as $name) {
		if(!isset($name['id'])) {
			if(isset($catalogue[$name])) {
			echo '<tr onclick="toggle_fold(this)" class="category level_'.$level.'">';
			} else {
				echo '<tr class="leaf category level_'.$level.'">';
			}
			echo '<td><div><span class="unfold"></span>' . $name . '</div></td>';
			echo '<td></td>';
			echo '</tr>';
			if(isset($catalogue[$name])) {
				print_articles($catalogue, $name, $level+1);
				print_catalogue($catalogue, $name, $level+1);
			}
		}
	}
}

echo '<table class="catalogue tree sortable"><tbody>';
print_catalogue($catalogue, NULL, 0);
echo '</tbody></table>';

?>
