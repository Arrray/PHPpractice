$(function(){
		$("#jquery .ul_2 .li_2:not(:first)").hide();
			setInterval(function(){
				if($("#jquery .ul_2 .li_2:last").is(":visible")){
					$("#jquery .ul_2 .li_2:first").fadeIn("3000");
					$("#jquery .ul_2 .li_2:last").hide();
				}else{
					$("#jquery .ul_2 .li_2:visible").next().fadeIn("3000");
					$("#jquery .ul_2 .li_2:not(:animated)").hide();
				}
			},2000);				
});