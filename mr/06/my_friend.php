<?php session_start();?><?php include_once("enter.php");?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>加好友</title>
<style type="text/css">
<!--
body {
	background-color: #F7F7FF;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.STYLE5 {
	font-size: 12px;
	font-weight: bold;
}
.STYLE2_friend {
	font-size: 12px;
	color: #FF0000;
}
-->
</style></head>
<body>
<table width="800" height="320" border="0" align="center" cellpadding="0" cellspacing="0">
 <form name="form1" method="post" action="my_friend_ok.php">
 <tr>
   <td height="20" align="right">&nbsp;</td>
   <td>&nbsp;</td>
 </tr>
 <tr>
    <td width="148" height="30" align="right" bgcolor="#FFFFFF"><span class="STYLE5">我要加：</span></td>
    <td width="479" bgcolor="#FFFFFF"><input name="friend" type="text" value="<?php echo $_GET["friend"];?>" size="55">
      <span class="STYLE5">为好友！
      <input type="hidden" name="my" value="<?php echo $_GET["my"];?>">
      </span></td>
  </tr>
  <tr>
    <td height="30" align="right" bgcolor="#FFFFFF"><span class="STYLE5">收件人：</span></td>
    <td bgcolor="#FFFFFF"><input name="receiving_person" type="text" id="receiving_person" value="<?php echo $_GET["friend"];?>" size="55">    
      <span class="STYLE2_friend">注意：收件人的注册用户名</span></td>
  </tr>
  <tr>
    <td height="30" align="right" bgcolor="#FFFFFF"><span class="STYLE5">主题：</span></td>
    <td bgcolor="#FFFFFF"><input name="mail_subject" type="text" id="mail_subject" size="55" value="<?php echo "你好，".$_GET["friend"];?>"></td>
  </tr>
  <tr>
    <td align="right" bgcolor="#FFFFFF"><span class="STYLE5">验证信息：</span></td>
    <td bgcolor="#FFFFFF"><textarea name="mail_content" cols="55" rows="10" id="mail_content"></textarea>
      <input type="hidden" name="mail_sender" value="<?php echo $_GET["my"];?>"></td>
  </tr>
  <tr>
    <td height="40" bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#FFFFFF"><input type="submit" name="Submit" value="发送">
      <input type="reset" name="Submit2" value="取消"></td>
  </tr></form>
</table>
<table width="1003" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="667" bgcolor="#F7F7FF">&nbsp;</td>
    <td width="283" bgcolor="#F7F7FF"><img src="images/index_8 (2).jpg" width="218" height="75"></td>
  </tr>
</table>
<?php include_once("bottom.php");?>
</body>
</html>
