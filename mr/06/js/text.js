var lastcount =0;
function countstrbyte(message,total,used,remain){ //�ֽ�ͳ��
 var bytecount = 0;
 var strvalue  = message.value;
 var strlength = message.value.length;
 var maxvalue  = total.value;

 if(lastcount != strlength) { // �ڴ��жϣ�����ѭ������
	for (i=0;i<strlength;i++){
		bytecount  = (strvalue.charCodeAt(i)<=256) ? bytecount + 1 : bytecount + 2;
      if (bytecount>maxvalue) {
      	message.value = strvalue.substring(0,i);
			alert("����������಻�ܳ��� " +maxvalue+ " ���ֽڣ�\nע�⣺һ������Ϊ���ֽڡ�");
         bytecount = maxvalue;
         break;
      }
	}
   used.value = bytecount;
   remain.value = maxvalue - bytecount;
   lastcount = strlength;
 }
}
