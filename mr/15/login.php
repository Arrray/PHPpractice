<?php
require_once 'header.php';
$errorMsg = '';
if (isset($_POST['usernc']) && $_POST['usernc'] != '') {
    $usernc = trim($_POST['usernc']);
    $pwd = trim($_POST['userpwd']);
    $user = $adminDB->executeSQL("select id, usernc from tb_user where usernc='" . $usernc . "' and pwd='" . md5($pwd) . "'", $connID);
    if (! $user) {
        $errorMsg = '用户名或密码输入有误！';
    } else {
        if (isset($_SESSION["unc"])) {
            session_unregister('unc');
        }
        $_SESSION['unc'] = $usernc;
        @$adminDB->executeSQL("update tb_user set logintimes=logintimes+1 ,lastlogintime ='" . date('Y-m-d H:i:s') . "',ip='" . $_SERVER['REMOTE_ADDR'] . "' where usernc='" . $_SESSION['unc'] . "'", $connID);
        if (isset($_SESSION['toUrl'])) {
            echo "<script>window.location.href='" . $util->baseUrl() . "/" . $_SESSION['toUrl'] . "';</script>";
            exit();
        } else {
            echo "<script>window.location.href='" . $util->baseUrl() . "/usercenter.html';</script>";
            exit();
        }
    }
}
$smarty->assign('errorMsg', $errorMsg);
$smarty->display('login.phtml');
require_once 'footer.php';