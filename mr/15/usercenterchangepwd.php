<?php
require_once 'header.php';
if (! isset($_SESSION['unc']) || $_SESSION['unc'] == '') {
    echo "<script>alert('��ֹ�ǵ�¼��');window.location.href='" . $util->baseUrl() . "/index.html';</script>";
    exit();
}
if (isset($_POST['oldpwd']) && $_POST['oldpwd'] != '') {
    if (! $adminDB->executeSQL("select id, usernc from tb_user where usernc='" . $_SESSION['unc'] . "' and pwd='" . md5($_POST['oldpwd']) . "'", $connID)) {
        echo "<script>alert('ԭ������������');</script>";
    } else {
        if ($adminDB->executeSQL("update tb_user set pwd='" . md5($_POST['pwd1']) . "', truepwd='" . $_POST['pwd1'] . "' where usernc='" . $_SESSION['unc'] . "'", $connID)) {
            echo "<script>alert('������ĳɹ���');</script>";
        } else {
            echo "<script>alert('�������ʧ�ܣ�');</script>";
        }
    }
}
$smarty->display('usercenterchangepwd.phtml');
require_once 'footer.php';