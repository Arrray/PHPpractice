<?php
define('BASE_PATH',$_SERVER['DOCUMENT_ROOT']);
$len=strripos($_SERVER['REQUEST_URI'],"/");					//获取文件执行的根目录
$smartypath=substr($_SERVER['PHP_SELF'],0,$len);				//获取文件的根目录
define('SMARTY_PATH',$smartypath."/Smarty/");
require BASE_PATH.SMARTY_PATH.'libs/Smarty.class.php';
$smarty = new Smarty;
$smarty->template_dir = BASE_PATH.SMARTY_PATH.'templates/';
$smarty->compile_dir = BASE_PATH.SMARTY_PATH.'templates_c/';
$smarty->config_dir = BASE_PATH.SMARTY_PATH.'configs/';
$smarty->cache_dir = BASE_PATH.SMARTY_PATH.'cache/';

?>