<?php include_once("sessionstart.php"); include("conn/conn.php"); if (empty($page)) {$page=1;}?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>���Ź���</title>
<style type="text/css">
<!--
body {
	background-color: #8394BF;
}
-->
</style></head>

<body>
<?php include_once("enter.php");?>
<table  align="center" width="950" height="103" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#F4F5F9">
	<tr>
    	<td height="36" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_GET["sender"];?> ���ã���������
<?php 
	$query=mysql_query("select * from tb_mail_box where tb_receiving_person='$_GET[sender]' and tb_mail_type=''");
	$myrow=mysql_num_rows($query);
	echo $myrow;
?>
		��δ����Ϣ��</td>
   	</tr>
  	<tr>
    	<td width="263" height="39" align="center">&nbsp;&nbsp;&nbsp;&nbsp;<a href="send_mail.php?sender=<?php echo $_GET["sender"];?>&&mails=�ռ���">�ռ���</a></td>
    	<td width="244" align="center"><a href="send_mail.php?sender=<?php echo $_GET["sender"];?>&&mails=������">������</a></td>
    	<td width="425" align="center"><a href="send_mail.php?sender=<?php echo $_GET["sender"];?>&&mails=д��">д��</a></td>
  	</tr>
  	<tr>
  	  <td colspan="3" align="center"><table width="95%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td align="center"><?php 
		  if(empty($_GET["mails"]))
		  $mails="";
		  else
		  $mails=$_GET["mails"];
	switch($mails){
		case "":
  			include("write_mail.php");
		break;
		case "д��":
  			include("write_mail.php");
		break;
		case "�ռ���":
  			include("browse_mail.php");
		break;
		case "������":
  			include("browse_send_mail.php");
		break;
	}
?></td>
        </tr>
      </table>
      </td>
  </tr>
</table><table width="950" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="667" bgcolor="#F7F7FF">&nbsp;</td>
    <td width="283" bgcolor="#F7F7FF"><img src="images/index_8 (2).jpg" width="218" height="75"></td>
  </tr>
  <tr>
    <td bgcolor="#8496BD">&nbsp;</td>
    <td bgcolor="#8496BD">&nbsp;</td>
  </tr>
</table>
</body>
</html>
