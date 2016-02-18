<?php
/**
 * 启动类
 *
 */
class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
    /**
     * 自动导入资源
     *
     * @return Zend_Application_Module_Autoloader
     */
    protected function _initAutoloader ()
    {
        return new Zend_Application_Module_Autoloader(array('namespace' => '' , 'basePath' => APPLICATION_PATH));
    }
    /**
     * 注册资源
     *
     */
    protected function _initRegister ()
    {
        //工程配置信息
        $config = $this->getOptions();
        Zend_Registry::set('config', $config);
     
     
   
    }
}