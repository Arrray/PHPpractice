<?php
require_once 'lzh.inc.php';
if (isset($_POST['anc']) && $_POST['anc'] != '') {
    if ($adminDB->executeSQL("select id, usernc from tb_user where usernc='" . $_POST['anc'] . "' and pwd='" . md5(trim($_POST['pwd'])) . "' and  usertype=1", $connID)) {
        if (isset($_SESSION['anc'])) {
            unset($_SESSION['anc']);
        }
        $_SESSION['anc'] = $_POST['anc'];
        echo "<script>window.location.href='" . $util->baseUrl() . "/admin-index.php';</script>";
    } else {
        echo "<script>alert('µÇÂ¼Ê§°Ü£¡');</script>";
    }
}
$smarty->display('admin-login.phtml');
$connDB->closeConnID();
