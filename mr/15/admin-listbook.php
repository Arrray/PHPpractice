<?php
require_once 'admin-header.php';
//
if (! isset($_GET['page']) || $_GET['page'] == '') {
    $page = '1';
} else {
    $page = $_GET['page'];
}
if (isset($_GET['f']) && $_GET['f'] == 'del') {
    if (! $adminDB->executeSQL("delete from tb_bookinfo where id='" . $_GET['id'] . "'", $connID)) {
        echo "<script>alert('Õº È–≈œ¢…æ≥˝ ß∞‹£°');</script>";
    }
}
$sql = "select tb_bookinfo.id , tb_bookinfo.oldprice, tb_bookinfo.newprice, tb_bookinfo.bookname, tb_bookinfo.writer,  tb_pub.pubname from tb_bookinfo, tb_pub where tb_bookinfo.pubid = tb_pub.id  order by tb_bookinfo.addtime desc";
$bookinfos = $pageDB->pageData($sql, $connID, 20, $page);
$smarty->assign('bookinfos', $bookinfos);
$smarty->display('admin-listbook.phtml');
require_once 'admin-footer.php';



