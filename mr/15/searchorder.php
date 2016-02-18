<?php
require_once 'header.php';

$isShow = 'F';
if (isset($_POST['orderno']) && $_POST['orderno']!='')
{
    $order = $adminDB->executeSQL("select id, orderno, username, address, sex, yb, tel, idstr, numstr, rectype, paytype, goodsprice, yjprice, totalprice, addtime, isfk, isfh, issh from tb_order where orderno='".trim($_POST['orderno'])."'", $connID);
    if(!$order)
    {
        $isFind = 'F';
    }
    else
    {
        $isFind = 'T';
        
        $arrayIds = explode('@', $order[0]['idstr']);
        $arrayNums = explode('@', $order[0]['numstr']);
        $arrayCarInfos = array();
        $totalPrice = 0;
        for($i = 0; $i < count($arrayIds); $i++)
        {
           $bookid = $arrayIds[$i];
           if($bookid != '')
           {
               $tmpArray = array();
               $bookinfo = $adminDB->executeSQL("select id, bookname ,oldprice, newprice from tb_bookinfo where id='".$bookid."'", $connID);
               $tmpArray['id'] = $bookinfo[0]['id'];
               $tmpArray['bookname'] = $bookinfo[0]['bookname'];
               $tmpArray['oldprice'] = $bookinfo[0]['oldprice'];
               $tmpArray['newprice'] = $bookinfo[0]['newprice'];
               $tmpArray['num'] = $arrayNums[$i];
               $tmpArray['smallTotalPrice'] = $bookinfo[0]['newprice'] * $arrayNums[$i];
               $totalPrice += $tmpArray['smallTotalPrice'];
               array_push($arrayCarInfos, $tmpArray);
           }
       }

        $smarty->assign('arrayCarInfos', $arrayCarInfos);
        $smarty->assign('order', $order); 
    } 
    $isShow = 'T';
    
}
$smarty->assign('isFind', $isFind);
$smarty->assign('isShow', $isShow);


$smarty->display('searchorder.phtml');
require_once 'footer.php';