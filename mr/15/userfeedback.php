<?php
require_once 'header.php';
if (!isset($_SESSION['unc']) || $_SESSION['unc'] == '') {
    echo "<script>alert('��ֹ�ǵ�¼��');window.location.href='".$util->baseUrl()."/index.html';</script>";
    exit();
}

if(isset($_POST['title']) && $_POST['title']!='')
{
    if($adminDB->executeSQL("insert into tb_feedback(title, content, addtime, usernc) values('".$_POST['title']."', '".$_POST['content']."', '".date('Y-m-d H:i:s')."', '".$_SESSION['unc']."')", $connID))
    {
        echo "<script>alert('���ķ�����Ϣ�Ѿ��ɹ����棬лл����֧�֣�');</script>";
    }
    else 
    {
        echo "<script>alert('������Ϣ����ʧ�ܣ������ԣ�');</script>";
    }
}

$smarty->display('userfeedback.phtml');
require_once 'footer.php';