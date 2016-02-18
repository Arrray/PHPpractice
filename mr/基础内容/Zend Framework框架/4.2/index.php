<?php
define('THINK_PATH', '../ThinkPHP/');// 定义ThinkPHP框架路径
define('APP_NAME', '4.2');//定义项目名称和路径
define('APP_PATH', '.');//定义项目名称和路径
require(THINK_PATH."/ThinkPHP.php");// 加载框架入口文件 
App::run();//实例化一个网站应用实例
?>
