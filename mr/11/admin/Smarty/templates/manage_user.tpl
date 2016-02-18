<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>网站会员管理</title>
</head>

<body>
<table width="88%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="25" bgcolor="#F0F0F0">&nbsp;</td>
    <td bgcolor="#F0F0F0">会员名</td>
    <td bgcolor="#F0F0F0">邮箱</td>
    <td bgcolor="#F0F0F0">QQ</td>
    <td bgcolor="#F0F0F0">操作</td>
  </tr>
{section name=video_user_id loop=$video_user}
  <tr>
    <td><img src="head_picture.php?recid={$video_user[video_user_id].tb_user_id}" width="61" height="63"></td>
    <td>{$video_user[video_user_id].tb_video_user}</td>
    <td>{$video_user[video_user_id].tb_video_email}</td>
    <td>{$video_user[video_user_id].tb_video_qq}</td>
    <td><a href="delete_video_user.php?user_id={$video_user[video_user_id].tb_user_id}&user={$video_user[video_user_id].tb_video_user}" onClick="return video_user_chk();">删除</a></td>
  </tr>
{/section}
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="5"><table width="98%" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td width="531"><div align="left">&nbsp;&nbsp;会员&nbsp;{$total1}&nbsp;个&nbsp;每页显示&nbsp;{$pagesize1}&nbsp;个&nbsp;第&nbsp;{$page1}&nbsp;页/共&nbsp;{$pagecount1}&nbsp;页</div></td>
              <td width="317"><div align="right">

{if $page1 == 1 }首页&nbsp;上一页{else}<a href="main.php?caption={$caption}&pages=1">首页</a>&nbsp;<a href="main.php?caption={$caption}&pages={$page1-1}" >上一页</a>{/if} &nbsp;{if $page1 == $pagecount1 }下一页&nbsp;尾页{else}<a href="main.php?caption={$caption}&pages={$page1+1}">下一页</a>&nbsp;<a href="main.php?caption={$caption}&pages={$pagecount1}">尾页</a>{/if}

</div></td>            </tr>
</table></td>
  </tr>
</table>
</body>
</html>
