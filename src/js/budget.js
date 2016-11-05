$(function(){
	$(".budget.tree tr").on('reparent', function(e, parent) {
		var x = $(this.children[0]).text();
		var p = $(parent.children[0]).text();
		command("budget.reparent" , {item:x,parent:p},
			function(res) { location.reload(); },
			function(err) {console.error(err);}
		);
	});
});
