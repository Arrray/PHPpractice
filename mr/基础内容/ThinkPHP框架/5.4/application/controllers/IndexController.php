<?php
header("Content-Type:text/html;charset=utf-8");
class IndexController extends Zend_Controller_Action{	
	public function indexAction(){
		$table = new Model_User();		//类的实例化
		// 增加的数据
		$data = array(
			'tb_user' => 'King',
			'tb_pass'  => 'mrsoft',
		);
		
		if($table->insert($data)){		//执行添加操作
			 $this->view->insert = "插入数据成功！";
		} 
	}
	
	public function deleteAction(){		//定义删除方法
		$table = new Model_User();		//类的实例化
		$where = 'id = 2';				//定义删除的条件
		if($table->delete($where)){		//执行删除操作
			$this->view->delete = "删除成功！";
		}else {
			$this->view->delete = "该数据已经不存在";
		}
	}
	public function updateAction(){		//定义更新方法
		$table = new Model_User();		//类的实例化
		$set = array(
			'tb_user' => 'mingri',
		);
		$where = 'id = 2';				//定义更新条件
		if($table->update($set, $where)){	//执行更新操作
			$this->view->update = "修改成功！";
		}else {
			$this->view->update = "该数据不存在或已经被修改过";
		}
	}
	
	public function fetchAction(){		//定义查询方法
		$table = new Model_User();		//类的实例化
		//定义查询条件
		$where = null;			
		$order = "id desc";				//以ID降序排列
		$count = 3;						//输出3条记录
		$offset = 0;					//从第1条记录开始
		$result_all = $table->fetchAll();		//执行查询语句
		$this->view->select = $result_all; 
	}
}