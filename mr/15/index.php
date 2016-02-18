<?php
require_once 'header.php';

if(!isset($_GET['cctype']) || $_GET['cctype']=='')
{
	$cctype='1';
}
else 
{
	$cctype = $_GET['cctype'];
}
$smarty->assign('cctype', $cctype);
//


$bigtypes = $adminDB->executeSQL("select id, typename from tb_bigtype order by addtime", $connID);
$smarty->assign('bigtypes', $bigtypes);

$smalltypes = $adminDB->executeSQL("select id, typename, bigtypeid from tb_smalltype order by addtime", $connID);
$smarty->assign('smalltypes', $smalltypes);

$newBookinfos = $adminDB->executeSQL("select id, bookname, oldprice, newprice, bookimg from tb_bookinfo where isnew=1 order by addtime desc limit 0, 6", $connID);
$smarty->assign('newBookinfos', $newBookinfos);

$sepBookinfos = $adminDB->executeSQL("select id, bookname, oldprice, newprice, bookimg from tb_bookinfo where issepprice=1 order by addtime desc limit 0, 6", $connID);
$smarty->assign('sepBookinfos', $sepBookinfos);

$hotSellBookinfos  = $adminDB->executeSQL("select id, bookname, oldprice, newprice, bookimg from tb_bookinfo where ishotsell=1 order by addtime desc limit 0, 6", $connID);
$smarty->assign('hotSellBookinfos', $hotSellBookinfos);

$reads = $adminDB->executeSQL("select tb_read.id as readid, tb_read.filename, tb_bookinfo.id as bookid, tb_bookinfo.bookname, tb_bookinfo.oldprice, tb_bookinfo.newprice, tb_bookinfo.bookimg, tb_bookinfo.about from tb_bookinfo, tb_read where tb_read.bookinfoid = tb_bookinfo.id order by tb_read.downtimes desc limit 0, 2", $connID);
$smarty->assign('reads', $reads);

$terms = $adminDB->executeSQL("select tb_bookinfo.id, tb_bookinfo.bookname, tb_bookinfo.oldprice, tb_bookinfo.newprice, tb_bookinfo.bookimg, tb_bookinfo.about, tb_pub.pubname from tb_bookinfo, tb_pub where tb_bookinfo.isterm=1 and tb_bookinfo.pubid = tb_pub.id order by tb_bookinfo.addtime desc limit 0, 2", $connID);
$smarty->assign('terms', $terms);

$pubs = $adminDB->executeSQL("select id, pubname ,pubimg from tb_pub order by addtime desc limit 0, 6", $connID);
$smarty->assign('pubs', $pubs);

$tells = $adminDB->executeSQL("select id, title ,addtime from tb_tell order by addtime desc limit 0, 8", $connID);
$smarty->assign('tells', $tells);

$cxsxs = $adminDB->executeSQL("select id, title ,addtime from tb_cxsx order by addtime desc limit 0, 8", $connID);
$smarty->assign('cxsxs', $cxsxs);

$mrbooktjs = $adminDB->executeSQL("select id, bookname, bookimg, oldprice, newprice, about from tb_bookinfo where ismrbooktj=1 order by addtime desc limit 0, 3", $connID);
$smarty->assign('mrbooktjs', $mrbooktjs);

$mrbookph = $adminDB->executeSQL("select id, title from tb_mrbookph order by addtime desc limit 0, 6", $connID);
$smarty->assign('mrbookph', $mrbookph);

//
$system = $adminDB->executeSQL("select bookimgurl, readurl, ggurl from tb_system where mark = 1", $connID);
$smarty->assign('system', $system);
//
if(isset($_SESSION['unc']) && $_SESSION['unc']!='')
{
    $isLogin = 'T';
}
else
{
    if(isset($_SESSION['toUrl']))
    {
        unset($_SESSION['toUrl']);
    }
    $_SESSION['toUrl'] = 'usercenter.html';
    $isLogin = 'F';    
}
$smarty->assign('isLogin', $isLogin);
//

$smarty->display('index.phtml');
require_once 'footer.php';
