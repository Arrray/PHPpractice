<?php session_start(); include("../conn/conn.php"); if ($page=="") {$page=1;}
if($_SESSION["admin_user"]==""){
  echo "<script>alert('��ֹ�Ƿ���¼!');window.location.href='enter_manage.php';</script>";
  exit;
 }else{
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>��̳��̨����</title>
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
        <td height="24" align="center"><a href="index.php?title=��Ա����" class="STYLE3">��Ա����</a></td>
      </tr>
      <tr>
        <td height="24" align="center"><a href="index.php?title=�������" class="STYLE3">�������</a></td>
      </tr>
      <tr>
        <td height="25" align="center"><a href="index.php?title=����������" class="STYLE3">����������</a></td>
      </tr>
      <tr>
        <td align="center"><a href="index.php?title=���ӹ���" class="STYLE3">���ӹ���</a></td>
      </tr>
      <tr>
        <td align="center"><a href="index.php?title=��������" class="STYLE3">��������</a></td>
      </tr>
      <tr>
        <td height="27" align="center"><a href="index.php?title=��������" class="STYLE3">��������</a></td>
      </tr>
      <tr>
        <td height="23" align="center"><a href="index.php?title=���ݺͻָ�" class="STYLE3">���ݺͻָ�</a></td>
      </tr>

      <tr>
        <td align="center"><a href="index.php?title=ר������" class="STYLE3">ר������</a></td>
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
	case "��Ա����":
    	include("leaguer_admin.php");
	break;
	case "�������":
    	include("send_affiche.php");
	break;
	case "����������":
    	include("append_small_type.php");
	break;
	case "���ӹ���":
    	include("update_forum.php");
	break;
	
	case "��������":
    	include("message_restore.php");
	break;


	case "ר������":
    	include("area_admin.php");
	break;
	case "��������":
    	include("permute_admin.php");
	break;
	case "���ݺͻָ�":
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