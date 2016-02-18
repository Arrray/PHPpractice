<?php
/**
 * 工程引导文件
 * 
 */
//设置编码
header('Content-type:text/html; charset=UTF-8');
//防止网页过期
session_cache_limiter('private, must-revalidate');
//应用路径
defined('APPLICATION_PATH') || define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/../application'));
//应用环境
defined('APPLICATION_ENV') || define('APPLICATION_ENV', getenv('APPLICATION_ENV') ? getenv('APPLICATION_ENV') : 'project');
//工程包含的路径
$includePath = array('.' , realpath(dirname(__FILE__) . '/../library') , get_include_path());
set_include_path(implode(PATH_SEPARATOR, $includePath));
//导入Zend_Application类
require 'Zend/Application.php';
//实例Zend_Application类
$application = new Zend_Application(APPLICATION_ENV, APPLICATION_PATH . '/configs/application.ini');
//调用启动类并运行工程
$application->bootstrap()->run();

