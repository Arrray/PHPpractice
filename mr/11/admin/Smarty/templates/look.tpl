<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>视频预览</title>
</head>
<link rel="stylesheet" href="../css/style.css"/>
<script type="text/javascript" src="../js/discuss_js.js"></script>
<body>{section name=video_id loop=$video}
<table width="1004" height="450" border="0" cellpadding="0" cellspacing="0">
<tr><td colspan="2" width="10">&nbsp;</td></tr>

  <tr>
    <td width="491"><table width="480" height="450" border="0" align="center" cellpadding="0" cellspacing="0">
     <tr>
 
    <td colspan="2" align="center" bgcolor="#FFFFFF">
<!--调用SetFull函数，实现窗口的全屏-->
      <input type="button" onClick="SetFull()" class="buttoncss" value="全屏播放">&nbsp;&nbsp;      
<!--关闭播放器的窗口-->
<input name="button" type="button" class="buttoncss" onClick="javascript:window.close()" value="关闭视窗"></td>
    </tr>
  <tr>
    <td height="340" colspan="4" bgcolor="#ffffff"><div align="center"> 
<object onerror=alert("你的机器中没有安装Realplayer播放器，请先安装！") classid="clsid:CFCDAA03-8BE4-11cf-B84B-0020AFBBCCFA" name="rp1" width="475" height="375" id="rp1">
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
              <param name="src" value="../{$video[video_id].tb_video_address}">
            </object>
        </div></td>
      </tr>
      <tr>
        <td height="60" bgcolor="#000000"><div align="center">
            <object classid="clsid:CFCDAA03-8BE4-11cf-B84B-0020AFBBCCFA" name="rp2" width="475" height="60" id="rp2">
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
            </object>
        </div></td>
      </tr>
    </table></td>
    <td width="513" background="../images/视频_4.jpg"><table width="513" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="14">&nbsp;</td>
        <td width="480" height="70">&nbsp;</td>
        <td width="19">&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td height="175" align="center"><img name="news" src="../{$video[video_id].tb_video_picture}" width="130" height="150" alt="{$video[video_id].tb_video_explain}" border="2" style=" border-color:#CCCCCC; margin-top:15px; margin-left:15px; margin-bottom:15px; margin-right:15px;" /></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td height="185" align="center"><table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
          
                <tr>
                  <td height="100%" align="center" valign="top"><table width="80%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td height="20" colspan="2" align="center">{$video[video_id].tb_video_name}</td>
                  </tr>
                  <tr>
                    <td width="30%" height="20" align="right" valign="middle">类型：</td>
                    <td width="70%"><div>
{section name=type_ids loop=$video_type}
{if $video_type[type_ids].tb_type_id==$video[video_id].tb_video_type}
{$video_type[type_ids].tb_type_name}
{/if} 
{/section}
</div></td>
                  </tr>

                  <tr>
                    <td height="20" align="right" valign="middle">时间：</td>
                    <td>{$video[video_id].tb_video_date}</td>
                  </tr>
                  <tr>
                    <td height="20" align="right" valign="middle">播客：</td>
                    <td>{$video[video_id].tb_video_author}</td>
                  </tr>
                  <tr>
                    <td height="20" align="right" valign="middle">评论：</td>
                    <td>{$video[video_id].tb_video_counts}</td>
                  </tr>
                  <tr>
                    <td height="20" align="right" valign="middle">播放次数：</td>
                    <td>{$video[video_id].tb_video_play}</td>
                  </tr>
                  <tr>
                    <td height="20" align="right" valign="middle">下载次数：</td>
                    <td>{$video[video_id].tb_video_down}</td>
                  </tr>
                  
                </table></td>
                </tr>
          </table></td>
        <td>&nbsp;</td>
      </tr>
      
      <tr>
        <td>&nbsp;</td>
        <td height="20">&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table></td>
  </tr>
</table>
{/section}
</body>
</html>
