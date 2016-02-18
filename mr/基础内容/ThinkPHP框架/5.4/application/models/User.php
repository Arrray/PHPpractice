<?php
header("Content-Type:text/html; charset=utf-8");
class Model_User extends Zend_Db_Table{			//定义数据表类，继承Zend_Db_Table
    protected $_name = "tb_admin";				//定义数据表名称变量
    protected $_primary = "id";					//定义数据id变量
    protected $_adapter;						//定义数据库连接标识变量
    public function init(){						//定义init()方法
        $this->_adapter = $this->getAdapter();	//获取操作数据表的对象
    }
}