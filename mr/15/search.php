<?php
require_once 'header.php';

$nowtype = '查找图书信息';
$smarty->assign('nowtype', $nowtype);

//
if(!isset($_GET['page']) || $_GET['page']=='')
{
	$page='1';
}
else 
{
	$page = $_GET['page'];
}
//
if (isset($_POST['keyWord']) && trim($_POST['keyWord']!=''))
{
    $keyWord = $_POST['keyWord'];
}
else 
{
    $keyWord = urldecode(str_replace('@', '%', $_GET['keyWord']));
}
$arrayKeyWord = explode(' ', $keyWord);

$smarty->assign('key', str_replace('%', '@', urlencode($keyWord)));

$smarty->assign('arrayKeyWord', $arrayKeyWord);
//
if (isset($_POST['stype']) && trim($_POST['stype']!=''))
{
    $stype = $_POST['stype'];
}
else 
{
    $stype = $_GET['stype'];
}

$smarty->assign('stype', $stype);

//

$where = "";
$j = 0;
for($i=0; $i<count($arrayKeyWord); $i++)
{
    if($arrayKeyWord[$i]!='')
    {
        if($j>0)
        {
            $where .= " or ";
        }
        $where .= " tb_bookinfo.bookname like '%".$arrayKeyWord[$i]."%' ";
        $j++;
    }
}

//
$where1 = "";
if($stype == 'adv')
{
    //
    if (isset($_POST['writer']) && trim($_POST['writer']!=''))
    {
        $writer = $_POST['writer'];
    }
    else 
    {
        $writer = urldecode(str_replace('@', '%', $_GET['writer']));
    }
    
    $smarty->assign('writer', str_replace('%', '@', urlencode($writer)));
    
    $where1 = " and tb_bookinfo.writer like '%".$writer."%' ";
    //
    if (isset($_POST['fyear']) && trim($_POST['fyear']!=''))
    {
        $fyear = $_POST['fyear'];
    }
    else 
    {
        $fyear = $_GET['fyear'];
    }
    $smarty->assign('fyear', $fyear);
    //
    if (isset($_POST['fmonth']) && trim($_POST['fmonth']!=''))
    {
        $fmonth = $_POST['fmonth'];
    }
    else 
    {
        $fmonth = $_GET['fmonth'];
    }
    $smarty->assign('fmonth', $fmonth);
    //
    if (isset($_POST['tyear']) && trim($_POST['tyear']!=''))
    {
        $tyear = $_POST['tyear'];
    }
    else 
    {
        $tyear = $_GET['tyear'];
    }
    $smarty->assign('tyear', $tyear);
    //
    if (isset($_POST['tmonth']) && trim($_POST['tmonth']!=''))
    {
        $tmonth = $_POST['tmonth'];
    }
    else 
    {
        $tmonth = $_GET['tmonth'];
    }
    $smarty->assign('tmonth', $tmonth);
    
    $fromPubtime = $fyear."-".$fmonth."-00";
    $toPubtime = $tyear."-".$tmonth."-00";
    $where1 = " and tb_bookinfo.pubtime > '$fromPubtime' and tb_bookinfo.pubtime < '$toPubtime' ";
    //
    if (isset($_POST['pubid']) && trim($_POST['pubid']!=''))
    {
        $pubid = $_POST['pubid'];
    }
    else 
    {
        $pubid = $_GET['pubid'];
    }
    $smarty->assign('pubid', $pubid);
    $where1 = " and tb_bookinfo.pubid ='$pubid' ";
    
    //
    if (isset($_POST['smalltypeid']) && trim($_POST['smalltypeid']!=''))
    {
        $smalltypeid = $_POST['smalltypeid'];
    }
    else 
    {
        $smalltypeid = $_GET['smalltypeid'];
    }
    $smarty->assign('smalltypeid', $smalltypeid);
    $where1 = " and tb_bookinfo.smalltypeid ='$smalltypeid' ";
    

}




//
$sql = "select tb_bookinfo.id, tb_bookinfo.bookimg, tb_bookinfo.oldprice, tb_bookinfo.newprice, tb_bookinfo.about, tb_bookinfo.browsertime, tb_bookinfo.bookname, tb_bookinfo.writer, tb_bookinfo.pubtime, tb_bookinfo.addtime, tb_bookinfo.ishave, tb_pub.pubname from tb_bookinfo, tb_pub where tb_bookinfo.pubid = tb_pub.id and (".$where.") ".$where1." order by tb_bookinfo.addtime desc";   
$bookinfos = $pageDB->pageData($sql, $connID, 10, $page);
$smarty->assign('bookinfos', $bookinfos);
//


//
$system = $adminDB->executeSQL("select bookimgurl, readurl from tb_system where mark = 1", $connID);
$smarty->assign('system', $system);



$smarty->display('search.phtml');
require_once 'footer.php';