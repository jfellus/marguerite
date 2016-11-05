function command(cmd, args, on_ok, on_error) {
	args.cmd = cmd;
	$.ajax({
		url:"/do.php",
		data: args,
		success: function(res) { on_ok(res); },
		error: function(res) { on_error(res); }
	});
}
