<?php
include("system/system.inc.php");
/*  使用Smarty赋值方法将一对儿名称/方法发送到模板中  */
$smarty->assign('title','走进Smarty模板引擎');
/*  显示模板  */
$smarty->display('index.html');
?>
