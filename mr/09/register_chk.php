<?php
	session_start();
	include "conn/conn.class.php";
	$c_sqlii= "select * from tb_music_user where tb_music_user = '$_POST[name]'";
	$c_rst=$result->login($c_sqlii,$conn);
	
	if(!($c_rst == false)){
			echo "<script>alert('�û����ظ�������������');history.go(-1);</script>";
			exit();
			}
	
	
	if(isset($_POST[regi])){
$sqlstr = "insert into tb_music_user(tb_music_user,tb_music_pass,tb_music_question,tb_music_answer,tb_music_sex,tb_music_email,tb_music_qq,tb_music_homepage,tb_music_whether) values ('".$_POST[name]."','".$_POST[password]."','".$_POST[question]."','".$_POST[answer]."','".$_POST[sex]."','".$_POST[email]."','".$_POST[qq]."','".$_POST[http]."','1')";
	   $rst_ii=$result->indeup($sqlstr,$conn);
		if($rst_ii==false){
		 echo "<script>alert('��Ӵ���');history.go(-1);</script>";  
		}else{
		echo "<script>alert('��ϲ,�û�ע��ɹ�.�����µ�¼');window.close();</script>";
		}
	}else{
		echo "<script>alert('!@#$$#@!@#,�Ƿ���¼');window.close();</script>";
	}
?>