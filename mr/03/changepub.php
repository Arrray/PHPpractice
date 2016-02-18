<?php
	session_start();
	header('Content-Type:text/html;charset=gb2312');
	include 'conn/conn.php';
	$url = $_GET['url'];
	$id = $_GET['id'];
	$value = ($_GET['num']+1) % 2;
	$upsql = "update tb_upfile set ispub = ".$value." where id = ".$id;
	$nm = $conne->uidRst($upsql);
	if($nm == 1){
		echo "<script>location='".$url."';</script>";
	}else{
		echo $num;
	}
?>