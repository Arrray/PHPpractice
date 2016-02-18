<?php
require_once 'admin-header.php';
if (isset($_GET['f']) && $_GET['f'] == 'del') {
    if (! $adminDB->executeSQL("delete from tb_pub where id='" . $_GET['id'] . "'", $connID)) {
        echo "<script>alert('出版社类别删除失败！');</script>";
    }
}
$isShow = 'F';
if ((isset($_GET['f']) && $_GET['f'] == 'edit') || (isset($_POST['f']) && $_POST['f'] == 'edit')) {
    if (isset($_POST['f']) && $_POST['f'] == 'edit') {
        if (isset($_FILES["pubimg"]["name"]) && $_FILES["pubimg"]["name"] != "") {
            $dir = "./upfiles/bookimg";
            if (! is_dir($dir)) {
                mkdir($dir);
            }
            $upfilename = $_FILES["pubimg"]["name"];
            $filename = date("YmdHis") . mt_rand(1000, 9999) . substr($upfilename, strpos($upfilename, "."), strlen($upfilename) - strpos($upfilename, "."));
            ;
            $address = $dir . "/" . $filename;
            @move_uploaded_file($_FILES["pubimg"]["tmp_name"], $address);
        } else {
            $ptmp = $adminDB->executeSQL("select pubimg from tb_pub where id='" . trim($_POST['id']) . "'", $connID);
            $filename = $ptmp[0]['pubimg'];
        }
        if (! $adminDB->executeSQL("update tb_pub set pubname='" . $_POST['pubname'] . "', pubimg='" . $filename . "'  where id='" . $_POST['id'] . "'", $connID)) {
            echo "<script>alert('出版社类别更改失败！');</script>";
        } else {
            echo "<script>alert('出版社类别更改成功！');</script>";
        }
    }
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    } else {
        $id = $_POST['id'];
    }
    $isShow = 'T';
    $pub = $adminDB->executeSQL("select id, pubname, pubimg from tb_pub where id='" . $id . "'", $connID);
    $smarty->assign('pub', $pub);
}
$smarty->assign('isShow', $isShow);
//
//
$system = $adminDB->executeSQL("select bookimgurl from tb_system where mark = 1", $connID);
$smarty->assign('system', $system);
//
$pubs = $adminDB->executeSQL("select id, pubname, pubimg, addtime from tb_pub order by addtime ", $connID);
$smarty->assign('pubs', $pubs);
$smarty->display('admin-listpub.phtml');
require_once 'admin-footer.php';



