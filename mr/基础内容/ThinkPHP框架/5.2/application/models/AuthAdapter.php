<?php
/**
 * ��֤�û����������������
 */
class Model_AuthAdapter implements Zend_Auth_Adapter_Interface{
    protected $_username;
    protected $_password;
    
    /**
     * Construct
     *
     * �����û���������
     * 
     * @return void
     */    
    public function __construct($username,$password){
        $this->_username = $username;
        $this->_password = $password;
    }    
    
    /**
     * ���û�����������������֤
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