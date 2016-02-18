<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>无标题文档</title>
</head>
<script type="text/javascript" src="js/discuss_js.js"></script>
<body>
<table width="1004" height="380" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="10" height="336"></td>
    <td width="381" valign="middle"><table width="381" height="336" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
 
    <td width="70" height="20" bgcolor="#C0C0C0"><div align="right">
      <input type="button" onClick="SetFull()" value="全屏播放"></div></td>
    <td width="70" bgcolor="#C0C0C0"><input name="button" type="button" onClick="javascript:window.close()" value="关闭视窗"></td>
    </tr>
  <tr>
    <td height="266" colspan="4" bgcolor="#ffffff">
      <object onerror=alert("你的机器中没有安装Realplayer播放器，请先安装！") classid="clsid:CFCDAA03-8BE4-11cf-B84B-0020AFBBCCFA" name="rp1" width="381" height="266" id="rp1">
        <param name="_extentx" value="12000">
        <param name="_extenty" value="7500">
        <param name="shuffle" value="0">
        <param name="nolabels" value="0">
        <param name="autostart" value="-1">
        <param name="prefetch" value="0">
        <param name="controls" value="imagewindow">
        <param name="console" value="clip1">
        <param name="loop" value="0">
        <param name="numloop" value="0">
        <param name="center" value="0">
        <param name="maintainaspect" value="0">
        <param name="backgroundcolor" value="#000000">
        <param name="src" value="rtsp://192.168.1.59/MR/21/01/upfiles/video/1220403023.mp3">
      </object>    </td>
      </tr>
      <tr>
        <td height="50" colspan="2" bgcolor="#000000">
            <object classid="clsid:CFCDAA03-8BE4-11cf-B84B-0020AFBBCCFA" name="rp2" width="381" height="49" id="rp2">
              <param name="_extentx" value="12000">
              <param name="_extenty" value="1500">
              <param name="shuffle" value="0">
              <param name="nolabels" value="0">
              <param name="autostart" value="-1">
              <param name="prefetch" value="0">
              <param name="controls" value="controlpanel,statusbar">
              <param name="console" value="clip1">
              <param name="loop" value="0">
              <param name="numloop" value="0">
              <param name="center" value="0">
              <param name="maintainaspect" value="0">
              <param name="backgroundcolor" value="#000000">
            </object>        </td>
      </tr>
    </table></td>
    <td width="613" height="380" background="images/登录后_05.gif"><table width="613" height="380" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="23">&nbsp;</td>
        <td width="548" height="60">&nbsp;</td>
        <td width="42">&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td width="548" height="280" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
   {if $videos=="F"}
  <tr>
    <td colspan="2">没有数据！</td>
  </tr>
      {else}
      {php}$number=0;{/php}
      {section name=video_id loop=$video}
      {php}if(($number % 2) == 0){ {/php}
  <tr> {php}}{/php}
              <td colspan="2"><table width="274" height="140" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="30%" rowspan="5"><img name="news" src="{$video[video_id].tb_video_picture}" width="130" height="130" alt="{$video[video_id].tb_video_explain}"/></td>
                  <td height="20" colspan="2" align="center">{$video[video_id].tb_video_name}</td>
                </tr>
                <tr>
                  <td width="30%" height="20" align="right">类型：</td>
                  <td width="38%">{section name=type_ids loop=$video_type}
                  {if $video_type[type_ids].tb_type_id==$video[video_id].tb_video_type}
                  {$video_type[type_ids].tb_type_name}
                  {/if} 
                  {/section} </td>
                </tr>
                
                <tr>
                  <td height="20" align="right">时间：</td>
                  <td>{$video[video_id].tb_video_date}</td>
                </tr>
                <tr>
                  <td height="20" align="right">播客：</td>
                  <td>{$video[video_id].tb_video_author}</td>
                </tr>
                <tr>
                  <td height="43" colspan="2" align="center">
<a href="look.php?video_id={$video[video_id].tb_video_id}&video_name={$video[video_id].tb_video_name|escape:"url"}" target="_blank">播放</a> <a href="download.php?id={$video[video_id].tb_video_id}">下载</a> &nbsp;<a href="#" onClick="javascript:Wopen=open('intro.php?id={$video[video_id].tb_video_id}','','height=700,width=665,scrollbars=no');">简介</a></td>
                </tr>
              </table>
</td>{php}if(($number %2) != 0){{/php} </tr>
      {php}}
      $number++;
      {/php}
      {/section}
{/if}
    </table></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td height="40">&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table></td>
  </tr>
</table>
<table width="1004" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
<td><img src="images/登录后_09.gif" width="1004" height="30" border="0" usemap="#Map"></td>
</tr>
</table>
<table width="1004" border="0" align="center" cellpadding="0" cellspacing="0">
<tr><td>
<table width="100%" height="49%" border="0" align="center" cellpadding="0" cellspacing="0">
      {if $discuss_false=="F"}
      <tr>
        <td colspan="5">没有数据！</td>
      </tr>
      {else}


 <tr>
        <td height="10" colspan="5"></td>



      
        {php}$number=0;{/php}
      {section name=video_id loop=$video_user}
      {php}if(($number % 4) == 0){ {/php}
</tr>      
<tr> {php}
}{/php}
        <td colspan="5" align="center"><table width="251" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="55%" align="center" valign="middle"><a href="individualism.php?user_id={$video_user[video_id].tb_user_id}&&video_user={$video_user[video_id].tb_video_user}">
<!--从数据库中读取出以二进制格式存储的图片-->
<img src="head_picture.php?recid={$video_user[video_id].tb_user_id}" width="120" height="135" border="3" style=" border-color:#CCCCCC; margin-top:5px; margin-left:5px; margin-bottom:5px; margin-right:5px;" >
</a></td>
                  <td width="45%" align="center" valign="middle"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td width="55%" height="25" align="right">播客：</td>
                      <td width="45%" height="25"><a href="individualism.php?user_id={$video_user[video_id].tb_user_id}&&video_user={$video_user[video_id].tb_video_user}" target="_blank">{$video_user[video_id].tb_video_user}</a></td>
                    </tr>
                    <tr>
                      <td height="25" align="right" valign="middle">QQ：</td>
                      <td><div> {$video_user[video_id].tb_video_qq} </div></td>
                    </tr>
                    <tr>
                      <td height="25" align="right" valign="middle">人气：</td>
                      <td>{$video_user[video_id].tb_individualism_accessing}</td>
                    </tr>
                    
                  </table></td>
                </tr>
            </table>

</td>
        {php}if(($number %4) != 0){{/php} 
      {php}

}
      $number++;
      {/php}
      {/section}
  </tr> 
{/if}
</table>
</td></tr>
</table>
<table width="1004" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td><img src="images/登录后_11.gif" width="1004" height="85"></td>
  </tr>
</table>

<map name="Map"><area shape="rect" coords="878,3,958,26" href="more_user.php" target="_blank">
</map></body>
</html>
