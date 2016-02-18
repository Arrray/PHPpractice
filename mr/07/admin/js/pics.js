// JavaScript Document
// JavaScript Document
//保存图片信息
function savepicinfo(){
	if($('picname').value == ''){
		alert('请填写图片名称');
		$('picname').focus();
		return false;
	}
	if($('upfilepath').value == ''){
		 alert('请先上传文件，然后再保存');
		 return false;
	}
	url = 'pics/addpics_chk.php?picname='+$('picname').value+'&picpath='+$('upfilepath').value+'&pictype='+$('pictypeslt').value;
	xmlhttp.open('get,',url,true);
	xmlhttp.onreadystatechange = function(){
		if(xmlhttp.readystate == 4 && xmlhttp.status == 200){
			msg = xmlhttp.responseText;
			if(msg == '1'){
				alert('图片添加成功');
				showpics();
			}else{
				alert(msg);
			}
		}
	}
	xmlhttp.send(null);
	
	
}
//删除图片类别
function delpictype(typestr,typename){
	url = 'pics/pictype_chk.php?act=del&typestr='+typestr+'&typename='+typename;
	xmlhttp.open('get',url,true);
	xmlhttp.onreadystatechange = function(){
		if(xmlhttp.readystate == 4){
			if(xmlhttp.status == 200){
				msg = xmlhttp.responseText;
				if(msg == '2'){
					alert('删除失败');
				}else if(msg == '3'){
					alert('类别 我的相册 不可删除');
				}else if(msg == '1'){
					showpictype();
				}else{
					alert(msg);
				}
			}
		}
	}
	xmlhttp.send(null);
}
//添加相册类别
function addpictype(typestr){
	if($('addpictype').value == ''){
		alert('请输入添加类别名称');
		$('addpictype').focus();
		return false;
	}
	url = 'pictype_chk.php?act=add&typestr='+typestr+'&typename='+$('addpictype').value ;
	xmlhttp.open('get',url,true);
	xmlhttp.onreadystatechange = function(){
		if(xmlhttp.readystate == 4){
			if(xmlhttp.status == 200){
				msg = xmlhttp.responseText;
				if(msg == '2'){
					alert('添加失败');
				}else if(msg == '3'){
					alert('添加名称重复');
				}else if(msg == '1'){
					showpictype();
				}else{
					alert(msg);
				}
			}
		}
	}
	xmlhttp.send(null);
}
function showpics(){
	xmlhttp.open('get','pics.php',true);
	xmlhttp.onreadystatechange = function(){
		if(xmlhttp.readystate == 4){
			if(xmlhttp.status == 200){
				$('showmenu').innerHTML = xmlhttp.responseText;
			}
		}
	}
	xmlhttp.send(null);
}
function showpictype(){
	xmlhttp.open('get','pictype.php',true);
	xmlhttp.onreadystatechange = function(){
		if(xmlhttp.readystate == 4){
			if(xmlhttp.status == 200){
				$('showmenu').innerHTML = xmlhttp.responseText;
			}
		}
	}
	xmlhttp.send(null);
}