
function budget_reload() {
	$("#budget-tree").empty();
	command("budget.tree.display", {},
		function(res) { on_budget_load(res) },
		function(err) { console.log(err); }
	);
}

function on_budget_load(res) {
	$("#budget-tree").append(res);

	$("#budget-tree").find("tr").on('reparent', function(e, parent) {
		var x = $(this.children[0]).text();
		var p = $(parent.children[0]).text();
		command("budget.reparent" , {item:x,parent:p},
			function(res) { budget_reload(); },
			function(err) { console.error(err);}
		);
	});
	update_scripts();
}


// INIT
$(function() {

	add_toolbutton("Ajouter un compte", "fa-plus", function() {
		$("#budget-new-dialog").dialog({
			closeText: "\u274C",
			resizable: false,
			height: "auto", width: "50vw",
			modal: true,
			buttons: {
				"Creer compte": function() {
					var dialog = $(this);
					command("budget.create", {item:$("#budget-new-dialog .name").val(), parent:$("#budget-new-dialog .parent").val()},
						function(res) {
							budget_reload();
							dialog.dialog( "close" );
						},
						function(err) { console.error(err);}
					);
				},
				"Annuler": function() { $( this ).dialog( "close" ); }
			}
		});
	});

	$(function() {
	   $.contextMenu({
		   selector: '#budget-tree tr',
		   callback: function(key, options) {
			   if(key == "supprimer") {
					var item = $(this).children("td").eq(0).text();
					command("budget.delete", {item:item},
						function(res) { budget_reload(); },
						function(err) { console.error(err);}
					);
			   }
		   },
		   items: {
			   "supprimer": {name: "Supprimer", icon: "delete"}
		   }
	   });
   });
});
