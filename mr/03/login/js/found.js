// JavaScript Document
window.onload = function(){
	$('foundname').focus();
	function $(id){
		return document.getElementById(id);
	}
	$('step1').onclick = function(){
		if($('foundname').value != '' && $('question').value != '' && $('answer').value != ''){
			xmlhttp.open('get','found_chk.php?act=sel&foundname='+$('foundname').value+'&question='+$('question').value+'&answer='+$('answer').value,true);
			xmlhttp.onreadystatechange = function(){
				if(xmlhttp.readystate == 4 && xmlhttp.status == 200){
					msg = xmlhttp.responseText;
					if(msg == '1'){
						$('foundinfo').style.display = 'none';
						$('changepwd').style.display = '';
					}else{
						alert('��д��Ϣ����');
					}
				}
			}
			xmlhttp.send(null);
		}
	}
	$('step2').onclick = function(){
		if($('pwd1').value != ''){
			if($('pwd1').value.length < 6){
				alert('��������6λ');
				return false;
			}else if($('pwd1').value != $('pwd2').value){
				alert('�������벻һ��');
				return false;
			}
			xmlhttp.open('get','found_chk.php?act=up&foundname='+$('foundname').value+'&pwd='+$('pwd1').value,true);
			xmlhttp.onreadystatechange = function(){
				if(xmlhttp.readystate == 4 && xmlhttp.status == 200){
					msg = xmlhttp.responseText;
					if(msg == '1'){
						alert('�����޸ĳɹ�');
						window.close();
					}else{
						alert('����ȷ��д���룬����ʹ��ԭ�����޸�!');
					}
				}
			}
			xmlhttp.send(null);
		}
	}
}