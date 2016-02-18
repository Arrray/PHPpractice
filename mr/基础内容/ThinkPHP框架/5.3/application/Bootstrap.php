<?php
class Bootstrap extends Zend_Application_Bootstrap_Bootstrap{
	public function _initAutoload(){
		$moduleAutoloader = new Zend_Application_Module_Autoloader(array('namespace' => '','basePath' => '../application'));	

		return $moduleAutoloader;
	}
	
	protected function _initDB(){
		$options = $this->getOption('resources');
		$options = $options['db'];
		$resources = $this->getPluginResource('db');
		$db = $resources->getDbAdapter();
		Zend_Db_Table::setDefaultAdapter($db);
		Zend_Registry::set('dbAdapter',$db);
		Zend_Registry::set('dbprefix',$options['params']['prefix']);
	}
}




