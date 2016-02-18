<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>{$name}订阅的播客</title>
</head>
<script src="js/channel_conment.js"></script>
<script type="text/javascript" src="js/delete_video.js"></script>
<body>
<table width="1004" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="97">&nbsp;</td>
    <td width="811"><table width="810" height="35" border="0" align="center" cellpadding="0" cellspacing="0" background="images/首页_03.gif">
  <tr>
{if $user!=$name}
    <td width="113" align="center"><a href="individualism_video.php?user_id={$user_id}&&video_user={$user}" class="white_STYLE3">视频</a></td>
   

 <td width="110" align="center">
 
<a href="subscibe_program.php?user_id={$user_id}&&video_user={$user}" class="white_STYLE3">订阅({$subscibe_counts})</a></td> 
 {/if}
 <td width="110" align="center"><a href="subscibe/{$user_id}.xml" class="white_STYLE3"><img src="images/2464.jpg" width="16" height="16" border="0"></a></td>

{if $user==$name}

 <td width="166" align="center"><a href="my_video_manage.php?video_user={$name}" class="white_STYLE3">我上传的节目</a></td>
 <td width="168" align="center"><a href="cancel_subscibe.php?video_user={$name}" class="white_STYLE3">我订阅的播客</a></td>
 {/if}  </tr>
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
        <td><img src="images/子页_09.gif" width="880" height="36"></td>
      </tr>
      <tr>
        <td>

	<table width="900" height="208" border="0" cellpadding="0" cellspacing="0">
  <tr><td colspan="5"></td>
  {php}$number=0;{/php}
  {section name=subscibe_id loop=$subscibe}
      {php}if(($number % 4) == 0){ {/php}</tr>      
<tr> {php}
}{/php}

        <td colspan="5">
<table width="225" height="94" border="0" cellpadding="00" cellspacing="0">
{section name=video_user_id loop=$video_user}
{if $video_user[video_user_id].tb_video_user==$subscibe[subscibe_id].tb_video_user}      
	<tr>

   <td width="225" align="center">{section name=subscibe_program_id loop=$subscibe_address}
{if $subscibe_address[subscibe_program_id].tb_video_user==$video_user[video_user_id].tb_video_user}
<a href="my_subscibe_program.php?url={$ip}/MR/21/01/subscibe/{$subscibe_address[subscibe_program_id].tb_subscibe_address}&video_user={$video_user[video_user_id].tb_video_user}" target="_blank">
    <img src="head_picture.php?recid={$video_user[video_user_id].tb_user_id}" width="120" height="135" border="0" ></a>
{/if}
{/section}</td>
      </tr>
      <tr>
        <td height="17" align="center">&nbsp;</td>
      </tr>
{section name=video_counts_id loop=$video_counts}
{if $video_counts[video_counts_id].tb_video_user==$video_user[video_user_id].tb_video_user} 
     <tr>
        <td align="center">
节目：&nbsp;{$video_counts[video_counts_id].tb_up_counts}</td>
      </tr>
{/if}
{/section}
      <tr>
        <td align="center">播客：&nbsp;
{section name=subscibe_program_id loop=$subscibe_address}
{if $subscibe_address[subscibe_program_id].tb_video_user==$video_user[video_user_id].tb_video_user}
<a href="my_subscibe_program.php?url={$ip}/MR/21/01/subscibe/{$subscibe_address[subscibe_program_id].tb_subscibe_address}&video_user={$video_user[video_user_id].tb_video_user}" target="_blank">
    {$video_user[video_user_id].tb_video_user}</a>
{/if}
{/section}
</td>
      </tr>
      <tr>
        <td align="center"><input type="submit" name="Submit" value="取消订阅" onClick="cancel_subscibe('{$video_user[video_user_id].tb_video_user}','{$name}')"></td>
      </tr>
{/if}{/section}
</table>
		</td>

        {php}if(($number %4) != 0){{/php} 
      {php}

}
      $number++;
      {/php}
      {/section}  </tr> 
</table>

	








          		</td>
      </tr>
      <tr>
        <td>
		</td>
      </tr>
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
