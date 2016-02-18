<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>播客后台登录界面</title>
<link rel="stylesheet" href="css/style.css" />
<script src="js/admin_js.js" language="javascript"></script>
</head>
<body onLoad="document.a_login.manager.focus();" background="images/l_bg.jpg">
<center>
<table border="0" cellpadding="0" cellspacing="0">
<tr>
	<td width="266" height="100" colspan="2">&nbsp;</td>
</tr>
<tr>
	<td valign="middle" align="center">
		
	</td>
</tr>
<tr>
	<td colspan="2" height="12">&nbsp;</td>
</tr>
</table>

<table width="565" height="214" border="0" cellpadding="0" cellspacing="0" background="images/后台登录_1.jpg">
  <tr>
    <td height="69" colspan="3">&nbsp;</td>
  </tr>
<form name="a_login" id="a_login" method="post" action="index_ok.php">
  <tr>
    <td width="351" height="24">&nbsp;</td>
    <td width="83" align="right"><strong>用户名：</strong></td>
    <td width="131"><input name="manager" type="text" onMouseOver="this.style.backgroundColor='#deebef'" onMouseOut="this.style.backgroundColor=''" size="15"/></td>
  </tr>
  <tr>
    <td height="35">&nbsp;</td>
    <td height="35" align="right"><strong>密 码：</strong></td>
    <td height="35"><input name="pwd" type="password" onMouseOver="this.style.backgroundColor='#deebef'" onMouseOut="this.style.backgroundColor=''" size="15"/></td>
  </tr>
  <tr>
    <td height="40"></td>
    <td height="40" colspan="2" align="center"><input type="image" name="lg" value="" onClick="return l_chk();"src="images/后台登录_3.jpg">      <input type="image" name="rt" onClick="form.reset();return false;" src="images/后台登录_5.jpg"></td>
    </tr>
</form>
  <tr>
    <td height="46" colspan="3">&nbsp;</td>
  </tr>
</table>
</center>
</body>
</html>
