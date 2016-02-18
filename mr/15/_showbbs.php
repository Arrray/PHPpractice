<?php
require_once 'lzh.inc.php';

$bbs = $adminDB->executeSQL("select * from tb_bbs where id='" . $_GET['id']."'", $connID);

$replys = $adminDB->executeSQL("select * from tb_reply where bbs_id = '" . $_GET['id']."'", $connID);


$smarty->assign('bbs', $bbs);
$smarty->assign('replys', $replys);

$smarty->display('showbbs.phtml');
$makeStaticPage->pageEnd();

