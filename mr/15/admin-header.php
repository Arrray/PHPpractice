<?php
require_once 'lzh.inc.php';

if(!isset($_SESSION['anc']) || $_SESSION['anc'] == '')
{
    echo "<script>alert('��ֹ�Ƿ���¼��');window.location.href='".$util->baseUrl()."/index.html';</script>";
    exit();
}

$requestPageName = basename ( $_SERVER ['PHP_SELF'] );

switch ($requestPageName) {
	case 'admin-default.php' :
		$position = 'ϵͳ��Ϣ����';
		break;
	case 'admin-changepwd.php' :
		$position = '���Ĺ���Ա����';
		break;	
	case 'admin-bigtype.php' :
		$position = 'ͼ��������';
		break;	
	case 'admin-listbigtype.php' :
		$position = 'ͼ��������';
		break;	
	case 'admin-smalltype.php' :
		$position = 'ͼ��С�����';
		break;	
	case 'admin-pub.php' :
		$position = '������������';
		break;	
	case 'admin-listpub.php' :
		$position = '������������';
		break;	
	case 'admin-book.php' :
		$position = 'ͼ����Ϣ����';
		break;	
	case 'admin-listbook.php' :
		$position = 'ͼ����Ϣ����';
		break;	
	case 'admin-searchbook.php' :
		$position = 'ͼ����Ϣ��Ϣ';
		break;	
	case 'admin-read.php' :
		$position = 'ͼ���Զ�����';
		break;			
	case 'admin-listread.php' :
		$position = 'ͼ���Զ�����';
		break;			
	case 'admin-listuser.php' :
		$position = '�û���Ϣ����';
		break;
	case 'admin-listuserfeedback.php' :
		$position = '�û���Ϣ����';
		break;	
	case 'admin-listorder.php' :
		$position = '��������';
		break;
	case 'admin-listtell.php' :
		$position = '���Ź������';
		break;						
	case 'admin-tell.php' :
		$position = '���Ź������';
		break;	
	case 'admin-cxsx.php' :
		$position = '������ѯ����';
		break;	
	case 'admin-listcxsx.php' :
		$position = '������ѯ����';
		break;	
	case 'admin-mrbookph.php' :
		$position = '����ͼ�����й���';
		break;	
	case 'admin-listmrbookph.php' :
		$position = '����ͼ�����й���';
		break;
	case 'admin-main.php' :
		$position = 'ϵͳ��Ϣ';
		break;		
		
}


$smarty->assign('position', $position);

$smarty->display('admin-header.phtml');
