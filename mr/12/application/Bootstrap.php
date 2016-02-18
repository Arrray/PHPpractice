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
        //注册缓存对象
        $frontOptions = array('cacheTime' => $config['cache']['cacheTime'] , 'automatic_serialization' => $config['cache']['automatic_serialization']);
        $cache_dir = $config['cache']['cache_dir'];
        if (! is_dir($cache_dir)) {
            mkdir($cache_dir);
        }
        $backOptions = array('cache_dir' => $cache_dir);
        $cache = Zend_Cache::factory('Core', 'File', $frontOptions, $backOptions);
        Zend_Registry::set('cache', $cache);
        //session命名空间
        $sessionNamespace = new Zend_Session_Namespace('project');
        Zend_Registry::set('sessionNamespace', $sessionNamespace);
        //Zend_Auth对象
        $auth = Zend_Auth::getInstance();
        $storage = new Zend_Auth_Storage_Session('project', 'netname');
        $auth->setStorage($storage);
        Zend_Registry::set('auth', $auth);
    }
}