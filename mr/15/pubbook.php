<?php
require_once 'header.php';
$pubid = $_GET['pubid'];
$pub = $adminDB->executeSQL("select pubname from tb_pub where id='$pubid'", $connID);

$nowtype = $pub[0]['pubname'].'Ëù³ö°æÍ¼Êé';
$smarty->assign('nowtype', $nowtype);
$smarty->assign('pubid', $pubid);

//
if(!isset($_GET['page']) || $_GET['page']=='')
{
	$page='1';
}
else 
{
	$page = $_GET['page'];
}



$sql = "select tb_bookinfo.id, tb_bookinfo.bookimg, tb_bookinfo.oldprice, tb_bookinfo.newprice, tb_bookinfo.about, tb_bookinfo.browsertime, tb_bookinfo.bookname, tb_bookinfo.writer, tb_bookinfo.pubtime, tb_bookinfo.addtime, tb_bookinfo.ishave, tb_pub.pubname, tb_read.id as readid from tb_bookinfo, tb_pub, tb_read where tb_bookinfo.pubid = tb_pub.id and tb_pub.id='$pubid' group by tb_bookinfo.id order by tb_read.addtime desc";
$bookinfos = $pageDB->pageData($sql, $connID, 10, $page);
$smarty->assign('bookinfos', $bookinfos);

//
$system = $adminDB->executeSQL("select bookimgurl, readurl from tb_system where mark = 1", $connID);
$smarty->assign('system', $system);

$smarty->display('pubbook.phtml');
require_once 'footer.php';