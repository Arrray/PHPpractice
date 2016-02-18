<?php session_start();include("conn/conn.php");?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>无标题文档</title>
<style type="text/css">
<!--
.letterfrom1 {text-align:right;}
-->
</style>
</head>
<style type="text/css">
<!--
body {
	background-color: #8394BF;
}

.letter,.letterfrom{ background:url(images/123132.jpg);line-height:22px; margin:auto 5px ; text-indent:24px;}
.title{line-height:20px; margin:auto 5px ;}
.ttstyle{border-bottom:1px solid #00CCFF;}
.buttonst{margin:5px;}
.fontcolor{color:#FF0000;}
.inputsty{border:1px solid #00CCFF; background:#FFCCFF; font-size:12px; color:#0000FF; height:16px;}
.letterfrom{ text-align:right;}
.bottom{ margin:auto 5px; text-align:right;}
-->
</style>
<body>
<?php include_once("enter.php");?>
<table width="950" align="center" height="150" border="0" cellpadding="0" cellspacing="0">
<?php 	$query=mysql_query("select * from tb_mail_box where tb_mail_id='$_GET[mail_id]'"); 
		$myrow=mysql_fetch_array($query);
?>
  <tr height="35">
    <td width="174" bgcolor="#F7F7FF">&nbsp;</td>
    <td bgcolor="#FFFFFF"><div class="ttstyle"><span class="fontcolor">发件标题:</span><?php echo $myrow["tb_mail_subject"];?> </div></td>
    <td width="77" bgcolor="#F7F7FF">&nbsp;</td>
  </tr>
  <tr height="80">
    <td bgcolor="#F7F7FF">&nbsp;</td>
    <td bgcolor="#FFFFFF"><div class="letter"><?php echo $myrow["tb_mail_content"];?></div>
	                      <div class="letter">&nbsp;</div>
						  <div class="letter">&nbsp;</div>
						  <div class="letterfrom">
      发件人:<?php  echo $myrow["tb_mail_sender"];?>
	  </div></td>
    <td bgcolor="#F7F7FF">&nbsp;</td>
  </tr>
  <tr height="35">
    <td bgcolor="#F7F7FF">&nbsp;</td>
    <td bgcolor="#FFFFFF"><span class="letterfrom1">
      <div class="bottom">发件时间:<?php  echo $myrow["tb_mail_date"];?></div>
    </span></td>
    <td bgcolor="#F7F7FF">&nbsp;</td>
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