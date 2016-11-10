
function catalogue_reload() {
	$("#catalogue").empty();
	command("catalogue.tree.display", {},
	function(res) { on_catalogue_load(res) },
	function(err) { console.log(err); }
);
}

function on_catalogue_load(res) {
	$("#catalogue").append(res);

	make_reparentable($("#catalogue tr.category"), $("#catalogue tr.category"));
	$("#catalogue tr.category").on('reparent', function(e, parent) {
		var p = $(parent.children[0]).text();
		var x = $(this.children[0]).text();
		command("catalogue.reparent.category" , {item:x,parent:p},
			function(res) { catalogue_reload(); },
			function(err) { console.error(err);}
		);
	});

	make_reparentable($("#catalogue li.article"), $("#catalogue tr.category"));
	$("#catalogue li.article").on('reparent', function(e, parent) {
		var p = $(parent.children[0]).text();
		var id = $(this).attr("article-id");
		command("catalogue.set.article" , {id:id,key:'category',val:p},
			function(res) { catalogue_reload(); },
			function(err) { console.error(err);}
		);
	});



	update_scripts();
}


// INIT
function catalogue_init() {
	add_toolbutton("Creer un article", "fa-plus", function() {
		$("#catalogue-new-article-dialog").dialog({
			closeText: "\u274C",
			resizable: false,
			height: "auto", width: "50vw",
			modal: true,
			buttons: {
				"Creer article": function() {
					var dialog = $(this);
					command("catalogue.create.article", {
							designation:$("#catalogue-new-article-dialog .designation").val(),
							prix_ht:$("#catalogue-new-article-dialog .prix_ht").val().replace(".", ",") ,
							category:$("#catalogue-new-article-dialog .category").val()
						},
						function(res) {
							catalogue_reload();
							dialog.dialog( "close" );
						},
						function(err) { console.error(err);}
					);
				},
				"Annuler": function() { $( this ).dialog( "close" ); }
			}
		});
	});

	add_toolbutton("Ajouter une categorie d'article", "fa-plus", function() {
		$("#catalogue-new-category-dialog").dialog({
			closeText: "\u274C",
			resizable: false,
			height: "auto", width: "50vw",
			modal: true,
			buttons: {
				"Creer categorie": function() {
					var dialog = $(this);
					command("catalogue.create.category", {item:$("#catalogue-new-category-dialog .name").val(), parent:$("#catalogue-new-category-dialog .parent").val()},
						function(res) {
							catalogue_reload();
							dialog.dialog( "close" );
						},
						function(err) { console.error(err);}
					);
				},
				"Annuler": function() { $( this ).dialog( "close" ); }
			}
		});
	});

}

$(function() {
	$.contextMenu({
		selector: '#catalogue tr',
		callback: function(key, options) {
			if(key == "supprimer") {
				if($(this).hasClass("article")) {
					var id = $(this).attr("article-id");
					command("catalogue.delete.article" , {id:id},
						function(res) { catalogue_reload(); },
						function(err) { console.error(err);}
					);
				}
				else {
					var item = $(this).children("td").eq(0).text();
					command("catalogue.delete.category", {item:item},
						function(res) { catalogue_reload(); },
						function(err) { console.error(err);}
					);
				}
			}
		},
		items: {
			"supprimer": {name: "Supprimer", icon: "delete"}
		}
	});
});
