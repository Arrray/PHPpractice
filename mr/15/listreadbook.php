<?php
require_once 'header.php';
$nowtype = 'Í¼ÊéÊÔ¶ÁÏÂÔØ';
$smarty->assign('nowtype', $nowtype);
//
$system = $adminDB->executeSQL("select bookimgurl, readurl from tb_system where mark = 1", $connID);
$smarty->assign('system', $system);
//
if (! isset($_GET['page']) || $_GET['page'] == '') {
    $page = '1';
} else {
    $page = $_GET['page'];
}
$sql = "select tb_bookinfo.id, tb_bookinfo.bookimg, tb_bookinfo.oldprice, tb_bookinfo.newprice, tb_bookinfo.about, tb_bookinfo.browsertime, tb_bookinfo.bookname, tb_bookinfo.writer, tb_bookinfo.pubtime, tb_bookinfo.addtime, tb_bookinfo.ishave, tb_pub.pubname, tb_read.id as readid, tb_read.filename from tb_bookinfo, tb_pub, tb_read where tb_bookinfo.pubid = tb_pub.id and tb_read.bookinfoid = tb_bookinfo.id order by tb_read.addtime desc";
$bookinfos = $pageDB->pageData($sql, $connID, 10, $page);
$smarty->assign('bookinfos', $bookinfos);
$smarty->display('listreadbook.phtml');
require_once 'footer.php';