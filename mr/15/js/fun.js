function changeTab1(d1, d2, b1, b2, img) {
	d1.style.display = "";
	d2.style.display = "none";
	tab_bg.style.background = "url(" + img + ")";
	b1.style.color = "#333333";
	b2.style.color = "#003399";
}

function chkreginfo(form, mark, edit, baseUrl) {

	if ((mark == 0 || mark == "all") && edit != "edit") {
		if (form.usernc.value == "") {
			chkusernc.innerHTML = "请输入用户昵称！";
			form.usernc.style.backgroundColor = "#FF0000";
			return false;
		} else {
			var xmlobj;
			if (window.ActiveXObject) {
				xmlobj = new ActiveXObject("Microsoft.XMLHTTP");
			} else if (window.XMLHttpRequest) {
				xmlobj = new XMLHttpRequest();
			}

			xmlobj.onreadystatechange = fun;
			xmlobj.open("GET",
					baseUrl + "/chkunc.php?unc=" + form.usernc.value, true);
			xmlobj.send(null);

			function fun() {
				if (xmlobj.readyState == 4 && xmlobj.status == 200) {
					if (xmlobj.responseText == "0") {
						chkusernc.innerHTML = "该昵称已被占用！";
						form.usernc.style.backgroundColor = "#FF0000";
						return false;
					} else {
						chkusernc.innerHTML = "";
						form.usernc.style.backgroundColor = "#FFFFFF";
					}
				}
			}

		}

	}

	if (mark == 1 || mark == "all") {
		if (form.userpwd1.value == "") {
			chkuserpwd1.innerHTML = "请输入注册密码！";
			form.userpwd1.style.backgroundColor = "#FF0000";
			return false;
		} else if (form.userpwd1.value.length <= 6) {
			chkuserpwd1.innerHTML = "注册密码长度应大于6位！";
			form.userpwd1.style.backgroundColor = "#FF0000";
			return false;
		} else {
			chkuserpwd1.innerHTML = "";
			form.userpwd1.style.backgroundColor = "#FFFFFF";
			// return true;
		}

	}

	if (mark == 2 || mark == "all") {
		if (form.userpwd2.value == "") {
			chkuserpwd2.innerHTML = "请输入确认密码！";
			form.userpwd2.style.backgroundColor = "#FF0000";
			return false;
		} else if (form.userpwd2.value.length <= 6) {
			chkuserpwd2.innerHTML = "确认密码长度应大于6位！";
			form.userpwd2.style.backgroundColor = "#FF0000";
			return false;
		} else if (form.userpwd2.value != form.userpwd1.value) {
			chkuserpwd2.innerHTML = "密码与确认密码不一致！";
			form.userpwd1.style.backgroundColor = "#FF0000";
			form.userpwd2.style.backgroundColor = "#FF0000";
			return false;
		} else {
			chkuserpwd2.innerHTML = "";
			form.userpwd1.style.backgroundColor = "#FFFFFF";
			form.userpwd2.style.backgroundColor = "#FFFFFF";
		}
	}

	if (mark == 3 || mark == "all") {
		if (form.truename.value == "") {
			chktruename.innerHTML = "请输入真实姓名！";
			form.truename.style.backgroundColor = "#FF0000";
			return false;
		} else {
			chktruename.innerHTML = "";
			form.truename.style.backgroundColor = "#FFFFFF";
		}
	}

	if (mark == 4 || mark == "all") {
		if (form.sex.value == "") {
			chksex.innerHTML = "请选择性别！";
			form.sex.style.backgroundColor = "#FF0000";
			return false;
		} else {
			chksex.innerHTML = "";
			form.sex.style.backgroundColor = "#FFFFFF";
		}
	}

	if (mark == 5 || mark == "all") {
		if (form.tel.value == "") {
			chktel.innerHTML = "请输入联系电话！";
			form.tel.style.backgroundColor = "#FF0000";
			return false;
		} else if (isNaN(form.tel.value)) {
			chktel.innerHTML = "电话号由数字组成！";
			form.tel.style.backgroundColor = "#FF0000";
			return false;
		} else {
			chktel.innerHTML = "";
			form.tel.style.backgroundColor = "#FFFFFF";
		}
	}

	if (mark == 6 || mark == "all") {
		if (form.email.value == "") {
			chkemail.innerHTML = "请输入E-mail地址！";
			form.email.style.backgroundColor = "#FF0000";
			return false;
		} else {
			var i = form.email.value.indexOf("@");
			var j = form.email.value.indexOf(".");
			if ((i < 0) || (i - j > 0) || (j < 0)) {
				chkemail.innerHTML = "E-mail地址格式有误！";
				form.email.style.backgroundColor = "#FF0000";
				return false;
			} else {
				chkemail.innerHTML = "";
				form.email.style.backgroundColor = "#FFFFFF";
			}

		}
	}

	if (mark == 7 || mark == "all") {
		if (form.qq.value == "") {
			chkqq.innerHTML = "请输入QQ号码！";
			form.qq.style.backgroundColor = "#FF0000";
			return false;
		} else if (isNaN(form.qq.value)) {
			chkqq.innerHTML = "QQ号由数字组成！";
			form.qq.style.backgroundColor = "#FF0000";
			return false;
		} else {
			chkqq.innerHTML = "";
			form.qq.style.backgroundColor = "#FFFFFF";
		}
	}

	if (mark == 8 || mark == "all") {
		if (form.yb.value == "") {
			chkyb.innerHTML = "请输入邮编！";
			form.yb.style.backgroundColor = "#FF0000";
			return false;
		} else if (isNaN(form.yb.value)) {
			chkyb.innerHTML = "邮编由数字组成！";
			form.yb.style.backgroundColor = "#FF0000";
			return false;
		} else if (form.yb.value.length != 6) {
			chkyb.innerHTML = "邮编由6位数字组成！";
			form.yb.style.backgroundColor = "#FF0000";
			return false;
		} else {
			chkyb.innerHTML = "";
			form.yb.style.backgroundColor = "#FFFFFF";
		}
	}

	if (mark == 9 || mark == "all") {
		if (form.address.value == "") {
			chkaddress.innerHTML = "请输入联系地址！";
			form.address.style.backgroundColor = "#FF0000";
			return false;
		} else {
			chkaddress.innerHTML = "";
			form.address.style.backgroundColor = "#FFFFFF";
		}
	}

	if (mark == 10 || mark == "all") {
		if (form.question.value == "") {
			chkquestion.innerHTML = "请输入密码找回问题！";
			form.question.style.backgroundColor = "#FF0000";
			return false;
		} else {
			chkquestion.innerHTML = "";
			form.question.style.backgroundColor = "#FFFFFF";
		}
	}

	if (mark == 11 || mark == "all") {
		if (form.answer.value == "") {
			chkanswer.innerHTML = "请输入密码找回答案！";
			form.answer.style.backgroundColor = "#FF0000";
			return false;
		} else {
			chkanswer.innerHTML = "";
			form.answer.style.backgroundColor = "#FFFFFF";
		}
	}

	if (mark == 12 || mark == "all") {
		if (form.xym.value == "") {
			chkxym.innerHTML = "请输入验证码！";
			form.xym.style.backgroundColor = "#FF0000";
			return false;
		} else if (form.xym.value != form.xym1.value) {
			chkxym.innerHTML = "验证码输入有误！";
			form.xym.style.backgroundColor = "#FF0000";
			return false;
		} else {
			chkxym.innerHTML = "";
			form.xym.style.backgroundColor = "#FFFFFF";
		}

	}

	return true;

}

function additem(form, baseUrl) {

	if (form.sex.value == "男") {
		for ( var i = 6; i <= 11; i++) {
			form.photo.options[i - 6] = new Option(i + ".gif");
		}
		form.img.src = baseUrl + "/img/face/6.gif"
	} else if (form.sex.value == "女") {
		for ( var i = 0; i <= 5; i++) {
			form.photo.options[i] = new Option(i + ".gif");
		}
		form.img.src = baseUrl + "/img/face/0.gif"
	}

}

function selectitem(form, baseUrl) {
	if (form.sex.value == "男") {
		form.img.src = baseUrl + '/img/face/' + (form.photo.selectedIndex + 6)
				+ '.gif'
	} else {
		form.img.src = baseUrl + '/img/face/' + form.photo.selectedIndex
				+ '.gif'
	}

}

//
function chklogininfo(form, mark) {

	if (mark == 0 || mark == "all") {
		if (form.usernc.value == "") {
			chkusernc.style.display = '';
			chkusernc.innerHTML = "·请输入用户昵称！";
			form.usernc.style.backgroundColor = "#FF0000";
			return false;
		} else {
			chkusernc.innerHTML = "";
			chkusernc.style.display = 'none';
			form.usernc.style.backgroundColor = "#FFFFFF";
		}
	}

	if (mark == 1 || mark == "all") {
		if (form.userpwd.value == "") {
			chkuserpwd.innerHTML = "·请输入登录密码！";
			form.userpwd.style.backgroundColor = "#FF0000";
			chkuserpwd.style.display = '';
			return false;
		} else {
			chkuserpwd.innerHTML = "";
			chkuserpwd.style.display = 'none';
			form.userpwd.style.backgroundColor = "#FFFFFF";
		}
	}

	if (mark == 7 || mark == "all") {
		if (form.xym.value == "") {
			chkxym.innerHTML = "·请输入验证码！";
			chkxym.style.display = '';
			form.xym.style.backgroundColor = "#FF0000";
			return false;
		} else if (form.xym.value != form.xym1.value) {
			chkxym.innerHTML = "·验证码输入有误！";
			chkxym.style.display = '';
			form.xym.style.backgroundColor = "#FF0000";
			return false;
		} else {
			chkxym.innerHTML = "";
			chkxym.style.display = 'none';
			form.xym.style.backgroundColor = "#FFFFFF";
		}

	}

	return true;

}

function chkinputpl(form) {
	if (form.content.value == '') {
		alert('请输入评论内容');
		form.content.focus();
		return false;

	}
	return true;
}


///
function chkinputbuyuserinfo(form, mark)
{
	if (mark == 0 || mark == "all") {
		if (form.username.value == "") {
			chkusername.innerHTML = "<font color='#990000'>·</font>&nbsp;&nbsp;请输入收货人姓名！";
			chkusername.style.display = '';
			form.username.style.backgroundColor = "#FF0000";
			return false;
		} else {
			chkusername.innerHTML = "";
			chkusername.style.display = 'none';
			form.username.style.backgroundColor = "#FFFFFF";
		}

	}
	
	if (mark == 1 || mark == "all") {
		if (form.sex.value == "") {
			chksex.innerHTML = "<font color='#990000'>·</font>&nbsp;&nbsp;请选择收货人性别！";
			chksex.style.display = '';
			form.sex.style.backgroundColor = "#FF0000";
			return false;
		} else {
			chksex.innerHTML = "";
			chksex.style.display = 'none';
			form.sex.style.backgroundColor = "#FFFFFF";
		}

	}

	if (mark == 2 || mark == "all") {
		if (form.address.value == "") {
			chkaddress.innerHTML = "<font color='#990000'>·</font>&nbsp;&nbsp;请输入收货人详细联系地址！";
			chkaddress.style.display = '';
			form.address.style.backgroundColor = "#FF0000";
			return false;
		} else {
			chkaddress.innerHTML = "";
			chkaddress.style.display = 'none';
			form.address.style.backgroundColor = "#FFFFFF";
		}

	}
	
	if (mark == 3 || mark == "all") {
		if (form.yb.value == "") {
			chkyb.innerHTML = "<font color='#990000'>·</font>&nbsp;&nbsp;请输入邮编！";
			form.yb.style.backgroundColor = "#FF0000";
			chkyb.style.display = '';
			return false;
		} else if (isNaN(form.yb.value)) {
			chkyb.innerHTML = "<font color='#990000'>·</font>&nbsp;&nbsp;邮编由数字组成！";
			form.yb.style.backgroundColor = "#FF0000";
			chkyb.style.display = '';
			return false;
		} else if (form.yb.value.length != 6) {
			chkyb.innerHTML = "<font color='#990000'>·</font>&nbsp;&nbsp;邮编由6位数字组成！";
			form.yb.style.backgroundColor = "#FF0000";
			chkyb.style.display = '';
			return false;
		} else {
			chkyb.innerHTML = "";
			chkyb.style.display = 'none';
			form.yb.style.backgroundColor = "#FFFFFF";
		}
	}
	
	if (mark == 4 || mark == "all") {
		if (form.tel.value == "") {
			chktel.innerHTML = "<font color='#990000'>·</font>&nbsp;&nbsp;请输入联系电话！";
			form.tel.style.backgroundColor = "#FF0000";
			chktel.style.display = '';
			return false;
		} else if (isNaN(form.tel.value)) {
			chktel.innerHTML = "<font color='#990000'>·</font>&nbsp;&nbsp;电话号由数字组成！";
			form.tel.style.backgroundColor = "#FF0000";
			chktel.style.display = '';
			return false;
		} else {
			chktel.innerHTML = "";
			chktel.style.display = 'none';
			form.tel.style.backgroundColor = "#FFFFFF";
		}
	}
	
	if (form.but_showtt.checked && (mark == 5 || mark == "all")) {
		if (form.tt.value == "") {
			chktt.innerHTML = "<font color='#990000'>·</font>&nbsp;&nbsp;请输入发票抬头！";
			chktt.style.display = '';
			form.tt.style.backgroundColor = "#FF0000";
			return false;
		} else {
			chktt.innerHTML = "";
			chktt.style.display = 'none';
			form.tt.style.backgroundColor = "#FFFFFF";
		}

	}
	
	return true;
    	
}

//

function isShowtt(form)
{
    if(showtt.style.display=='')	
    {
    	showtt.style.display='none';
    	form.tt.value='';
    }
    else
    {
    	showtt.style.display='';
    }
}


//

function chkadvsearch(form)
{
    if(form.keyWord.value=='')
    {
        alert('请输入查询关键字！');	
        form.keyWord.focus();
        return false;
    }	
    
    if(form.writer.value=='')
    {
        alert('请输入作者名称！');	
        form.writer.focus();
        return false;
    }

    if(form.pubid.value=='')
    {
        alert('请选择出版社名称！');	
        form.pubid.focus();
        return false;
    }
    
    if(form.bigtypeid.value=='')
    {
        alert('请选择图书所属大类！');	
        form.bigtypeid.focus();
        return false;
    }    

    if(form.smalltypeid.value=='')
    {
        alert('请选择图书所属小类！');	
        form.smalltypeid.focus();
        return false;
    }    

    if(form.fyear.value=='')
    {
        alert('请选择图书出版开始年份！');	
        form.fyear.focus();
        return false;
    } 

    if(form.fmonth.value=='')
    {
        alert('请选择图书出版开始月份！');	
        form.fmonth.focus();
        return false;
    } 

    if(form.tyear.value=='')
    {
        alert('请选择图书出版结束年份！');	
        form.tyear.focus();
        return false;
    } 

    if(form.tmonth.value=='')
    {
        alert('请选择图书出版结束月份！');
        form.tmonth.focus();
        return false;
    } 
    
    if(parseInt(form.fyear.value+form.fmonth.value) > parseInt(form.tyear.value+form.tmonth.value))
    {
        alert('图书出版时间范围的开始时间应该先于结束时间！');	
        form.fyear.focus();
        return false;    	
    }
    
    
    return true;
}



function chkinputSimpleSearch(form)
{
    if(form.keyWord.value=='')
    {
        alert('请输入查询关键字！');	
        form.keyWord.focus();
        return false;
    }	
    
    return true;
}

function chkSearchOrder(form)
{
    if(form.orderno.value=='')
    {
        alert('请输入订单号！');	
        form.orderno.focus();
        return false;
    }	
    if(form.orderno.value.length!=18)
    {
        alert('订单号长度错误！');	
        form.orderno.focus();
        return false;
    }	    
    return true;
}

function chkChangeUserinfo(form)
{
    if(form.truename.value=='')
    {
        alert('请输入真实姓名！');	
        form.truename.focus();
        return false;
    }	
    if(form.tel.value=='')
    {
        alert('请输入联系电话！');	
        form.tel.focus();
        return false;
    }	
    if(form.email.value=='')
    {
        alert('请输入邮件地址！');	
        form.email.focus();
        return false;
    }	
    if(form.qq.value=='')
    {
        alert('请输入QQ号码！');	
        form.qq.focus();
        return false;
    }
    if(form.yb.value=='')
    {
        alert('请输入邮政编码！');	
        form.yb.focus();
        return false;
    }    
    if(form.address.value=='')
    {
        alert('请输入联系地址！');	
        form.address.focus();
        return false;
    } 
    return true;
}


function chkChangePwd(form)
{
	if(form.oldpwd.value=='')
	{
        alert('请输入原密码！');	
        form.oldpwd.focus();
        return false;		
	}
	if(form.pwd1.value=='')
	{
        alert('请输入新密码！');	
        form.pwd1.focus();
        return false;		
	}
	if(form.pwd2.value=='')
	{
        alert('请输入确认密码！');	
        form.pwd2.focus();
        return false;		
	}
	if(form.pwd1.value != form.pwd2.value)
	{
        alert('密码与确认密码不同！');	
        form.pwd1.focus();
        return false;			
	}	
	if(form.pwd1.value.length<6)
	{
        alert('密码长度应该大于6位！');	
        form.pwd1.focus();
        return false;	
	}	
	
	return true;
	
}

function chkUserfeedback(form)
{
	if(form.title.value=='')
	{
        alert('请输入反馈主题！');	
        form.title.focus();
        return false;		
	}
	if(form.content.value=='')
	{
        alert('请输入反馈内容！');	
        form.content.focus();
        return false;		
	}
	
	return true;
}

