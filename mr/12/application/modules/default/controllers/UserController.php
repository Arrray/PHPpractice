<?php
/**
 * 用户控制器
 *
 */
class UserController extends Zend_Controller_Action
{
    //工程配置信息
    private $_config;
    //用户表模型
    private $_user;
    //session命名空间
    private $_sessionNamespace;
    /**
     * 初始控制器
     *
     */
    public function init ()
    {
        //初始视图
        $this->initView();
        //实例工程配置信息
        $this->_config = Zend_Registry::get('config');
        $this->view->config = $this->_config;
        //实例用户表模型
        $this->_user = new Model_DbTable_User();
        //实例session命名空间
        $this->_sessionNamespace = Zend_Registry::get('sessionNamespace');
    }
    /**
     * 设置页面信息
     *
     * @param string $layout
     * @param string $title
     * @param string $keywords
     * @param string $description
     */
    private function _setPageInfo ($title = '', $keywords = '', $description = '', $layout = 'user')
    {
        //主题
        $this->view->title = $title;
        //关键字
        $this->view->keywords = $keywords;
        //描述
        $this->view->description = $description;
        //页面布局
        if ($layout == null) {
            $this->_helper->layout->disableLayout();
        } else {
            $this->_helper->layout->setLayout($layout);
        }
    }
    /**
     * 首页Action
     *
     */
    public function indexAction ()
    {
        //定向到用户登录页面
        $this->_redirect('/user/login');
        exit();
    }
    /**
     * 用户登录Action
     *
     */
    public function loginAction ()
    {
        $errMsg = null;
        //如果用户提交表单，怎对用户身份进行验证
        if ($this->_request->isPost()) {
            //接收用户名密码
            $netname = trim($this->_request->getParam('netname'));
            $password = trim($this->_request->getParam('password'));
            //对用户身份 进行验证
            if ($this->_user->isValid($netname, md5($password))) {
                $url = $this->_request->getParam('url');
                if ($url == null) {
                    //定位到登录成功页面
                    $this->_redirect('/user/success/flag/login');
                } else {
                    $url = str_replace('@', '?', str_replace('$', '&', $url));
                    $this->_redirect($url);
                }
                exit();
            } else {
                $errMsg = '登录昵称或密码输入有误，请重新登录！';
                $this->view->errMsg = $errMsg;
                $this->view->netname = $netname;
            }
        }
        //页面信息
        $title = '用户登录-' . $this->_config['pageInfo']['user']['title'] . '-' . $this->_config['pageInfo']['default']['title'];
        $keywords = $this->_config['pageInfo']['user']['keywords'];
        $description = $this->_config['pageInfo']['default']['title'] . '用户登录';
        $this->_setPageInfo($title, $keywords, $description);
    }
    /**
     * 判断用户昵称是否被占用
     *
     */
    public function chkRegisterAction ()
    {
        //取消布局和试图
        $this->_helper->layout->disableLayout();
        $this->_helper->viewRenderer->setNoRender();
        //获取netname
        $netname = $this->_request->getParam('netname');
        if ($this->_user->findByNetname(trim($netname)) === null) {
            echo 'N';
        } else {
            echo 'Y';
        }
    }
    /**
     * 用户注册Action
     *
     */
    public function registerAction ()
    {
        //省份下拉列表项
        $p = Plugin_Util_ProvinceAndCityFactory::getProvince();
        $this->view->p = $p;
        //注册协议
        $agreement = file_get_contents(APPLICATION_PATH . '/resources/agreement.txt');
        $this->view->agreement = $agreement;
        //提交表单后处理用户提交的注册信息
        if ($this->_request->isPost()) {
            $request = $this->_request;
            $pName = $p[$request->getParam('p')];
            $c = Plugin_Util_ProvinceAndCityFactory::getCityByProvinceArrayIndex($request->getParam('p'));
            $cName = $c[$request->getParam('c')];
            //发送邮件
            $arraySmtpConfig = array('auth' => 'login' , 'username' => $this->_config['mail']['username'] , 'password' => $this->_config['mail']['password']);
            $transport = new Zend_Mail_Transport_Smtp($this->_config['mail']['host'], $arraySmtpConfig);
            $mail = new Zend_Mail('utf-8');
            $mail->setSubject($this->_config['mail']['subject']);
            $mail->setBodyHtml(file_get_contents(APPLICATION_PATH . '/resources/mailBody.txt'));
            $mail->setFrom($this->_config['mail']['from'], $this->_config['mail']['name']);
            $mail->addTo(trim($request->getParam('email')));
            try {
                $mail->send($transport);
            } catch (Zend_Exception $e) {
                $e->getMessage();
            }
            //保存注册信息
            $nowTime = date('Y-m-d H:i:s');
            $ip = $_SERVER['REMOTE_ADDR'];
            $arrayUserInfo = array('netname' => trim($request->getParam('netname')) , 'password' => md5(trim($request->getParam('password'))) , 'email' => trim($request->getParam('email')) , 'fromcity' => $pName . '-' . $cName , 'regtime' => $nowTime , 'regip' => $ip , 'lastlogintime' => $nowTime , 'lastloginip' => $ip , 'usertype' => 0 , 'score' => 0 , 'friendid' => '' , 'spacebrowse' => 0);
            try {
                $this->_user->insert($arrayUserInfo);
            } catch (Zend_Exception $e) {
                $e->getMessage();
            }
            //将用户名保存到session中
            $this->_sessionNamespace->netname = trim($request->getParam('netname'));
            $url = $this->_request->getParam('url');
            if ($url == null) {
                //定位到注册成功页面
                $this->_redirect('/user/success/flag/reg');
            } else {
                $url = str_replace('@', '?', str_replace('$', '&', $url));
                $this->_redirect($url);
            }
            exit();
        }
        //页面信息
        $title = '用户注册-' . $this->_config['pageInfo']['user']['title'] . '-' . $this->_config['pageInfo']['default']['title'];
        $keywords = $this->_config['pageInfo']['user']['keywords'];
        $description = $this->_config['pageInfo']['default']['title'] . '用户注册';
        $this->_setPageInfo($title, $keywords, $description);
    }
    /**
     * 用户注册或登录成功提示页面
     *
     */
    public function successAction ()
    {
        //判断是否已经登录或成功注册
        $auth = Zend_Registry::get('auth');
        if ($auth->hasIdentity()) {
            $netname = $auth->getIdentity();
            $loginUser = $this->_user->findByNetname($netname);
            $this->view->loginUser = $loginUser;
        } else {
            $this->_redirect('/user/login');
            exit();
        }
        //接收页面标识
        $flag = $this->_request->getParam('flag');
        $this->view->flag = $flag;
        //
        if ($flag == 'reg') {
            $intiPageTitle = '注册成功';
        } elseif ($flag == 'login') {
            $intiPageTitle = '登录成功';
        }
        //页面信息
        $title = $intiPageTitle . '-' . $this->_config['pageInfo']['user']['title'] . '-' . $this->_config['pageInfo']['default']['title'];
        $keywords = $this->_config['pageInfo']['user']['keywords'];
        $description = $this->_config['pageInfo']['default']['title'] . $intiPageTitle;
        $this->_setPageInfo($title, $keywords, $description);
    }
    /**
     * 用户未登录提示Action
     *
     */
    public function unloginAction ()
    {
        //接收要转向的url地址
        $url = $this->_request->getParam('url');
        $this->view->url = $url;
        //设置页面信息
        $this->_setPageInfo();
    }
    /**
     * 退出登录
     *
     */
    public function logoutAction ()
    {
        //取消布局和视图
        $this->_helper->layout->disableLayout();
        $this->_helper->viewRenderer->setNoRender();
        //退出登录
        $auth = Zend_Registry::get('auth');
        if ($auth->hasIdentity()) {
            $auth->clearIdentity();
            unset($this->_sessionNamespace);
            $this->_redirect('/');
            exit();
        } else {
            $this->_redirect('/user/login');
            exit();
        }
    }
}