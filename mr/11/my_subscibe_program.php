<?php session_start();
include("config.php");
include_once("top.php");
$smarty->assign("video_user",$_GET["video_user"]);
$smarty->assign("url",$_GET["url"]);
$smarty->display("my_subscibe_program.tpl");
?>