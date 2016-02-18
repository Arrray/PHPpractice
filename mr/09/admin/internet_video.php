<?php
session_start();
include_once("config.php");
include_once("conn/conn.class.php");
$sqlstr = "select * from tb_internet_video";
$rst = $result->getRows($sqlstr,$conn);
$smarty->assign("inter_video",$rst);
$smarty->display("internet_video.tpl");
?>