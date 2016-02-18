// JavaScript Document
function $(id){
	return document.getElementById(id);
}
window.onload = function(){
	$('foundname').focus();
	$('step1').onclick = function(){
		if($('foundname').value != '' && $('fdquestion').value != '' && $('fdanswer').value != ''){
			xmlhttp.open('get','found_chk.php?foundname='+$('foundname').value+'&question='+$('fdquestion').value+'&answer='+$('fdanswer').value,true);
			xmlhttp.onreadystatechange = function(){
				if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
					msg = xmlhttp.responseText;
					if(msg == '1'){
						alert('’“ªÿ√‹¬Î≥…π¶£¨«Îµ«¬º” œ‰◊¢≤·” œ‰!');
						window.close();
					}else{
						alert(msg);
					}
				}
			}
			xmlhttp.send(null);
		}else{
			alert('«ÎÃÓ–¥ÕÍ≥…–≈œ¢');
			$('foundname').focus();
			return false;
		}
	}
}