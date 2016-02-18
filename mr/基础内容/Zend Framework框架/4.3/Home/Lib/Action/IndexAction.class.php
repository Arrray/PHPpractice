<?php
header("Content-Type:text/html; charset=utf-8");	//设置页面编码格式
class IndexAction extends Action{
	public function index() {
		$db = new Model('user'); // 实例化模型类,参数数据表名称，不包含前缀
		$select = $db->select(); // 查询数据
		$this->assign('select',$select); // 模板变量赋值
		$this->display(); // 输出模板
	}
	public function insert() {
		$ins=R("User","insert","Admin");	//远程调用Admin项目UserAction控制器的insert操作方法
		$ins->Create(); 			// 创建数据对象
		$result = $ins->add(); 		// 写入数据库
	}
}
?>