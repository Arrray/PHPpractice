<?php
	session_start();
	header('Content-Type:text/html;charset=gb2312');
	include_once 'conn/conn.php';
	include_once 'inc/admin.php';
	$typepwd =  md5(trim($_GET['typepwd']));
	$tid = $_GET['tid'];
	$sql = "select id from tb_type where id = ".$tid." and typepwd = '".$typepwd."'";
	$num = $conne->getRowsNum($sql);
	if($num == 1){
		$_SESSION['typepwd'] = $typepwd;
		echo '1';
	}else{
		echo '2';
	}
?>