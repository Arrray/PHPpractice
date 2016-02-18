<?php
require("system/system.inc.php");  						//包含配置文件
$fst = $_GET['fst'];
$snd = $_GET['snd'];
$uid = $_GET['uid'];
$smarty->assign('title','收银台');
$smarty->assign('fst',$fst);
$smarty->assign('snd',$snd);
$smarty->assign('uid',$uid);
$smarty->display('settle.tpl');
?>