<?php
/**********************************************************************
*
*  名 称：Lzh Framework   
*  作 者：刘中华
*  Email：jlnu_lzh@126.com
*  Tel：  15043191896
*  描 述：数据库操作 | Smarty操作 | 购物车 | 动态生成静态页 | 项目工具类 | FCKEditor在线编辑器
*
***************************以下为静态页处理****************************/
session_start();
$arrayIni = parse_ini_file('config/lzhConfig.ini');

//require_once 'library/MakeStaticPage.php';
//
//
//$makeStaticPage = new MakeStaticPage($arrayIni['dirName'], $_SERVER['REQUEST_URI'], $arrayIni['cacheTime'], $arrayIni['defaultIndexPage'], $arrayIni['staticPageExtendsName']);
//
//$nowPage = basename($_SERVER['PHP_SELF']);
//
//$pageArray = explode(',', $arrayIni['pageArray']);    //始终不显示静态页的php页面
//
//if (isset($_SESSION['unc']) && $_SESSION['unc']!=''){    //用户登录后指定不显示静态页的php页面
//    $sessionArray = explode(',', $arrayIni['sessionArray']);
//}else{
//    $sessionArray = null;
//}
//
//if ($makeStaticPage->isLocationToStaticPage($nowPage, $pageArray, $sessionArray)) {
//    header('location:' . $makeStaticPage->getStaticPagePath());    //将当前请求的页面定位到与之对应的静态页
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




/*********************需在页面最下加上如下语句*****************************
 * $connDB->closeConnID();
 * $makeStaticPage->pageEnd();
***************************************************************************/
