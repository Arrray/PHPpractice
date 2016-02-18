<?php
require_once 'admin-header.php';
if (isset($_POST['merid']) && $_POST['merid'] != '') {
    if (! $adminDB->executeSQL("update tb_system set merid='" . $_POST['merid'] . "', meracct='" . $_POST['meracct'] . "', readurl='" . $_POST['readurl'] . "', bookimgurl='" . $_POST['bookimgurl'] . "', ggurl='" . $_POST['ggurl'] . "', bq='" . $_POST['bq'] . "' , address='" . $_POST['address'] . "', tel='" . $_POST['tel'] . "', cz='" . $_POST['cz'] . "', email='" . $_POST['email'] . "', icp='" . $_POST['icp'] . "', qq='" . $_POST['qq'] . "' where mark=1", $connID)) {
        echo "<script>alert('系统信息设置失败！');</script>";
    } else {
        echo "<script>alert('系统信息设置成功！');</script>";
    }
}
$system = $adminDB->executeSQL("select id, merid, meracct, readurl, bookimgurl, ggurl, bq, address, tel, cz, email, icp, qq from tb_system where mark=1", $connID);
$smarty->assign('system', $system);
$smarty->display('admin-default.phtml');
require_once 'admin-footer.php';



