var lastcount =0;
function countstrbyte(message,total,used,remain){ //字节统计
 var bytecount = 0;
 var strvalue  = message.value;
 var strlength = message.value.length;
 var maxvalue  = total.value;

 if(lastcount != strlength) { // 在此判断，减少循环次数
	for (i=0;i<strlength;i++){
		bytecount  = (strvalue.charCodeAt(i)<=256) ? bytecount + 1 : bytecount + 2;
      if (bytecount>maxvalue) {
      	message.value = strvalue.substring(0,i);
			alert("评论内容最多不能超过 " +maxvalue+ " 个字节！\n注意：一个汉字为两字节。");
         bytecount = maxvalue;
         break;
      }
	}
   used.value = bytecount;
   remain.value = maxvalue - bytecount;
   lastcount = strlength;
 }
}
