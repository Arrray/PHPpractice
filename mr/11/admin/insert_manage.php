<?php	session_start();
if($_SESSION['admin']!=""){
	include_once("conn/conn.class.php");
	include_once("config.php");
$smarty->display("insert_manage.tpl");



}else{
echo "<script>alert('ÇëÕıÈ·µÇÂ¼!'); window.location.href='index.php';</script>";
}
?>