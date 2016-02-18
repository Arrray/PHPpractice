<?php
header("Content-Type:text/html; charset=utf-8");
class IndexController extends Zend_Controller_Action{
    public function indexAction (){                            //默认动作
        $this->view->testStr="第一个Zend Framework框架程序!";                     //为视图变量赋值
		$this->view->imagesStr="<img src='images/bg.jpg' width='80' height='80' />";                     //为视图变量赋值
    }
}
