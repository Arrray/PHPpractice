<?php
	session_start();
	include "conn/conn.class.php";
		$password = $_POST["password"];
		$sex = $_POST["sex"];
		$email = $_POST["email"];
		$qq = $_POST["qq"];
		$http = $_POST["http"];
		$up_sqlstr = "update tb_music_user set tb_music_pass = '$password',tb_music_sex='$sex',tb_music_email='$email',tb_music_qq='$qq',tb_music_homepage='$http' where tb_music_id = ".$_POST[id];
	$rst_i=$result->indeup($up_sqlstr,$conn);
	if($rst_i==false){
	     echo "<script>alert('修改错误');history.go(-1);</script>";
	}
	else{

$sqlstr = "select * from tb_music_user where tb_music_id = ".$_POST[id]."";
	$u_rst = $result->getRows($sqlstr,$conn);
	$c_rst = $result->login($sqlstr,$conn);
	if(!$c_rst!=false){
			$_SESSION["names"]=$u_rst[0][tb_music_user];
			$_SESSION["id"]=$u_rst[0][tb_music_id];
			$_SESSION["countes"]=$u_rst[0][tb_music_counts];
			}
		echo "<script>alert('信息修改成功!');window.close();</script>";
	}
	
?>