<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="js/chk.js" language="javascript"></script>
<script language="javascript" src="js/checkbox.js"></script>
<link href="css/listen_music.css" type="text/css" rel="stylesheet" />
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>

{if $showmusic_false==F}
当前没有任何记录
{else}
<table width="500" border="0" cellspacing="0" cellpadding="0" class="right_table">
			<tr>
			  	<td width="50" height="25" align="center" valign="middle">操作</td>
				<td width="150" align="center" valign="middle">歌曲名称</td>
				<td width="150" align="center" valign="middle">主唱</td>
				<td width="50" align="center" valign="middle">在线试听</td>
				<td width="50" align="center" valign="middle">下载</td>
				<td width="50" align="center" valign="middle">介绍</td> 
			</tr>
	<form name="form1" method="post" action="realplay.php" id="form1">	
	{section name=sec2 loop=$music}
	<tr onmouseover="this.style.backgroundColor='#deebef'" onmouseout="this.style.backgroundColor=''">
	<td><input type="checkbox" name="checkbox[]" value="{$music[sec2].id}">	</td>
	<td>
	{$music[sec2].name}	</td>
	<td>
	{$music[sec2].actor}	</td>
	<td><img src="images/首页_24.jpg" alt="在线播放" width="28" height="23" border="0" onclick="MM_openBrWindow('listens.php?id={$music[sec2].id}','','width=1004,height=720')"></td>
	<td><a href="download.php?id={$music[sec2].id}&action=video"><img src=images/首页_26.jpg width=28 height=23 border=0 alt=下载/></a></td>
	<td>
	<a href="#" onclick="javascript:Wopen=open('v_intro.php?id={$music[sec2].id}','','height=720,width=1004,scrollbars=no');"><img src="images/首页_28.jpg" width="28" height="23" border="0" alt="介绍"></a></td>
	</tr>
	{/section}
	<tr onmouseover="this.style.backgroundColor='#deebef'" onmouseout="this.style.backgroundColor=''">
			  <td height="25" colspan="6" align="center" valign="middle" >
<input name="button" type=button class="buttoncss" onClick="checkAll(form1,status)" value="全选">
<input type=button value="反选" class="buttoncss" onClick="switchAll(form1,status)">
<input type=button value="不选" class="buttoncss" onClick="uncheckAll(form1,status)"></td>
</tr>
<tr>
<td colspan="6">
 <center>
   {if $page1 == 1}首页&nbsp;上一页
   {else}<a href="index.php?pages=1">首页</a>&nbsp;<a href="index.php?pages={$page1-1}" >上一页</a> 
   {/if}
   &nbsp;
   {if $page1 == $pagecount1 }下一页&nbsp;尾页
   {else}<a href="index.php?pages={$page1+1}">下一页</a>&nbsp;<a href="index.php?pages={$pagecount1}">尾页</a>
   {/if}
 </center>
</td>
</tr>
<tr>
<td colspan="6">

    <div align="right">
  <input  class="ls_msc" type="submit" name="Submit3" value="添加到播放列表" />
  &nbsp;&nbsp;&nbsp;&nbsp;
  <input   class="ls_msc" type="submit" name="Submit" value="连续播放">
  &nbsp;&nbsp;&nbsp;&nbsp;
  <input class="ls_msc" type="submit" name="Submit2" value="循环播放" />
      <a href="music_list.php" target="_blank" >查看播放列表</a> &nbsp;&nbsp;&nbsp;</div>
</tr>
</form>
</table>
<span class="right_table">
总计有音乐{$total1}首。当前是第{$page1}页&nbsp;每页显示{$pagesize1}条记录&nbsp;一共有{$pagecount1}页
</span>
{/if}


{if $loginyon ==Y}
  {if $mymusicnum ==0}
  <p>当前没有记录</p>
  {else}
  
  <table>
    <tr onmouseover="this.style.backgroundColor='#deebef'" onmouseout="this.style.backgroundColor=''">
       <td></td>
	</tr>
	<tr>
	   <td width="150" align="center" valign="middle">歌曲名称</td>
	   <td width="200" align="center" valign="middle">歌手</td>
	   <td width="150" align="center" valign="middle">在线试听</td>
	</tr>
   {section name=sec1 loop=$mymusic}
  <tr>
      <td>{$mymusic[sec1].tb_song_name}</td>
	  <td>{$mymusic[sec1].tb_singer_name}</td>
	  <td><img src="images/首页_24.jpg" alt="在线播放" width="28" height="23" border="0" onclick="MM_openBrWindow('{$mymusic[sec1].tb_internet_address}','','width=1004,height=720')"></td>
  </tr>
  {/section}
  {/if}  

</table>
总计有记录{$mymusicnum}条记录&nbsp;

{/if}
</body>
</html>
