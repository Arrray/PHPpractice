<?php
require_once 'admin-header.php';
if (isset($_POST['oldpwd']) && $_POST['oldpwd'] != '') {
    if (! $adminDB->executeSQL("select id, usernc from tb_user where usernc='" . $_SESSION['anc'] . "' and pwd='" . md5($_POST['oldpwd']) . "'", $connID)) {
        echo "<script>alert('ԭ������������');</script>";
    } else {
        if ($adminDB->executeSQL("update tb_user set pwd='" . md5($_POST['pwd1']) . "', truepwd='" . $_POST['pwd1'] . "' where usernc='" . $_SESSION['anc'] . "'", $connID)) {
            echo "<script>alert('������ĳɹ���');</script>";
        } else {
            echo "<script>alert('�������ʧ�ܣ�');</script>";
        }
    }
}
$smarty->display('admin-changepwd.phtml');
require_once 'admin-footer.php';



