<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>无标题文档</title>
</head>

<body>
<table width="88%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="32%" height="25" align="center" bgcolor="#F0F0F0">ID</td>
    <td width="33%" align="center" bgcolor="#F0F0F0">类型</td>
    <td width="35%" align="center" bgcolor="#F0F0F0">操作/<a href="insert_type.php">添加</a>/</td>
  </tr>
{section name=video_type_id loop=$video_type}
  <tr>
    <td height="20" align="center">{$video_type[video_type_id].tb_type_id}</td>
    <td align="center">{$video_type[video_type_id].tb_type_name}</td>
    <td align="center"><a href="delete_type.php?type_id={$video_type[video_type_id].tb_type_id}" onClick="return video_type_chk();">删除</a>/<a href="update_type.php?type_id={$video_type[video_type_id].tb_type_id}">修改</a></td>
  </tr>
{/section}
</table>
</body>
</html>
