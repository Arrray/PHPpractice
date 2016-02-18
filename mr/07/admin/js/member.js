// JavaScript Document
//添加类别
function $(id){
	return document.getElementById(id);
}
//检查类别信息
function chktypename(){
	if($('addpictype').value == ''){
		alert('请输入添加类别名称');
		$('addpictype').focus();
		return false;
	}
	if($('ispub').value == 1){
		if($('typepwd').value == ''){
			alert('请输入密码');
			$('typepwd').focus();
			return false;
		}
	}
}
//检查修改类别信息
function chktypename1(){
	if($('modpictype').value == ''){
		alert('请输入添加类别名称');
		$('modpictype').focus();
		return false;
	}
	if($('ispub1').value == 1){
		if($('typepwd1').value == ''){
			alert('请输入密码');
			return false;
		}
	}
}
//显示/隐藏 添加表单
function addtype(){
	$('modtypediv').style.display = 'none';
	if($('addtypediv').style.display == ''){
		$('addtypediv').style.display = 'none';
	}else{
		$('addtypediv').style.display = '';
	}
	
}
//密码输入是否可用
function pubtype(){
	if($('ispub').value == 0){
		$('typepwd').disabled = true;
	}else{
		$('typepwd').disabled = false;
		$('typepwd').focus();
	}
}
//显示/隐藏 修改表单
function modtype(id,typename){
	$('addtypediv').style.display = 'none';
	if($('modtypediv').style.display == ''){
		if($('modpictype').value == typename){
			$('modtypediv').style.display = 'none';
		}else{
			$('hiddenid').value = id;
			$('modpictype').value = typename;
		}
		
	}else{
		$('hiddenid').value = id;
		$('modpictype').value = typename;
		$('modtypediv').style.display = '';
	}
}
//密码输入是否可用（修改表单）
function pubtype1(){
	if($('ispub1').value == 0){
		$('typepwd1').disabled = true;
	}else{
		$('typepwd1').disabled = false;
		$('typepwd1').focus();
	}
}
//删除类别
function deltype(tid){
	if(!confirm('是否确定删除?')){
	}else{
		location = 'pictype_chk.php?act=deltype&tid='+tid
	}
}