<?php
session_start();
include_once("config.php");
if($_SESSION["names"]==true){
$smarty->assign("username",$_SESSION["names"]);
$smarty->display("insert_internet_music.tpl");
}else{
echo "<script>alert('������ȷ��¼��лл'); window.location.href='index.php';</script>";
}
?>