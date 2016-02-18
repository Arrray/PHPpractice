<?php
require_once 'admin-header.php';
//
if (! isset($_GET['page']) || $_GET['page'] == '') {
    $page = '1';
} else {
    $page = $_GET['page'];
}
if (isset($_GET['f']) && $_GET['f'] == 'del') {
    if (! $adminDB->executeSQL("delete from tb_read where id='" . $_GET['id'] . "'", $connID)) {
        echo "<script>alert('ÊÔ¶ÁÉ¾³ýÊ§°Ü£¡');</script>";
    }
}
//
$btypes = $adminDB->executeSQL("select id, typename from tb_bigtype order by addtime", $connID);
for ($i = 0; $i < count($btypes); $i ++) {
    $arrayBtypeOption[$btypes[$i]['id']] = $btypes[$i]['typename'];
}
$smarty->assign('arrayBtypeOption', $arrayBtypeOption);
//
$isShow = 'F';
if ((isset($_GET['f']) && $_GET['f'] == 'edit') || (isset($_POST['f']) && $_POST['f'] == 'edit')) {
    if (isset($_POST['f']) && $_POST['f'] == 'edit') {
	//echo "update tb_read set bookinfoid='" . $_POST['bookid'] . "', filename='" . $_POST['filename'] . "'  where id='" . $_POST['id'] . "'";
        if (! $adminDB->executeSQL("update tb_read set  filename='" . $_POST['filename'] . "'  where id='" . $_POST['id'] . "'", $connID)) {
            echo "<script>alert('ÊÔ¶Á¸ü¸ÄÊ§°Ü£¡');</script>";
        } else {
            echo "<script>alert('ÊÔ¶Á¸ü¸Ä³É¹¦£¡');</script>";
        }
    }
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    } else {
        $id = $_POST['id'];
    }
    $isShow = 'T';
    $read = $adminDB->executeSQL("select tb_read.id, tb_read.filename, tb_bookinfo.bookname, tb_read.addtime from tb_read, tb_bookinfo where tb_read.bookinfoid = tb_bookinfo.id and tb_read.id='" . $id . "'", $connID);
    $smarty->assign('read', $read);
}
$smarty->assign('isShow', $isShow);
//
$reads = $pageDB->pageData("select tb_read.id, tb_bookinfo.bookname, tb_read.filename, tb_read.addtime from tb_read, tb_bookinfo where tb_read.bookinfoid = tb_bookinfo.id order by tb_read.addtime desc", $connID, 20, $page);
$smarty->assign('reads', $reads);
$smarty->display('admin-listread.phtml');
require_once 'admin-footer.php';



