<?php
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link type="text/css" rel="stylesheet" href="css/style.css" />
<title>明日电子相册</title>
</head>
<body>
<div id="contain">
<?Php
	include 'top.html';
?>
<script language="javascript" src="login/js/login.js"></script>
<script language="javascript" src="login/js/xmlhttprequest.js"></script>
<table border="0" cellpadding="0" cellspacing="0" align="center" width="805px">
	<tr>
		<td colspan="2" height="15px">&nbsp;</td>
	</tr>
	<tr>
		<td width="209px" align="left" valign="top"><?php include 'login/login.php'; ?></td>
		<td align="center" valign="top"><?php include 'center.php'; ?></td>
	</tr>
</table>
<p />
<div><?php include 'bottom.html'; ?></div>
</div>
</body>
</html>
