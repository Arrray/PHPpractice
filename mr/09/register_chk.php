<?php
	session_start();
	include "conn/conn.class.php";
	$c_sqlii= "select * from tb_music_user where tb_music_user = '$_POST[name]'";
	$c_rst=$result->login($c_sqlii,$conn);
	
	if(!($c_rst == false)){
			echo "<script>alert('用户名重复，请重新输入');history.go(-1);</script>";
			exit();
			}
	
	
	if(isset($_POST[regi])){
$sqlstr = "insert into tb_music_user(tb_music_user,tb_music_pass,tb_music_question,tb_music_answer,tb_music_sex,tb_music_email,tb_music_qq,tb_music_homepage,tb_music_whether) values ('".$_POST[name]."','".$_POST[password]."','".$_POST[question]."','".$_POST[answer]."','".$_POST[sex]."','".$_POST[email]."','".$_POST[qq]."','".$_POST[http]."','1')";
	   $rst_ii=$result->indeup($sqlstr,$conn);
		if($rst_ii==false){
		 echo "<script>alert('添加错误');history.go(-1);</script>";  
		}else{
		echo "<script>alert('恭喜,用户注册成功.请重新登录');window.close();</script>";
		}
	}else{
		echo "<script>alert('!@#$$#@!@#,非法登录');window.close();</script>";
	}
?>