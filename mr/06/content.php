<?php session_start();include("conn/conn.php"); if ($page=="") {$page=1;};if ($link_type=="") {$link_type=0;};?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>论坛内容</title>
<style type="text/css">
<!--
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
body,td,th {
	font-size: 12px;
}
-->
</style></head>
<script language="javascript">
function check_submit(){
	if(form1.tb_send_subject_content.value==""){
		alert("查询条件不允许为空！");form1.tb_send_subject_content.focus();return false;
	}
	form1.submit();
}
</script>
<body>
<?php  if(empty($_GET["content"]) and empty($_GET["content_1"])){ ?>
<table>
<tr><td height="10">&nbsp;</td></tr>
<tr>
  <td><?php include_once("bccd.php");?></td>
</tr>
</table>
<?php }else{?>
<table width="100%" height="50" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="10" colspan="7"></td>
  </tr>
<form name="form1" method="post" action="search.php?class=搜索引擎&&content=<?php echo $_GET["content"];?>&&content_1=<?php echo $_GET["content_1"];?>" onSubmit="return check_submit();">
  <tr>
  <td width="10%" height="40" rowspan="2" valign="middle"><a href="content.php?class=最新帖子&&content=<?php echo $_GET["content"];?>&&content_1=<?php echo $_GET["content_1"];?>"><img src="images/index_7 (1).jpg" width="65" height="23" border="0"></a></td>
    <td width="10%" rowspan="2" valign="middle"><a href="content.php?class=精华区&&content=<?php echo $_GET["content"];?>&&content_1=<?php echo $_GET["content_1"];?>"><img src="images/index_7 (2).jpg" width="55" height="23" border="0"></a></td>
    <td width="10%" rowspan="2" valign="middle"><a href="content.php?class=热点区&&content=<?php echo $_GET["content"];?>&&content_1=<?php echo $_GET["content_1"];?>"><img src="images/index_7 (3).jpg" width="52" height="23" border="0"></a></td>
    <td width="10%" rowspan="2" valign="middle"><a href="content.php?class=待回复&&content=<?php echo $_GET["content"];?>&&content_1=<?php echo $_GET["content_1"];?>"><img src="images/index_7 (4).jpg" width="55" height="23" border="0"></a></td>
    
<td width="25%" height="38" align="right" valign="bottom">
      <input name="tb_send_subject_content" type="text" size="20" />&nbsp;&nbsp;</td>
    <td width="25%" rowspan="2"><input type="image" name="imageField" src="images/index_71.jpg" /></td>
  </tr></form>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
<?php 
if(empty($_GET['class']))
$class="";
else
$class=$_GET['class'];
switch($class){
	case "最新帖子":
		include("new_forum.php");
	break;

	case "精华区":
		include("distillate.php");
	break;
	case "热点区":
		include("hotspot.php");
	break;
	case "待回复":
		include("pending.php");
	break;

	case "":
		include("new_forum.php");
	break;

}
}
?>
</body>
</html>
