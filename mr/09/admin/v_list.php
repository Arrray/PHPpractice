<?php
session_start();
include_once("config.php");
include_once("conn/conn.class.php");
$l_sqlstr = "select id,grade,name,father from tb_videolist where grade=2";
$l_rst=$result->getRows($l_sqlstr,$conn);

$smarty->assign("v_list",$l_rst);
$smarty->display("v_list.tpl");
?>