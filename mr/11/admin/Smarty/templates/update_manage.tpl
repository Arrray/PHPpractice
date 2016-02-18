<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>无标题文档</title>
<link href="css/admin_style.css" rel="stylesheet" type="text/css">
</head>
<body>
<table width="88%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="25" align="center" bgcolor="#F0F0F0" class="admin_style">用户名</td>
    <td align="center" bgcolor="#F0F0F0">密码</td>
    <td align="center" bgcolor="#F0F0F0">类型</td>
  </tr>
<form name="form1" method="post" action="update_manage_ok.php">
{section name=manage_id loop=$update_manage}  
<tr>
    <td height="20" align="center"><input name="name" type="text" id="name" size="15" value="{$update_manage[manage_id].name}"></td>
    <td align="center"><input name="password" type="password" id="password" size="15">
      <input type="hidden" name="manage_id" value="{$update_manage[manage_id].id}"></td>
    <td align="center"><input name="whether" type="text" id="whether" size="15" value="{$update_manage[manage_id].whether}"></td>
    </tr>
  <tr>
{/section}
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td align="center"><input type="submit" name="Submit" value="修改"></td>
    </tr>
</form>
</table>
</body>
</html>
