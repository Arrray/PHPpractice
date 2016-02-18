<?php
require_once 'admin-header.php';
if (isset($_POST['pubname']) && $_POST['pubname'] != '') {
    if (! $adminDB->executeSQL("select id, pubname from tb_pub where pubname='" . trim($_POST['pubname']) . "'", $connID)) {
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
            $filename = "";
        }
        if (! $adminDB->executeSQL("insert into tb_pub(pubname, pubimg, addtime) values('" . trim($_POST['pubname']) . "', '" . $filename . "', '" . date('Y-m-d H:i:s') . "')", $connID)) {
            echo "<script>alert('出版社类别添加失败！');</script>";
        } else {
            echo "<script>alert('出版社类别添加成功！');</script>";
        }
    } else {
        echo "<script>alert('该出版社类别已经添加！');</script>";
    }
}
$smarty->display('admin-pub.phtml');
require_once 'admin-footer.php';



