<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>��վ��Ա����</title>
</head>

<body>
<table width="88%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="25" bgcolor="#F0F0F0">&nbsp;</td>
    <td bgcolor="#F0F0F0">��Ա��</td>
    <td bgcolor="#F0F0F0">����</td>
    <td bgcolor="#F0F0F0">QQ</td>
    <td bgcolor="#F0F0F0">����</td>
  </tr>
{section name=video_user_id loop=$video_user}
  <tr>
    <td><img src="head_picture.php?recid={$video_user[video_user_id].tb_user_id}" width="61" height="63"></td>
    <td>{$video_user[video_user_id].tb_video_user}</td>
    <td>{$video_user[video_user_id].tb_video_email}</td>
    <td>{$video_user[video_user_id].tb_video_qq}</td>
    <td><a href="delete_video_user.php?user_id={$video_user[video_user_id].tb_user_id}&user={$video_user[video_user_id].tb_video_user}" onClick="return video_user_chk();">ɾ��</a></td>
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
              <td width="531"><div align="left">&nbsp;&nbsp;��Ա&nbsp;{$total1}&nbsp;��&nbsp;ÿҳ��ʾ&nbsp;{$pagesize1}&nbsp;��&nbsp;��&nbsp;{$page1}&nbsp;ҳ/��&nbsp;{$pagecount1}&nbsp;ҳ</div></td>
              <td width="317"><div align="right">

{if $page1 == 1 }��ҳ&nbsp;��һҳ{else}<a href="main.php?caption={$caption}&pages=1">��ҳ</a>&nbsp;<a href="main.php?caption={$caption}&pages={$page1-1}" >��һҳ</a>{/if} &nbsp;{if $page1 == $pagecount1 }��һҳ&nbsp;βҳ{else}<a href="main.php?caption={$caption}&pages={$page1+1}">��һҳ</a>&nbsp;<a href="main.php?caption={$caption}&pages={$pagecount1}">βҳ</a>{/if}

</div></td>            </tr>
</table></td>
  </tr>
</table>
</body>
</html>
