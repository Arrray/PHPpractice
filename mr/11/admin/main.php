<?php	session_start();
if(isset($_SESSION["admin"]) and $_SESSION["admin"]!=""){
	include "inc/chec.php";
	include ("conn/conn.class.php");
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>���ղ��ͺ�̨����</title>
</head>
<link href="css/style.css" rel="stylesheet"/>
<script src="js/admin_js.js" language="javascript"></script>
<script type="text/JavaScript">
<!--
function MM_popupMsg(msg) { //v1.0
  if(confirm(msg))
     return true;
   else
     return false;
}
//-->
</script>
<body>
<center>
<table width="830" cellpadding="0" cellspacing="0">
<tr>
	<td><img src="images/��̨ҳ_2.jpg"></td>
</tr>

</table>

<table width="830" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="185" height="500" align="center" valign="top" background="images/��̨ҳ_11.jpg">
		<table width="185" border="0" cellpadding="0" cellspacing="0" bgcolor="#f0f0f0">
		
			<tr>
				<td background="images/��̨ҳ_11.jpg">
<?php
	include "left.php";
?>				</td>
			</tr>
		</table>
	</td>
    <td width="645" align="center" valign="top" bgcolor="#f0f0f0">
	<table width="645" border="0" cellpadding="0" cellspacing="0">
	
		<tr>
			<td height="34" align="right" valign="middle" background="images/line.jpg"> <a href="logout.php">�˳���¼</a>&nbsp;&nbsp;&nbsp;&nbsp;</td>
		</tr>
		<tr>
			<td height="15" bgcolor="#f0f0f0">&nbsp;</td>
		</tr>
		<tr>
			<td height="427" align="center" valign="top"  style="background-image:url(images/bg.jpg); background-repeat:no-repeat; background-position:center; background-attachment:fixed;">
<div style="height:35px;">&nbsp;</div>
<?php
	if(isset($_GET['caption'])){
		switch ($_GET['caption']){		
			case "manage_up_video":				//�ϴ���Ƶ����
				include "manage_up_video.php";
				break;
			case "manage_user":					//ע���û�����
				include "manage_user.php";
				break;
			case "manage_discuss":				//�������ݹ���
				include "manage_discuss.php";
				break;
			case "manage_video_type";			//��Ƶ���͹���
				include "manage_video_type.php";
				break;
			case "manage_admin";				//����Ա����
				include "manage_admin.php";
				break;
			case "";
				include "manage_admin.php";
				break;
		}
	}
?>			</td>
		</tr>
		<tr>
			<td height="15" bgcolor="#f0f0f0">&nbsp;</td>
		</tr>
	</table>
	
	</td>
   </tr>
</table>
<img src="images/��̨ҳ_6.jpg">
</center>
</body>
</html>
<?php
}else{
echo "<script>alert('����ȷ��¼!'); window.location.href='index.php';</script>";
}
?>