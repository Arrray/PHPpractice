<?php
require_once 'header.php';
if (!isset($_SESSION['unc']) || $_SESSION['unc'] == '') {
    echo "<script>alert('½ûÖ¹·ÇµÇÂ¼£¡');window.location.href='".$util->baseUrl()."/index.html';</script>";
    exit();
}

if(isset($_GET['def']) && $_GET['def'] =='y')
{
     $adminDB->executeSQL("update tb_order set issh=1 where orderno='".$_GET['orderno']."'", $connID);    
}

if(isset($_GET['def']) && $_GET['def'] =='qx')
{
     $adminDB->executeSQL("update tb_order set isqx=1 where orderno='".$_GET['orderno']."'", $connID);    
}

$isShow = 'F';

if (isset($_GET['orderno']) && $_GET['orderno']!='' && $_GET['def'] !='qx')
{
    $order = $adminDB->executeSQL("select id, orderno, username, address, sex, yb, tel, idstr, numstr, rectype, paytype, goodsprice, yjprice, totalprice, addtime, isfk, isfh, issh from tb_order where orderno='".trim($_GET['orderno'])."'", $connID);
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
        $isShow = 'T';    
}
$smarty->assign('isShow', $isShow);

$orders = $adminDB->executeSQL("select orderno, addtime, username, totalprice from tb_order where orderusernc='".$_SESSION['unc']."' and isqx=0", $connID);
$smarty->assign('orders', $orders);
    




$smarty->display('usercenterorder.phtml');
require_once 'footer.php';