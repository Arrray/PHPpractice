<?php
define('BASE_PATH',$_SERVER['DOCUMENT_ROOT']);
$len=strripos($_SERVER['REQUEST_URI'],"/");					//��ȡ�ļ�ִ�еĸ�Ŀ¼
$smartypath=substr($_SERVER['PHP_SELF'],0,$len);				//��ȡ�ļ��ĸ�Ŀ¼
define('SMARTY_PATH',$smartypath."/Smarty/");
require BASE_PATH.SMARTY_PATH.'libs/Smarty.class.php';
$smarty = new Smarty;
$smarty->template_dir = BASE_PATH.SMARTY_PATH.'templates/';
$smarty->compile_dir = BASE_PATH.SMARTY_PATH.'templates_c/';
$smarty->config_dir = BASE_PATH.SMARTY_PATH.'configs/';
$smarty->cache_dir = BASE_PATH.SMARTY_PATH.'cache/';

?>