<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>找回密码</title>
<link rel="stylesheet" href="css/style.css" />
<script language="javascript" src="js/found.js"></script>
<script language="javascript" src="js/xmlhttprequest.js"></script>
</head>
<body>
<div id="foundinfo">
<table width="250" border="1" align="center" cellpadding="0" cellspacing="0">
<tr>
    <td height="25" colspan="2" align="center" valign="middle">密码找回</td>
  </tr>
  <tr>
    <td width="100" height="25" align="right" valign="middle">找回帐号：</td>
    <td height="25">&nbsp;<input id="foundname" type="text" style=" width: 100px; height:15px; border:1px #000000 solid;" /></td>
  </tr>
  <tr>
  	<td width="100" height="25" align="right" valign="middle">密保问题：</td>
    <td height="25">&nbsp;<input id="question" type="text" style=" width: 100px; height:15px; border:1px #000000 solid;" /></td>
  </tr>
  <tr>
  	<td width="100" height="25" align="right" valign="middle">密保答案：</td>
    <td height="25">&nbsp;<input id="answer" type="text" style=" width: 100px; height:15px; border:1px #000000 solid;" /></td>
  </tr>
  <tr>
    <td height="25" colspan="2" align="center" valign="middle">&nbsp;<button id="step1" class="btn">下一步</button></td>
  </tr>
</table>
</div>
<div id="changepwd" style="display:none;">
<table width="250" border="1" align="center" cellpadding="0" cellspacing="0">
<tr>
    <td height="25" colspan="2" align="center" valign="middle">更改密码</td>
  </tr>
  <tr>
    <td width="100" height="25" align="right" valign="middle">输入密码：</td>
    <td height="25">&nbsp;<input id="pwd1" type="password" style=" width: 100px; height:15px; border:1px #000000 solid;" /></td>
  </tr>
  <tr>
  	<td width="100" height="25" align="right" valign="middle">二次密码：</td>
    <td height="25">&nbsp;<input id="pwd2" type="password" style=" width: 100px; height:15px; border:1px #000000 solid;" /></td>
  </tr>
  <tr>
    <td height="25" colspan="2" align="center" valign="middle">&nbsp;<button id="step2" class="btn">完成</button></td>
  </tr>
</table>
</div>
</body>
</html>
