<?php
session_start();
include_once("config.php");
include_once("conn/conn.class.php");
$sql="select * from tb_video where id=".$_GET[id]."";
$rst=$result->getRows($sql,$conn);

$smarty->assign("songinfo",$rst);
if(($_SESSION["names"]<>"") and  ($_SESSION["admin"] == "")){
$smarty->assign("loginyoni","Y");
}

$smarty->display("v_intro.tpl");

?>