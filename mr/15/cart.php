<?php
require_once 'header.php';
//
if (! isset($_SESSION['idStr']) || ! isset($_SESSION['numStr'])) {
    $_SESSION['idStr'] = '';
    $_SESSION['numStr'] = '';
}
//
$cart = new Cart($_SESSION['idStr'], $_SESSION['numStr']);
//
$t = $_GET['t'];
//���
if ($t == 'add') {
    $cart->addCart($_GET['bid'], 1);
    $_SESSION['idStr'] = $cart->getIdStr();
    $_SESSION['numStr'] = $cart->getNumStr();
}
//������
if ($t == 'gAdd') {
    $arrayGIds = explode('@', $_GET['ids']);
    for ($i = 0; $i < count($arrayGIds); $i ++) {
        if ($arrayGIds[$i] != '' && ! in_array($arrayGIds[$i], explode('@', $_SESSION['idStr']))) {
            $cart->addCart($arrayGIds[$i], 1);
        }
    }
    $_SESSION['idStr'] = $cart->getIdStr();
    $_SESSION['numStr'] = $cart->getNumStr();
}
//ɾ��
if ($t == 'remove') {
    $cart->removeCart($_GET['rbid']);
    $_SESSION['idStr'] = $cart->getIdStr();
    $_SESSION['numStr'] = $cart->getNumStr();
}
//����
if ($t == 'update') {
    $changenum = $_GET['num'];
    if (! is_numeric($changenum) || intval($changenum) <= 0 || floor($changenum) != $changenum) {
        echo "<script>alert('����ͼ�������ֻ��Ϊ��������');</script>";
    } else {
        $cart->changeNum($_GET['ubid'], $changenum);
        $_SESSION['idStr'] = $cart->getIdStr();
        $_SESSION['numStr'] = $cart->getNumStr();
    }
}
//���
if ($t == 'clearAll') {
    $cart->setCartNull();
    $_SESSION['idStr'] = $cart->getIdStr();
    $_SESSION['numStr'] = $cart->getNumStr();
}
//
$arrayIds = explode('@', $_SESSION['idStr']);
$arrayNums = explode('@', $_SESSION['numStr']);
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
$smarty->assign('totalPrice', $totalPrice);
//
if (isset($_SESSION['unc']) && $_SESSION['unc'] != '') {
    $smarty->assign('isLogin', 'T');
} else {
    $smarty->assign('isLogin', 'F');
    if (isset($_SESSION['toUrl'])) {
        unset($_SESSION['toUrl']);
    }
    $_SESSION['toUrl'] = 'getbuyuserinfo.html';
}
$smarty->display('cart.phtml');
require_once 'footer.php';