<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>{$video_user}的视频</title>
<script src="js/channel_conment.js"></script>
</head>
<body>
<script type="text/javascript">ReqXml('{$url}')</script>
<table width="1004" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="97">&nbsp;</td>
    <td width="811"><table width="810" height="35" border="0" align="center" cellpadding="0" cellspacing="0" background="images/首页_03.gif">
      <tr>
        <td width="150" align="center"><div align="center" class="white_STYLE3">{$video_user}上传的视频</div></td>
        {if $name!=$names1 or $names!=T}
        <td width="70" align="center"><a href="individualism_video.php?user_id={$user_id}&&video_user={$user}" class="white_STYLE3"></a></td>
        <td width="140" align="center">&nbsp;</td>
        {/if}
        {if $user==$name}
        <td width="116" align="center">&nbsp;</td>
        <td width="103" align="center">&nbsp;</td>
        {/if}
        <td width="231" align="center">&nbsp;</td>
      </tr>
    </table></td>
    <td width="96">&nbsp;</td>
  </tr>
</table>
<div align="center" id="xmlpage"></div>
</body>
</html>
