// JavaScript Document
//全部选择/取消
function alldel(tot){
	for(i=0;i<tot;i++){
		if(!$('chk['+i+']').checked){
			$('chk['+i+']').checked = true;
		}
	}
	return false;
}
// 反选
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
//删除所选
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
		alert('请选取要删除数据!');
		return false;
	}
	url = chkurl+"&del=del&rd="+rd+'&curpage='+curpage;
	location = url;
}
//分页
function pagination(chkurl,curpage){
	url = chkurl+'&curpage='+curpage;
	location = url;
}
//跳转
function jumpmem(chkurl){
	jumppage = $('jump').value;
	url = chkurl+'&curpage='+jumppage;
	location = url;
}
//设置权限
function changepub(url,id,num){
	location = 'changepub.php?url='+url+'&id='+id+'&num='+num;
}