<?php
require_once 'admin-header.php';
$btypes = $adminDB->executeSQL("select id, typename from tb_bigtype order by addtime", $connID);
for ($i = 0; $i < count($btypes); $i ++) {
    $arrayBtypeOption[$btypes[$i]['id']] = $btypes[$i]['typename'];
}
$smarty->assign('arrayBtypeOption', $arrayBtypeOption);
if (isset($_POST['typename']) && $_POST['typename'] != '') {
    if (! $adminDB->executeSQL("select id, typename from tb_smalltype where typename='" . trim($_POST['typename']) . "'", $connID)) {
        if (! $adminDB->executeSQL("insert into tb_smalltype(typename, bigtypeid, addtime) values('" . trim($_POST['typename']) . "', '" . trim($_POST['bigtypeid']) . "','" . date('Y-m-d H:i:s') . "')", $connID)) {
            echo "<scriipt>alert('������ʧ�ܣ�');</script>";
        } else {
            echo "<script>alert('�����ӳɹ���');</script>";
        }
    } else {
        echo "<script>alert('������Ѿ���ӣ�');</script>";
    }
}
$smarty->display('admin-smalltype.phtml');
require_once 'admin-footer.php';



