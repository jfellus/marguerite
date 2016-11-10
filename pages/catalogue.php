<div id="catalogue"></div>

<div title="Creer un article" id="catalogue-new-article-dialog" class='dialog'>
	<form><table>
		<tr><td>Designation</td><td><input class="designation"></td></tr>
		<tr><td>Categorie</td><td><input class="category"></td></tr>
		<tr><td>Prix Unitaire HT</td><td><input class="prix_ht"></td></tr>
	</table></form>
</div>

<div title="Creer une catégorie d'article" id="catalogue-new-category-dialog" class='dialog'>
	<form><table>
		<tr><td>Nom de la catégorie</td><td><input class="name"></td></tr>
		<tr><td>Catégorie parente</td><td><input class="parent"></td></tr>
	</table></form>
</div>

<script>
	$(function() {
		catalogue_init();
		catalogue_reload();
	});
</script>
