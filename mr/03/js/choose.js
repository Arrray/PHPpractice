// JavaScript Document
//ȫ��ѡ��/ȡ��
function alldel(tot){
	for(i=0;i<tot;i++){
		if(!$('chk['+i+']').checked){
			$('chk['+i+']').checked = true;
		}
	}
	return false;
}
// ��ѡ
function overdel(tot){
	for(i=0;i<tot;i++){
		if(!$('chk['+i+']').checked){
			$('chk['+i+']').checked = true;
		}else{
			$('chk['+i+']').checked = false;
		}
	}
	return false;
}
//ɾ����ѡ
function del(chkurl,tot,curpage){
	var rd=new Array();
	for(i=0,j=0;i<tot;i++){
		if(!$('chk['+i+']').checked){
		}else{
			rd[j] = $('chk['+i+']').value;
			j++;
		}
	}
	if(rd == ''){
		alert('��ѡȡҪɾ������!');
		return false;
	}
	url = chkurl+"&del=del&rd="+rd+'&curpage='+curpage;
	location = url;
}
//��ҳ
function pagination(chkurl,curpage){
	url = chkurl+'&curpage='+curpage;
	location = url;
}
//��ת
function jumpmem(chkurl){
	jumppage = $('jump').value;
	url = chkurl+'&curpage='+jumppage;
	location = url;
}
//����Ȩ��
function changepub(url,id,num){
	location = 'changepub.php?url='+url+'&id='+id+'&num='+num;
}