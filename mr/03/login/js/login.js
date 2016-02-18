// JavaScript Document
function $(id){
	return document.getElementById(id);
}
window.onload = function(){
	$('lgname').focus();
	$('lgbtn').onclick = chklg;
	$('lgname').onkeydown = function(){
		if(event.keyCode == 13){
			$('lgpwd').select();
		}
	}
	$('lgpwd').onkeydown = function(){
		if(event.keyCode == 13){
			$('lgchk').select();
		}
	}
	$('lgchk').onkeydown = function(){
		if(event.keyCode == 13){
			 chklg();
		}
	}
	function chklg(){
		if($('lgname').value.match(/^[a-zA-Z_]\w*$/) == null){
			alert('������Ϸ�����');
			$('lgname').select();
			return false;
		}
		if($('lgname').value == 0){
			alert('�������û���!');
			$('lgname').focus();
			return false;
		}
		if($('lgpwd').value == 0){
			alert('����������!');
			$('lgpwd').focus();
			return false;
		}
		if($('lgchk').value == ''){
			alert('��������֤��');
			$('lgchk').select();
			return false;
		}
		if($('lgchk').value != $('chknm').value){
			alert('��֤���������');
			$('lgchk').select();
			return false;
		}
		url = 'login/login_chk.php?act='+(Math.random())+'&name='+$('lgname').value+'&pwd='+$('lgpwd').value;
		xmlhttp.open('get',url,true);
		xmlhttp.onreadystatechange = function(){
			if(xmlhttp.readystate == 4){
				if(xmlhttp.status == 200){
					msg = xmlhttp.responseText;
					if(msg == '1'){
						alert('��¼�ɹ�');
						location.reload();
					}else{
						alert('�û������������');
						$('lgname').select();
						return false;
					}
				}
			}
		}
		xmlhttp.send(null);
	}
	$('changea').onclick = function(){
		num = '';
		for(i=0;i<4;i++){
			tmp =  Math.ceil((Math.random() * 15));
			switch(tmp){
				case(10):
					num += 'a';
					break;
				case(11):
					num += 'b';
					break;
				case(12):
					num += 'c';
					break;
				case(13):
					num += 'd';
					break;
				case(14):
					num += 'e';
					break;
				case(15):
					num += 'f';
					break;
				default:
					num += tmp;
					break;
			}
		}
		$('chkid').src='login/valcode.php?num='+num;
		$('chknm').value = num;
	}
	$('foundbtn').onclick = function(){
		window.open('login/found.php','found','width=300,height=200');
	}
	$('reg').onclick = function(){
		window.open('login/register.php','reg','',false);
	}
}