// JavaScript Document
function check_submit(){
	if(found.k_word.value==""){
		alert("查询条件不允许为空！");found.k_word.focus();return false;
	}
	found.submit();
}