$(function(){
	$(".liA").toggle(function(){
		$(this).next().show("slow");
	},function(){
		$(".totleDiv").hide();
	});
});