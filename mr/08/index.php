<?php
session_start();
header("Content-type:text/html; charset=gb2312");
if(isset($_SESSION['host']) and isset($_SESSION['user']) and isset($_SESSION['pwd'])){
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>�����ʼ�ģ��</title>
<script type="text/JavaScript">
<!--
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
</script>
<style type="text/css">
<!--
body {
	background-color: #EBEBEB;
}
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
.STYLE1 {
	font-size: 12px;
	color: #575757;
}
.STYLE2 {
	color: #4B4B4B;
	font-weight: bold;
}
.STYLE34 {
	font-size: 14px;
	font-weight: bold;
	color: #4B4B4B;
}
-->
</style>
</head>
<script language="javascript" src="js/checkbox.js"></script>
<body>
<center>
<table width="1004" height="200" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td><img src="images/��ҳ(2)_2.jpg" width="1004" height="200"></td>
  </tr>
</table>

<table width="1004" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="34" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="180" valign="top" background="images/��ҳ(2)_20.jpg" bgcolor="#FFFFFF"><?php include("mail_left.php"); ?></td>
    <td width="756" align="center" valign="top" bgcolor="#FFFFFF">
<?php 
if(isset($_GET['lmbs'])){
	$lmbs=$_GET['lmbs'];
}else{
	$lmbs="";
}
switch($lmbs){

case "������": 	  
         include "sendmail.php";
     break;
case "�ռ���": 	  
         include "lookmail.php";
     break;
case "�鿴�ʼ�": 	  
         include "lookmailinfo.php";
     break;

case "�˳�": 	  
         include "mail_logout.php";
     break;

default:
         include "lookmail.php";
}
?></td>
    <td width="34" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
</table>
<table width="1004" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td><img src="images/��ҳ(2)_22.jpg" width="1004" height="80"></td>
  </tr>
</table>
</center>
</body>
</html>
<?php 
}else{
	echo "<script>alert('��ӭ��������ʼ�ϵͳ������д���ĵ�¼��Ϣ��'); window.location.href='mail.php';</script>";
}
?>