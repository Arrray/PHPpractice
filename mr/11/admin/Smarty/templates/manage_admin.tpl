<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>�ޱ����ĵ�</title>
</head>

<body>
<table width="88%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="25" align="center" bgcolor="#F0F0F0">�û���</td>
    <td align="center" bgcolor="#F0F0F0">����</td>
    <td align="center" bgcolor="#F0F0F0">ע��ʱ��</td>
    <td align="center" bgcolor="#F0F0F0">Ȩ��</td>
    <td align="center" bgcolor="#F0F0F0">����</td>
  </tr>
{section name=manage_id loop=$manager}
  <tr>
    <td height="20" align="center">{$manager[manage_id].name}</td>
    <td align="center">{$manager[manage_id].password}</td>
    <td align="center">{$manager[manage_id].issueDate}</td>
    <td align="center">{$manager[manage_id].whether}</td>
    <td align="center"><a href="insert_manage.php">���</a>/<a href="update_manage.php?manage_id={$manager[manage_id].id}">�޸�</a>/<a href="delete_manage.php?manage_id={$manager[manage_id].id}">ɾ��</a></td>
  </tr>
{/section}
</table>
</body>
</html>
