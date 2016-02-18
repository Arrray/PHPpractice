<?php
	session_start();
	header('Content-Type:text/html;charset=gb2312');
	include_once 'conn/conn.php';
	$reback = '0';
	$name = $_GET['name'];
	$pwd = $_GET['pwd'];
	if(!empty($name) and !empty($pwd)){
		$sql = "select name from tb_member where name = '".$name."'";
		$num = $conne->getRowsNum($sql);
		$conne->close_rst();
		if($num == '' or $num == 0){
			$reback = '2';
		}else{
			$sql .= " and password = '".md5($pwd)."'";
			$num = $conne->getRowsNum($sql);
			if($num == 0 or $num == ''){
				$reback = 2;
			}else{
				$_SESSION['name'] = $name;
				$reback = '1';
			}
		}
	}
	echo $reback;
?>