/** Register an update-script hook */
function $$$(f) {
	$(function() { $("#page").on("moby", function(e) { f(); }); });
}

function update_scripts() {
	$("#page").trigger("moby");
}




////////////// LOGIN //////////

function logout() {
	console.error("NOT IMPLEMENTED");
}



///



/////////////////// UI //////

function add_toolbutton(title, classes, callback) {
	var elt = $(
		'<li>'
	+		'<a title="'+title+'" href="#">'
	+			'<i class="fa '+classes+'"></i>'
	+		'</a>'
	+	'</li>');
	elt.select("a").on("click", callback);
	$("#toolbuttons-placeholder").after(elt);
}


/////////////////////////////

$(function() { update_scripts(); });
