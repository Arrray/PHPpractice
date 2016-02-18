<?php
require_once 'admin-header.php';


if(isset($_GET['f']) && $_GET['f'] == 'del')
{
    if(!$adminDB->executeSQL("delete from tb_cxsx where id='".$_GET['id']."'", $connID))
    {
        echo "<script>alert('É¾³ýÊ§°Ü£¡');</script>";
    }
}


//
$sql = "select id, title, addtime from tb_cxsx order by addtime desc";
$tells = $pageDB->pageData($sql, $connID, 20, $page);
$smarty->assign('tells', $tells);


$smarty->display('admin-listcxsx.phtml');
require_once 'admin-footer.php';



