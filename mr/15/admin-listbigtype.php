<?php
require_once 'admin-header.php';
if (isset($_GET['f']) && $_GET['f'] == 'del') {
    if (! $adminDB->executeSQL("delete from tb_bigtype where id='" . $_GET['id'] . "'", $connID)) {
        echo "<script>alert('类别删除失败！');</script>";
    }
}
$isShow = 'F';
if ((isset($_GET['f']) && $_GET['f'] == 'edit') || (isset($_POST['f']) && $_POST['f'] == 'edit')) {
    if (isset($_POST['f']) && $_POST['f'] == 'edit') {
        if (! $adminDB->executeSQL("update tb_bigtype set typename='" . $_POST['typename'] . "'  where id='" . $_POST['id'] . "'", $connID)) {
            echo "<script>alert('类别更改失败！');</script>";
        } else {
            echo "<script>alert('类别更改成功！');</script>";
        }
    }
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    } else {
        $id = $_POST['id'];
    }
    $isShow = 'T';
    $bigtype = $adminDB->executeSQL("select id, typename from tb_bigtype where id='" . $id . "'", $connID);
    $smarty->assign('bigtype', $bigtype);
}
$smarty->assign('isShow', $isShow);
//
$bigtypes = $adminDB->executeSQL("select id, typename, addtime from tb_bigtype order by addtime ", $connID);
$smarty->assign('bigtypes', $bigtypes);
$smarty->display('admin-listbigtype.phtml');
require_once 'admin-footer.php';



