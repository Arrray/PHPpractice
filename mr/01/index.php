<?php
	session_start();
	header('Content-Type:text/html;charset=gb2312');
	if(!empty($_COOKIE['name']) and !is_null($_COOKIE['name'])){
		$_SESSION['name'] = $_COOKIE['name'];
		header('location:http://'.$_SERVER['SERVER_NAME'].dirname($_SERVER['SCRIPT_NAME']).'/main.php');
	}else{
		header('location:http://'.$_SERVER['SERVER_NAME'].dirname($_SERVER['SCRIPT_NAME']).'/login.php');
	}
?>