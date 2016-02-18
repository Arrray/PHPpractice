<?php
require_once 'admin-header.php';
if (isset($_POST['oldpwd']) && $_POST['oldpwd'] != '') {
    if (! $adminDB->executeSQL("select id, usernc from tb_user where usernc='" . $_SESSION['anc'] . "' and pwd='" . md5($_POST['oldpwd']) . "'", $connID)) {
        echo "<script>alert('原密码输入有误！');</script>";
    } else {
        if ($adminDB->executeSQL("update tb_user set pwd='" . md5($_POST['pwd1']) . "', truepwd='" . $_POST['pwd1'] . "' where usernc='" . $_SESSION['anc'] . "'", $connID)) {
            echo "<script>alert('密码更改成功！');</script>";
        } else {
            echo "<script>alert('密码更改失败！');</script>";
        }
    }
}
$smarty->display('admin-changepwd.phtml');
require_once 'admin-footer.php';



