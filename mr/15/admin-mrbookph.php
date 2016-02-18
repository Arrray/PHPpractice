<?php
require_once 'admin-header.php';

if(isset($_POST['title']) && $_POST['title']!=''&&!isset($_POST['id']))
{
    if(!$adminDB->executeSQL("select id, title from tb_mrbookph where title='".trim($_POST['title'])."'", $connID))
    {
        if(!$adminDB->executeSQL("insert into tb_mrbookph(title, content, addtime) values('".trim($_POST['title'])."', '".trim($_POST['content'])."','".date('Y-m-d H:i:s')."')", $connID))
        {
             echo "<scriipt>alert('添加失败！');</script>"; 
        }
        else
        {
            echo "<script>alert('添加成功！');</script>";      
        }
    }
    else 
    {
        echo "<script>alert('该排行已经添加！');</script>";      
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
            echo "<script>alert('更改失败！');</script>";      
        }
        else 
        {
            echo "<script>alert('更改成功！');</script>";   
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



