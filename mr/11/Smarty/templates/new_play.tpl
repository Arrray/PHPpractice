<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>视频</title>
</head>
<body>
<table width="1004" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="3"><img src="images/子页_02.gif" width="1004" height="40"></td>
  </tr>
  <tr>
    <td width="39" background="images/子页_03.gif">&nbsp;</td>
    <td width="908"><table width="900" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="36"><table width="880" height="36" border="0" cellpadding="0" cellspacing="0" background="images/子页_08.gif">
          <tr>
            <td width="65">&nbsp;</td>
            <td width="815"><span class="stpe_STYLE1">{$video_types}</span></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td>
<table width="100%" height="49%" border="0" align="center" cellpadding="0" cellspacing="0">
   {if $discuss_false=="F"}
  <tr>
    <td colspan="2" align="center">没有该类视频！</td>
  </tr>
{else}


 <tr>
        <td colspan="5" height="10"></td>



      {php}$number=0;{/php}
  {section name=video_id loop=$video}
      {php}if(($number % 3) == 0){ {/php}
</tr>      
<tr> {php}
}{/php}
        <td colspan="5"><table width="300" border="0" cellspacing="0" cellpadding="0">
		  	<tr>
				<td width="150" height="160" align="center" valign="middle">
<a href="look.php?video_id={$video[video_id].tb_video_id}&video_name={$video[video_id].tb_video_name|escape:"url"}" target="_blank"><img name="news" src="{$video[video_id].tb_video_picture}" width="130" height="150" alt="" border="0"/></a></td>
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
                    <td height="25" align="right" valign="middle">简介：</td>
                    <td><div style=" width:50px; height:12px; ">{$video[video_id].tb_video_explain}</div></td>
                  </tr>
                  <tr>
                    <td height="25" align="right" valign="middle">播放：</td>
                    <td>{$video[video_id].tb_video_play}</td>
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
    <td colspan="2" align="center">

<table width="100%" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td width="531"><div align="left">&nbsp;&nbsp;视频&nbsp;{$total1}&nbsp;个&nbsp;每页显示&nbsp;{$pagesize1}&nbsp;个&nbsp;第&nbsp;{$page1}&nbsp;页/共&nbsp;{$pagecount1}&nbsp;页</div></td>
              <td width="317"><div align="right">

{if $page1 == 1 }首页&nbsp;上一页{else}<a href="new_play.php?video_id={$video[video_id].tb_video_id}&video_type={$video_types}&pages=1">首页</a>&nbsp;<a href="new_play.php?video_id={$video[video_id].tb_video_id}&video_type={$video_types}&pages={$page1-1}" >上一页</a>{/if} &nbsp;{if $page1 == $pagecount1 }下一页&nbsp;尾页{else}<a href="new_play.php?video_id={$video[video_id].tb_video_id}&video_type={$video_types}&pages={$page1+1}">下一页</a>&nbsp;<a href="new_play.php?video_id={$video[video_id].tb_video_id}&video_type={$video_types}&pages={$pagecount1}">尾页</a>{/if}

</div></td>            </tr>
</table>


</td>
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
