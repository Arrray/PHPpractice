<?php
/**
 * ������
 *
 */
class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
    /**
     * �Զ�������Դ
     *
     * @return Zend_Application_Module_Autoloader
     */
    protected function _initAutoloader ()
    {
        return new Zend_Application_Module_Autoloader(array('namespace' => '' , 'basePath' => APPLICATION_PATH));
    }
    /**
     * ע����Դ
     *
     */
    protected function _initRegister ()
    {
        //����������Ϣ
        $config = $this->getOptions();
        Zend_Registry::set('config', $config);
     
     
   
    }
}