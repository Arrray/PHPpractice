<?php session_start(); include("../conn/conn.php"); if ($page=="") {$page=1;}
if($_SESSION["admin_user"]==""){
  echo "<script>alert('禁止非法登录!');window.location.href='enter_manage.php';</script>";
  exit;
 }else{
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>论坛后台管理</title>
<style type="text/css">
<!--
body {
	margin-left: 00px;
	margin-top: 00px;
	margin-right: 00px;
	margin-bottom: 00px;
}
.STYLE1 {font-size: 12px}
.STYLE3 {font-size: 12px; font-weight: bold; }
-->
</style></head>

<body>
<table width="100%" height="275" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="80" colspan="3"><img src="images/index_2.jpg" width="1003" height="80"></td>
  </tr>
  <tr>
    <td height="24" colspan="3" ><img src="../images/index_4.jpg" width="1003"></td>
  </tr>
  <tr>
    <td width="153" valign="top" background="images/index_5.jpg"><table width="150" height="193" border="0" cellpadding="0" cellspacing="0" background="images/index_5.jpg">
      <tr>
        <td height="24" align="center"><a href="index.php?title=会员管理" class="STYLE3">会员管理</a></td>
      </tr>
      <tr>
        <td height="24" align="center"><a href="index.php?title=公告管理" class="STYLE3">公告管理</a></td>
      </tr>
      <tr>
        <td height="25" align="center"><a href="index.php?title=帖子类别管理" class="STYLE3">帖子类别管理</a></td>
      </tr>
      <tr>
        <td align="center"><a href="index.php?title=帖子管理" class="STYLE3">帖子管理</a></td>
      </tr>
      <tr>
        <td align="center"><a href="index.php?title=回帖管理" class="STYLE3">回帖管理</a></td>
      </tr>
      <tr>
        <td height="27" align="center"><a href="index.php?title=顶帖管理" class="STYLE3">顶帖管理</a></td>
      </tr>
      <tr>
        <td height="23" align="center"><a href="index.php?title=备份和恢复" class="STYLE3">备份和恢复</a></td>
      </tr>

      <tr>
        <td align="center"><a href="index.php?title=专区管理" class="STYLE3">专区管理</a></td>
      </tr>
    </table></td>
    <td width="7" height="400" bgcolor="#EFF3F7">&nbsp;</td>
    <td width="1075" align="left" valign="top">
	<div style=" width:840px;">
<?php 
if(empty($_GET["title"]))
$title="";
else
$title=$_GET["title"];
switch($title){
	case "会员管理":
    	include("leaguer_admin.php");
	break;
	case "公告管理":
    	include("send_affiche.php");
	break;
	case "帖子类别管理":
    	include("append_small_type.php");
	break;
	case "帖子管理":
    	include("update_forum.php");
	break;
	
	case "回帖管理":
    	include("message_restore.php");
	break;


	case "专区管理":
    	include("area_admin.php");
	break;
	case "顶帖管理":
    	include("permute_admin.php");
	break;
	case "备份和恢复":
    	include("bak.php");
	break;

	case "":
    	include("send_affiche.php");
	break;
}
?></div></td>
  </tr>
  <tr>
    <td height="70" colspan="3"><img src="images/index_7.jpg" width="1003" height="70"></td>
  </tr>
</table>
</body>
</html>
<?php }?>