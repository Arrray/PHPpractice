<?php
require_once 'admin-header.php';
if (isset($_GET['f']) && $_GET['f'] == 'del') {
    if (! $adminDB->executeSQL("delete from tb_smalltype where id='" . $_GET['id'] . "'", $connID)) {
        echo "<script>alert('类别删除失败！');</script>";
    }
}
$isShow = 'F';
if ((isset($_GET['f']) && $_GET['f'] == 'edit') || (isset($_POST['f']) && $_POST['f'] == 'edit')) {
    $btypes = $adminDB->executeSQL("select id, typename from tb_bigtype order by addtime", $connID);
    for ($i = 0; $i < count($btypes); $i ++) {
        $arrayBtypeOption[$btypes[$i]['id']] = $btypes[$i]['typename'];
    }
    $smarty->assign('arrayBtypeOption', $arrayBtypeOption);
    //
    if (isset($_POST['f']) && $_POST['f'] == 'edit') {
        if (! $adminDB->executeSQL("update tb_smalltype set typename='" . $_POST['typename'] . "', bigtypeid='" . $_POST['bigtypeid'] . "'  where id='" . $_POST['id'] . "'", $connID)) {
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
    $smalltype = $adminDB->executeSQL("select id, typename, bigtypeid from tb_smalltype where id='" . $id . "'", $connID);
    $smarty->assign('smalltype', $smalltype);
}
$smarty->assign('isShow', $isShow);
//
$smalltypes = $adminDB->executeSQL("select tb_smalltype.id, tb_smalltype.typename as stypename, tb_bigtype.typename as btypename,  tb_smalltype.addtime from tb_smalltype, tb_bigtype where tb_smalltype.bigtypeid = tb_bigtype.id order by addtime ", $connID);
$smarty->assign('smalltypes', $smalltypes);
$smarty->display('admin-listsmalltype.phtml');
require_once 'admin-footer.php';



