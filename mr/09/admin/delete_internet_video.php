<?php
	session_start();
	include_once("conn/conn.class.php");
	include_once("inc/chec.php");
	$d_sqlstr = "delete from tb_internet_video where tb_internet_id = ".$_GET[id];
	$d_rst = $result->indeup($d_sqlstr,$conn);
	if(!($d_rst == false)){
		echo "<script>alert('ɾ���ɹ�');location='main.php?action=internet';</script>";
		exit();
	}else{
		echo "<script>alert('ɾ��ʧ��');history.go(-1);</script>";
		exit();
		}
?>