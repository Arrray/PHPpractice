 function setPicker() {					//ף������
	var PickerObj = document.getElementById('PickerSample');
	PickerObj.innerHTML = document.getElementById('Picker').value;
	
}

 function setUserName() {					//��Ը������
	var nameObj = document.getElementById('authorSample');
	nameObj.innerHTML = document.getElementById('author').value;
	
}

 function setQQ() {						//��Ը��QQ
	var QQObj = document.getElementById('QQSample');
	QQObj.innerHTML = document.getElementById('QQ').value;
	
}

function setColor(color){	 					//ǽֽ��ɫ
	var obj = document.getElementById('paper_Sample');
	obj.className =color;
	document.getElementById('paperColor').value = color;	
}

function IconChange(file,name){				//�޸�����ͼ��
	var IconUrl = "images/icon/"+file+"/"+file+"_"+name;
	document.getElementById("IconImg").src = IconUrl;
	document.getElementById("face").value=IconUrl			//������ͼ�긳��������
}

function changeIconTeam(AutoId){				//ѡ������ͼ�����
	for(var g = 0;g<3;g++){
		document.getElementById("icon"+g).style.display = "none";
	}
	document.getElementById("icon"+AutoId).style.display = "inline";
}


function textCounter(field, countfield, maxlimit) {		//ף������������120���ַ���
 	var StrValue  = field.value;
  	var ByteCount = 0;
	var StrLength = field.value.length;
	for (i=0;i<StrLength;i++){			//����ף�����ָ�����Ӣ������ռ1���ַ�������ռ2����
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

function checkForm(){									//ף������
	if(isNaN(document.getElementById('QQ').value)){
		alert('�������QQ�Ų�����ֵ�ͣ�����������!');document.getElementById('QQ').focus();return false; 
	}
	if( document.getElementById('content').value == ''){
		alert('ף�����ݲ���Ϊ�գ�����������!');document.getElementById('content').focus();return false;
	}
	if (document.getElementById('author').value == ''){
		alert('��Ը�˲���Ϊ��!');document.getElementById('author').focus();return false;
	}
	if(document.getElementById('checkcode').value==""){
		alert("��֤�벻��Ϊ�գ�");document.getElementById('checkcode').focus();return false;
	}
	if(document.getElementById('checkcode').value!=document.getElementById('txt_hyan').value){
		alert("��֤���������");document.getElementById('checkcode').focus();return false;
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



