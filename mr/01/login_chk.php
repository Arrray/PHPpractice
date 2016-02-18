<?php
session_start();
header('Content-Type:text/html;charset=gb2312');
include_once 'conn/conn.php';
$name = addslashes($_GET['name']);
$pwd = $_GET['pwd'];
if(!empty($name) and !empty($pwd)){
	$sql = "select name,count,active from tb_member where name = '".$name."'";
	$active = $conne->getFields($sql,2);
	$count = $conne->getFields($sql,1);
	$conne->close_rst();
	if($active == ''){
		if(is_null($_COOKIE['count']) or $_COOKIE['count'] == 0){
			setcookie('count',1);
		}else{
			setcookie('count',$_COOKIE['count']+1);
		}
		$reback = 4;
	}else if($active == 0){
		$reback = '0';
	}else if($count >= 3){
		$reback = '3';
	}else{
		$sql .= " and password = '".md5($pwd)."'";
		$num = $conne->getRowsNum($sql);
		if($num == 0 or $num == ''){
			$num = $conne->uidRst("update tb_member set count = ".($count+1)." where name = '".$name."'");
			$reback = ($count+1);
		}else{
			if($count != 0){
				$num = $conne->uidRst("update tb_member set count = 0 where name = '".$name."'");
			}
			if(isset($_COOKIE['count']) and $_COOKIE['count'] != 0){
				setcookie('count',0);
			}
			setcookie('name',$name,time()+60*10);
			$_SESSION['name'] = $name;
			$reback = '-1';
		}
	}
}
echo $reback;
?>