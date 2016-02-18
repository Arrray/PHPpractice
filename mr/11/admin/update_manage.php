<?php	session_start();
if($_SESSION['admin']!=""){
	include_once("conn/conn.class.php");
	include_once("config.php");

$sql="select * from tb_manager where id='".$_GET['manage_id']."'";
$array=$result->getRows($sql,$conn);
$smarty->assign("update_manage",$array);

$smarty->display("update_manage.tpl");
}else{
echo "<script>alert('ÇëÕıÈ·µÇÂ¼!'); window.location.href='index.php';</script>";
}
?>