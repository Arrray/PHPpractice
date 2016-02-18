<?php
require_once 'header.php';
$arrayIds = explode('@', $_SESSION['recuserinfo']['idStr']);
$arrayNums = explode('@', $_SESSION['recuserinfo']['numStr']);
$arrayCarInfos = array();
$totalPrice = 0;
for ($i = 0; $i < count($arrayIds); $i ++) {
    $bookid = $arrayIds[$i];
    if ($bookid != '') {
        $tmpArray = array();
        $bookinfo = $adminDB->executeSQL("select id, bookname ,oldprice, newprice from tb_bookinfo where id='" . $bookid . "'", $connID);
        $tmpArray['id'] = $bookinfo[0]['id'];
        $tmpArray['bookname'] = $bookinfo[0]['bookname'];
        $tmpArray['newprice'] = $bookinfo[0]['newprice'];
        $tmpArray['num'] = $arrayNums[$i];
        $tmpArray['smallTotalPrice'] = $bookinfo[0]['newprice'] * $arrayNums[$i];
        $totalPrice += $tmpArray['smallTotalPrice'];
        array_push($arrayCarInfos, $tmpArray);
    }
}
$smarty->assign('arrayCarInfos', $arrayCarInfos);
$smarty->assign('totalPrice', $totalPrice);
//
$_SESSION['recuserinfo']['bookprice'] = $totalPrice;
$_SESSION['recuserinfo']['recpayall'] = $totalPrice + $_SESSION['recuserinfo']['recpay'];
$smarty->display('deforder.phtml');
require_once 'footer.php';