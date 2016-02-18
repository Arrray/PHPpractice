$(document).ready( function() {
	//
	$("#admintypebutton").click( function() {
		if ($("#admintype").css("display")=="none") {
			$("#admintype").fadeIn("normal");
			
			$("#adminsystem").fadeOut("normal");
			$("#adminbook").fadeOut("normal");
			$("#adminuser").fadeOut("normal");
			$("#adminorder").fadeOut("normal");
			$("#admincommon").fadeOut("normal");
		} else {
			$("#admintype").fadeOut("normal");
		}
	});
	//
	$("#adminsystembutton").click( function() {
		if ($("#adminsystem").css("display")=="none") {
			$("#adminsystem").fadeIn("normal");
			
			$("#admintype").fadeOut("normal");
			$("#adminbook").fadeOut("normal");
			$("#adminuser").fadeOut("normal");
			$("#adminorder").fadeOut("normal");
			$("#admincommon").fadeOut("normal");
		} else {
			$("#adminsystem").fadeOut("normal");
		}
	});
	//
	$("#adminbookbutton").click( function() {
		if ($("#adminbook").css("display")=="none") {
			$("#adminbook").fadeIn("normal");
			
			$("#admintype").fadeOut("normal");
			$("#adminsystem").fadeOut("normal");
			$("#adminuser").fadeOut("normal");
			$("#adminorder").fadeOut("normal");
			$("#admincommon").fadeOut("normal");
		} else {
			$("#adminbook").fadeOut("normal");
		}
	});	
	//
	$("#adminuserbutton").click( function() {
		if ($("#adminuser").css("display")=="none") {
			$("#adminuser").fadeIn("normal");
			
			$("#admintype").fadeOut("normal");
			$("#adminsystem").fadeOut("normal");
			$("#adminbook").fadeOut("normal");
			$("#adminorder").fadeOut("normal");
			$("#admincommon").fadeOut("normal");
		} else {
			$("#adminuser").fadeOut("normal");
		}
	});		
	//
	$("#adminorderbutton").click( function() {
		if ($("#adminorder").css("display")=="none") {
			$("#adminorder").fadeIn("normal");
			
			$("#admintype").fadeOut("normal");
			$("#adminsystem").fadeOut("normal");
			$("#adminbook").fadeOut("normal");
			$("#adminuser").fadeOut("normal");
			$("#admincommon").fadeOut("normal");
		} else {
			$("#adminorder").fadeOut("normal");
		}
	});			
	//
	$("#admincommonbutton").click( function() {
		if ($("#admincommon").css("display")=="none") {
			$("#admincommon").fadeIn("normal");
			
			$("#admintype").fadeOut("normal");
			$("#adminsystem").fadeOut("normal");
			$("#adminbook").fadeOut("normal");
			$("#adminuser").fadeOut("normal");
			$("#adminorder").fadeOut("normal");
		} else {
			$("#admincommon").fadeOut("normal");
		}
	});			
	
	
	
	
});