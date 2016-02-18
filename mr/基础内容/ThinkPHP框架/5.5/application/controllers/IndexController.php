<?php
class IndexController extends Zend_Controller_Action{	
	public function indexAction(){
		if($this->_request->isPost()){						// 判断是否是post上传		
			$adapter = new Zend_File_Transfer_Adapter_Http();			
			$adapter->setDestination('./upfiles');					//设置上传文件存储路径
			if(!$adapter->receive()){						//执行上传操作
				$messages = $adapter->getMessages();		//获取返回的错误信息
				echo implode("<br>",$messages);				//输出错误信息
			}else{
				echo "<script>alert('上传成功！');</script>";
			}
		}
	}
}