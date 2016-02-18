<?php
/**
 * 公共信息处理控制器
 *
 */
class CommonController extends Zend_Controller_Action
{
    //Zend_Config对象
    private $_config;
    /**
     * 初始控制器
     *
     */
    public function init ()
    {
        $this->_config = Zend_Registry::get('config');
        $this->view->config = $this->_config;
    }
    /**
     * 公共信息首页
     *
     */
    public function indexAction ()
    {
        $this->_redirect('/');
        exit();
    }
    /**
     * 获取城市下拉列表项目
     *
     */
    public function cityAction ()
    {
        header('content-type:text/html; charset=utf-8');
        $this->_helper->layout->disableLayout();
        $this->_helper->viewRenderer->setNoRender();
        //
        $pindex = $this->_request->getParam('pindex');
        $cityStr = '';
        if ($pindex == '-1') {
            $cityStr .= '<option value="-1">请选择城市</option>';
        } else {
            $cityArray = Plugin_Util_ProvinceAndCityFactory::getCityByProvinceArrayIndex($pindex);
            $count = count($cityArray);
            for ($i = 0; $i < $count; $i ++) {
                $cityStr .= '<option value="' . $i . '">' . $cityArray[$i] . '</option>';
            }
        }
        echo $cityStr;
    }
    /**
     * 生成验证码
     *
     */
    public function vcodeAction ()
    {
        $this->_helper->layout->disableLayout();
        $this->_helper->viewRenderer->setNoRender();
        //
        $w = intval($this->_request->getParam('w'));
        $h = intval($this->_request->getParam('h'));
        $t = intval($this->_request->getParam('t'));
        $codeStr = "";
        $codeArray = array('0' , '1' , '2' , '3' , '4' , '5' , '6' , '7' , '8' , '9' , 'A' , 'B' , 'C' , 'D' , 'E' , 'F' , 'G' , 'H' , 'I' , 'J' , 'K' , 'L' , 'M' , 'N' , 'O' , 'P' , 'Q' , 'R' , 'S' , 'T' , 'U' , 'V' , 'W' , 'X' , 'Y' , 'Z');
        for ($i = 0; $i < 4; $i ++) {
            $codeStr .= $codeArray[mt_rand(0, 35)];
        }
        $sessionNamespace = new Zend_Session_Namespace('Project');
        $sessionNamespace->validateCode = $codeStr;
        $validateCode = new Plugin_Util_ValidateCode($w, $h, $codeStr, $t);
        $validateCode->show();
    }
    /**
     * 判断验证码是否正确
     *
     */
    public function checkVcodeAction ()
    {
        header('content-type:text/html; charset=utf-8');
        $this->_helper->layout->disableLayout();
        $this->_helper->viewRenderer->setNoRender();
        $sessionNamespace = new Zend_Session_Namespace('Project');
        $result = '';
        if (strtolower($sessionNamespace->validateCode) == strtolower($this->_request->getParam('vcode'))) {
            $result = 'Y';
        } else {
            $result = 'N';
        }
        echo $result;
    }
    /**
     * 在线编辑器上传图片
     */
    public function uploadAction ()
    {
        header('content-type:text/html; charset=utf-8');
        if ($this->_request->isPost()) {
            //图片保存目录
            $upfileDir = realpath($this->_config['pageInfo']['default']['upfileDir']);
            //网站根目录
            $baseUrl = $this->view->baseUrl();
            $upfileName = $_FILES["upfile"]["name"];
            $array = explode('.', $upfileName);
            $array = array_reverse($array);
            $newFileName = date("YmdHis") . mt_rand(1000, 9999) . '.' . $array[0];
            if (! is_dir($upfileDir)) {
                mkdir($upfileDir);
            }
            $upfileNameAndDir = $upfileDir . "/" . $newFileName;
            if (@move_uploaded_file($_FILES["upfile"]["tmp_name"], $upfileNameAndDir)) {
                echo '<script language="javascript">
                          parent.window.frames["editor"].focus();
                          parent.window.frames["editor"].document.selection.createRange();
                          parent.window.frames["editor"].document.execCommand("InsertImage", false, "' . $baseUrl . str_replace('.', '', $this->_config['pageInfo']['default']['upfileDir']) . '/' . $newFileName . '");
                          parent.document.getElementById("uploadLayer").style.display="none";	
                      </script>';
            } else {
                echo '<script>alert("图片上传失败");</script>';
            }
        }
        echo '
        <script language="javascript">
            function lzhEditor_chkinput(form)
            {
                if(form.upfile.value==""){
                    alert("请选择要插入的图片！");
                    form.upfile.focus();
                    return false; 
                }
                var v=form.upfile.value;
                var extsName=v.substring(v.lastIndexOf(".")+1).toLowerCase();
                if(!(extsName=="gif" || extsName=="jpg" || extsName=="png" || extsName=="bmp")){
                    alert("插入的图片只能为gif、jpg、png或bmp格式！");
                    form.upfile.focus();
                    return false; 
                }
                return true;
            }    
        </script>
        <body style="margin:0px; padding:10px; background-color:#F2F9F9; border:0px;">
                <form name="form_lzhEditor" method="post" action="" enctype="multipart/form-data" style="margin:0px; padding:0px; font-size:14px;" onsubmit="return lzhEditor_chkinput(this)">
                    <br/>
                    图片地址：<br/><input type="file" name="upfile" id="upfile"  size="30" style="font-size:12px; border:1px solid #777777; font-family:宋体; height:18px;"/><br/><br/><input type="submit" value="插入" />
                </form>
              </body>';
        $this->_helper->layout->disableLayout();
        $this->_helper->viewRenderer->setNoRender();
    }
    /**
     * 文件下载
     * 
     */
    public function downloadAction ()
    {
        $filePath = urldecode($this->_request->getParam('f'));
        $filename = basename($filePath);
        if (! file_exists($filePath)) {
            header('content-type:text/html; charset=utf-8');
            echo "<script>alert('对不起,暂时停止该文件下载！'); history.back();</script>";
            exit();
        }
        $fp = fopen($filePath, "r");
        header("content-type:application/octet-stream");
        header("accept-ranges:bytes");
        header("accept-length:" . filesize($filePath));
        header("content-disposition:attachment;filename=" . $filename);
        echo fread($fp, filesize($filePath));
        fclose($fp);
        $this->_helper->layout->disableLayout();
        $this->_helper->viewRenderer->setNoRender();
    }
    /**
     * 打印
     *
     */
    public function printAction ()
    {
        $titleid = $this->_request->getParam('titleid');
        $flag = $this->_request->getParam('flag');
        //0-新闻　1-网络编程　2-专题讲座　3-美工设计　4-数据库
        switch ($flag) {
            case 0:
                $news = new Model_DbTable_News();
                $content = $news->findById($titleid, true);
                break;
            case 1:
                $program = new Model_DbTable_Program();
                $content = $program->findById($titleid, true);
                break;
            case 2:
                $dissertaion = new Model_DbTable_Dissertation();
                $content = $dissertaion->findById($titleid, true);
                break;
            case 3:
                $design = new Model_DbTable_Design();
                $content = $design->findById($titleid, true);
                break;
            case 4:
                $db = new Model_DbTable_Db();
                $content = $db->findById($titleid, true);
                break;
            case 5:
                $server = new Model_DbTable_Server();
                $content = $server->findById($titleid, true);
                break;
        }
        $this->view->content = $content;
        //
        $this->_helper->layout->disableLayout();
    }
    /**
     * 内容查询
     *
     */
    public function searchAction ()
    {
        //获取页面提交参数
        $keyWord = urldecode($this->_request->getParam('keyWord'));
        $page = $this->_request->getParam('page');
        $this->view->keyWord = urlencode($keyWord);
        //关键字数组
        $keywordsStrArray = explode(' ', $keyWord);
        $this->view->keywordsStrArray = $keywordsStrArray;
        //开始查询
        $array = array();
        //新闻
        $model = new Model_DbTable_News();
        $infos = $model->findByLike($keyWord);
        $tmpArray = array();
        foreach ($infos as $info) {
            $tmpArray['flag'] = 0;
            $tmpArray['id'] = $info['id'];
            $tmpArray['title'] = $info['title'];
            $tmpArray['uncontent'] = $info['uncontent'];
            $tmpArray['addtime'] = $info['addtime'];
            array_push($array, $tmpArray);
        }
        //分页参数
        if ($page == null) {
            $page = 1;
        }
        $pageRange = 10;
        $itemCountPerPage = 10;
        //实例并构建Zend_Paginator对象
        $paginatorAdapter = new Zend_Paginator_Adapter_Array($array);
        $paginator = new Zend_Paginator($paginatorAdapter);
        $paginator->setPageRange($pageRange)->setItemCountPerPage($itemCountPerPage)->setCurrentPageNumber($page);
        $this->view->paginator = $paginator;
        //设置布局
        $this->_helper->layout->disableLayout();
        //页面信息
        $this->view->title = '内容查询-' . $this->_config['pageInfo']['default']['title'];
    }
}