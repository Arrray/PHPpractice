<?php
	session_start();   //开启session支持
	header('Content-Type:text/html;charset=gb2312');    //设置页面编码
//	判断cookie是否为空
	if(!empty($_COOKIE['name']) and !is_null($_COOKIE['name'])){
		$_SESSION['name'] = $_COOKIE['name'];    //将cookie保存到session中
//		跳转到main.php页
		header('location:http:63342/PHPpractice/mr/01/01/main.php');
	}else{    //cookie为空。说明没有登录
//		跳转到login.php页
		header('location:http:63342/PHPpractice/mr/01/01/login.php');
	}
?>