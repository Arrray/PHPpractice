<?php
/**
 * 新闻控制器
 *
 */
class NewsController extends Zend_Controller_Action
{
    //项目配置信息
    private $_config;
    //新闻表模型
    private $_news;
    //用户表模型
    private $_user;
    //评论表模型
    private $_comment;
    //Zend_Auth对象
    private $_auth;
    //当前登录用户
    private $_loginUser;
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
        //实例用户表模型
        $this->_user = new Model_DbTable_User();
        //实例评论表模型
        $this->_comment = new Model_DbTable_Comment();
        //获取Zend_Auth对象
        $this->_auth = Zend_Registry::get('auth');
        //判断用户是否登录，并获得登录用户信息
        if ($this->_auth->hasIdentity()) {
            //用户昵称
            $netname = $this->_auth->getIdentity();
            //登录用户信息
            $this->_loginUser = $this->_user->findByNetname($netname);
            $this->view->loginUser = $this->_loginUser;
        }
    }
    /**
     * 设置页面信息
     *
     * @param string $title
     * @param string $keywords
     * @param string $description
     * @param string $position
     * @param string $pageMark
     * @param string $layout
     */
    private function _setPageInfo ($title = '', $keywords = '', $description = '', $position = '',  $layout = 'default')
    {
        //主题
        $this->view->title = $title;
        //关键字
        $this->view->keywords = $keywords;
        //描述
        $this->view->description = $description;
        //导航
        $initPosition = '<a href="' . $this->view->baseUrl('/') . '" class="a2">' . $this->_config['pageInfo']['default']['title'] . '</a>　>>　<a href="' . $this->view->baseUrl('/news') . '" class="a2">' . $this->_config['pageInfo']['news']['title'] . '</a>';
        $this->view->position = $initPosition . $position;

        //布局
        if ($layout == null) {
            $this->_helper->layout->disableLayout();
        } else {
            $this->_helper->layout->setLayout($layout);
        }
    }
    /**
     * 根据标识获取新闻类别名称
     *
     * @param int|string $flag
     * @return string
     */
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
     * 新闻首页Action
     *
     */
    public function indexAction ()
    {
        //今日推荐新闻
        $todayCommendNewses = $this->_news->findByNum('istodaycommend', 0, 0, 10, false, true, true);
        $this->view->todayCommendNewses = $todayCommendNewses;
        //热门新闻
        $hotNewses = $this->_news->findByNum('all', 2, 0, 4, false, true, true);
        $this->view->hotNewses = $hotNewses;
        //站内新闻
        $siteNewses = $this->_news->findByNum(0, 0, 0, 11, false, true, true);
        $this->view->siteNewses = $siteNewses;
        //人物新闻
        $personNewses = $this->_news->findByNum(1, 0, 0, 4, true, true, true);
        $this->view->personNewses = $personNewses;
        //高端访谈
        $heighPersonNewses = $this->_news->findByNum(2, 0, 0, 8, true, true, true);
        $this->view->heighPersonNewses = $heighPersonNewses;
        //产品新闻
        $productNewses = $this->_news->findByNum(3, 0, 0, 5, true, true, true);
        $this->view->productNewses = $productNewses;
        //企业动态
        $corporationNewses = $this->_news->findByNum(4, 0, 0, 5, true, true, true);
        $this->view->corporationNewses = $corporationNewses;
        //互联网
        $netNewses = $this->_news->findByNum(5, 0, 0, 5, true, true, true);
        $this->view->netNewses = $netNewses;
        //游戏
        $gameNewses = $this->_news->findByNum(6, 0, 0, 5, true, true, true);
        $this->view->gameNewses = $gameNewses;
        //广告传媒
        $adNewses = $this->_news->findByNum(7, 0, 0, 5, true, true, true);
        $this->view->adNewses = $adNewses;
        //财经报道
        $cjNewses = $this->_news->findByNum(8, 0, 0, 5, true, true, true);
        $this->view->cjNewses = $cjNewses;
        //图片新闻
        $imgNewses = $this->_news->findByNum(9, 0, 0, 4, true, true, true);
        $this->view->imgNewses = $imgNewses;
        //综合新闻
        $zhNewses = $this->_news->findByNum(10, 0, 0, 11, false, true, true);
        $this->view->zhNewses = $zhNewses;
        //设置页面信息
        $title = $this->_config['pageInfo']['default']['title'];
        $keywords = $this->_config['pageInfo']['news']['keywords'];
        $description = $this->_config['pageInfo']['news']['description'];
        $this->_setPageInfo($title, $keywords, $description, '');
    }
    /**
     * 新闻列表页Action
     *
     */
    public function listAction ()
    {
        //接收参数
        $flag = $this->_request->getParam('flag');
        $order = $this->_request->getParam('order');
        $page = $this->_request->getParam('page');
        //分页参数
        $itemCountPerPage = 10;
        $pageRange = 5;
        //视图变量赋值
        $this->view->flag = $flag;
        $this->view->order = $order;
        //新闻分页
        $paginator = $this->_news->findByPage($flag, $order, $page, $itemCountPerPage, $pageRange);
        $this->view->paginator = $paginator;
        //图片新闻
        $imgNewses = $this->_news->findByNum(9, 0, 0, 4, true, true, true);
        $this->view->imgNewses = $imgNewses;
        //热门新闻
        $hotNewses = $this->_news->findByNum('all', 2, 0, 8, false, true, true);
        $this->view->hotNewses = $hotNewses;
        //人物新闻
        $personNewses = $this->_news->findByNum(1, 0, 0, 7, true, true, true);
        $this->view->personNewses = $personNewses;
        //高端访谈
        $heighPersonNewses = $this->_news->findByNum(2, 0, 0, 8, true, true, true);
        $this->view->heighPersonNewses = $heighPersonNewses;
        //设置页面信息
        $title = $this->_getNewsTypeByFlag($flag) . '-' . $this->_config['pageInfo']['news']['title'] . '-' . $this->_config['pageInfo']['default']['title'];
        $keywords = $this->_getNewsTypeByFlag($flag);
        $description = '';
        $position = '　>>　<a href="' . $this->view->baseUrl('/news/list-' . $flag . '-0-1.html') . '" class="a2">' . $this->_getNewsTypeByFlag($flag) . '</a>';
        $this->_setPageInfo($title, $keywords, $description, $position);
    }
    /**
     * 新闻详细信息页Action
     *
     */
    public function infoAction ()
    {
        //session命名空间
        $sessionNamespace = Zend_Registry::get('sessionNamespace');
        //接收参数
        $newsid = $this->_request->getParam('newsid');
        $page = $this->_request->getParam('page');
        $this->view->page = $page;
        //查询新闻信息
        $news = $this->_news->findById($newsid, true);
        $this->view->news = $news;
        //内容分页
        $arrayContent = explode($this->_config['pageInfo']['default']['content_separator'], $news['content']);
        $content = $arrayContent[$page - 1];
        $content = str_replace($this->_config['pageInfo']['default']['baseUrlStr_replace'], $this->_config['pageInfo']['default']['baseUrlStr'], $content);
        $this->view->content = $content;
        $pageCount = count($arrayContent);
        $this->view->pageCount = $pageCount;
        //相关热门新闻
        $relatives = $this->_news->findByRelativetag($newsid, $news['relativetag'], 2, 0, 16);
        $this->view->relatives = $relatives;
        //图片新闻
        $imgNewses = $this->_news->findByNum(9, 0, 0, 4, true, true, true);
        $this->view->imgNewses = $imgNewses;
        //热门新闻
        $hotNewses = $this->_news->findByNum('all', 2, 0, 8, false, true, true);
        $this->view->hotNewses = $hotNewses;
        //人物新闻
        $personNewses = $this->_news->findByNum(1, 0, 0, 7, true, true, true);
        $this->view->personNewses = $personNewses;
        //高端访谈
        $heighPersonNewses = $this->_news->findByNum(2, 0, 0, 8, true, true, true);
        $this->view->heighPersonNewses = $heighPersonNewses;
        //保存评论内容
        $msg = null;
        $flag = 1;
        if ($this->_request->isPost()) {
            //判断表单是否重复提交
            if ($this->_request->getParam('postMark') == $sessionNamespace->postMark) {
                $conent = $this->_request->getParam('content');
                $addtime = date('Y-m-d H:i:s');
                $title_id = $news['id'];
                if ($this->_auth->hasIdentity()) {
                    $user_id = $this->_loginUser['id'];
                } else {
                    $netname = trim($this->_request->getParam('netname'));
                    $password = md5(trim($this->_request->getParam('password')));
                    if ($this->_user->isValid($netname, $password)) {
                        $commentUser = $this->_user->findByNetname($netname);
                        $user_id = $commentUser['id'];
                    } else {
                        $msg = '用户名或密码输入有误，请重写填写！';
                    }
                }
                //用户成功登录
                if ($msg == null) {
                    try {
                        $this->_comment->insert(array('content' => $conent , 'flag' => $flag , 'addtime' => $addtime , 'user_id' => $user_id , 'title_id' => $title_id));
                        $msg = '评论发表成功！';
                        $this->_loginUser = $this->_user->findById($user_id);
                        $this->view->loginUser = $this->_loginUser;
                    } catch (Zend_Exception $e) {
                        $e->getMessage();
                    }
                }
            } else {
                $msg = '不允许重复提交表单';
            }
            $this->view->msg = $msg;
        } else {
            //更改浏览次数
            $this->_news->update(array('browse' => new Zend_Db_Expr('browse+1')), $newsid);
        }
        //删除评论内容
        $dcommentid = $this->_request->getParam('dcommentid');
        if ($dcommentid != null) {
            $this->_comment->delete($this->_comment->getAdapter()->quoteInto('id = ?', $dcommentid));
        }
        //查询评论内容
        $comments = $this->_comment->findByFlagAndTitleid($flag, $news['id']);
        $this->view->comments = $comments;
        //表单提交标识
        $randNum = mt_rand(0, 1000000);
        $sessionNamespace->postMark = $randNum;
        $this->view->postMark = $randNum;
        //设置页面信息
        if ($pageCount > 1) {
            $pageStr = '[' . $page . ']';
        } else {
            $pageStr = '';
        }
        $title = $news['title'] . $pageStr . '-' . $this->_getNewsTypeByFlag($news['flag']) . '-' . $this->_config['pageInfo']['news']['title'] . '-' . $this->_config['pageInfo']['default']['title'];
        $keywords = str_replace(',', '|', $news['tags']) . '|' . $this->_getNewsTypeByFlag($news['flag']);
        $description = $this->view->substr($news['uncontent'], 300, '');
        $position = '　>>　<a href="' . $this->view->baseUrl('/news/list-' . $news['flag'] . '-0-1.html') . '" class="a2">' . $this->_getNewsTypeByFlag($news['flag']) . '</a>　>>　<a href="' . $this->view->baseUrl('/news/info-' . $news['id'] . '-1.html') . '" class="a2">' . $this->view->escape($news['title']) . '</a>';
        $this->_setPageInfo($title, $keywords, $description, $position);
    }
}