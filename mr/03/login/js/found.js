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
						alert('填写信息错误！');
					}
				}
			}
			xmlhttp.send(null);
		}
	}
	$('step2').onclick = function(){
		if($('pwd1').value != ''){
			if($('pwd1').value.length < 6){
				alert('密码最少6位');
				return false;
			}else if($('pwd1').value != $('pwd2').value){
				alert('密码输入不一致');
				return false;
			}
			xmlhttp.open('get','found_chk.php?act=up&foundname='+$('foundname').value+'&pwd='+$('pwd1').value,true);
			xmlhttp.onreadystatechange = function(){
				if(xmlhttp.readystate == 4 && xmlhttp.status == 200){
					msg = xmlhttp.responseText;
					if(msg == '1'){
						alert('密码修改成功');
						window.close();
					}else{
						alert('请正确填写密码，不能使用原密码修改!');
					}
				}
			}
			xmlhttp.send(null);
		}
	}
}