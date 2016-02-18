<?php
require_once 'header.php';
if (! isset($_SESSION['unc']) || $_SESSION['unc'] == '') {
    echo "<script>alert('禁止非登录！');window.location.href='" . $util->baseUrl() . "/index.html';</script>";
    exit();
}
if (isset($_POST['truename']) && $_POST['truename'] != '') {
    if (! $adminDB->executeSQL("update tb_user set truename='" . $_POST['truename'] . "', sex='" . $_POST['sex'] . "', tel='" . $_POST['tel'] . "', email='" . $_POST['email'] . "', qq='" . $_POST['qq'] . "', yb='" . $_POST['yb'] . "', address='" . $_POST['address'] . "' where usernc='" . $_SESSION['unc'] . "'", $connID)) {
        echo "<script>alert('用户信息更改失败！');</script>";
    }
}
$user = $adminDB->executeSQL("select truename, sex, tel, email, qq, yb, address from tb_user where usernc='" . $_SESSION['unc'] . "'", $connID);
$smarty->assign('user', $user);
$smarty->display('usercenter.phtml');
require_once 'footer.php';