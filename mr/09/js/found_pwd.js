// JavaScript Document
function found_chk(){
		if(document.getElementById("username").value == ""){
			alert("�ʺŲ�����Ϊ��");
			document.getElementById("username").focus();
			return false;
		}
		if(document.getElementById("question").value == ""){
			alert("������ʾ���ⲻ����Ϊ��");
			document.getElementById("question").focus();
			return false;
		}
		if(document.getElementById("answer").value == ""){
			alert("������ʾ�𰸲�����Ϊ��");
			document.getElementById("answer").focus();
			return false;
		}
	}
	function chk_pwd(){
		if(document.getElementById("password").value == ""){
			alert("���벻����Ϊ��");
			document.getElementById("password").focus();
			return false;
		}
		if(document.getElementById("password").value != document.getElementById("two_pwd").value){
			alert("�������벻һ��");
			document.getElementById("password").focus();
			return false;
		}
	}