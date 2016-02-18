<?php
	session_start();
	include "conn/conn.class.php";
	if((trim($_POST[name]) == "") or (trim($_POST[password]) == "")){
		echo "<script>alert('帐号或密码错误');history.go(-1);</script>";
		exit();
	}
	$sqlstr = "select * from tb_music_user where tb_music_user = '".$_POST[name]."' and tb_music_pass = '".$_POST[password]."'";
	$u_rst = $result->login($sqlstr,$conn);
	$u_rsti=$result->getRows($sqlstr,$conn);
	
	
	if($u_rst==true){
	//if(!$u_rst->EOF)
		if($u_rsti[0][tb_music_whether] == "0"){
			echo "<script>alert('该帐号被冻结!');history.go(-1);</script>";
		}else{
			$_SESSION["names"]=$u_rsti[0][tb_music_user];
			$_SESSION["id"]=$u_rsti[0][tb_music_id];
			$_SESSION["countes"]=$u_rsti[0][tb_music_countes];
			echo "<script>alert('用户登录成功!');location='index.php';</script>";
		}
		
	}else{
		echo "<script>alert('用户名或密码错误，请重新登录。');history.go(-1);</script>";
	}
	
?>