 function setPicker() {					//祝福对象
	var PickerObj = document.getElementById('PickerSample');
	PickerObj.innerHTML = document.getElementById('Picker').value;
	
}

 function setUserName() {					//许愿人姓名
	var nameObj = document.getElementById('authorSample');
	nameObj.innerHTML = document.getElementById('author').value;
	
}

 function setQQ() {						//许愿人QQ
	var QQObj = document.getElementById('QQSample');
	QQObj.innerHTML = document.getElementById('QQ').value;
	
}

function setColor(color){	 					//墙纸颜色
	var obj = document.getElementById('paper_Sample');
	obj.className =color;
	document.getElementById('paperColor').value = color;	
}

function IconChange(file,name){				//修改心情图标
	var IconUrl = "images/icon/"+file+"/"+file+"_"+name;
	document.getElementById("IconImg").src = IconUrl;
	document.getElementById("face").value=IconUrl			//将心情图标赋给隐藏域
}

function changeIconTeam(AutoId){				//选择心情图案类别
	for(var g = 0;g<3;g++){
		document.getElementById("icon"+g).style.display = "none";
	}
	document.getElementById("icon"+AutoId).style.display = "inline";
}


function textCounter(field, countfield, maxlimit) {		//祝福内容限制在120个字符内
 	var StrValue  = field.value;
  	var ByteCount = 0;
	var StrLength = field.value.length;
	for (i=0;i<StrLength;i++){			//记算祝福文字个数，英文数字占1个字符，汉字占2个字
		ByteCount = (StrValue.charCodeAt(i)<=256) ? ByteCount + 1 : ByteCount + 2;
	}
	
	if(ByteCount<=maxlimit){
		strtemp=StrValue;
		document.getElementById('ContentSample').innerHTML = StrValue;
		countfield.value = maxlimit - ByteCount;
	}else{
		document.getElementById('content').innerHTML = strtemp;
	}
}

function checkForm(){									//祝福内容
	if(isNaN(document.getElementById('QQ').value)){
		alert('您输入的QQ号不是数值型，请重新输入!');document.getElementById('QQ').focus();return false; 
	}
	if( document.getElementById('content').value == ''){
		alert('祝福内容不能为空，请重新输入!');document.getElementById('content').focus();return false;
	}
	if (document.getElementById('author').value == ''){
		alert('许愿人不能为空!');document.getElementById('author').focus();return false;
	}
	if(document.getElementById('checkcode').value==""){
		alert("验证码不能为空！");document.getElementById('checkcode').focus();return false;
	}
	if(document.getElementById('checkcode').value!=document.getElementById('txt_hyan').value){
		alert("验证码输入错误！");document.getElementById('checkcode').focus();return false;
	}
}
function codecheck(){
	if(document.getElementById('checkcode').value!=document.getElementById('txt_hyan').value){
		document.getElementById("messageImg").src="images/cuo.gif";document.getElementById('checkcode').focus();return false;
	}else{
		document.getElementById("messageImg").src="images/dui.gif";
	}
}

function piccode(){
		num = '';
		for(i=0;i<4;i++){
			tmp =  Math.ceil((Math.random() * 15));
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
				default:
					num += tmp;
					break;
			}
		}
		document.getElementById('picsrc').src='getcode.php?num='+num;
		document.getElementById('txt_hyan').value = num;
		return false;
}



