// JavaScript Document
//index.php
//��¼��֤

function chkname(){
	name = document.reg.name.value;
	if(name==""){
		alert("�������û��ǳ�");
		document.reg.name.focus();
		return false;
	}else{
		open("chkname.php?name="+name+"" ,"CHK","height=50,width=200,scrollbars=no,top=200,left=200");
	}
}


function chk_log(){
	if(this.login.name.value == ""){
		alert("�������û���!");
		this.login.name.focus();
		return false;
	}
	if(this.login.password.value == ""){
		alert("����������!");
		this.login.password.focus();
		return false;
	}
}
//ע����֤
function reg_chk(){
	if(this.reg.name.value == ""){
		alert("������ע���ʺ�!");
		this.reg.name.focus();
		return false;
	}
	if(this.reg.password.value == ""){
		alert("����������!");
		this.reg.password.focus();
		return false;
	}
	if(this.reg.password.value.length < 3){
		alert("���볤������Ϊ3λ");
		this.reg.password.focus();
		return false;
	}
	if(this.reg.password.value != this.reg.t_password.value){
		alert("�����������벻һ��");
		this.reg.password.focus();
		return false;
	}
	if(this.reg.question.value == ""){
		alert("������������ʾ����!");
		this.reg.question.focus();
		return false;
	}
	if(this.reg.answer.value == ""){
		alert("�����������!");
		this.reg.answer.focus();
		return false;
	}
	if(this.reg.email.value != ""){
		var mailObj = this.reg.email;
		var email_ch= /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
		if(! email_ch.test(mailObj.value)){
			alert("��������ȷ�������ַ��");
			mailObj.focus();
			return false;	
		}
	}
}
//�޸���֤
function reg_chk(){
	if(this.reg.name.value == ""){
		alert("������ע���ʺ�!");
		this.reg.name.focus();
		return false;
	}
	if(this.reg.password.value == ""){
		alert("����������!");
		this.reg.password.focus();
		return false;
	}
	if(this.reg.password.value.length < 3){
		alert("���볤������Ϊ3λ");
		this.reg.password.focus();
		return false;
	}
	if(this.reg.password.value != this.reg.t_password.value){
		alert("�����������벻һ��");
		this.reg.password.focus();
		return false;
	}
	if(this.reg.email.value != ""){
		var mailObj = this.reg.email;
		var email_ch= /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
		if(!email_ch.test(mailObj.value)){
			alert("��������ȷ�������ַ��");
			mailObj.focus();
			return false;	
		}
	}
}
//�˳���¼
function l_chk(){
	if(confirm("ȷ��Ҫ�˳���¼��")){
		window.location="logout.php";
	} 
	else
     return false; 
}

function chk_internet(){
	if(form1.song_name.value == ""){
		alert("���������!");
		form1.song_name.select();
		return false;
	}
	if(form1.singer_name.value == ""){
		alert("�����������!");
		form1.singer_name.select();
		return false;

	}

	if(form1.internet_address.value == ""){
		alert("�����������ַ!");
		form1.internet_address.select();
		return false;
	}
//�ж�ָ���ַ����еĸ�ʽ����.mp3
//form1.internet_address.value.lastIndexOf('.'),��ȡ�ַ����������ֵġ�.������ַ����ĸ���
leng=form1.internet_address.value.substr(form1.internet_address.value.lastIndexOf('.'));
	if(leng!=".mp3" && leng!=".rm"&&leng!=".wav"&&leng!=".mid"){	
		alert("����������ַ�ĸ�ʽ����ȷ!");
		form1.internet_address.select();
		return false;

}
	if(form1.internet_address.value.substr(0,7)!="http://"){	
		alert("����������ַ�ĸ�ʽ����ȷ!");
		form1.internet_address.select();
		return false;

}


}



