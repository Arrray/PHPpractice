<?php
require_once 'admin-header.php';

if(isset($_POST['title']) && $_POST['title']!=''&&!isset($_POST['id']))
{
    if(!$adminDB->executeSQL("select id, title from tb_mrbookph where title='".trim($_POST['title'])."'", $connID))
    {
        if(!$adminDB->executeSQL("insert into tb_mrbookph(title, content, addtime) values('".trim($_POST['title'])."', '".trim($_POST['content'])."','".date('Y-m-d H:i:s')."')", $connID))
        {
             echo "<scriipt>alert('���ʧ�ܣ�');</script>"; 
        }
        else
        {
            echo "<script>alert('��ӳɹ���');</script>";      
        }
    }
    else 
    {
        echo "<script>alert('�������Ѿ���ӣ�');</script>";      
    }
}
//
$isEdit = 'F';
if(isset($_GET['f']) && $_GET['f']=='edit' || isset($_POST['id']) && $_POST['id']!='')
{
    
    if(isset($_POST['id']) && $_POST['id']!='')
    {
        if(!$adminDB->executeSQL("update tb_mrbookph set title='".$_POST['title']."', content='".$_POST['content']."' where id='".$_POST['id']."'", $connID))
        {
            echo "<script>alert('����ʧ�ܣ�');</script>";      
        }
        else 
        {
            echo "<script>alert('���ĳɹ���');</script>";   
        }
    }
    
    $isEdit = 'T';
    if(isset($_POST['id']))
    {
        $id = $_POST['id'];
    }
    else
    {
        $id = $_GET['id'];
    }
    
    $info = $adminDB->executeSQL("select id, title, content from tb_mrbookph where id='".$id."'", $connID);
    $smarty->assign('info', $info); 
}

$smarty->assign('isEdit', $isEdit);


$smarty->display('admin-mrbookph.phtml');
require_once 'admin-footer.php';



