<?php
session_start();
include_once("config.php");
if($_SESSION["names"]==true){
$smarty->assign("username",$_SESSION["names"]);
$smarty->display("insert_internet_music.tpl");
}else{
echo "<script>alert('ÇëÄúÕıÈ·µÇÂ¼£¬Ğ»Ğ»'); window.location.href='index.php';</script>";
}
?>