<?php session_start();include("conn/conn.php");
if(!empty($_GET["mail_id"])){
	$query=mysql_query("update tb_mail_box set tb_mail_type=1 where tb_mail_id='$_GET[mail_id]'");
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>个人信箱</title>
</head>
<style type="text/css">
<!--
body {
	background-color: #8394BF;
}
.letter1{line-height:22px; margin:0 5px 0 5px ; background:url(images/123132.jpg)}
.letter{ border-bottom:1px dashed #CCCCCC; line-height:20px; margin:auto 5px ;}
.title{line-height:20px; margin:auto 5px ;}
.ttstyle{border-bottom:1px solid #00CCFF;}
.buttonst{margin:5px;}
.fontcolor{color:#FF0000;}
.inputsty{border:1px solid #00CCFF; background:#FFCCFF; font-size:12px; color:#0000FF; height:16px;}
.browse{ border-bottom:1px dashed #CCCCCC; line-height:22px;}
-->
</style>
<body>
<?php include_once("enter.php");?>

<table width="950" height="185" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#F7F7FF">
<?php 	$query=mysql_query("select * from tb_mail_box where tb_mail_id='$_GET[mail_id]'"); 
		$myrow=mysql_fetch_array($query);
?>
  <tr>
    <td width="129">&nbsp;</td>
    <td height="35" colspan="2" bgcolor="#FFFFFF"><div class="ttstyle">
	<div class="title">
	<span class="fontcolor">
	<?php
	if($myrow["yanzheng"]==1)                     //当该字段值为1时为验证信息
	echo "验证信息:";
	if($myrow["yanzheng"]==2)                     //当该字段值为2时为普通邮件
	echo "邮件标题:";
	if($myrow["yanzheng"]==3)                     //当该字段值为3时为已验证邮件
	echo "已验证邮件";
	if($myrow["yanzheng"]==0)                     //当该字段值为0时为系统邮件
	echo "系统邮件:";
	?>
	</span>
	<?php echo "<".$myrow["tb_mail_subject"].">";?></div></div></td>
    <td width="98">&nbsp;</td>
  </tr>
  <tr>
    <td height="80">&nbsp;</td>
    <td height="80" colspan="2" bgcolor="#FFFFFF"><div class="letter1"><?php echo $myrow["tb_mail_content"];?></div><div class="letter1">&nbsp;</div><div class="letter1">&nbsp;</div></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td rowspan="2">&nbsp;</td>
    <td width="504" height="17" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="219" bgcolor="#FFFFFF"><div align="center">来自:<?php echo $myrow["tb_mail_sender"];?>
      -----
        <?php  echo $myrow["tb_mail_date"];?>
    </div></td>
    <td rowspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td height="18"><div class="buttonst"><?php 
	if($myrow["yanzheng"]==1)                               //如果信件为好友验证信件
	{
	$tb_mail_id=$_GET["mail_id"];
	$tb_friend=$myrow["tb_mail_sender"];                     //发送请求者
	$tb_my=$myrow["tb_receiving_person"];                    //被请求认证者
	echo "<form action=\"add_friend.php\" method=\"post\" >";
	echo "<input type=\"hidden\" name=\"tb_friend\" value=\"".$tb_friend."\" >";
	echo "<input type=\"hidden\" name=\"tb_my\" value=\"".$tb_my."\" >";
	echo "<input type=\"hidden\" name=\"tb_mail_id\" value=\"".$tb_mail_id."\" >";
	echo "<input input class=\"inputsty\" type=\"submit\" value=\"加为好友\">";
	echo "</form>";
	}
	if($myrow["yanzheng"]==2)                               //如果信笺为一般信件，否则信件为系统默认信件
	{
	$receiver=$myrow["tb_mail_sender"];                     //发信者转变为收信人
	$sender=$myrow["tb_receiving_person"];                    //收信人转变为发信人
	$include=$myrow["tb_mail_content"];                     //信件内容
	$subject=$myrow["tb_mail_subject"];
	
	echo "<form action=\"send_mail.php?sender=".$sender."&&mails=写信\" method=\"post\" >";
	echo "<input type=\"hidden\" name=\"receiver\" value=\"".$receiver."\" >";
	echo "<input type=\"hidden\" name=\"sender\" value=\"".$sender."\" >";
	echo "<input type=\"hidden\" name=\"include\" value=\"".$include."\" >";
	echo "<input type=\"hidden\" name=\"subject\" value=\"".$subject."\" >";
	echo "<input class=\"inputsty\"type=\"submit\" value=\"添加回复\">";
	echo "</form>";
	}
	
	
	?></div></td>
    <td width="219">&nbsp;</td>
  </tr>
</table>
<table width="950" border="0" align="center" cellpadding="0" cellspacing="0">
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
