<?php
require_once 'admin-header.php';
if (isset($_POST['typename']) && $_POST['typename'] != '') {
    if (! $adminDB->executeSQL("select id, typename from tb_bigtype where typename='" . trim($_POST['typename']) . "'", $connID)) {
        if (! $adminDB->executeSQL("insert into tb_bigtype(typename, addtime) values('" . trim($_POST['typename']) . "', '" . date('Y-m-d H:i:s') . "')", $connID)) {
            echo "<scriipt>alert('������ʧ�ܣ�');</script>";
        } else {
            echo "<script>alert('�����ӳɹ���');</script>";
        }
    } else {
        echo "<script>alert('������Ѿ���ӣ�');</script>";
    }
}
$smarty->display('admin-bigtype.phtml');
require_once 'admin-footer.php';



