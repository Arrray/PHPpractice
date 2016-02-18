
//全部选择/取消
function alldel1(tot){

	for(i=0;i<tot;i++){
		if(!document.getElementById('mail_a1['+i+']').checked){
			document.getElementById('mail_a1['+i+']').checked = true;
		}
	}
	return false;
}
// 反选
function overdel1(tot){
	for(i=0;i<tot;i++){
		if(!document.getElementById('mail_a1['+i+']').checked){
			document.getElementById('mail_a1['+i+']').checked = true;
		}else{
			document.getElementById('mail_a1['+i+']').checked = false;
		}
	}
	return false;
}

function del1(tot){
var rd=Array();
	for(i=0,j=0;i<tot;i++){
		if(!document.getElementById('mail_a1['+i+']').checked){


		}else{
			
				rd[j]=document.getElementById('mail_a1['+i+']').value;
j++;
			
		}
	}

for(j=0;j<rd.length;j++){
mail_address(rd[j]);
}
	return false;
}
