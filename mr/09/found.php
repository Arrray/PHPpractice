<?php
session_start();
include_once("config.php");
include_once("conn/conn.class.php");

$sql="select * from tb_videolist";
$rst=$result->getRows($sql,$conn);
$smarty->assign("selclass",$rst);

$smarty->display("found.tpl");
?>
