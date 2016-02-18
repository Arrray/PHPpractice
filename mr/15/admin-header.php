<?php
require_once 'lzh.inc.php';

if(!isset($_SESSION['anc']) || $_SESSION['anc'] == '')
{
    echo "<script>alert('禁止非法登录！');window.location.href='".$util->baseUrl()."/index.html';</script>";
    exit();
}

$requestPageName = basename ( $_SERVER ['PHP_SELF'] );

switch ($requestPageName) {
	case 'admin-default.php' :
		$position = '系统信息设置';
		break;
	case 'admin-changepwd.php' :
		$position = '更改管理员密码';
		break;	
	case 'admin-bigtype.php' :
		$position = '图书大类管理';
		break;	
	case 'admin-listbigtype.php' :
		$position = '图书大类管理';
		break;	
	case 'admin-smalltype.php' :
		$position = '图书小类管理';
		break;	
	case 'admin-pub.php' :
		$position = '出版社类别管理';
		break;	
	case 'admin-listpub.php' :
		$position = '出版社类别管理';
		break;	
	case 'admin-book.php' :
		$position = '图书信息管理';
		break;	
	case 'admin-listbook.php' :
		$position = '图书信息管理';
		break;	
	case 'admin-searchbook.php' :
		$position = '图书信息信息';
		break;	
	case 'admin-read.php' :
		$position = '图书试读管理';
		break;			
	case 'admin-listread.php' :
		$position = '图书试读管理';
		break;			
	case 'admin-listuser.php' :
		$position = '用户信息管理';
		break;
	case 'admin-listuserfeedback.php' :
		$position = '用户信息管理';
		break;	
	case 'admin-listorder.php' :
		$position = '订单管理';
		break;
	case 'admin-listtell.php' :
		$position = '新闻公告管理';
		break;						
	case 'admin-tell.php' :
		$position = '新闻公告管理';
		break;	
	case 'admin-cxsx.php' :
		$position = '畅销书询管理';
		break;	
	case 'admin-listcxsx.php' :
		$position = '畅销书询管理';
		break;	
	case 'admin-mrbookph.php' :
		$position = '明日图书排行管理';
		break;	
	case 'admin-listmrbookph.php' :
		$position = '明日图书排行管理';
		break;
	case 'admin-main.php' :
		$position = '系统信息';
		break;		
		
}


$smarty->assign('position', $position);

$smarty->display('admin-header.phtml');
