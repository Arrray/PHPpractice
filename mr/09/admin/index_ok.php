<?php
	session_start();
	include_once("conn/conn.class.php");
	$a_sqlstr = "select * from tb_manager where name= '$_POST[manager]'";
	$a_rsti= $result->singleRow($a_sqlstr,$conn);
	$a_rst = $result->login($a_sqlstr,$conn);
	if(!$a_rst==false){
		if($a_rsti[password] != $_POST[pwd]){
			echo "<script>alert('�û����������������');history.go(-1);</script>";
			exit();
		}
		if($a_rsti[whether] == "0"){
			echo "<script>alert('������¼���û������ᣬ����������벦��绰0431-1234****��ѯ��ϸ��Ϣ');history.go(-1)</script>";
			exit();
		}
		$_SESSION["admin"]=$a_rsti[name];
		$_SESSION["m_id"]=$a_rsti[id];
		echo "<script>alert('��¼�ɹ�');location='main.php';</script>";
	}
	else{
		echo "<script>alert('�û����������������');history.go(-1);</script>";
	}
?>