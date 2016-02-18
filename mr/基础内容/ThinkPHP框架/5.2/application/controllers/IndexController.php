<?php
class IndexController extends Zend_Controller_Action{
	public function indexAction(){
        $this->view->assign("title","网站登录界面");   
		if($this->_request->isPost()){
			$username = $this->_request->getPost('username');
			$password = $this->_request->getPost('password');
			
			$auth = Zend_Auth::getInstance();

			$authModel = new Model_AuthAdapter($username, $password);
			
			$result = $auth->authenticate($authModel);
			if($result->isValid()){
				$sessionNameSpace = new Zend_Session_Namespace('project');
				$sessionNameSpace->username = $username;
				$sessionNameSpace->password = $password;
				$this->_redirect('index/success');
			}else{
				echo "用户名和密码错误";
			}
		}
	}
	public function successAction(){
		$this->view->assign('title', '成功界面');
		$sessionNameSpace = new Zend_Session_Namespace('project');
		if($sessionNameSpace->username == ""){
			die("不允许直接访问此页面");
		}
		$this->view->username = $sessionNameSpace->username;
		$this->view->password = $sessionNameSpace->password;
	}
	public function logoutAction(){
		$sessionNameSpace = new Zend_Session_Namespace('project');
		unset($sessionNameSpace->username);
		$this->_redirect('index/index');
	}
}