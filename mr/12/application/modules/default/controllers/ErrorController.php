<?php
/**
 * 错误控制器
 *
 */
class ErrorController extends Zend_Controller_Action
{ //项目配置信息
    private $_config;
    /**
     * 初始控制器
     *
     */
    public function init ()
    {
        //初始视图
        $this->initView();
        //获取页面配置信息对象
        $this->_config = Zend_Registry::get('config');
        $this->view->config = $this->_config;
    }
    /**
     * 错误动作
     *
     */
    public function errorAction ()
    {
        //页面主题
        $this->view->title = '友情提示-' . $this->_config['pageInfo']['default']['title'];
        //取消布局
        $this->_helper->layout->disableLayout();
    }
}