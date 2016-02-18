<?php
require_once 'header.php';
if (!isset($_SESSION['unc']) || $_SESSION['unc'] == '') {
    echo "<script>alert('禁止非登录！');window.location.href='".$util->baseUrl()."/index.html';</script>";
    exit();
}

if(isset($_POST['title']) && $_POST['title']!='')
{
    if($adminDB->executeSQL("insert into tb_feedback(title, content, addtime, usernc) values('".$_POST['title']."', '".$_POST['content']."', '".date('Y-m-d H:i:s')."', '".$_SESSION['unc']."')", $connID))
    {
        echo "<script>alert('您的反馈信息已经成功保存，谢谢您的支持！');</script>";
    }
    else 
    {
        echo "<script>alert('反馈信息保存失败，请重试！');</script>";
    }
}

$smarty->display('userfeedback.phtml');
require_once 'footer.php';