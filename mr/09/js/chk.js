// JavaScript Document
//index.php
//登录验证

function chkname(){
	name = document.reg.name.value;
	if(name==""){
		alert("请输入用户昵称");
		document.reg.name.focus();
		return false;
	}else{
		open("chkname.php?name="+name+"" ,"CHK","height=50,width=200,scrollbars=no,top=200,left=200");
	}
}


function chk_log(){
	if(this.login.name.value == ""){
		alert("请输入用户名!");
		this.login.name.focus();
		return false;
	}
	if(this.login.password.value == ""){
		alert("请输入密码!");
		this.login.password.focus();
		return false;
	}
}
//注册验证
function reg_chk(){
	if(this.reg.name.value == ""){
		alert("请输入注册帐号!");
		this.reg.name.focus();
		return false;
	}
	if(this.reg.password.value == ""){
		alert("请输入密码!");
		this.reg.password.focus();
		return false;
	}
	if(this.reg.password.value.length < 3){
		alert("密码长度最少为3位");
		this.reg.password.focus();
		return false;
	}
	if(this.reg.password.value != this.reg.t_password.value){
		alert("两次密码输入不一致");
		this.reg.password.focus();
		return false;
	}
	if(this.reg.question.value == ""){
		alert("请输入密码提示问题!");
		this.reg.question.focus();
		return false;
	}
	if(this.reg.answer.value == ""){
		alert("请输入问题答案!");
		this.reg.answer.focus();
		return false;
	}
	if(this.reg.email.value != ""){
		var mailObj = this.reg.email;
		var email_ch= /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
		if(! email_ch.test(mailObj.value)){
			alert("请输入正确的邮箱地址！");
			mailObj.focus();
			return false;	
		}
	}
}
//修改验证
function reg_chk(){
	if(this.reg.name.value == ""){
		alert("请输入注册帐号!");
		this.reg.name.focus();
		return false;
	}
	if(this.reg.password.value == ""){
		alert("请输入密码!");
		this.reg.password.focus();
		return false;
	}
	if(this.reg.password.value.length < 3){
		alert("密码长度最少为3位");
		this.reg.password.focus();
		return false;
	}
	if(this.reg.password.value != this.reg.t_password.value){
		alert("两次密码输入不一致");
		this.reg.password.focus();
		return false;
	}
	if(this.reg.email.value != ""){
		var mailObj = this.reg.email;
		var email_ch= /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
		if(!email_ch.test(mailObj.value)){
			alert("请输入正确的邮箱地址！");
			mailObj.focus();
			return false;	
		}
	}
}
//退出登录
function l_chk(){
	if(confirm("确定要退出登录吗？")){
		window.location="logout.php";
	} 
	else
     return false; 
}

function chk_internet(){
	if(form1.song_name.value == ""){
		alert("请输入歌名!");
		form1.song_name.select();
		return false;
	}
	if(form1.singer_name.value == ""){
		alert("请输入歌手名!");
		form1.singer_name.select();
		return false;

	}

	if(form1.internet_address.value == ""){
		alert("请输入网络地址!");
		form1.internet_address.select();
		return false;
	}
//判断指定字符串中的格式符合.mp3
//form1.internet_address.value.lastIndexOf('.'),获取字符串中最后出现的“.”后的字符串的个数
leng=form1.internet_address.value.substr(form1.internet_address.value.lastIndexOf('.'));
	if(leng!=".mp3" && leng!=".rm"&&leng!=".wav"&&leng!=".mid"){	
		alert("输入的网络地址的格式不正确!");
		form1.internet_address.select();
		return false;

}
	if(form1.internet_address.value.substr(0,7)!="http://"){	
		alert("输入的网络地址的格式不正确!");
		form1.internet_address.select();
		return false;

}


}



