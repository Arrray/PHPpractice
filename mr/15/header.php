<?php
require_once 'lzh.inc.php';

$requestPageName = basename ( $_SERVER ['PHP_SELF'] );

switch ($requestPageName) {
	case 'index.php' :
		$title = '明日网上书店 - 国内信誉一流的IT类图书网上专营店，最全面、最资深的网上书店！';
		break;
	case 'bookinfo.php':
        $topbookinfo = $adminDB->executeSQL("select bookname from tb_bookinfo where id='".$_GET['bid']."'", $connID);
	    $title = '明日网上书店 - '.$topbookinfo[0]['bookname'];
        break;
	case 'listbook.php':
        $topsmalltypeinfo = $adminDB->executeSQL("select typename from tb_smalltype where id='".$_GET['stid']."'", $connID);
	    $title = '明日网上书店 - ' . $topsmalltypeinfo[0]['typename'] . ' 类图书';
        break; 
	case 'listsepbook.php':
        $topt = $_GET['t'];
	    if($topt == 'new')
        {
            $title = '明日网上书店 - 新书推荐';
        }
        elseif ($topt == 'sepprice')
        {
            $title = '明日网上书店 - 特价图书';
        }
        elseif ($topt == 'hotsell')
        {
            $title = '明日网上书店 - 热卖图书';
        }
        elseif ($topt == 'term')
        {
            $title = '明日网上书店 - 期书介绍';
        }
        elseif ($topt == 'mrbook')
        {
            $title = '明日网上书店 - 明日图书推荐';
        }
	case 'mrbookphinfo.php':
        $title = '明日网上书店 - 明日图书排行详细信息';
	    break;
	case 'listreadbook.php' :
		$title = '明日网上书店 - 试读下载';
		break;
	case 'cart.php' :
		$title = '明日网上书店 - 购物车';
		break;	
	case 'telllogin.php' :
		$title = '明日网上书店 - 登录向导';
		break;
	case 'login.php' :
		$title = '明日网上书店 - 会员登录';
		break;	
	case 'getbuyuserinfo.php' :
		$title = '明日网上书店 - 填写收货人详细信息';
		break;
	case 'deforder.php' :
		$title = '明日网上书店 - 确认订购信息';
		break;		
	case 'selectpaytype.php' :
		$title = '明日网上书店 - 选择支付方式';
		break;		
	case 'defpay.php' :
		$title = '明日网上书店 - 确认支付方式并支';
		break;	
	case 'advancedsearch.php' :
		$title = '明日网上书店 - 图书高级搜索';
		break;	
	case 'search.php' :
		$title = '明日网上书店 - 图书搜索结果';
		break;			
	case 'mrbookph.php' :
		$title = '明日网上书店 - 图日图书排行';
		break;
	case 'cxsx.php' :
		$title = '明日网上书店 - 网上畅销书询';
		break;
	case 'cxsxinfo.php' :
		$title = '明日网上书店 - 网上畅销书询详细信息';
		break;		
	case 'pub.php' :
		$title = '明日网上书店 - 出版社分类列表';
		break;
	case 'pubbook.php' :
		$title = '明日网上书店 - 出版社分类图书列表';
		break;	
	case 'tell.php' :
		$title = '明日网上书店 - 新闻公告';
		break;								
	case 'tellinfo.php' :
		$title = '明日网上书店 - 新闻公告详细信息';
		break;	
	case 'help.php' :
		$title = '明日网上书店 - 帮助指南';
		break;	
		
}
$smarty->assign('title', $title);
//
if(isset($_SESSION['unc']) && $_SESSION['unc']!='')
{
    $smarty->assign('isLogin', 'T');
    $smarty->assign('unc', $_SESSION['unc']);
}
//
function getSidByBid($params)
{
    extract($params);
    global $adminDB, $connID;
    $stype = $adminDB->executeSQL("select id from tb_smalltype where bigtypeid='".$bid."' order by addtime limit 0, 1", $connID);
    return $stype[0]['id'];
}
$smarty->register_function('getSidByBid', 'getSidByBid');
//
$bigtypeDhs = $adminDB->executeSQL("select id, typename from tb_bigtype order by addtime", $connID);
$smarty->assign('bigtypeDhs', $bigtypeDhs);
//

if($requestPageName == 'index.php')
{
    $dh = 'index';
}
elseif ($requestPageName == 'listsepbook.php')
{
    if($_GET['t'] == 'new')
    {
        $dh = 'new';
    }
    elseif ($_GET['t'] == 'sepprice')
    {
        $dh = 'sepprice';
    }
    elseif ($_GET['t'] == 'hotsell')
    {
        $dh = 'hotsell';
    }
    elseif ($_GET['t'] == 'term')
    {
        $dh = 'term';
    }    
}
elseif ($requestPageName == 'listreadbook.php')
{ 
    $dh = 'listread';
}

$smarty->assign('dh', $dh);
//


if($requestPageName == 'search.php')
{
    if($_GET['stype'] == 'simple')
    {
        $keytxt = urldecode(str_replace('@', '%', $_GET['keyWord']));
    }
    elseif ($_POST['stype'] == 'simple')
    {
        $keytxt = $_POST['keyWord'];
    }   
    $smarty->assign('keytxt', $keytxt);
}



$smarty->display ( 'header.phtml' );


