<%@ page contentType="text/html; charset=gb2312" language="java"%>
<script language="javascript">
timer = window.setInterval("getScrollScrip()",1000); 
window.onload=function(){
	 getScrollScrip();		//��ҳ����������Ajax��ȡ���µ�10��������Ϣ
}
function getScrollScrip(){
	var loader1=new net.AjaxRequest("limit.php?action=scrollScrip&nocache="+new Date().getTime(),deal_getScrollScrip,onerror,"GET");
}
//Ajax�Ĵ�����
function deal_getScrollScrip(){
	document.getElementById("scrollScripContent").innerHTML=this.req.responseText;
}
</script>
<div id="scrollScrip">����10����Ը��
  <marquee direction="left" scrollamount="2" width="50%" height="30" onMouseMove="this.stop()" onMouseOut="this.start()">
  <span id="scrollScripContent">���ڻ�ȡ��Ը����......</span>
  </marquee>
</div>