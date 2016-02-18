<?php
	session_start();   //开启session支持
	header('Content-Type:text/html;charset=gb2312');    //设置页面编码
//	判断cookie是否为空
	if(!empty($_COOKIE['name']) and !is_null($_COOKIE['name'])){
		$_SESSION['name'] = $_COOKIE['name'];    //将cookie保存到session中
//		跳转到main.php页
		header('location:http://localhost/PHPpractice/mr/05/01/main.php');
	}else{
		header('location:http://'.$_SERVER['SERVER_NAME'].dirname($_SERVER['SCRIPT_NAME']).'/login.php');
	}
?>