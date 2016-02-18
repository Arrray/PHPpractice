<?php
include_once "conn/conn.php";
$sql = "select * from tb_member where name='".$_GET['name']."'";
$num = $conne->getRowsNum($sql);
if($num == 1){
	echo '2';
}else if($num == 0){
	echo '1';
}else{
	echo $conne->msg_error();
}
?>
