<?php
header("Content-Type:text/html; charset=utf-8");
class Bootstrap extends Zend_Application_Bootstrap_Bootstrap{
	public function _initAutoload(){
		$moduleAutoloader = new Zend_Application_Module_Autoloader(array('namespace' => '','basePath' => '../application'));	

		return $moduleAutoloader;
	}
}