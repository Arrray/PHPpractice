<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style type="text/css">

</style>
<link href="css/historylook.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>

<div class="div1">
<h4>历史浏览</h4>
<center>
<div class="div2">
{if $relook=="F"}
没有历史记录
{else}
{section name=video_id loop=$video}
<div class="title">{$video[video_id].tb_video_name}</div>
<div><a href="look.php?video_id={$video[video_id].tb_video_id}&video_name={$video[video_id].tb_video_name|escape:"url"}" target="_blank"><img class="pic1" name="news" src="{$video[video_id].tb_video_picture}" width="130" height="150" alt="" border="0"/></a></div>
<div class="author">上传者：{$video[video_id].tb_video_author }</div>
<div class="time">时间：{$video[video_id].tb_video_date }</div>
{/section}
{/if}
</div>

<div class="div2">
{if $relook1=="F"}
没有历史记录
{else}
{section name=video_id1 loop=$video1}
<div class="title">{$video1[video_id1].tb_video_name}</div>
<div><a href="look.php?video_id={$video1[video_id1].tb_video_id}&video_name={$video1[video_id1].tb_video_name|escape:"url"}" target="_blank"><img class="pic1" name="news" src="{$video1[video_id1].tb_video_picture}" width="130" height="150" alt="" border="0"/></a></div>
<div class="author">上传者：{$video1[video_id1].tb_video_author }</div>
<div class="time">时间：{$video1[video_id1].tb_video_date }</div>
{/section}
{/if}
</div>

<div class="div2">
{if $relook2=="F"}
没有历史记录
{else}
{section name=video_id2 loop=$video2}
<div class="title">{$video2[video_id2].tb_video_name}</div>
<div><a href="look.php?video_id={$video2[video_id2].tb_video_id}&video_name={$video2[video_id2].tb_video_name|escape:"url"}" target="_blank"><img class="pic1" name="news" src="{$video2[video_id2].tb_video_picture}" width="130" height="150" alt="" border="0"/></a></div>
<div class="author">上传者：{$video2[video_id2].tb_video_author }</div>
<div class="time">时间：{$video2[video_id2].tb_video_date }</div>
{/section}
{/if}
</div>

<div class="div2">
{if $relook3=="F"}
没有历史记录
{else}
{section name=video_id3 loop=$video3}
<div class="title">{$video3[video_id3].tb_video_name}</div>
<div><a href="look.php?video_id={$video3[video_id3].tb_video_id}&video_name={$video3[video_id3].tb_video_name|escape:"url"}" target="_blank"><img class="pic1" name="news" src="{$video3[video_id3].tb_video_picture}" width="130" height="150" alt="" border="0"/></a></div>
<div class="author">上传者：{$video3[video_id3].tb_video_author }</div>
<div class="time">时间：{$video3[video_id3].tb_video_date }</div>
{/section}
{/if}

</div>

</center>
</div>

<!--{if $relook=="F"}
没有历史记录
{else}
{section name=video_id loop=$video}
{$video[video_id].tb_video_name}

<a href="look.php?video_id={$video[video_id].tb_video_id}&video_name={$video[video_id].tb_video_name|escape:"url"}" target="_blank"><img name="news" src="{$video[video_id].tb_video_picture}" width="130" height="150" alt="" border="0"/></a>

{$video[video_id].tb_video_author }
{$video[video_id].tb_video_date }
{/section}
{/if}-->
</body>
</html>
