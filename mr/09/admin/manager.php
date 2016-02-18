<?php
session_start();
include_once("config.php");
include_once("conn/conn.class.php");
$m_sqlstr="select * from tb_manager where id<>1 order by id";

$rst=$result->getRows($m_sqlstr,$conn);
$smarty->assign("managerinfo",$rst);
$smarty->display("manager.tpl");
?>