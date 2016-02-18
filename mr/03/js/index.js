// JavaScript Document
function $(id){
	return document.getElementById(id);
}
function chkdown(){
	if($('chkdown').value == ''){
		alert('请输入下载码!');
		return false;
	}
	location = '?act=downcode&chkdown='+$('chkdown').value;
}
function chkdownf(){
	if($('fdfile').value == ''){
		alert('请输入文件名称!');
		return false;
	}
	location = '?act=queryfile&fdfile='+$('fdfile').value+'&foundtype='+$('foundtype').value;
}