<?php
	session_start();
	include "conn/conn.class.php";
	if((trim($_POST[name]) == "") or (trim($_POST[password]) == "")){
		echo "<script>alert('�ʺŻ��������');history.go(-1);</script>";
		exit();
	}
	$sqlstr = "select * from tb_music_user where tb_music_user = '".$_POST[name]."' and tb_music_pass = '".$_POST[password]."'";
	$u_rst = $result->login($sqlstr,$conn);
	$u_rsti=$result->getRows($sqlstr,$conn);
	
	
	if($u_rst==true){
	//if(!$u_rst->EOF)
		if($u_rsti[0][tb_music_whether] == "0"){
			echo "<script>alert('���ʺű�����!');history.go(-1);</script>";
		}else{
			$_SESSION["names"]=$u_rsti[0][tb_music_user];
			$_SESSION["id"]=$u_rsti[0][tb_music_id];
			$_SESSION["countes"]=$u_rsti[0][tb_music_countes];
			echo "<script>alert('�û���¼�ɹ�!');location='index.php';</script>";
		}
		
	}else{
		echo "<script>alert('�û�����������������µ�¼��');history.go(-1);</script>";
	}
	
?>