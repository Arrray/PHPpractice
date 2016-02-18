<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>{$user}的视频</title>
</head>
<body>
<table width="1004" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="97">&nbsp;</td>
    <td width="811"><table width="810" height="35" border="0" align="center" cellpadding="0" cellspacing="0" background="images/首页_03.gif">
  <tr>
   <td width="110" align="center"><a href="subscibe/{$user_id}.xml" class="white_STYLE3"><img src="images/2464.jpg" width="16" height="16" border="0"></a></td>
{if $name!=$names1 or $names!=T}
    <td width="100" align="center"><a href="individualism_video.php?user_id={$user_id}&&video_user={$user}" class="white_STYLE3">视频</a></td>
   

 <td width="100" align="center">
 
<a href="subscibe_program.php?user_id={$user_id}&&video_user={$user}" class="white_STYLE3">订阅({$subscibe_counts})</a></td> 
 {/if}


 <td width="500" align="center"></td>
 </tr>
</table></td>
    <td width="96">&nbsp;</td>
  </tr>
</table>
<table width="1004" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="3"><img src="images/子页_02.gif" width="1004" height="40"></td>
  </tr>
  <tr>
    <td width="39" background="images/子页_03.gif">&nbsp;</td>
    <td width="908"><table width="900" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td><img src="images/子页_10.gif" width="880" height="36"></td>
      </tr>
      <tr>
        <td>
<table width="100%" height="49%" border="0" align="center" cellpadding="0" cellspacing="0">
   {if $discuss_false=="F"}
  <tr>
    <td colspan="2" align="center">没有视频！</td>
  </tr>
{else}
 <tr>     
 
      {php}$number=0;{/php}
  {section name=video_id loop=$video}
      {php}if(($number % 3) == 0){ {/php}
</tr>      
<tr> {php}
}{/php}
        <td colspan="5" valign="top"><table width="334" border="0" cellspacing="0" cellpadding="0">
		  	<tr>
				<td width="150" align="center" valign="middle"><a href="look.php?video_id={$video[video_id].tb_video_id}&video_name={$video[video_id].tb_video_name|escape:"url"}" target="_blank"><img name="news" src="{$video[video_id].tb_video_picture}" width="130" height="150" alt="{$video[video_id].tb_video_explain}" border="3" style=" border-color:#CCCCCC; margin-top:5px; margin-left:5px; margin-bottom:5px; margin-right:5px;" /></a></td>
				<td width="150" align="center" valign="middle"><table width="150" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td height="25" colspan="2">{$video[video_id].tb_video_name}</td>
                  </tr>
                  <tr>
                    <td width="54" height="25" align="right" valign="middle">类型：</td>
                    <td width="130"><div>

{section name=type_ids loop=$video_type}
{if $video_type[type_ids].tb_type_id==$video[video_id].tb_video_type}
{$video_type[type_ids].tb_type_name}
{/if} 
{/section}


</div></td>
                  </tr>
                  
                  <tr>
                    <td height="25" align="right" valign="middle">时间：</td>
                    <td>{$video[video_id].tb_video_date}</td>
                  </tr>
                  <tr>
                    <td height="25" align="right" valign="middle">播客：</td>
                    <td>{$video[video_id].tb_video_author}</td>
                  </tr>
                  <tr>
                    <td height="25" colspan="2" align="center" valign="middle"><a href="look.php?video_id={$video[video_id].tb_video_id}&video_name={$video[video_id].tb_video_name|escape:"url"}" target="_blank">播放</a> &nbsp;&nbsp;<a href="download.php?id={$video[video_id].tb_video_id}">下载</a>
                        
                      &nbsp;&nbsp;<a href="#" onClick="javascript:Wopen=open('intro.php?id={$video[video_id].tb_video_id}','','height=700,width=665,scrollbars=no');">简介</a></td>
                  </tr>
              </table></td>
		  	</tr>
		  </table>

</td>
        {php}if(($number %3) != 0){{/php} 
      {php}

}
      $number++;
      {/php}
      {/section}
  </tr> 
</table>

</td>
      </tr>
 <tr>
    <td align="center"><table width="900" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td width="531"><div align="left">&nbsp;&nbsp;视频&nbsp;{$total1} 个&nbsp;每页显示&nbsp;{$pagesize1}&nbsp;个&nbsp;第&nbsp;{$page1}&nbsp;页/共&nbsp;{$pagecount1}&nbsp;页</div></td>
              <td width="317"><div align="right">

{if $page1 == 1 }首页&nbsp;上一页{else}<a href="individualism_video.php?user_id={$user_id}&video_user={$user}&pages=1">首页</a>&nbsp;<a href="individualism_video.php?user_id={$user_id}&video_user={$user}&pages={$page1-1}" >上一页</a>{/if} &nbsp;{if $page1 == $pagecount1 }下一页&nbsp;尾页{else}<a href="individualism_video.php?user_id={$user_id}&video_user={$user}&pages={$page1+1}">下一页</a>&nbsp;<a href="individualism_video.php?user_id={$user_id}&video_user={$user}&pages={$pagecount1}">尾页</a>{/if}

</div></td>            </tr>
</table></td>
  </tr>
{/if}
    </table></td>
    <td width="57" background="images/子页_05.gif">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3"><img src="images/子页_12.gif" width="1004" height="35"></td>
  </tr>
</table>
<img src="images/登录后_11.gif" width="1004" height="85">
</body>
</html>
