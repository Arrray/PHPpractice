<?php
require_once 'lzh.inc.php';

$requestPageName = basename ( $_SERVER ['PHP_SELF'] );

switch ($requestPageName) {
	case 'index.php' :
		$title = '����������� - ��������һ����IT��ͼ������רӪ�꣬��ȫ�桢�������������꣡';
		break;
	case 'bookinfo.php':
        $topbookinfo = $adminDB->executeSQL("select bookname from tb_bookinfo where id='".$_GET['bid']."'", $connID);
	    $title = '����������� - '.$topbookinfo[0]['bookname'];
        break;
	case 'listbook.php':
        $topsmalltypeinfo = $adminDB->executeSQL("select typename from tb_smalltype where id='".$_GET['stid']."'", $connID);
	    $title = '����������� - ' . $topsmalltypeinfo[0]['typename'] . ' ��ͼ��';
        break; 
	case 'listsepbook.php':
        $topt = $_GET['t'];
	    if($topt == 'new')
        {
            $title = '����������� - �����Ƽ�';
        }
        elseif ($topt == 'sepprice')
        {
            $title = '����������� - �ؼ�ͼ��';
        }
        elseif ($topt == 'hotsell')
        {
            $title = '����������� - ����ͼ��';
        }
        elseif ($topt == 'term')
        {
            $title = '����������� - �������';
        }
        elseif ($topt == 'mrbook')
        {
            $title = '����������� - ����ͼ���Ƽ�';
        }
	case 'mrbookphinfo.php':
        $title = '����������� - ����ͼ��������ϸ��Ϣ';
	    break;
	case 'listreadbook.php' :
		$title = '����������� - �Զ�����';
		break;
	case 'cart.php' :
		$title = '����������� - ���ﳵ';
		break;	
	case 'telllogin.php' :
		$title = '����������� - ��¼��';
		break;
	case 'login.php' :
		$title = '����������� - ��Ա��¼';
		break;	
	case 'getbuyuserinfo.php' :
		$title = '����������� - ��д�ջ�����ϸ��Ϣ';
		break;
	case 'deforder.php' :
		$title = '����������� - ȷ�϶�����Ϣ';
		break;		
	case 'selectpaytype.php' :
		$title = '����������� - ѡ��֧����ʽ';
		break;		
	case 'defpay.php' :
		$title = '����������� - ȷ��֧����ʽ��֧';
		break;	
	case 'advancedsearch.php' :
		$title = '����������� - ͼ��߼�����';
		break;	
	case 'search.php' :
		$title = '����������� - ͼ���������';
		break;			
	case 'mrbookph.php' :
		$title = '����������� - ͼ��ͼ������';
		break;
	case 'cxsx.php' :
		$title = '����������� - ���ϳ�����ѯ';
		break;
	case 'cxsxinfo.php' :
		$title = '����������� - ���ϳ�����ѯ��ϸ��Ϣ';
		break;		
	case 'pub.php' :
		$title = '����������� - ����������б�';
		break;
	case 'pubbook.php' :
		$title = '����������� - ���������ͼ���б�';
		break;	
	case 'tell.php' :
		$title = '����������� - ���Ź���';
		break;								
	case 'tellinfo.php' :
		$title = '����������� - ���Ź�����ϸ��Ϣ';
		break;	
	case 'help.php' :
		$title = '����������� - ����ָ��';
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


