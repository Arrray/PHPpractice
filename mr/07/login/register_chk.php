<?php
	session_start();
	header('Content-Type:text/html;charset=gb2312');
	include_once 'conn/conn.php';
	$reback = '0';
	$sql = "insert into tb_admin(name,password,question,answer,email) values('".trim($_GET['name'])."','".md5(trim($_GET['pwd']))."','".$_GET['question']."','".$_GET['answer']."','".$_GET['email']."')";
	$num = $conne->uidRst($sql);
	if($num == 1){
		$_SESSION['name'] = $_GET['name'];
		$reback = '1';
	}else{
		$reback = $conne->msg_error();
	}
	echo $reback;
?>