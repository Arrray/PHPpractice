<?php
header("Content-Type:text/html; charset=utf-8");
class IndexController extends Zend_Controller_Action{
	protected $_db = null;
	public function indexAction(){
        // 调用db对象 dbAdapter为启动文件中设置调用资源
        $this->_db = Zend_Registry::get('dbAdapter');
        $sql = "select * from tb_user";
        $result = $this->_db->fetchAll($sql);
        print_r($result);
	}
}