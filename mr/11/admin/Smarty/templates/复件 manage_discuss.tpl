<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>评论内容管理</title>
</head>

<body>
<table width="88%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="25" align="center" bgcolor="#F0F0F0">评论对象</td>
    <td height="25" align="center" bgcolor="#F0F0F0"><span class="admin_STYLE3">评论内容</span></td>
    <td height="25" align="center" bgcolor="#F0F0F0"><span class="admin_STYLE3">评论人</span></td>
    <td height="25" align="center" bgcolor="#F0F0F0"><span class="admin_STYLE3">评论时间</span></td>
    <td height="25" align="center" bgcolor="#F0F0F0"><span class="admin_STYLE3">操作</span></td>
  </tr>
{section name=video_discuss_id loop=$video_discuss}

  <tr>
    <td align="center">
{section name=video_id loop=$video}
{if $video[video_id].tb_video_id==$video_discuss[video_discuss_id].tb_video_id}
{$video[video_id].tb_video_name}
{/if}
{/section}	</td>
    <td height="20" align="center">{$video_discuss[video_discuss_id].tb_discuss_content}</td>
    <td align="center">{$video_discuss[video_discuss_id].tb_discuss_user}</td>
    <td align="center">{$video_discuss[video_discuss_id].tb_discuss_date}</td>
    <td align="center"><a href="delete_discuss.php?discuss_id={$video_discuss[video_discuss_id].tb_discuss_id}" onClick="return del_discuss();">删除</a></td>
  </tr>

{/section}
</table>
</body>
</html>
