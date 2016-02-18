<?php
/**
 * 认证用户名和密码的适配器
 */
class Model_AuthAdapter implements Zend_Auth_Adapter_Interface{
    protected $_username;
    protected $_password;
    
    /**
     * Construct
     *
     * 带入用户名和密码
     * 
     * @return void
     */    
    public function __construct($username,$password){
        $this->_username = $username;
        $this->_password = $password;
    }    
    
    /**
     * 对用户名和密码进行身份认证
     *
     * @throws Zend_Auth_Adapter_Exception If authentication cannot
     *                                     be performed
     * @return Zend_Auth_Result
     */
    
    public function authenticate(){
        $array = array();
        if (($this->_username == 'mr') && (($this->_password == 'mrsoft'))){
            $array[0] = true;
            return new Zend_Auth_Result(1,$array);
        }else{
            $array[0] = false;
            return new Zend_Auth_Result(-1,$array);
        }
    }
}