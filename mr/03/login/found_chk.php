<?php
	header('Content-Type:text/html;charset=gb2312');
	include_once 'conn/conn.php';
	$act = $_GET['act'];
	$reback = '0';
	if($act == 'sel'){
		$name = $_GET['foundname'];
		$question = $_GET['question'];
		$answer = $_GET['answer'];
		$sql = "select * from tb_member where name = '".$name."' and question = '".$question."' and answer = '".$answer."'";
		$num = $conne->getRowsNum($sql);
	}else if($act == 'up'){
		$name = $_GET['foundname'];
		$pwd = $_GET['pwd'];
		$sql = "update tb_member set password = '".md5($pwd)."' where name = '".$name."'";
		$num = $conne->uidRst($sql);
	}
	if($num != ''){
		$reback = '1';
	}else{
		$reback = $sql;
	}
	echo $reback;
?>
