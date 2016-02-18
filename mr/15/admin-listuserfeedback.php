<?php
require_once 'admin-header.php';
//
if (! isset($_GET['page']) || $_GET['page'] == '') {
    $page = '1';
} else {
    $page = $_GET['page'];
}
if (isset($_GET['f']) && $_GET['f'] == 'del') {
    if (! $adminDB->executeSQL("delete from tb_feedback where id='" . $_GET['id'] . "'", $connID)) {
        echo "<script>alert('用户反馈信息删除失败！');</script>";
    }
}
$sql = "select id, usernc, title, addtime from tb_feedback order by addtime desc";
$feedbacks = $pageDB->pageData($sql, $connID, 20, $page);
$smarty->assign('feedbacks', $feedbacks);
$isShow = 'F';
if (isset($_GET['f']) && $_GET['f'] == 'edit') {
    $userfeed = $adminDB->executeSQL("select id, usernc, title, content, addtime from tb_feedback where id='" . $_GET['id'] . "'", $connID);
    $isShow = 'T';
    $smarty->assign('userfeed', $userfeed);
}
$smarty->assign('isShow', $isShow);
$smarty->display('admin-listuserfeedback.phtml');
require_once 'admin-footer.php';



