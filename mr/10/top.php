<link href="CSS/index.css" rel="stylesheet"/>
<div id="header"></div>
<div id="wall"></div>
  <div id="navigation"><a href="index.php"><img src="images/btn_index.gif" border="0" class="btn_index"  /></a>&nbsp;&nbsp;<a href="wishingadd.php"><img src="images/btn_add.gif" border="0"  class="btn_index"  /></a>&nbsp;&nbsp;<a href="wishingsort.php"><img src="images/btn_sort.gif" class="btn_index"  /></a>&nbsp;&nbsp;<a href="wishingList.php"><img src="images/btn_list.gif"  class="btn_index" /></a>&nbsp;&nbsp;<a href="wishingcount.php"><img src="images/btn_count.gif" width="88" height="22" class="btn_index"/></a>
  <div id="scrollScrip" align="left">最新10条许愿：
  <marquee direction="left" scrollamount="2" width="90%" height="30" onMouseMove="this.stop()" onMouseOut="this.start()">
  <span id="scrollScripContent">正在获取许愿内容......</span>
  </marquee>
</div>
  </div>
<script language="javascript" src="JS/AjaxRequest.js"></script>
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