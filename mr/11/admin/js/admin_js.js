// JavaScript Document
//��¼��֤
function l_chk(){
	if(document.a_login.manager.value == ""){
		alert("�������û���");
		document.a_login.manager.focus();
		return false;
	}
	if(document.a_login.pwd.value == ""){
		alert("����������");
		document.a_login.pwd.focus();
		return false;
	}
}
//���Ŀ¼��֤
function n_chk(){
	if(document.list.names.value == ""){
		alert("Ŀ¼���Ʋ�����Ϊ��");
		document.list.names.focus();
		return false;
	}
}
//ȡ�����
function auditing_chk(){
	if(confirm("ȷ��Ҫȡ�������"))
     	return true;
   	else
     	return false;
}
function video_user_chk(){
	if(confirm("ȷ��Ҫɾ�����û���"))
     	return true;
   	else
     	return false;
}

//ɾ������
function del_discuss(){
	if(confirm("ȷ��Ҫɾ����������"))
     	return true;
   	else
     	return false;
}

function video_type_chk(){
	if(confirm("ȷ��Ҫɾ����������"))
     	return true;
   	else
     	return false;
}



//ɾ��ȷ��
function del_chk(){
	if(confirm("ȷ��Ҫɾ��ѡ�е���Ŀ��һ��ɾ�������ָܻ���"))
     	return true;
   	else
     	return false;
}
//��ӹ���Ա
function check(){
	var names=list.names.value;
	var pwd1=list.password.value;
	var pwd2=list.password2.value;
	var grade=list.grade.value;
	var realname=list.realname.value;
	if(names==""){
		alert("�û�������Ϊ��");
		list.names.focus();
	}
	else if(pwd1==""){
		alert("���벻��Ϊ��");
		list.password.focus();
	}
	else if(pwd1.length<3){
		alert("���볤�Ȳ���С��3λ");
		list.password.focus();
	}
	else if(pwd2==""){
		alert("��ȷ������");
		list.password2.focus();
	}
	else if(pwd1!=pwd2){
		alert("������������벻һ��");
		list.password.focus();
	}
	else if(realname==""){
		alert("����д����Ա��ʵ����");
		list.realname.focus();
	}
	else {
		list.submit();
	}
}
//�����Ƶ�ļ���֤
function a_chk(){
	if(document.list.names.value == ""){
		alert("���Ʋ�����Ϊ��");
		document.list.names.focus();
		return false;
	}
}