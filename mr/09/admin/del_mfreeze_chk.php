<?php
	session_start();
	include_once("conn/conn.class.php");
	include_once("inc/chec.php");
	$d_sqlstr = "delete from tb_manager where id = ".$_GET[id];
	$d_rst= $result->indeup($d_sqlstr,$conn);
	if(!($d_rst)==false)
	//if(!($d_rst = $conn->execute($d_sqlstr)) == false)
		echo "<script>alert('ɾ���ɹ�');location='main.php?action=manager';</script>";
	else
		echo "<script>alert('ɾ��ʧ��');history.go(-1);</script>";
?>