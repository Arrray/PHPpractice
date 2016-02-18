<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>
<table width="450" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td height="10" colspan="5" align="center" valign="middle">音 频 目 录 管 理</td>
              </tr>
              <tr>
                <td height="10" colspan="5" align="right" valign="middle"><a href="#" onclick="javacript:Wopen=open('videolist.php?action=videolist','添加目录','height=500,width=665,scrollbars=no');">目录添加</a></td>
              </tr>
              <tr>
                <td height="30" align="center" valign="middle">ID</td>
                <td height="30" align="center" valign="middle">等级</td>
                <td height="30" align="center" valign="middle">名称</td>
                <td height="30" align="center" valign="middle">父级名称</td>
                <td height="30" align="center" valign="middle">操作</td>
              </tr>
			  {section name=sec1 loop=$v_list}
			  <tr>
			    <td height="18" align="center" valign="middle">{$v_list[sec1].id}</td>
				<td height="18" align="center" valign="middle">{$v_list[sec1].grade}</td>
				<td height="18" align="center" valign="middle">{$v_list[sec1].name}</td>
				<td height="18" align="center" valign="middle">{$v_list[sec1].father}</td>
				<td height="18" align="center" valign="middle"><a href="del_list_chk.php?action=videolist&id={$v_list[sec1].id}" onclick="return del_chk();">删除</a></td>
			  </tr>
			  {/section}

</table>
</body>
</html>
