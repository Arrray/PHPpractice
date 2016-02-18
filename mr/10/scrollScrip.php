<%@ page contentType="text/html; charset=gb2312" language="java"%>
<script language="javascript">
timer = window.setInterval("getScrollScrip()",1000); 
window.onload=function(){
	 getScrollScrip();
}
function getScrollScrip(){
	var loader1=new net.AjaxRequest("scrip.do?action=scrollScrip&nocache="+new Date().getTime(),deal_getScrollScrip,onerror,"GET");
}
function deal_getScrollScrip(){
	document.getElementById("scrollScripContent").innerHTML=this.req.responseText;
}
</script>
<div id="scrollScrip">最新10条字条：
  <marquee direction="left" scrollamount="2" scrolldelay="2" width="90%" height="30" onMouseMove="this.stop()" onMouseOut="this.start()">
  <span id="scrollScripContent">正在获取字条内容......</span>
  </marquee>
</div>