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
			chkusernc.innerHTML = "�������û��ǳƣ�";
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
						chkusernc.innerHTML = "���ǳ��ѱ�ռ�ã�";
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
			chkuserpwd1.innerHTML = "������ע�����룡";
			form.userpwd1.style.backgroundColor = "#FF0000";
			return false;
		} else if (form.userpwd1.value.length <= 6) {
			chkuserpwd1.innerHTML = "ע�����볤��Ӧ����6λ��";
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
			chkuserpwd2.innerHTML = "������ȷ�����룡";
			form.userpwd2.style.backgroundColor = "#FF0000";
			return false;
		} else if (form.userpwd2.value.length <= 6) {
			chkuserpwd2.innerHTML = "ȷ�����볤��Ӧ����6λ��";
			form.userpwd2.style.backgroundColor = "#FF0000";
			return false;
		} else if (form.userpwd2.value != form.userpwd1.value) {
			chkuserpwd2.innerHTML = "������ȷ�����벻һ�£�";
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
			chktruename.innerHTML = "��������ʵ������";
			form.truename.style.backgroundColor = "#FF0000";
			return false;
		} else {
			chktruename.innerHTML = "";
			form.truename.style.backgroundColor = "#FFFFFF";
		}
	}

	if (mark == 4 || mark == "all") {
		if (form.sex.value == "") {
			chksex.innerHTML = "��ѡ���Ա�";
			form.sex.style.backgroundColor = "#FF0000";
			return false;
		} else {
			chksex.innerHTML = "";
			form.sex.style.backgroundColor = "#FFFFFF";
		}
	}

	if (mark == 5 || mark == "all") {
		if (form.tel.value == "") {
			chktel.innerHTML = "��������ϵ�绰��";
			form.tel.style.backgroundColor = "#FF0000";
			return false;
		} else if (isNaN(form.tel.value)) {
			chktel.innerHTML = "�绰����������ɣ�";
			form.tel.style.backgroundColor = "#FF0000";
			return false;
		} else {
			chktel.innerHTML = "";
			form.tel.style.backgroundColor = "#FFFFFF";
		}
	}

	if (mark == 6 || mark == "all") {
		if (form.email.value == "") {
			chkemail.innerHTML = "������E-mail��ַ��";
			form.email.style.backgroundColor = "#FF0000";
			return false;
		} else {
			var i = form.email.value.indexOf("@");
			var j = form.email.value.indexOf(".");
			if ((i < 0) || (i - j > 0) || (j < 0)) {
				chkemail.innerHTML = "E-mail��ַ��ʽ����";
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
			chkqq.innerHTML = "������QQ���룡";
			form.qq.style.backgroundColor = "#FF0000";
			return false;
		} else if (isNaN(form.qq.value)) {
			chkqq.innerHTML = "QQ����������ɣ�";
			form.qq.style.backgroundColor = "#FF0000";
			return false;
		} else {
			chkqq.innerHTML = "";
			form.qq.style.backgroundColor = "#FFFFFF";
		}
	}

	if (mark == 8 || mark == "all") {
		if (form.yb.value == "") {
			chkyb.innerHTML = "�������ʱ࣡";
			form.yb.style.backgroundColor = "#FF0000";
			return false;
		} else if (isNaN(form.yb.value)) {
			chkyb.innerHTML = "�ʱ���������ɣ�";
			form.yb.style.backgroundColor = "#FF0000";
			return false;
		} else if (form.yb.value.length != 6) {
			chkyb.innerHTML = "�ʱ���6λ������ɣ�";
			form.yb.style.backgroundColor = "#FF0000";
			return false;
		} else {
			chkyb.innerHTML = "";
			form.yb.style.backgroundColor = "#FFFFFF";
		}
	}

	if (mark == 9 || mark == "all") {
		if (form.address.value == "") {
			chkaddress.innerHTML = "��������ϵ��ַ��";
			form.address.style.backgroundColor = "#FF0000";
			return false;
		} else {
			chkaddress.innerHTML = "";
			form.address.style.backgroundColor = "#FFFFFF";
		}
	}

	if (mark == 10 || mark == "all") {
		if (form.question.value == "") {
			chkquestion.innerHTML = "�����������һ����⣡";
			form.question.style.backgroundColor = "#FF0000";
			return false;
		} else {
			chkquestion.innerHTML = "";
			form.question.style.backgroundColor = "#FFFFFF";
		}
	}

	if (mark == 11 || mark == "all") {
		if (form.answer.value == "") {
			chkanswer.innerHTML = "�����������һش𰸣�";
			form.answer.style.backgroundColor = "#FF0000";
			return false;
		} else {
			chkanswer.innerHTML = "";
			form.answer.style.backgroundColor = "#FFFFFF";
		}
	}

	if (mark == 12 || mark == "all") {
		if (form.xym.value == "") {
			chkxym.innerHTML = "��������֤�룡";
			form.xym.style.backgroundColor = "#FF0000";
			return false;
		} else if (form.xym.value != form.xym1.value) {
			chkxym.innerHTML = "��֤����������";
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

	if (form.sex.value == "��") {
		for ( var i = 6; i <= 11; i++) {
			form.photo.options[i - 6] = new Option(i + ".gif");
		}
		form.img.src = baseUrl + "/img/face/6.gif"
	} else if (form.sex.value == "Ů") {
		for ( var i = 0; i <= 5; i++) {
			form.photo.options[i] = new Option(i + ".gif");
		}
		form.img.src = baseUrl + "/img/face/0.gif"
	}

}

function selectitem(form, baseUrl) {
	if (form.sex.value == "��") {
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
			chkusernc.innerHTML = "���������û��ǳƣ�";
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
			chkuserpwd.innerHTML = "���������¼���룡";
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
			chkxym.innerHTML = "����������֤�룡";
			chkxym.style.display = '';
			form.xym.style.backgroundColor = "#FF0000";
			return false;
		} else if (form.xym.value != form.xym1.value) {
			chkxym.innerHTML = "����֤����������";
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
		alert('��������������');
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
			chkusername.innerHTML = "<font color='#990000'>��</font>&nbsp;&nbsp;�������ջ���������";
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
			chksex.innerHTML = "<font color='#990000'>��</font>&nbsp;&nbsp;��ѡ���ջ����Ա�";
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
			chkaddress.innerHTML = "<font color='#990000'>��</font>&nbsp;&nbsp;�������ջ�����ϸ��ϵ��ַ��";
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
			chkyb.innerHTML = "<font color='#990000'>��</font>&nbsp;&nbsp;�������ʱ࣡";
			form.yb.style.backgroundColor = "#FF0000";
			chkyb.style.display = '';
			return false;
		} else if (isNaN(form.yb.value)) {
			chkyb.innerHTML = "<font color='#990000'>��</font>&nbsp;&nbsp;�ʱ���������ɣ�";
			form.yb.style.backgroundColor = "#FF0000";
			chkyb.style.display = '';
			return false;
		} else if (form.yb.value.length != 6) {
			chkyb.innerHTML = "<font color='#990000'>��</font>&nbsp;&nbsp;�ʱ���6λ������ɣ�";
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
			chktel.innerHTML = "<font color='#990000'>��</font>&nbsp;&nbsp;��������ϵ�绰��";
			form.tel.style.backgroundColor = "#FF0000";
			chktel.style.display = '';
			return false;
		} else if (isNaN(form.tel.value)) {
			chktel.innerHTML = "<font color='#990000'>��</font>&nbsp;&nbsp;�绰����������ɣ�";
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
			chktt.innerHTML = "<font color='#990000'>��</font>&nbsp;&nbsp;�����뷢Ʊ̧ͷ��";
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
        alert('�������ѯ�ؼ��֣�');	
        form.keyWord.focus();
        return false;
    }	
    
    if(form.writer.value=='')
    {
        alert('�������������ƣ�');	
        form.writer.focus();
        return false;
    }

    if(form.pubid.value=='')
    {
        alert('��ѡ����������ƣ�');	
        form.pubid.focus();
        return false;
    }
    
    if(form.bigtypeid.value=='')
    {
        alert('��ѡ��ͼ���������࣡');	
        form.bigtypeid.focus();
        return false;
    }    

    if(form.smalltypeid.value=='')
    {
        alert('��ѡ��ͼ������С�࣡');	
        form.smalltypeid.focus();
        return false;
    }    

    if(form.fyear.value=='')
    {
        alert('��ѡ��ͼ����濪ʼ��ݣ�');	
        form.fyear.focus();
        return false;
    } 

    if(form.fmonth.value=='')
    {
        alert('��ѡ��ͼ����濪ʼ�·ݣ�');	
        form.fmonth.focus();
        return false;
    } 

    if(form.tyear.value=='')
    {
        alert('��ѡ��ͼ����������ݣ�');	
        form.tyear.focus();
        return false;
    } 

    if(form.tmonth.value=='')
    {
        alert('��ѡ��ͼ���������·ݣ�');
        form.tmonth.focus();
        return false;
    } 
    
    if(parseInt(form.fyear.value+form.fmonth.value) > parseInt(form.tyear.value+form.tmonth.value))
    {
        alert('ͼ�����ʱ�䷶Χ�Ŀ�ʼʱ��Ӧ�����ڽ���ʱ�䣡');	
        form.fyear.focus();
        return false;    	
    }
    
    
    return true;
}



function chkinputSimpleSearch(form)
{
    if(form.keyWord.value=='')
    {
        alert('�������ѯ�ؼ��֣�');	
        form.keyWord.focus();
        return false;
    }	
    
    return true;
}

function chkSearchOrder(form)
{
    if(form.orderno.value=='')
    {
        alert('�����붩���ţ�');	
        form.orderno.focus();
        return false;
    }	
    if(form.orderno.value.length!=18)
    {
        alert('�����ų��ȴ���');	
        form.orderno.focus();
        return false;
    }	    
    return true;
}

function chkChangeUserinfo(form)
{
    if(form.truename.value=='')
    {
        alert('��������ʵ������');	
        form.truename.focus();
        return false;
    }	
    if(form.tel.value=='')
    {
        alert('��������ϵ�绰��');	
        form.tel.focus();
        return false;
    }	
    if(form.email.value=='')
    {
        alert('�������ʼ���ַ��');	
        form.email.focus();
        return false;
    }	
    if(form.qq.value=='')
    {
        alert('������QQ���룡');	
        form.qq.focus();
        return false;
    }
    if(form.yb.value=='')
    {
        alert('�������������룡');	
        form.yb.focus();
        return false;
    }    
    if(form.address.value=='')
    {
        alert('��������ϵ��ַ��');	
        form.address.focus();
        return false;
    } 
    return true;
}


function chkChangePwd(form)
{
	if(form.oldpwd.value=='')
	{
        alert('������ԭ���룡');	
        form.oldpwd.focus();
        return false;		
	}
	if(form.pwd1.value=='')
	{
        alert('�����������룡');	
        form.pwd1.focus();
        return false;		
	}
	if(form.pwd2.value=='')
	{
        alert('������ȷ�����룡');	
        form.pwd2.focus();
        return false;		
	}
	if(form.pwd1.value != form.pwd2.value)
	{
        alert('������ȷ�����벻ͬ��');	
        form.pwd1.focus();
        return false;			
	}	
	if(form.pwd1.value.length<6)
	{
        alert('���볤��Ӧ�ô���6λ��');	
        form.pwd1.focus();
        return false;	
	}	
	
	return true;
	
}

function chkUserfeedback(form)
{
	if(form.title.value=='')
	{
        alert('�����뷴�����⣡');	
        form.title.focus();
        return false;		
	}
	if(form.content.value=='')
	{
        alert('�����뷴�����ݣ�');	
        form.content.focus();
        return false;		
	}
	
	return true;
}

