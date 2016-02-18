<?php
/**
 * 新闻管理控制器
 *
 */
class Admin_NewsController extends Zend_Controller_Action
{
    //新闻表模型
    private $_news;
    //评论表模型
    private $_comment;
    //工程配置对象
    private $_config;
    //初始控制器
    public function init ()
    {
        //初始新闻表模型
        $this->_news = new Model_DbTable_News();
        //初始化评论表
        $this->_comment = new Model_DbTable_Comment();
        //获取工程配置文件
        $this->_config = Zend_Registry::get('config');
        $this->view->config = $this->_config;
    }
    /**
     * 设置页面信息
     *
     * @param string $title
     * @param string $position
     * @param string $layout
     */
    private function _setPageInfo ($title, $position, $layout = 'admin')
    {
        //主题
        $this->view->title = $title . '-' . $this->_config['pageInfo']['default']['title'];
        //当前页面位置
        $this->view->position = $this->_config['pageInfo']['default']['title'] . '　>>　管理中心　>>　' . $position;
        //页面布局
        if ($layout == null) {
            $this->_helper->layout->disableLayout();
        } else {
            $this->_helper->layout->setLayout($layout);
        }
    }
    /**
     * 新闻管理首页
     *
     */
    public function indexAction ()
    {
        //自动转向新闻添加页面
        $this->_redirect('/admin/news/add');
    }
    /**
     * 添加和更改新闻
     *
     */
    public function addAction ()
    {
        //用于保存提示信息
        $msg = '';
        //用于保存表单字段填充内容的数组
        $pData = null;
        //获取新闻ID，不为空则表示进行编辑操作  
        $newsid = $this->_request->getParam('newsid');
        $this->view->newsid = $newsid;
        //页面标题
        $title = '添加新闻信息';
        //如果新闻ID不为空，则查询出要编辑新闻信息的内容
        if (isset($newsid) && $newsid != null) {
            //要编辑的新闻信息
            $news = $this->_news->findById($newsid);
            //将新闻信息赋值给填充数组
            $pData['newsid'] = $newsid;
            $pData['title'] = $news['title'];
            $pData['flag'] = $news['flag'];
            $pData['istodaycommend'] = $news['istodaycommend'];
            $pData['author'] = $news['author'];
            $pData['source'] = $news['source'];
            $pData['relativetag'] = $news['relativetag'];
            $pData['tags'] = $news['tags'];
            $pData['content'] = str_replace($this->_config['pageInfo']['default']['baseUrlStr_replace'], $this->_config['pageInfo']['default']['baseUrlStr'], $news['content']);
            //页面标题
            $title = '更改新闻信息';
        }
        //session命名空间
        $sessionNamespace = Zend_Registry::get('sessionNamespace');
        //如果提交数据则进行添加或更改操作
        if ($this->_request->isPost()) {
            //判断表单是否重复提交
            if ($this->_request->getParam('postMark') == $sessionNamespace->postMark) {
                //获取表单提交的数据
                $formData = $this->_request->getPost();
                //在已有数据中查找当前提交的新闻信息，从而判断内容是否添加重复
                $nowTitle = $this->_news->findByTitle(trim($formData['title']));
                //判断内容是否添加重复，编辑内容的情况除外
                if ($nowTitle == null || ($nowTitle != null && $newsid != null)) {
                    //文件上传
                    $adapter = new Zend_File_Transfer_Adapter_Http();
                    $upfileName = '';
                    if ($adapter->getFileName('imagename') != null) {
                        $upfileDir = $this->_config['pageInfo']['default']['upfileDir'];
                        if (! is_dir($upfileDir)) {
                            mkdir($upfileDir);
                        }
                        $adapter->setDestination($upfileDir);
                        $arrayOldFileName = array_reverse(explode('.', basename($adapter->getFileName('imagename'))));
                        $extendsFileName = '.' . $arrayOldFileName[0];
                        $upfileName = date('YmdHis') . mt_rand(1000, 9999) . $extendsFileName;
                        $upfilePathAndName = $upfileDir . '/' . $upfileName;
                        $adapter->addFilter('Rename', array('target' => $upfilePathAndName , 'overwrite' => true), 'imagename');
                        $adapter->addValidator('Size', false, array('min' => '0kB' , 'max' => '1MB' , 'bytestring' => false , 'messages' => '·您所上传的图片不能超过1M'));
                        $adapter->addValidator('Extension', false, array('gif' , 'jpg' , 'bmp' , 'messages' => '·您上传的文件类型不允许'));
                    }
                    if ($adapter->getFileName('imagename') != null && ! $adapter->receive()) {
                        //文件上传失败信息
                        foreach ($adapter->getMessages() as $message) {
                            $msg .= $message . '<br />';
                        }
                        //如果上传失败，则将数据回填到表单
                        $pData = $formData;
                    } else {
                        //今日推荐新闻
                        if (isset($formData['istodaycommend']) && $formData['istodaycommend'] == "1") {
                            $istodaycommend = true;
                        } else {
                            $istodaycommend = false;
                        }
                        //新闻内容
                        $content = str_replace($this->_config['pageInfo']['default']['baseUrlStr'], $this->_config['pageInfo']['default']['baseUrlStr_replace'], $formData['content']);
                        //更改新闻
                        if (isset($newsid) && $newsid != null) {
                            //如果更改上传缩略图并且原来有缩略图，则删除原来图片
                            if ($adapter->getFileName('imagename') != null) {
                                if ($news['imagename'] != '' && file_exists($upfileDir . '/' . $news['imagename'])) {
                                    unlink($upfileDir . '/' . $news['imagename']);
                                }
                                $imagename = $upfileName;
                            } else {
                                $imagename = $news['imagename'];
                            }
                            //变更内容所组成的数组
                            $arrayUpdate = array('title' => $formData['title'] , 'content' => $content , 'uncontent' => $this->view->unhtml($formData['content']) , 'flag' => $formData['flag'] , 'istodaycommend' => $istodaycommend , 'author' => $formData['author'] , 'imagename' => $imagename , 'source' => $formData['source'] , 'relativetag' => $formData['relativetag'] , 'tags' => $formData['tags']);
                            //执行更改
                            $this->_news->update($arrayUpdate, $newsid);
                            //数据回填到表单
                            $pData = $formData;
                            //更改成功提示信息
                            $msg = '·新闻更改成功';
                        } else {
                            //添加内容数组
                            $arrayInsert = array('title' => $formData['title'] , 'content' => $content , 'uncontent' => $this->view->unhtml($formData['content']) , 'addtime' => date('Y-m-d H:i:s') , 'flag' => $formData['flag'] , 'istodaycommend' => $istodaycommend , 'author' => $formData['author'] , 'browse' => 0 , 'imagename' => $upfileName , 'source' => $formData['source'] , 'relativetag' => $formData['relativetag'] , 'tags' => $formData['tags']);
                            //执行添加
                            $this->_news->insert($arrayInsert);
                            //添加成功提示信息
                            $msg = '新闻添加成功';
                        }
                    }
                } else {
                    //如果内容重复则将数据回填到表单
                    $pData = $formData;
                    //提示主题已经添加
                    $msg = '·该主题已经添加';
                }
            } else {
                //提示表单不能重复提交
                $msg = '·不允许重复提交表单';
            }
        }
        //视图变量赋值
        $this->view->msg = $msg;
        $this->view->pData = $pData;
        //表单提交标识
        $randNum = mt_rand(0, 1000000);
        $sessionNamespace->postMark = $randNum;
        $this->view->postMark = $randNum;
        //设置页面信息
        $this->_setPageInfo($title, $title);
    }
    /**
     *　待更改的新闻信息列表
     *
     */
    public function listAction ()
    {
        //获取页面参数
        $page = $this->_request->getParam('page');
        $flag = $this->_request->getParam('flag');
        $lt = $this->_request->getParam('lt');
        //每页显示记录数
        $pageSize = 20;
        //查询结果分页
        $paginator = $this->_news->findByPage($flag, $lt, $page, $pageSize);
        //传递页面参数
        $this->view->flag = $flag;
        $this->view->lt = $lt;
        $this->view->paginator = $paginator;
        //设置页面信息
        $title = '待更改的新闻信息列表';
        $this->_setPageInfo($title, $title);
    }
    /**
     * 查询新闻信息
     *
     */
    public function searchAction ()
    {
        //获取页面参数
        $page = $this->_request->getParam('page');
        $keywords = urldecode($this->_request->getParam('keywords'));
        $flag = $this->_request->getParam('flag');
        $fromYear = $this->_request->getParam('fromYear');
        $fromMonth = $this->_request->getParam('fromMonth');
        $toYear = $this->_request->getParam('toYear');
        $toMonth = $this->_request->getParam('toMonth');
        $ftitle = $this->_request->getParam('ftitle');
        $fcontent = $this->_request->getParam('fcontent');
        //开始查询并返回查询结果
        if ($keywords != null && trim($keywords) != '') {
            //查询表单回填数据
            $fData = array();
            $fData['keywords'] = $keywords;
            $fData['flag'] = $flag;
            $fData['fromYear'] = $fromYear;
            $fData['fromMonth'] = $fromMonth;
            $fData['toYear'] = $toYear;
            $fData['toMonth'] = $toMonth;
            $fData['ftitle'] = $ftitle;
            $fData['fcontent'] = $fcontent;
            $this->view->fData = $fData;
            //时间段
            if ($fromYear != null && $fromYear != '') {
                $fromTime = $fromYear . '-' . $fromMonth . '-00 00:00:00';
                $toTime = $toYear . '-' . $toMonth . '-00 00:00:00';
            } else {
                $fromTime = null;
                $toTime = null;
            }
            //从主题中查询
            if (! isset($ftitle) || $ftitle != 1) {
                $ftitle = null;
            }
            //从内容中查询
            if (! isset($fcontent) || $fcontent != 1) {
                $fcontent = null;
            }
            //页码
            if ($page == null) {
                $page = 1;
            }
            //每页显示的数据
            $pageSize = 20;
            //查询结果分页
            $paginator = $this->_news->findByPageAndLike($keywords, $flag, $fromTime, $toTime, $ftitle, $fcontent, $page, $pageSize);
            //视图变量赋值
            $this->view->flag = $flag;
            $this->view->paginator = $paginator;
            //判断是否显示查询结果
            $isShow = 'T';
            $this->view->isShow = $isShow;
        }
        //设置页面信息
        $title = '查询新闻信息';
        $this->_setPageInfo($title, $title);
    }
    /**
     * 删除新闻
     *
     */
    public function deleteAction ()
    {
        //页面编码
        header('content-type:text/html; charset=utf-8');
        //去掉视图和布局
        $this->_helper->layout()->disableLayout();
        $this->_helper->viewRenderer->setNoRender();
        //接收页面参数
        $id = $this->_request->getParam('id');
        $flag = $this->_request->getParam('flag');
        $isSearch = $this->_request->getParam('isSearch');
        $arrayID = null;
        //缩略图保存路径
        $upfileDir = $this->_config['pageInfo']['default']['upfileDir'];
        //删除缩略图
        if (isset($id) && $id != null) {
            $arrayID = array($id);
            $news = $this->_news->findById($id);
            if ($news['imagename'] != '' && file_exists($upfileDir . '/' . $news['imagename'])) {
                unlink($upfileDir . '/' . $news['imagename']);
            }
        } else {
            $arrayTmpID = array();
            foreach ($this->_request->getPost() as $newsid) {
                if (is_numeric($newsid)) {
                    array_push($arrayTmpID, $newsid);
                    $news = $this->_news->findById($newsid);
                    if ($news['imagename'] != '' && file_exists($upfileDir . '/' . $news['imagename'])) {
                        unlink($upfileDir . '/' . $news['imagename']);
                    }
                }
            }
            if (count($arrayTmpID) > 0) {
                $arrayID = $arrayTmpID;
            }
        }
        //执行删除
        if ($arrayID != null) {
            $this->_news->delete($arrayID);
            //删除所有评论
            $where = $this->_comment->getAdapter()->quoteInto('flag = 1') . $this->_comment->getAdapter()->quoteInto(' and title_id in(?)', $arrayID);
            $this->_comment->delete($where);
        }
        //返回
        if ($isSearch != null && $isSearch == 't') {
            $keywords = urlencode($this->_request->getParam('keywords'));
            $fromYear = $this->_request->getParam('fromYear');
            $fromMonth = $this->_request->getParam('fromMonth');
            $toYear = $this->_request->getParam('toYear');
            $toMonth = $this->_request->getParam('toMonth');
            $ftitle = $this->_request->getParam('ftitle');
            $fcontent = $this->_request->getParam('fcontent');
            $this->_redirect('/admin/news/search/page/1/keywords/' . $keywords . '/flag/' . $flag . '/fromYear/' . $fromYear . '/fromMonth/' . $fromMonth . '/toYear/' . $toYear . '/toMonth/' . $toMonth . '/ftitle/' . $ftitle . '/fcontent/' . $fcontent);
        } else {
            $this->_redirect('/admin/news/list/flag/' . $flag . '/lt/0/page/1');
        }
        exit();
    }
}