// JavaScript Document
function found_chk(){
		if(document.getElementById("username").value == ""){
			alert("帐号不允许为空");
			document.getElementById("username").focus();
			return false;
		}
		if(document.getElementById("question").value == ""){
			alert("密码提示问题不允许为空");
			document.getElementById("question").focus();
			return false;
		}
		if(document.getElementById("answer").value == ""){
			alert("密码提示答案不允许为空");
			document.getElementById("answer").focus();
			return false;
		}
	}
	function chk_pwd(){
		if(document.getElementById("password").value == ""){
			alert("密码不允许为空");
			document.getElementById("password").focus();
			return false;
		}
		if(document.getElementById("password").value != document.getElementById("two_pwd").value){
			alert("两次密码不一致");
			document.getElementById("password").focus();
			return false;
		}
	}