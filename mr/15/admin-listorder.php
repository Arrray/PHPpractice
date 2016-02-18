<?php
require_once 'admin-header.php';
//
if (! isset($_GET['page']) || $_GET['page'] == '') {
    $page = '1';
} else {
    $page = $_GET['page'];
}
if (isset($_GET['f']) && $_GET['f'] == 'del') {
    if (! $adminDB->executeSQL("delete from tb_order where id='" . $_GET['id'] . "'", $connID)) {
        echo "<script>alert('¶©µ¥ÐÅÏ¢É¾³ýÊ§°Ü£¡');</script>";
    }
}
//
if (isset($_GET['c']) && $_GET['c'] != '') {
    $c = $_GET['c'];
    if ($c == 'isfk') {
        $adminDB->executeSQL("update tb_order set isfk = !isfk where id='" . $_GET['id'] . "'", $connID);
    } elseif ($c == 'isfh') {
        $adminDB->executeSQL("update tb_order set isfh = !isfh where id='" . $_GET['id'] . "'", $connID);
    } elseif ($c == 'issh') {
        $adminDB->executeSQL("update tb_order set issh = !issh where id='" . $_GET['id'] . "'", $connID);
    }
}
//
$sql = "select id, orderno, username, tel, goodsprice, yjprice, totalprice, isfk, isfh, issh, isqx from tb_order order by addtime desc";
$orders = $pageDB->pageData($sql, $connID, 20, $page);
$smarty->assign('orders', $orders);
//
$isShow = 'F';
if (isset($_GET['f']) && $_GET['f'] == 'edit') {
    $order = $adminDB->executeSQL("select id, orderno, username, address, sex, yb, tel, idstr, numstr, rectype, paytype, goodsprice, yjprice, totalprice, addtime, isfk, isfh, issh from tb_order where id='" . $_GET['id'] . "'", $connID);
    $arrayIds = explode('@', $order[0]['idstr']);
    $arrayNums = explode('@', $order[0]['numstr']);
    $arrayCarInfos = array();
    $totalPrice = 0;
    for ($i = 0; $i < count($arrayIds); $i ++) {
        $bookid = $arrayIds[$i];
        if ($bookid != '') {
            $tmpArray = array();
            $bookinfo = $adminDB->executeSQL("select id, bookname ,oldprice, newprice from tb_bookinfo where id='" . $bookid . "'", $connID);
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
$smarty->display('admin-listorder.phtml');
require_once 'admin-footer.php';



