<?php
require_once 'header.php';
if ($_GET['t'] == 'new') {
    $nowtype = '�����Ƽ�';
    $andwhere = "isnew = 1";
} elseif ($_GET['t'] == 'sepprice') {
    $nowtype = '�ؼ�ͼ��';
    $andwhere = "issepprice = 1";
} elseif ($_GET['t'] == 'hotsell') {
    $nowtype = '����ͼ��';
    $andwhere = "ishotsell = 1";
} elseif ($_GET['t'] == 'term') {
    $nowtype = '����';
    $andwhere = "isterm = 1";
} elseif ($_GET['t'] == 'mrbook') {
    $nowtype = '����ͼ���Ƽ�';
    $andwhere = "ismrbooktj = 1";
}
$smarty->assign('gt', $_GET['t']);
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
$sql = "select tb_bookinfo.id, tb_bookinfo.bookimg, tb_bookinfo.about, tb_bookinfo.browsertime, tb_bookinfo.oldprice, tb_bookinfo.newprice, tb_bookinfo.bookname, tb_bookinfo.writer, tb_bookinfo.pubtime, tb_bookinfo.addtime, tb_bookinfo.ishave, tb_pub.pubname from tb_bookinfo, tb_pub where tb_bookinfo.pubid = tb_pub.id and " . $andwhere . " order by tb_bookinfo.addtime desc";
$bookinfos = $pageDB->pageData($sql, $connID, 10, $page);
$smarty->assign('bookinfos', $bookinfos);
$smarty->display('listsepbook.phtml');
require_once 'footer.php';