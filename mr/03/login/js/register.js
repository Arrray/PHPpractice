// JavaScript Document
function $(id){
	return document.getElementById(id);
}
window.onload = function(){
	$('regname').focus();
	var cname1,cname2,cpwd1,cpwd2;
	//��֤�û���
	$('regname').onkeyup = function (){
		name = $('regname').value;
		cname2 = '';
		if(name.match(/^[a-zA-Z_]*/) == ''){
			$('namediv').innerHTML = '<font color=red>��������ĸ���»��߿�ͷ</font>';
			cname1 = '';
		}else if(name.length <= 3){
			$('namediv').innerHTML = '<font color=red>ע�����Ʊ������3λ</font>';
			cname1 = '';
		}else{
			$('namediv').innerHTML = '<font color=green>ע�����Ʒ��ϱ�׼</font>';
			cname1 = 'yes';
		}
		chkreg();
	}
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
			}
			xmlhttp.send(null);
			chkreg();
		}
	}
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
	$('regpwd2').onkeyup = function(){
		pwd1 = $('regpwd1').value;
		pwd2 = $('regpwd2').value;
		if(pwd1 != pwd2){
			$('pwddiv2').innerHTML = '<font color=red>�������벻һ��!</font>';
			cpwd2 = '';
		}else{
			$('pwddiv2').innerHTML = '<font color=green>����������ȷ</font>';
			cpwd2 = 'yes';
		}
		chkreg();
	}
	function chkreg(){
		if((cname1 == 'yes') && (cname2 == 'yes') && (cpwd1 == 'yes') && (cpwd2 == 'yes')){
			$('regbtn').disabled = false;
		}else{
			$('regbtn').disabled = true;
		}
	}
	$('morebtn').onclick = function(){
		if($('morediv').style.display == ''){
			$('morediv').style.display = 'none';
		}else{
			$('morediv').style.display = '';
		}
	}
	//��ʽע��
	$('regbtn').onclick = function(){
		if($('email').value != ''){
			reg = /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
			$('email').value.match(reg);
			if($('email').value.match(reg) == null){
				alert('������ѡ����дemail����һ��Ҫд��ȷ�ĸ�ʽ');
				$('email').select();
				return false;
			}
			
		}
		
		name = $('regname').value;
		pwd = $('regpwd1').value;
		question1 = $('question').value;
		answer1 = $('answer').value;
		email1 = $('email').value;
		url = 'register_chk.php?name='+name+'&pwd='+pwd;
		url += '&question='+question1+'&answer='+answer1+'&email='+email1;
		xmlhttp.open('get',url,true);
		xmlhttp.onreadystatechange = function(){
			if(xmlhttp.readyState == 4){
				if(xmlhttp.status == 200){
					msg = xmlhttp.responseText;
					if(msg == '1'){
						alert('ע��ɹ�!');
						top.opener.location.reload();
						window.close();
					}else{
						alert(msg);
					}
				}
			}
		}
		xmlhttp.send(null);
	}
}