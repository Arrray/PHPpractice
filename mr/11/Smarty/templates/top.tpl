<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>明日播客</title>
</head>
<script src="js/chk.js"></script>
<link rel="stylesheet" href="css/reg.css"/>
<link rel="stylesheet" href="css/style.css"/>
<body>

<table width="1004" height="72" border="0" cellpadding="0" cellspacing="0" background="images/首页_01.gif">
   <form name="form1" method="post" action="select_video.php" > 
  <tr>
    <td width="627" height="35">&nbsp;</td>
    <td width="227">&nbsp;</td>
    <td width="150">&nbsp;</td>
  </tr>
  <tr>
    <td rowspan="2" align="right">视频
      <input name="video" type="radio" value="视频" checked> 
      播客
      <input type="radio" name="video" value="播客"></td>
    <td height="5"></td>
    <td rowspan="2"><input type="image" name="imageField" src="images/首页_01_03.gif" onClick="return chk_select()"></td>
  </tr>
  <tr>
    <td height="32">&nbsp;<input name="select_video_play" type="text" size="29"></td>
    </tr>
  </form>
</table>
 {if $session_name=="T"}
 <table width="1004" height="36" border="0" cellpadding="0" cellspacing="0" background="images/登录后_02.gif">
  <tr>
    <td width="237" rowspan="2" align="right">&nbsp;</td>
    <td width="62" height="11"></td>
    <td width="82"></td>
    <td width="102"></td>
    <td width="135"></td>
    <td width="77"></td>
    <td width="78"></td>
    <td width="231" colspan="2"></td>
  </tr>
  <tr>
    <td height="25" align="center"><span class="l_td">{$name}</span></td>
    <td width="82" align="center"><a href="cancel_subscibe.php?video_user={$name}" target="_blank">我的订阅</a></td>
    <td width="102" align="center"><span class="l_td"><a href="mod_vip.php" target="_blank">修改会员资料</a></span></td>
    <td width="135" align="center"><a href="individualism.php?user_id={$id}&&video_user={$name}" target="_blank">{$name}的个人主页</a></td>
    <td width="77" align="center"><a href="my_video_manage.php?video_user={$name}" target="_blank">我的视频</a></td>
    <td width="78" align="center"><a href="trans.php" target="_blank">上传文件</a></td>
    <td width="115"><span class="l_td"><a href="#" onClick="return l_chk();">退出登录</a></span></td>
    <td width="116"><a href="historylook.php">[历史浏览]</a></td>
  </tr>
</table>
 {else}
{include file="login.tpl"}
{/if}
 <table width="1004" border="0" cellpadding="0" cellspacing="0" background="images/首页_03.gif">
   <tr>
     <td width="80" height="35" align="center"><a href="index.php" target="_blank" class="white_STYLE3">首页</a></td>
     <td width="50" align="center"><a href="video.php" target="_blank" class="white_STYLE3">视频</a></td>
     <td width="50" align="center"><a href="play_user.php" target="_blank" class="white_STYLE3">播客</a></td>
     <td width="80" align="center"><a href="hot_play.php?video_type=热播排行" target="_blank" class="white_STYLE3">热播排行</a></td>
     <td width="80" align="center"><a href="new_play.php?video_type=最新推出" target="_blank" class="white_STYLE3">最新推出</a></td>
     <td width="664">
	 <table width="100%" height="30" border="0" cellpadding="0" cellspacing="0">
<tr>
{section name=type_id loop=$video_type}      
<td height="25" width="80" align="center">
<a href="include.php?video_type={$video_type[type_id].tb_type_id}" target="_blank" class="white_STYLE3">{$video_type[type_id].tb_type_name}</a></td>
{/section}        </tr>
</table></td>
   </tr>
 </table>
