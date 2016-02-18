<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>在线音乐后台登录界面</title>
<link rel="stylesheet" href="css/style.css" />
<script src="js/admin_js.js" language="javascript"></script>
</head>
<body onLoad="document.a_login.manager.focus();" background="images/l_bg.jpg">
<center>
<table width="1004" height="720" border="0" cellpadding="0" cellspacing="0" background="images/112.jpg">
  <tr>
    <td>&nbsp;</td>
    <td height="231" align="center" valign="bottom">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="271">&nbsp;</td>
    <td width="440" height="357" align="center" valign="top">
<table width="420" border="0" cellpadding="0" cellspacing="0">
<form name="a_login" id="a_login" method="post" action="index_ok.php">
  <tr>
    <td width="54" height="186" rowspan="4" align="center" valign="middle" scope="col">&nbsp;</td>
    <td height="30" colspan="2" align="center" valign="middle" scope="col">&nbsp;</td>
    </tr>
  <tr>
    <td width="106" align="right" valign="middle"><strong>用户名：</strong></td>
    <td width="285" height="30" align="left" valign="middle">
	<input type="text" name="manager" id="manager" onMouseOver="this.style.backgroundColor='#deebef'" onMouseOut="this.style.backgroundColor=''"/>	</td>
  </tr>
  <tr>
    <td width="106" height="30" align="right" valign="middle"><strong>密 码：</strong></td>
    <td width="285" height="30" align="left" valign="middle">
	<input type="password" name="pwd" id="pwd" onMouseOver="this.style.backgroundColor='#deebef'" onMouseOut="this.style.backgroundColor=''"/>	</td>
  </tr>
  <tr>
    <td height="30" align="right" valign="middle"><input class="a" type="submit" name="lg" id="lg" value="" onClick="return l_chk();" /></td>
    <td height="30" align="left" valign="middle">&nbsp;&nbsp;&nbsp;&nbsp;<input class="b" onClick="returnIndex();" type="button" name="rt" id="rt" value="" /></td>
  </tr>
</form>
</table>

</td>
    <td width="280">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="132">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</center>
</body>
</html>
