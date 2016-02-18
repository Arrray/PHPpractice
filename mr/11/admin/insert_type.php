<?php	session_start();
if($_SESSION['admin']!=""){
	include_once("config.php");

$smarty->display("insert_type.tpl");

}else{
echo "<script>alert('ÇëÕıÈ·µÇÂ¼!'); window.location.href='index.php';</script>";
}
?>