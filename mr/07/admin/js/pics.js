// JavaScript Document
// JavaScript Document
//����ͼƬ��Ϣ
function savepicinfo(){
	if($('picname').value == ''){
		alert('����дͼƬ����');
		$('picname').focus();
		return false;
	}
	if($('upfilepath').value == ''){
		 alert('�����ϴ��ļ���Ȼ���ٱ���');
		 return false;
	}
	url = 'pics/addpics_chk.php?picname='+$('picname').value+'&picpath='+$('upfilepath').value+'&pictype='+$('pictypeslt').value;
	xmlhttp.open('get,',url,true);
	xmlhttp.onreadystatechange = function(){
		if(xmlhttp.readystate == 4 && xmlhttp.status == 200){
			msg = xmlhttp.responseText;
			if(msg == '1'){
				alert('ͼƬ��ӳɹ�');
				showpics();
			}else{
				alert(msg);
			}
		}
	}
	xmlhttp.send(null);
	
	
}
//ɾ��ͼƬ���
function delpictype(typestr,typename){
	url = 'pics/pictype_chk.php?act=del&typestr='+typestr+'&typename='+typename;
	xmlhttp.open('get',url,true);
	xmlhttp.onreadystatechange = function(){
		if(xmlhttp.readystate == 4){
			if(xmlhttp.status == 200){
				msg = xmlhttp.responseText;
				if(msg == '2'){
					alert('ɾ��ʧ��');
				}else if(msg == '3'){
					alert('��� �ҵ���� ����ɾ��');
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
//���������
function addpictype(typestr){
	if($('addpictype').value == ''){
		alert('����������������');
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
					alert('���ʧ��');
				}else if(msg == '3'){
					alert('��������ظ�');
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