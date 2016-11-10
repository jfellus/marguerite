
function commandes_reload() {
	$("#commandes").empty();
	command("commandes.display", {},
		function(res) { on_commandes_load(res) },
		function(err) { console.log(err); }
	);
}

function on_commandes_load(res) {
	$("#commandes").append(res);
	update_scripts();
}


// INIT
function commandes_init() {

	$(function() {
	   $.contextMenu({
		   selector: '#commandes tr',
		   callback: function(key, options) {
			   if(key == "annuler") {
					var id = $(this).attr("id");
					command("commandes.cancel", {item:item},
						function(res) { budget_reload(); },
						function(err) { console.error(err);}
					);
			   }
		   },
		   items: {
			   "annuler": {name: "Annuler", icon: "delete"}
		   }
	   });
   });
}
