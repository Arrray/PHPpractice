// JavaScript Document
//������
function $(id){
	return document.getElementById(id);
}
//��������Ϣ
function chktypename(){
	if($('addpictype').value == ''){
		alert('����������������');
		$('addpictype').focus();
		return false;
	}
	if($('ispub').value == 1){
		if($('typepwd').value == ''){
			alert('����������');
			$('typepwd').focus();
			return false;
		}
	}
}
//����޸������Ϣ
function chktypename1(){
	if($('modpictype').value == ''){
		alert('����������������');
		$('modpictype').focus();
		return false;
	}
	if($('ispub1').value == 1){
		if($('typepwd1').value == ''){
			alert('����������');
			return false;
		}
	}
}
//��ʾ/���� ��ӱ�
function addtype(){
	$('modtypediv').style.display = 'none';
	if($('addtypediv').style.display == ''){
		$('addtypediv').style.display = 'none';
	}else{
		$('addtypediv').style.display = '';
	}
	
}
//���������Ƿ����
function pubtype(){
	if($('ispub').value == 0){
		$('typepwd').disabled = true;
	}else{
		$('typepwd').disabled = false;
		$('typepwd').focus();
	}
}
//��ʾ/���� �޸ı�
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
//���������Ƿ���ã��޸ı���
function pubtype1(){
	if($('ispub1').value == 0){
		$('typepwd1').disabled = true;
	}else{
		$('typepwd1').disabled = false;
		$('typepwd1').focus();
	}
}
//ɾ�����
function deltype(tid){
	if(!confirm('�Ƿ�ȷ��ɾ��?')){
	}else{
		location = 'pictype_chk.php?act=deltype&tid='+tid
	}
}