<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style type="text/css">]
body{text-align:center; font-size:12px;}
*{margin: 0; padding:0; }
.c1{ background:url(images/首页_01.jpg); text-align: left; height:275px; width:1005px;}
.found{width:450px; height:22px;margin:182px 0 2px 120px; text-align:center;}
.banner{ width:540px; height:22px; margin:32px 5px 5px 70px; }
.bannerstyle{ font-size:16px; font-weight:bolder; color:#FFFFFF; line-height:20px;}
.frame{ text-align:center;}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>
<center>
<div class="c1">
 <div class="frame">
  <div class="banner">
    <table border="0" cellspacing="0" cellpadding="0">
	<tr>
	  <td><span class="bannerstyle"><a href="index.php?lmbs=音乐广场" class="a1">音乐广场</a> <a href="index.php?lmbs=最新音乐" class="a1">最新音乐</a></span>
	  &nbsp;</td>
	  <td><span class="bannerstyle">
	  <?php 
	  include_once("conn/conn.class.php");
	  $l_sqlstr = "select * from tb_videolist where grade=2";
	  $l_rst = $result->getRows($l_sqlstr,$conn);
	  for($i=0;$i<count($l_rst);$i++){
	  ?>
<a href="index.php?lmbs=分类输出&music_type=<?php echo $l_rst[$i][name]; ?>" class="a1"><?php echo $l_rst[$i][name]; ?></a>
	  <?php 
	  }
      ?>
	  </span>
	  </td>
	  <td><span class="bannerstyle">
	  <?php
	    if(isset($_SESSION["id"]) and isset($_SESSION["names"])){ ?>
       &nbsp;<a href="index.php?lmbs=上传音乐">上传音乐</a>
	   <?php
        }
      ?></span>
	  </td>
	</tr>
	</table>
  </div>
  <div class="found">
  <!--以下为搜索-->
    <?php
	include("found.php");
	 ?>
   </div>
  </div>
  </div>
</div>
</center>
</body>
</html>
