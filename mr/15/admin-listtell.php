<?php
require_once 'admin-header.php';


if(isset($_GET['f']) && $_GET['f'] == 'del')
{
    if(!$adminDB->executeSQL("delete from tb_tell where id='".$_GET['id']."'", $connID))
    {
        echo "<script>alert('¹«¸æÉ¾³ýÊ§°Ü£¡');</script>";
    }
}


//
$sql = "select id, title, addtime from tb_tell order by addtime desc";
$tells = $pageDB->pageData($sql, $connID, 20, $page);
$smarty->assign('tells', $tells);


$smarty->display('admin-listtell.phtml');
require_once 'admin-footer.php';



