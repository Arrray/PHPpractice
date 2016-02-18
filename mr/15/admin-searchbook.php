<?php
require_once 'admin-header.php';
//
if (isset($_GET['f']) && $_GET['f'] == 'del') {
    if (! $adminDB->executeSQL("delete from tb_bookinfo where id='" . $_GET['id'] . "'", $connID)) {
        echo "<script>alert('Õº È–≈œ¢…æ≥˝ ß∞‹£°');</script>";
    }
}
$isFind = 'F';
if (isset($_POST['bookname']) && $_POST['bookname'] != '' || isset($_GET['bookname']) && $_GET['bookname'] != '') {
    if (isset($_POST['bookname'])) {
        $bookname = $_POST['bookname'];
    } else {
        $bookname = $_GET['bookname'];
    }
    $books = $adminDB->executeSQL("select tb_bookinfo.id , tb_bookinfo.oldprice, tb_bookinfo.newprice, tb_bookinfo.bookname, tb_bookinfo.writer,  tb_pub.pubname from tb_bookinfo, tb_pub where tb_bookinfo.pubid = tb_pub.id and bookname like '%" . $bookname . "%'  order by tb_bookinfo.addtime desc", $connID);
    $smarty->assign('books', $books);
    $isFind = 'T';
    $smarty->assign('bookname', $bookname);
}
$smarty->assign('isFind', $isFind);
$smarty->display('admin-searchbook.phtml');
require_once 'admin-footer.php';



