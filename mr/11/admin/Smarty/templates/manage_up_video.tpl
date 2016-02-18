<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>上传视频管理</title>
</head>
<script type="text/javascript" src="js/check_auditing.js"></script>
<script type="text/javascript" src="js/xmlHttpRequest.js"></script>
<body>
<table width="88%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="25" align="center" bgcolor="#F0F0F0">视频名称</td>
    <td align="center" bgcolor="#F0F0F0">类型</td>
    <td align="center" bgcolor="#F0F0F0">作者</td>
    <td align="center" bgcolor="#F0F0F0">上传时间</td>
    <td align="center" bgcolor="#F0F0F0">操作</td>
    <td bgcolor="#F0F0F0">&nbsp;</td>
  </tr>
{section name=video_id loop=$video}
  
 <tr>
    <td height="20" align="center"><a href="look.php?video_id={$video[video_id].tb_video_id}" title="视频预览" target="_blank">{$video[video_id].tb_video_name}</a></td>

{section name=video_type_id loop=$video_type}
{if $video_type[video_type_id].tb_type_id==$video[video_id].tb_video_type}
    <td align="center">{$video_type[video_type_id].tb_type_name}</td>
{/if}
{/section}
    <td align="center">{$video[video_id].tb_video_author}</td>
    <td align="center">{$video[video_id].tb_video_date}</td>
    <td align="center">
{if $video[video_id].tb_video_auditing==0}
 <a href="auditing_ok.php?video_id={$video[video_id].tb_video_id}">审核</a> 
{else}
 <a href="auditing_ok.php?video_ids={$video[video_id].tb_video_id}" onClick="return auditing_chk();">通过</a> 

{/if}</td>
    <td align="center"><a href="delete_video.php?video_id={$video[video_id].tb_video_id}&video_file={$video[video_id].tb_video_address}&video_picture={$video[video_id].tb_video_picture}" onClick="return del_chk();">删除</a></td>
  </tr>
{/section}
</table>
</body>
</html>
