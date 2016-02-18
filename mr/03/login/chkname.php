<?php
session_start();
include_once "conn/conn.php";
$reback = '0';
$sql = "select * from tb_member where name='".$_GET['name']."'";
$num = $conne->getRowsNum($sql);
if($num == 1){
	$reback = '2';
}else if($num == 0){
	$reback = '1';
}else{
	$reback = $conne->msg_error();
}
echo $reback;
?>
