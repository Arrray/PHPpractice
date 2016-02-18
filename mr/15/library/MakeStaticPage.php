<?php
/*********************************************
 * @ ˵����PHP��̬���ɾ�̬ҳ��
 *
 * @ ���ߣ��ҵ��������� ���л����ҵ�Ӣ������ lzh 
 * @ E-mail:jlnu_lzh@126.com
 * @ Tel��15043191896  
 *
 * @ ʹ�÷���
 *
 * session_start();
 * require_once 'library/MakeStaticPage.php';
 *
 * $makeStaticPage = new MakeStaticPage('pages', $_SERVER['REQUEST_URI'], 3600);
 * $nowPage = basename($_SERVER['PHP_SELF']);
 *
 * $pageArray = array{    //ʼ�ղ���ʾ��̬ҳ��phpҳ��
 *    'logout.php'
 * };
 *
 * if (isset($_SESSION['unc']) && $_SESSION['unc']!=''){    //�û���¼��ָ������ʾ��̬ҳ��phpҳ��
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
 * ҳ������
 
 
 
 
 
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
	 * @ ����˵����
	 *   ���췽������ĳ�ʼ��
	 *
	 * @ ����˵����
	 *   $dirName�����澲̬ҳ��Ŀ¼
	 *   $requestUrl������ҳ���ַ 
	 *   $defaultIndexPage��Ĭ����ҳ
	 *   $staticPageExtendsName����̬ҳ��չ��
	 *   $cacheTime���������ɾ�̬ҳ��ʱ��
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
	 * @ ����˵����
	 *   ���������URL��ȡ��̬ҳ������
	 *
	 * @ ����˵����
	 *   $requestUrl������ҳ���ַ
	 *   $defaultIndexPage��Ĭ����ҳ
	 *   $staticPageExtendsName����̬ҳ��չ��
	 */
    function getStaticPageName ($requestUrl, $defaultIndexPage = 'index', $staticPageExtendsName = '.shtml')
    {
        $arrayUrl = parse_url($requestUrl); //���������ַ
        $path = $arrayUrl['path']; //�����ַ��·������
        $arrayTmpPath = array_reverse(explode('/', $path));
        $mainName = str_replace('.php', '', $arrayTmpPath[0]); //��ȡ����ҳ�������
        if ($mainName == '') {
            $mainName = $defaultIndexPage;
        }
        $query = $arrayUrl['query']; //�����ַ�Ĳ�������
        $arrayQueryString = array();
        parse_str($query, $arrayQueryString);
        $arrayQueryStringValue = array_values($arrayQueryString);
        $queryString = '';
        foreach ($arrayQueryStringValue as $tmpQuery) { //��ȡ���в�����ֵ����'-'������
            $queryString .= '-' . $tmpQuery;
        }
        return $mainName . $queryString . $staticPageExtendsName;
    }
    /*
	 * @ ����˵����
	 *   ��ȡ���ɾ�̬ҳ��ȫ��·��
	 */
    function getStaticPagePath ()
    {
        return $this->dirName . '/' . $this->getStaticPageName($this->requestUrl, $this->defaultIndexPage, $this->staticPageExtendsName); //���ݵ�ǰURL���󣬷������ɾ�̬ҳ������·��
    }
    /*
	 * @ ����˵����
	 *   �������ɾ�̬ҳ�Ŀ�ʼλ��
	 */
    function pageBegin ()
    {
        ob_start();
    }
    /*
	 * @ ����˵����
	 *   �������ɾ�̬ҳ�Ľ���λ��
	 */
    function pageEnd ()
    {
        if (! is_dir($this->dirName)) { //�жϱ��澲̬ҳ���Ŀ¼�Ƿ���ڣ��������򴴽�
            mkdir($this->dirName);
        }
        $content = ob_get_contents(); //��ȡ����URL�ľ�̬���ݣ������浽��̬ҳ����
        $fp = fopen($this->getStaticPagePath(), 'w');
        fwrite($fp, $content);
        ob_flush();
    }
    /*
	 * @ ����˵����
	 *   �ض��򵽾�̬ҳ����������������д����ʱ��ָ��
	 */
    function isLocationToStaticPage ($nowPage, $pageArray = null, $sessionArray = null)
    {
        $path = $this->getStaticPagePath();
        //����뵱ǰ����ľ�̬�ļ����ڻ��߾�̬�ļ��ϴα��޸ĵ�ʱ���뻺��ʱ��ĺ�С�ڵ�ǰʱ���򷵻�true
        if (! file_exists($path) || $this->cacheTime != - 1 && time() - filemtime($path) > $this->cacheTime) {
            return false;
        } else {
            if ($pageArray != null) {
                foreach ($pageArray as $tmpNowPage) { //���ﲻ��array_search()��ԭ���ǵ�һ��Ԫ���±�Ϊ0��if����ж�ʱҲ��false
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



