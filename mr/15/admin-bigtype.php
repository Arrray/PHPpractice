<?php
require_once 'admin-header.php';
if (isset($_POST['typename']) && $_POST['typename'] != '') {
    if (! $adminDB->executeSQL("select id, typename from tb_bigtype where typename='" . trim($_POST['typename']) . "'", $connID)) {
        if (! $adminDB->executeSQL("insert into tb_bigtype(typename, addtime) values('" . trim($_POST['typename']) . "', '" . date('Y-m-d H:i:s') . "')", $connID)) {
            echo "<scriipt>alert('类别添加失败！');</script>";
        } else {
            echo "<script>alert('类别添加成功！');</script>";
        }
    } else {
        echo "<script>alert('该类别已经添加！');</script>";
    }
}
$smarty->display('admin-bigtype.phtml');
require_once 'admin-footer.php';



