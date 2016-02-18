<?php	
if($_SESSION["admin"]!=""){
	include_once("config.php");
include_once("conn/conn.class.php");
$sql="select * from tb_manager";
$array=$result->getRows($sql,$conn);
$smarty->assign("manager",$array);


$smarty->display("manage_admin.tpl");
}else{
echo "<script>alert('ÇëÕıÈ·µÇÂ¼!'); window.location.href='index.php';</script>";
}
?>