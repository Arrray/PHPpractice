<?php
	session_start();
	include_once 'conn/conn.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link type="text/css" rel="stylesheet" href="css/style.css" />
<script type="text/javascript" src="js/choose.js"></script>
<script type="text/javascript" src="js/index.js"></script>
<style type="text/css">
.wrapper{ width:900px;}
.logo{ width:900px;}
body{ text-align:center;}
.vip1{font:"新宋体"; color:#FF0000;}
.vip2{font:"新宋体"; color:#0033FF;}
.vip3{font:"新宋体"; color:#00FF00;}
.login{ margin:2px 0 5px 10px; width:200px; border:1px solid #00CCFF; float:left;}
.loginmain{margin:0px 5px 5px 5px;}
.loginsat{font-size:14px; color:#9966FF;}
.rightbox{float:left; width:650px; height:152px;margin:2px 5px 5px 5px; display:inline; border:1px solid #00CCFF;}
.rightmid{ margin:10px 5px 5px 10px;}
.rightbox2{float:left; width:650px; margin:0px 5px 5px 5px; display:inline; background: #FFCCFF;line-height:22px; height:48px;}
h5{border:1px solid #9999FF; width:60px; height:22px; background:#FFCC33; font:"宋体"; font-size:14px; line-height:22px;}
.middlebox{ float:left; width:640px; height:280px; margin:0 5px 5px 10px;}
.button,#downbtn{ line-height:22px; border:1px solid #CCCCCC; background: #6699FF; width:50px; height:24px;}
.leftbox2{ clear:both;margin:5px 0 5px 10px;  float:left; height:200px; width:200px;}
.midbox2{margin:10px 0 10px 5px;}
h1{border-bottom:1px solid #00ffcc; background:#9999FF; font-size:16px; line-height:22px;}
.top{ margin:20px 0 20px 0;}
.bottom{ width:900px; height:60px; background:#F0F0F0;}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>网络U盘系统升级版</title>
</head>

<body>
<div class="logo"><img src="image/logo.bmp" /></div>
<div class="wrapper">
<div>
<!**************************************!>
<div class="login">
<div class="loginmain">
<?php
	if(empty($_SESSION['name']) or is_null($_SESSION['name'])){
		include_once 'login/login.php';
	}else{
?>
<span>欢迎光临：<?php echo $_SESSION['name']; ?></span>
<center>
<p class="">

<a href="?act=up">上传文件</a> |<a href="?act=down"> 下载文件</a>
<p>您是
<?php
$rightsql = "select * from tb_member where name = '".$_SESSION['name']."'";

	$rightarr = $conne->getRowsRst($rightsql);
	$conne->close_rst();
	if($rightarr['right']==2)
	{
	echo "<span class=\"vip1\">[高级用户]</span>";
	}
	else if($rightarr['right']==1)
	    {
	echo "<span class=\"vip2\">[会员用户]</span>";
	     }
	     else
		 {
		 echo "<span class=\"vip3\">[普通用户]</span>";
		 }
	
 ?>
<p>您剩余空间：
<?php 
if($rightarr['right']==2)
	{ 
	if(5000000-$rightarr['content']<=1000)
	    {
	      echo "已满！";
	     }
	else
	     {
	     
		   $formatted=(5000000-$rightarr['content'])/1000000;  
		   $forstr=sprintf("%-01.2f",$formatted);
		   echo $forstr."MB";
		   echo "<p>剩余率:".sprintf("%-01.2f",((1-$rightarr['content']/5000000)*100))."%</p>";
	      }
	}
	else if($rightarr['right']==1)
	    {
	        if(3000000-$rightarr['content']<=1000)
	           {
	             echo "已满！";
	            }
	         else
	             {
				 $formatted=(3000000-$rightarr['content'])/1000000;  
		   $forstr=sprintf("%-01.2f",$formatted);
		   echo $forstr."MB";
		   echo "<p>剩余率:".sprintf("%-01.2f",((1-$rightarr['content']/3000000)*100))."%</p>";
	             }
	     }
	     else
		 {
		        if(2000000-$rightarr['content']<=1000)
	               { 
	                 echo "已满！";
	                }
	            else
	                {
	                 
					 $formatted=(2000000-$rightarr['content'])/1000000;  
		   $forstr=sprintf("%-01.2f",$formatted);
		   echo $forstr."MB";
		   echo "<p>剩余率：".sprintf("%-01.2f",((1-$rightarr['content']/2000000)*100))."%</p>";
	                 }
		 }
?>
</center>
<p>
<center>
<h5><a href="logout.php">重新登录</a></h5>
</center>
</p>
<?php	
	}
?>
</div>
</div>
<div class="rightbox">
<center>
  <div class="top"><img src="image/top.gif" width="630" height="109" /></div>
</center>
</div>
<div class="rightbox2">
<div class="rightmid">
<!***************************************!>
下载码：<input id="chkdown" type="text" />&nbsp;
<button  id="downbtn" onclick="chkdown()" >下载</button>&nbsp;&nbsp;
&nbsp;搜索：<input id="fdfile" type="text"  />&nbsp;<select id="foundtype">
<!***************************************!>
<?php
	$typesql = "select id,genrename from tb_uptype";
	$typearr = $conne->getRowsArray($typesql);
	$conne->close_rst();
	foreach($typearr as $value){
?>
		<option value="<?php echo $value['genrename']; ?>"><?php echo $value['genrename']; ?></option>
<?php
	}
?>
</select>


<!***************************************!>
<button  class="button"id="foundbtn" onclick="chkdownf()">搜索</button>
<!--文件名：<input id="fdfile" type="text" />&nbsp;!-->
<!--<button id="fdfile" onclick="chkdownf()" >查找</button></p>!-->
<!***************************************!>
</div>
</div>
<div class="leftbox2">
<table cellpadding="0" cellspacing="0" border="0">
  <tr><td height="20"></td></tr>
  <tr><td height="60"><img src="image/fbook.gif" width="189" height="46" /></td>
  </tr>
   <tr><td height="60"><img src="image/mingrisoft.gif" width="189" height="46" /></td>
   </tr>
    <tr>
      <td height="60"><img src="image/mrbbs.gif" width="189" height="45" /></td>
    </tr>
</table>
</div>
<div class="middlebox">
<div class="midbox2">
<?php
	$act = $_GET['act'];                    //获取URL参数调取相应的PHP文件
	switch($act){
		case 'up':
			include 'upfile.php';
			break;
		case 'upfile':
			include 'upfile_chk.php';
			break;
		case 'down':
			include 'downfile.php';
			break;
		case 'downcode':
			include 'downcode.php';
			break;
		case 'queryfile':
			include 'queryfile.php';
			break;
		default:
			include 'pub.php';
			break;
	}
?>
</div>
</div>
</div>
<!***************************************!>

</div>
<div class="bottom"><?php include("bottom.php"); ?></div>
</body>
</html>