<?php
//E-mail激活技术
session_start();
header('Content-Type:text/html;charset=gb2312');
include_once("conn/conn.php");
if (!empty($_GET['name']) && !is_null($_GET['name'])){				//激活注册用户
	$num=$conne->getRowsNum("select * from tb_member where name='".$_GET['name']."' and password = '".$_GET['pwd']."'");
	if ($num>0){
		$upnum=$conne->uidRst("update tb_member set active = 1 where name='".$_GET['name']."' and password = '".$_GET['pwd']."'");
		if($upnum > 0){
			$_SESSION['name'] = $_GET['name'];
			echo "<script>alert('用户激活成功！');window.location.href='main.php';</script>";
		}else{
			echo "<script>alert('您已经激活！');window.location.href='main.php';</script>";
		}
		
	}else{
		echo "<script>alert('用户激活失败！');window.location.href='register.php';</script>";
	}
}
?>