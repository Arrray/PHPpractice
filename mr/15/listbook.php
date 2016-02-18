<?php
require_once 'header.php';
$stid = $_GET['stid'];
$smarty->assign('stid', $stid);
//
if (! isset($_GET['pltype']) || $_GET['pltype'] == '') {
    $pltype = '1';
} else {
    $pltype = $_GET['pltype'];
}
$smarty->assign('pltype', $pltype);
//
if (! isset($_GET['cctype']) || $_GET['cctype'] == '') {
    $cctype = '1';
} else {
    $cctype = $_GET['cctype'];
}
$smarty->assign('cctype', $cctype);
//
if (! isset($_GET['page']) || $_GET['page'] == '') {
    $page = '1';
} else {
    $page = $_GET['page'];
}
$smarty->assign('page', $page);
//
$smalltype = $adminDB->executeSQL("select id, bigtypeid, typename from tb_smalltype where id='$stid'", $connID);
$smarty->assign('smalltype', $smalltype);
$bigtype = $adminDB->executeSQL("select id, typename from tb_bigtype where id='" . $smalltype[0]['bigtypeid'] . "'", $connID);
$smarty->assign('bigtype', $bigtype);
$smalltypes = $adminDB->executeSQL("select id, typename from tb_smalltype where bigtypeid='" . $bigtype[0]['id'] . "'", $connID);
$smarty->assign('smalltypes', $smalltypes);
//
if ($cctype == '1') {
    $where = " and smalltypeid = '" . $stid . "'";
} elseif ($cctype == '2') {
    $where = " and bookcc = 1 and smalltypeid = '" . $stid . "'";
} elseif ($cctype == '3') {
    $where = " and bookcc = 2  and smalltypeid = '" . $stid . "'";
} elseif ($cctype == '4') {
    $where = " and bookcc = 3  and smalltypeid = '" . $stid . "'";
}
//
if ($pltype == '1') {
    $order = "addtime desc";
} elseif ($pltype == '2') {
    $order = "pubtime desc";
} elseif ($pltype == '3') {
    $order = "newprice asc";
} elseif ($pltype == '4') {
    $order = "browsertime desc";
}
//
$sql = "select tb_bookinfo.id, tb_bookinfo.bookimg, tb_bookinfo.oldprice, tb_bookinfo.newprice, tb_bookinfo.about, tb_bookinfo.browsertime, tb_bookinfo.bookname, tb_bookinfo.writer, tb_bookinfo.pubtime, tb_bookinfo.addtime, tb_bookinfo.ishave, tb_pub.pubname from tb_bookinfo, tb_pub where tb_bookinfo.pubid = tb_pub.id " . $where . " order by " . $order . "";
$bookinfos = $pageDB->pageData($sql, $connID, 10, $page);
$smarty->assign('bookinfos', $bookinfos);
//print_r($bookinfos);
//
$system = $adminDB->executeSQL("select bookimgurl, readurl from tb_system where mark = 1", $connID);
$smarty->assign('system', $system);
$smarty->display('listbook.phtml');
require_once 'footer.php';