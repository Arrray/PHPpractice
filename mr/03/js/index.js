// JavaScript Document
function $(id){
	return document.getElementById(id);
}
function chkdown(){
	if($('chkdown').value == ''){
		alert('������������!');
		return false;
	}
	location = '?act=downcode&chkdown='+$('chkdown').value;
}
function chkdownf(){
	if($('fdfile').value == ''){
		alert('�������ļ�����!');
		return false;
	}
	location = '?act=queryfile&fdfile='+$('fdfile').value+'&foundtype='+$('foundtype').value;
}