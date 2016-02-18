<?php
/**********************************************************************
*
*  �� �ƣ�Lzh Framework   
*  �� �ߣ����л�
*  Email��jlnu_lzh@126.com
*  Tel��  15043191896
*  �� �������ݿ���� | Smarty���� | ���ﳵ | ��̬���ɾ�̬ҳ | ��Ŀ������ | FCKEditor���߱༭��
*
***************************����Ϊ��̬ҳ����****************************/
session_start();
$arrayIni = parse_ini_file('config/lzhConfig.ini');

//require_once 'library/MakeStaticPage.php';
//
//
//$makeStaticPage = new MakeStaticPage($arrayIni['dirName'], $_SERVER['REQUEST_URI'], $arrayIni['cacheTime'], $arrayIni['defaultIndexPage'], $arrayIni['staticPageExtendsName']);
//
//$nowPage = basename($_SERVER['PHP_SELF']);
//
//$pageArray = explode(',', $arrayIni['pageArray']);    //ʼ�ղ���ʾ��̬ҳ��phpҳ��
//
//if (isset($_SESSION['unc']) && $_SESSION['unc']!=''){    //�û���¼��ָ������ʾ��̬ҳ��phpҳ��
//    $sessionArray = explode(',', $arrayIni['sessionArray']);
//}else{
//    $sessionArray = null;
//}
//
//if ($makeStaticPage->isLocationToStaticPage($nowPage, $pageArray, $sessionArray)) {
//    header('location:' . $makeStaticPage->getStaticPagePath());    //����ǰ�����ҳ�涨λ����֮��Ӧ�ľ�̬ҳ
//	exit();
//}
//
//$makeStaticPage->pageBegin();
/*************************************************************************/

require_once 'library/ConnDB.php';
require_once 'library/AdminDB.php';
require_once 'library/PageDB.php';
require_once 'library/SmartyConfig.php';
require_once 'library/Cart.php';
require_once 'library/Util.php';

$connDB = new ConnDB($arrayIni['dbType'] ,$arrayIni['host'] ,$arrayIni['userName'] ,$arrayIni['password'] ,$arrayIni['dbName'] ,$arrayIni['isDebug']);

$connID = $connDB->getConnID();

$adminDB = new AdminDB();

$pageDB = new PageDB();

$smarty = new SmartyConfig();

$util =  new Util();
$smarty->register_object('util', $util, null, false);




/*********************����ҳ�����¼����������*****************************
 * $connDB->closeConnID();
 * $makeStaticPage->pageEnd();
***************************************************************************/
