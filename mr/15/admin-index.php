<?php
require_once 'lzh.inc.php';
if(!isset($_SESSION['anc']) || $_SESSION['anc'] == '')
{
    echo "<script>alert('��ֹ�Ƿ���¼��');window.location.href='".$util->baseUrl()."/index.html';</script>";
    exit();
}

$smarty->display('admin-index.phtml');
