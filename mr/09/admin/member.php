<?php
session_start();
include_once("conn/conn.class.php");
include_once("config.php");
$v_sqlstr="select * from tb_music_user";
$rst=$result->getRows($v_sqlstr,$conn);
$smarty->assign("memberinfo",$rst);
$smarty->display("member.tpl");
?>