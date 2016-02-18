<?php
header("Content-type:text/html; charset=gb2312");
	include "conn/conn.class.php";
	if(!isset($_GET["name"]) or empty($_GET["name"])){
		echo "<font color='red'>非法用户名!</font>";
		exit();
	}
	$c_sql = "select * from tb_video_user where tb_video_user ='".$_GET['name']."'";
	$c_rst=$result->getRows($c_sql,$conn);
	$c_rstnum=$result->login($c_sql,$conn);
	
		if($c_rstnum!=0){
			echo "<font color='red'>用户名被占用!</font>";
			exit();
		}else{
			echo "<font color='green'>恭喜您：该用户名可用!</font>";
			exit();
		}
?>