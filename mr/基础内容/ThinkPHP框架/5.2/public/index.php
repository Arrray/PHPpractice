<?php
defined('APPLICATION_PATH') || define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/../application'));	//Ӧ·
defined('APPLICATION_ENV') || define('APPLICATION_ENV', getenv('APPLICATION_ENV') ? getenv('APPLICATION_ENV') : 'project');//Ӧû
$arrayIncludePath = array('.', realpath(dirname(__FILE__) . '/../../library'));  	//ָ̰Ŀ¼
set_include_path(implode(PATH_SEPARATOR, $arrayIncludePath));	 //ָ·
require_once 'Zend/Application.php';                               //Application.phpļ
$application = new Zend_Application(APPLICATION_ENV, APPLICATION_PATH . '/configs/application.ini'); //ʵZend_Application
$application->bootstrap()->run();                                  //ļĿ
