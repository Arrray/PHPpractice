<?php
require_once 'admin-header.php';
//
if (! isset($_GET['page']) || $_GET['page'] == '') {
    $page = '1';
} else {
    $page = $_GET['page'];
}
if (isset($_GET['f']) && $_GET['f'] == 'del') {
    if (! $adminDB->executeSQL("delete from tb_user where id='" . $_GET['id'] . "'", $connID)) {
        echo "<script>alert('用户信息删除失败！');</script>";
    }
}
$sql = "select id, usernc, truename, email, sex, tel, qq, address, logintimes, regtime, lastlogintime, ip, yb, usertype from tb_user order by usertype desc, regtime desc";
$users = $pageDB->pageData($sql, $connID, 20, $page);
$smarty->assign('users', $users);
//
$isShow = 'F';
if (isset($_GET['f']) && $_GET['f'] == 'edit') {
    $user = $adminDB->executeSQL("select id, usernc, truename, email, sex, tel, qq, address, logintimes, regtime, lastlogintime, ip, yb, usertype from tb_user where id='" . $_GET['id'] . "'", $connID);
    $smarty->assign('user', $user);
    $isShow = 'T';
}
$smarty->assign('isShow', $isShow);
$smarty->display('admin-listuser.phtml');
require_once 'admin-footer.php';



