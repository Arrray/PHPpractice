<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="css/index.css" type="text/css" rel="stylesheet" />
<script src="js/chk.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>在线音乐</title>
</head>

<body>
<div class="header">
<?php  
include("top.php"); ?>
</div>
<div class="tbody">
  <div class="leftbox">
     <div class="leftboxtop">
     <?php include "login.php";?>
     </div>
	 <div class="leftboxbot">
	   <div class="leftboxbot2">
	     <div class="classes">
		 <?php include "classes.php";?>
		 </div>
	   </div>
	 </div>
  </div>
  <div class="rightbox">
    <div class="rightboxtitle">
	   <div class="rightboxtm">
	      <span class="tightboxinclude">
		  <?php 
		  if($_GET[lmbs]==""){
		     $_GET[lmbs]="音乐广场";
			   echo "音乐广场";
			   }else{ 
			   echo $_GET[lmbs];
			   echo " >> $_GET[music_type]";}
			   ?>
			   </span>
	   </div>
	</div>
	 <div>
	 <table  width="557" border="0" cellspacing="0" cellpadding="0">
	 <tr>
	   <td colspan="3" background="images/首页_06_1.jpg" height="22"></td>
	 </tr>
	 <tr>
	   <td width="25" background="images/首页_06_2.jpg"></td>
	   <td height="370">
	   <div class="listenm">
	   <?php 
	   $lmbs=$_GET["lmbs"];
       switch($lmbs){
       case "音乐广场":
       include("listen_music.php");
       break;
       case "上传音乐":
       include("trans.php");
       break;
       case "搜索":
       include("show.php");
       break;
       case "分类输出":
       include("listen_type_music.php");
       break;
       case "最新音乐":
       include("hot_music.php");
       break;
       case "":
       include("listen_music.php");
       break;
       }
?>     </div>
	   </td>
	   <td width="23" background="images/首页_06_4.jpg"></td>
	 </tr>
	 <tr>
	   <td colspan="3" background="images/首页_06_5.jpg" height="22"></td></tr>
	 </table>
	 </div>
  </div>
  
</div>
<div class="footermain">
<?php include("bottom.php");?>
</div>
</body>

</html>
