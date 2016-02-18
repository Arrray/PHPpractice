<?php
/**
 * 新闻控制器
 *
 */
class IndexController extends Zend_Controller_Action
{
//项目配置信息
private $_config;
//新闻表模型
private $_news;
/**
 * 初始控制器
 *
 */
public function init ()
{
//初始视图
$this->initView();
//初始工程配置信息对象
$this->_config = Zend_Registry::get('config');
//实例新闻表模型
$this->_news = new Model_DbTable_News();
}
 
private function _getNewsTypeByFlag ($flag)
{
$typeName = '';
switch ($flag) {
case 'ttj':
$typeName = '今日推荐新闻';
break;
case 'all':
$typeName = '全部新闻';
break;
case 0:
$typeName = '站内新闻';
break;
case 1:
$typeName = 'IT人物新闻';
break;
case 2:
$typeName = '高端访谈';
break;
case 3:
$typeName = '产品快讯';
break;
case 4:
$typeName = '企业动态';
break;
case 5:
$typeName = '互联网新闻';
break;
case 6:
$typeName = '游戏资讯';
break;
case 7:
$typeName = '广告传媒';
break;
case 8:
$typeName = '财经报道';
break;
case 9:
$typeName = '图片新闻';
break;
case 10:
$typeName = '综合资讯';
break;
}
return $typeName;
}
 
/**
 * 新闻列表页Action
 *
 */
public function indexAction ()
{
//接收参数
if($this->_request->getParam('flag')=="" || $this->_request->getParam('order')=="" ||$this->_request->getParam('page')==""){
    $flag ="all";
    $order = 2;
    $page = 1;
}else{
 	$flag = $this->_request->getParam('flag');
    $order = $this->_request->getParam('order');
    $page = $this->_request->getParam('page');
}
//分页参数
$itemCountPerPage = 10;
$pageRange = 5;
//视图变量赋值
$this->view->flag = $flag;
$this->view->order = $order;
//新闻分页
$paginator = $this->_news->findByPage($flag, $order, $page, $itemCountPerPage, $pageRange);
$this->view->paginator = $paginator;

$this->_helper->layout->setLayout("default");

}

}