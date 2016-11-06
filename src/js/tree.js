function toggle_fold(elt) {
	function getLevel(e) {
		if($(e).attr("class").indexOf("level_") === -1) throw "Not a tree item";
		return parseInt($(e).attr("class").substr($(e).attr("class").indexOf("level_")+6));
	}

	var level = getLevel(elt);
	var bFolded = $(elt).hasClass("folded");
	$(elt).toggleClass('folded');
	for(var i = $(elt).next(); $(i).parent().get(0) == $(elt).parent().get(0) && getLevel(i) > level; i = $(i).next()) {
		if(!bFolded) {
			if(!$(i).hasClass("leaf")) $(i).addClass("folded");
			$(i).hide();
		}
		else if(getLevel(i) == level + 1) $(i).show();
	}
}




$$$(function() {
	var c = {};
	$( ".sortable.tree tr" ).draggable( {
		axis:'y',
		helper: "clone",
		start: function(event, ui) {
			c.tr = this;
			$(c.tr).addClass("ui-being-dragged")
			c.helper = ui.helper;
		},
		stop: function(event, ui) {
			$(c.tr).removeClass("ui-being-dragged");
		}
	}).droppable({
		drop: function( event, ui ) {
			ui.draggable.trigger("reparent", $(event.target));
		}
	});
});
