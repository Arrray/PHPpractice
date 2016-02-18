<?php
/*********************************************
 * @ 说明：PHP动态生成静态页类
 *
 * @ 作者：我的中文名叫 刘中华，我的英文名叫 lzh 
 * @ E-mail:jlnu_lzh@126.com
 * @ Tel：15043191896  
 *
 * @ 使用方法
 *
 * session_start();
 * require_once 'library/MakeStaticPage.php';
 *
 * $makeStaticPage = new MakeStaticPage('pages', $_SERVER['REQUEST_URI'], 3600);
 * $nowPage = basename($_SERVER['PHP_SELF']);
 *
 * $pageArray = array{    //始终不显示静态页的php页面
 *    'logout.php'
 * };
 *
 * if (isset($_SESSION['unc']) && $_SESSION['unc']!=''){    //用户登录后指定不显示静态页的php页面
 *     $sessionArray = array(
 *        'userInfo.php'
 * 	   );
 * }else{
 *     $sessionArray = null;
 * }
 *
 * if ($makeStaticPage->isLocationToStaticPage($nowPage, $pageArray, $sessionArray)) {
 *     header('location:' . $makeStaticPage->getStaticPagePath());
 *     exit();
 * }
 *
 * $makeStaticPage->pageBegin(); 
 * 页面内容
 
 
 
 
 
 * $makeStaticPage->pageEnd();
 *********************************************/
class MakeStaticPage
{
    var $dirName;
    var $requestUrl;
    var $defaultIndexPage;
    var $staticPageExtendsName;
    var $cacheTime;
    /*
	 * @ 方法说明：
	 *   构造方法，类的初始化
	 *
	 * @ 参数说明：
	 *   $dirName：保存静态页的目录
	 *   $requestUrl：请求页面地址 
	 *   $defaultIndexPage：默认主页
	 *   $staticPageExtendsName：静态页扩展名
	 *   $cacheTime：重新生成静态页的时间
	 */
    function MakeStaticPage ($dirName, $requestUrl, $cacheTime = -1, $defaultIndexPage = 'index', $staticPageExtendsName = '.shtml')
    {
        $this->dirName = $dirName;
        $this->requestUrl = $requestUrl;
        $this->defaultIndexPage = $defaultIndexPage;
        $this->staticPageExtendsName = $staticPageExtendsName;
        $this->cacheTime = $cacheTime;
    }
    /*
	 * @ 方法说明：
	 *   根据请求的URL获取静态页的名称
	 *
	 * @ 参数说明：
	 *   $requestUrl：请求页面地址
	 *   $defaultIndexPage：默认主页
	 *   $staticPageExtendsName：静态页扩展名
	 */
    function getStaticPageName ($requestUrl, $defaultIndexPage = 'index', $staticPageExtendsName = '.shtml')
    {
        $arrayUrl = parse_url($requestUrl); //解析请求地址
        $path = $arrayUrl['path']; //请求地址的路径部分
        $arrayTmpPath = array_reverse(explode('/', $path));
        $mainName = str_replace('.php', '', $arrayTmpPath[0]); //获取请求页面的主名
        if ($mainName == '') {
            $mainName = $defaultIndexPage;
        }
        $query = $arrayUrl['query']; //请求地址的参数部分
        $arrayQueryString = array();
        parse_str($query, $arrayQueryString);
        $arrayQueryStringValue = array_values($arrayQueryString);
        $queryString = '';
        foreach ($arrayQueryStringValue as $tmpQuery) { //提取所有参数的值并用'-'号连接
            $queryString .= '-' . $tmpQuery;
        }
        return $mainName . $queryString . $staticPageExtendsName;
    }
    /*
	 * @ 方法说明：
	 *   获取生成静态页的全部路径
	 */
    function getStaticPagePath ()
    {
        return $this->dirName . '/' . $this->getStaticPageName($this->requestUrl, $this->defaultIndexPage, $this->staticPageExtendsName); //根据当前URL请求，返回生成静态页的完整路径
    }
    /*
	 * @ 方法说明：
	 *   定义生成静态页的开始位置
	 */
    function pageBegin ()
    {
        ob_start();
    }
    /*
	 * @ 方法说明：
	 *   定义生成静态页的结束位置
	 */
    function pageEnd ()
    {
        if (! is_dir($this->dirName)) { //判断保存静态页面的目录是否存在，不存在则创建
            mkdir($this->dirName);
        }
        $content = ob_get_contents(); //获取请求URL的静态内容，并保存到静态页面中
        $fp = fopen($this->getStaticPagePath(), 'w');
        fwrite($fp, $content);
        ob_flush();
    }
    /*
	 * @ 方法说明：
	 *   重定向到静态页的条件，其他条件写程序时候指定
	 */
    function isLocationToStaticPage ($nowPage, $pageArray = null, $sessionArray = null)
    {
        $path = $this->getStaticPagePath();
        //如果与当前请求的静态文件存在或者静态文件上次被修改的时间与缓存时间的和小于当前时间则返回true
        if (! file_exists($path) || $this->cacheTime != - 1 && time() - filemtime($path) > $this->cacheTime) {
            return false;
        } else {
            if ($pageArray != null) {
                foreach ($pageArray as $tmpNowPage) { //这里不用array_search()的原因是第一个元素下标为0，if语句判断时也是false
                    if (trim($tmpNowPage) == $nowPage) {
                        return false;
                        exit();
                    }
                }
            }
            if ($sessionArray != null) {
                foreach ($sessionArray as $tmpSessionArray) {
                    if (trim($tmpSessionArray) == $nowPage) {
                        return false;
                        exit();
                    }
                }
            }
            return true;
        }
    }
}



