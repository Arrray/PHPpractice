<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>无标题文档</title>
</head>

<body>
<table width="88%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="25" align="center" bgcolor="#F0F0F0">用户名</td>
    <td align="center" bgcolor="#F0F0F0">密码</td>
    <td align="center" bgcolor="#F0F0F0">注册时间</td>
    <td align="center" bgcolor="#F0F0F0">权限</td>
    <td align="center" bgcolor="#F0F0F0">操作</td>
  </tr>
{section name=manage_id loop=$manager}
  <tr>
    <td height="20" align="center">{$manager[manage_id].name}</td>
    <td align="center">{$manager[manage_id].password}</td>
    <td align="center">{$manager[manage_id].issueDate}</td>
    <td align="center">{$manager[manage_id].whether}</td>
    <td align="center"><a href="insert_manage.php">添加</a>/<a href="update_manage.php?manage_id={$manager[manage_id].id}">修改</a>/<a href="delete_manage.php?manage_id={$manager[manage_id].id}">删除</a></td>
  </tr>
{/section}
</table>
</body>
</html>
