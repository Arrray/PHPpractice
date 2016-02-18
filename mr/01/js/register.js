// JavaScript Document
function $(id){
	return document.getElementById(id);
}
window.onload = function(){
	$('regname').focus();
	var cname1,cname2,cpwd1,cpwd2,cemail;
	//���ü��ť
	function chkreg(){
		if((cname1 == 'yes') && (cname2 == 'yes') && (cpwd1 == 'yes') && (cpwd2 == 'yes') && (cemail == 'yes')){
			$('regbtn').disabled = false;
		}else{
			$('regbtn').disabled = true;
		}
	}
	//��֤�û���
	$('regname').onkeyup = function (){
		name = $('regname').value;
		cname2 = '';
		if(name.match(/^[a-zA-Z_]*/) == ''){
			$('namediv').innerHTML = '<font color=red>��������ĸ���»��߿�ͷ</font>';
			cname1 = '';
		}else if(name.length < 2){
			$('namediv').innerHTML = '<font color=red>ע�����Ʊ�����ڵ���2λ</font>';
			cname1 = '';
		}else{
			$('namediv').innerHTML = '<font color=green>ע�����Ʒ��ϱ�׼</font>';
			cname1 = 'yes';
		}
		chkreg();
	}
	//��֤�Ƿ���ڸ��û�
	$('regname').onblur = function(){
		name = $('regname').value;
		if(cname1 == 'yes'){
			xmlhttp.open('get','chkname.php?name='+name,true);
			xmlhttp.onreadystatechange = function(){
				if(xmlhttp.readyState == 4){
					if(xmlhttp.status == 200){
						var msg = xmlhttp.responseText;
						if(msg == '1'){
							$('namediv').innerHTML="<font color=green>��ϲ�������û�������ʹ��!</font>";
							cname2 = 'yes';
						}else if(msg == '2'){
							$('namediv').innerHTML="<font color=red>�û�����ռ�ã�</font>";
							cname2 = '';
						}else{
							$('namediv').innerHTML="<font color=red>"+msg+"</font>";
							cname2 = '';
						}
					}
				}
				chkreg();
			}
			xmlhttp.send(null);
		}
	}
	//��֤����
	$('regpwd1').onkeyup = function(){
		pwd = $('regpwd1').value;
		pwd2 = $('regpwd2').value;
		if(pwd.length < 6){
			$('pwddiv1').innerHTML = '<font color=red>���볤��������Ҫ6λ</font>';
			cpwd1 = '';
		}else if(pwd.length >= 6 && pwd.length < 12){
			$('pwddiv1').innerHTML = '<font color=green>�������Ҫ������ǿ�ȣ���</font>';
			cpwd1 = 'yes';
		}else if((pwd.match(/^[0-9]*$/)!=null) || (pwd.match(/^[a-zA-Z]*$/) != null )){
			$('pwddiv1').innerHTML = '<font color=green>�������Ҫ������ǿ�ȣ���</font>';
			cpwd1 = 'yes';
		}else{
			$('pwddiv1').innerHTML = '<font color=green>�������Ҫ������ǿ�ȣ���</font>';
			cpwd1 = 'yes';
		}
		if(pwd2 != '' && pwd != pwd2){
			$('pwddiv2').innerHTML = '<font color=red>�������벻һ��!</font>';
			cpwd2 = '';
		}else if(pwd2 != '' && pwd == pwd2){
			$('pwddiv2').innerHTML = '<font color=green>����������ȷ</font>';
			cpwd2 = 'yes';
		}
		chkreg();
	}
	//��֤ȷ������
	$('regpwd2').onkeyup = function(){
		pwd1 = $('regpwd1').value;
		pwd2 = $('regpwd2').value;
		if(pwd1 != pwd2){
			$('pwddiv2').innerHTML = '<font color=red>�������벻һ��!</font>';
			cpwd2 = '';
		}else{
			$('pwddiv2').innerHTML = '<font color=green>����������ȷ</font>';
			cpwd2 = 'yes';
			chkreg();
		}
	}
	//��֤email
	$('email').onkeyup = function(){
		emailreg = /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
		$('email').value.match(emailreg);
		if($('email').value.match(emailreg) == null){
			$('emaildiv').innerHTML = '<font color=red>�����email��ʽ</font>';
			cemail = '';
		}else{
			$('emaildiv').innerHTML = '<font color=green>������ȷ</font>';
			cemail = 'yes';
			
		}
		chkreg();
	}

	//��ʾ/������ϸ��Ϣ
	$('morebtn').onclick = function(){
		
		if($('morediv').style.display == ''){
			$('morediv').style.display = 'none';
		}else{
			$('morediv').style.display = '';
		}
	}
	//��¼��ť
	$('logbtn').onclick = function(){
		window.open('login.php','_parent','',false);
	}
	//��ʽע��
	$('regbtn').onclick = function(){
		$('imgdiv').style.visibility = 'visible';
		url = 'register_chk.php?name='+$('regname').value+'&pwd='+$('regpwd1').value+'&email='+$('email').value;
		url += '&question=' +$('question').value+'&answer='+$('answer').value;
		url += '&realname=' +$('realname').value+'&birthday='+$('birthday').value;
		url += '&telephone='+$('telephone').value+'&qq='+$('qq').value;
		xmlhttp.open('get',url,true);
		xmlhttp.onreadystatechange = function(){
			if(xmlhttp.readyState == 4){
				if(xmlhttp.status == 200){
					msg = xmlhttp.responseText;
					if(msg == '1'){
						alert('ע��ɹ����뵽���������л�ȡ�����룡');
						location='index.php';
					}else if(msg == '-1'){
						alert('���ķ�������֧��Zend_mail������������д��������ϸ��飡��');
					}else{
						alert(msg);
					}
					$('imgdiv').style.visibility = 'hidden';
				}
			}
		}
		xmlhttp.send(null);
	}
}