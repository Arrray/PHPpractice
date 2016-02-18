<%@ page contentType="text/html; charset=gb2312" language="java"%>
<script language="javascript">
timer = window.setInterval("getScrollScrip()",1000); 
window.onload=function(){
	 getScrollScrip();		//当页面载入后调用Ajax获取最新的10条字条信息
}
function getScrollScrip(){
	var loader1=new net.AjaxRequest("limit.php?action=scrollScrip&nocache="+new Date().getTime(),deal_getScrollScrip,onerror,"GET");
}
//Ajax的处理函数
function deal_getScrollScrip(){
	document.getElementById("scrollScripContent").innerHTML=this.req.responseText;
}
</script>
<div id="scrollScrip">最新10条许愿：
  <marquee direction="left" scrollamount="2" width="50%" height="30" onMouseMove="this.stop()" onMouseOut="this.start()">
  <span id="scrollScripContent">正在获取许愿内容......</span>
  </marquee>
</div>