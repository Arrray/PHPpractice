<?php
	session_start();
	include_once("conn/conn.class.php");
	$a_sqlstr = "select * from tb_manager where name= '$_POST[manager]'";
	$a_rsti= $result->singleRow($a_sqlstr,$conn);
	$a_rst = $result->login($a_sqlstr,$conn);
	if(!$a_rst==false){
		if($a_rsti[password] != $_POST[pwd]){
			echo "<script>alert('用户名或密码输入错误');history.go(-1);</script>";
			exit();
		}
		if($a_rsti[whether] == "0"){
			echo "<script>alert('您所登录的用户被冻结，如果有疑问请拨打电话0431-1234****咨询详细信息');history.go(-1)</script>";
			exit();
		}
		$_SESSION["admin"]=$a_rsti[name];
		$_SESSION["m_id"]=$a_rsti[id];
		echo "<script>alert('登录成功');location='main.php';</script>";
	}
	else{
		echo "<script>alert('用户名或密码输入错误');history.go(-1);</script>";
	}
?>