// JavaScript Document
function $(id){
	return document.getElementById(id);
}
window.onload = function(){
	showval();
	$('lgname').focus();
	
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
	$('lgbtn').onclick = chklg;
	function chklg(){
		if($('lgname').value.match(/^[a-zA-Z_]\w*$/) == null){
			alert('������Ϸ�����');
			$('lgname').select();
			return false;
		}
		if($('lgname').value == ''){
			alert('�������û���!');
			$('lgname').focus();
			return false;
		}
		if($('lgpwd').value == ''){
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
		count = document.cookie.split(';')[0];
		if(count.split('=')[1] >= 3){
			alert('��Ϊ���ķǷ������������޷���ִ�е�¼����');
			return false;
		}
		$('regimg').style.visibility = "visible";
		url = 'login_chk.php?act='+(Math.random())+'&name='+$('lgname').value+'&pwd='+$('lgpwd').value;
		xmlhttp.open('get',url,true);
		
		xmlhttp.onreadystatechange = function(){
			if(xmlhttp.readyState == 4){
				if(xmlhttp.status == 200){
					msg = xmlhttp.responseText;
					if(msg == '0'){
						alert('����û�м�����ȵ�¼������м��������');
					}else if(msg == '1'){
						alert('�û����������������������2�λ���');
						$('lgpwd').select();
					}else if(msg == '2'){
						alert('�û����������������������1�λ���');
						$('lgpwd').select();
					}else if(msg == '3'){
						alert('��Ϊ��¼�������࣬�����ʺ��ѱ����ᣬ����ϵ����Ա');
						$('lgname').select();
					}else if(msg == '4'){
						alert('�û����������');
						$('lgname').select();
					}else if(msg == '-1'){
						alert('��¼�ɹ�');
						location = 'main.php';
					}else{
						alert(msg);
					}
					$('regimg').style.visibility = "hidden";
				}
			}
		}
		xmlhttp.send(null);
	}
	$('changea').onclick = showval;
	function showval(){
		num = '';
		for(i=0;i<4;i++){
			tmp =  Math.ceil((Math.random() * 15));
			if(tmp > 9){
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
				}
			}else{
				num += tmp;
			}
		}
		$('chkid').src='valcode.php?num='+num;
		$('chknm').value = num;
	}
	$('fdbtn').onclick = function(){
		fd  = window.open('found.php','found','width=300,height=200');
		fd.moveTo(screen.width/2,200);
	}
	$('rgbtn').onclick = function(){
		open('register.php','_parent','',false);
	}
}