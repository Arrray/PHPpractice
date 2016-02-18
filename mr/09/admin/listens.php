<?php
session_start();
include_once("config.php");
include_once("conn/conn.class.php");
$sqlstr="select name from tb_video where address='".$_GET[id]."'";
$rst=$result->getRows($sqlstr,$conn);
$smarty->assign("musicinfo",$rst[0][name]);
$smarty->display("listens.tpl");
?>