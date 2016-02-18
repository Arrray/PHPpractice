<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>查询</title>
</head>
<script src="js/chk.js"></script>
<body>
<table width="1004" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="3"><img src="images/子页_02.gif" width="1004" height="40"></td>
  </tr>
  <tr>
    <td width="39" background="images/子页_03.gif">&nbsp;</td>
    <td width="908"><table width="900" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td><img src="images/子页_01.gif" width="880" height="36"></td>
      </tr>
      <tr>
        <td align="center">

<table width="100%" height="49%" border="0" align="center" cellpadding="0" cellspacing="0">
      {if $discuss_false=="F"}
      <tr>
        <td colspan="5">没有数据！</td>
      </tr>
      {else}
 <tr>
    <td colspan="5"></td>

      {php}$number=0;{/php}
      {section name=video_id loop=$video_user}
      {php}if(($number % 3) == 0){ {/php}
</tr>      
<tr> {php}
}{/php}
        <td colspan="5">
{if $video=="T"}
<table width="300" border="0" cellspacing="0" cellpadding="0">
		  	<tr>
				<td width="150" align="center" valign="middle">
<a href="look.php?video_id={$video_user[video_id].tb_video_id}&video_name={$video_user[video_id].tb_video_name}" target="_blank"><img name="news" src="{$video_user[video_id].tb_video_picture}" width="130" height="150" alt="{$video_user[video_id].tb_video_explain}" border="3" style=" border-color:#CCCCCC; margin-top:5px; margin-left:5px; margin-bottom:5px; margin-right:5px;" /></a></td>
				<td width="150" align="center" valign="middle"><table width="150" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td height="25" colspan="2" align="center">{$video_user[video_id].tb_video_name}</td>
                  </tr>
                  <tr>
                    <td width="54" height="25" align="right" valign="middle">类型：</td>
                    <td width="130"><div>

{section name=type_ids loop=$video_type}
{if $video_type[type_ids].tb_type_id==$video_user[video_id].tb_video_type}
{$video_type[type_ids].tb_type_name}
{/if} 
{/section}


</div></td>
                  </tr>
                  
                  <tr>
                    <td height="25" align="right" valign="middle">时间：</td>
                    <td>{$video_user[video_id].tb_video_date}</td>
                  </tr>
                  <tr>
                    <td height="25" align="right" valign="middle">播客：</td>
                    <td>{$video_user[video_id].tb_video_author}</td>
                  </tr>
                  <tr>
                    <td height="25" colspan="2" align="center" valign="middle"><a href="look.php?video_id={$video_user[video_id].tb_video_id}&video_name={$video_user[video_id].tb_video_name}" target="_blank">播放</a> &nbsp;&nbsp;<a href="download.php?id={$video_user[video_id].tb_video_id}">下载</a>
                        
                      &nbsp;&nbsp;<a href="#" onClick="javascript:Wopen=open('intro.php?id={$video_user[video_id].tb_video_id}','','height=700,width=665,scrollbars=no');">简介</a></td>
                  </tr>
              </table></td>
		  	</tr>
		  </table>

{else}
<table width="300" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="150" align="center" valign="middle"><a href="individualism.php?user_id={$video_user[video_id].tb_user_id}&&video_user={$video_user[video_id].tb_video_user}">
<!--从数据库中读取出以二进制格式存储的图片-->
<img src="head_picture.php?recid={$video_user[video_id].tb_user_id}" width="120" height="135" border="3" style=" border-color:#CCCCCC; margin-top:5px; margin-left:5px; margin-bottom:5px; margin-right:5px;" alt="{$video_user[video_id].tb_video_qq}" >
</a></td>
                  <td width="150" align="center" valign="middle"><table width="184" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td height="25" colspan="2">{$video_user[video_id].tb_video_user}</td>
                      </tr>
                      
                      <tr>
                        <td width="54" height="32" align="right" valign="middle">时间：</td>
                        <td width="130">{$video_user[video_id].tb_video_date}</td>
                      </tr>
                      <tr>
                        <td height="25" align="right" valign="middle">播客：</td>
                        <td>
<a href="individualism.php?user_id={$video_user[video_id].tb_user_id}&&video_user={$video_user[video_id].tb_video_user}" target="_blank">{$video_user[video_id].tb_video_user}</a></td>
                      </tr>
                  </table></td>
                </tr>
            </table>
{/if}
</td>
        {php}if(($number %3) != 0){{/php} 
      {php}

}
      $number++;
      {/php}
      {/section}
  </tr> 
{/if}
</table>


</td>
      </tr>
    </table></td>
    <td width="57" background="images/子页_05.gif">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3"><img src="images/子页_12.gif" width="1004" height="35"></td>
  </tr>
</table><img src="images/登录后_11.gif" width="1004" height="85">

</body>
</html>
