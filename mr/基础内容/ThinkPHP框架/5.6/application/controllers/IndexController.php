<?php
/**
 * ���ſ�����
 *
 */
class IndexController extends Zend_Controller_Action
{
//��Ŀ������Ϣ
private $_config;
//���ű�ģ��
private $_news;
/**
 * ��ʼ������
 *
 */
public function init ()
{
//��ʼ��ͼ
$this->initView();
//��ʼ����������Ϣ����
$this->_config = Zend_Registry::get('config');
//ʵ�����ű�ģ��
$this->_news = new Model_DbTable_News();
}
 
private function _getNewsTypeByFlag ($flag)
{
$typeName = '';
switch ($flag) {
case 'ttj':
$typeName = '�����Ƽ�����';
break;
case 'all':
$typeName = 'ȫ������';
break;
case 0:
$typeName = 'վ������';
break;
case 1:
$typeName = 'IT��������';
break;
case 2:
$typeName = '�߶˷�̸';
break;
case 3:
$typeName = '��Ʒ��Ѷ';
break;
case 4:
$typeName = '��ҵ��̬';
break;
case 5:
$typeName = '����������';
break;
case 6:
$typeName = '��Ϸ��Ѷ';
break;
case 7:
$typeName = '��洫ý';
break;
case 8:
$typeName = '�ƾ�����';
break;
case 9:
$typeName = 'ͼƬ����';
break;
case 10:
$typeName = '�ۺ���Ѷ';
break;
}
return $typeName;
}
 
/**
 * �����б�ҳAction
 *
 */
public function indexAction ()
{
//���ղ���
if($this->_request->getParam('flag')=="" || $this->_request->getParam('order')=="" ||$this->_request->getParam('page')==""){
    $flag ="all";
    $order = 2;
    $page = 1;
}else{
 	$flag = $this->_request->getParam('flag');
    $order = $this->_request->getParam('order');
    $page = $this->_request->getParam('page');
}
//��ҳ����
$itemCountPerPage = 10;
$pageRange = 5;
//��ͼ������ֵ
$this->view->flag = $flag;
$this->view->order = $order;
//���ŷ�ҳ
$paginator = $this->_news->findByPage($flag, $order, $page, $itemCountPerPage, $pageRange);
$this->view->paginator = $paginator;

$this->_helper->layout->setLayout("default");

}

}