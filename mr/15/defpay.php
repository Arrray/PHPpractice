<?php
require_once 'header.php';
$t = $_GET['t'];
if ($t == 'qyzh') {
    $paytype = '企业账户汇款';
    $alertType = '0';
} elseif ($t == 'ghhk') {
    $paytype = '工商银行汇款';
    $alertType = '0';
} elseif ($t == 'jhhk') {
    $paytype = '建设银行汇款';
    $alertType = '0';
} elseif ($t == 'jtyhhk') {
    $paytype = '交通银行汇款';
    $alertType = '0';
} elseif ($t == 'nhhk') {
    $paytype = '农业银行汇款';
    $alertType = '0';
} elseif ($t == 'yjyd') {
    $paytype = '邮局邮递';
    $alertType = '1';
} elseif ($t == 'zfb') {
    $paytype = '支付宝在线支付';
    $alertType = '2';
} elseif ($t == 'ghzxzf') {
    $paytype = '工行在线支付';
    $alertType = '3';
}
$smarty->assign('alertType', $alertType);
//
$_SESSION['recuserinfo']['paytype'] = $paytype;
$rectype = $_SESSION['recuserinfo']['rectype'];
if ($rectype == '0') {
    $rt = '送货上门';
} elseif ($rectype == '1') {
    $rt = '自行去货';
} elseif ($rectype == '2') {
    $rt = '平邮';
} elseif ($rectype == '3') {
    $rt = '普通快递';
} elseif ($rectype == '4') {
    $rt = 'EMS快递';
}
if (! isset($_SESSION['recuserinfo']['orderNo']) || $_SESSION['recuserinfo']['orderNo'] == '') {
    $orderNo = date("YmdHis") . mt_rand(1000, 9999);
    $_SESSION['recuserinfo']['orderNo'] = $orderNo;
    if (! $adminDB->executeSQL("insert into tb_order(orderno, orderusernc, username, address, sex, yb, tel ,tt, idstr, numstr, goodsprice, yjprice, totalprice, rectype, paytype, addtime) values('" . $_SESSION['recuserinfo']['orderNo'] . "', '" . $_SESSION['recuserinfo']['unc'] . "', '" . $_SESSION['recuserinfo']['username'] . "', '" . $_SESSION['recuserinfo']['address'] . "', '" . $_SESSION['recuserinfo']['sex'] . "', '" . $_SESSION['recuserinfo']['yb'] . "', '" . $_SESSION['recuserinfo']['tel'] . "', '" . $_SESSION['recuserinfo']['tt'] . "', '" . $_SESSION['recuserinfo']['idStr'] . "', '" . $_SESSION['recuserinfo']['numStr'] . "',  '" . $_SESSION['recuserinfo']['bookprice'] . "', '" . $_SESSION['recuserinfo']['recpay'] . "',  '" . $_SESSION['recuserinfo']['recpayall'] . "', '" . $rt . "', '" . $_SESSION['recuserinfo']['paytype'] . "', '" . date('Y-m-d H:i:s') . "' )", $connID)) {
        echo "<script>alert('订单保存失败 !');</script>";
    }
} else {
    if (! $adminDB->executeSQL("update tb_order set orderusernc='" . $_SESSION['recuserinfo']['unc'] . "', username ='" . $_SESSION['recuserinfo']['username'] . "', address='" . $_SESSION['recuserinfo']['address'] . "', sex='" . $_SESSION['recuserinfo']['sex'] . "', yb='" . $_SESSION['recuserinfo']['yb'] . "', tel='" . $_SESSION['recuserinfo']['tel'] . "',  tt='" . $_SESSION['recuserinfo']['tt'] . "', idstr='" . $_SESSION['recuserinfo']['idStr'] . "', numstr='" . $_SESSION['recuserinfo']['numStr'] . "', goodsprice='" . $_SESSION['recuserinfo']['bookprice'] . "', yjprice='" . $_SESSION['recuserinfo']['recpay'] . "', totalprice='" . $_SESSION['recuserinfo']['recpayall'] . "', rectype='" . $rt . "', paytype='" . $_SESSION['recuserinfo']['paytype'] . "' where orderno='" . $_SESSION['recuserinfo']['orderNo'] . "'", $connID)) {
        echo "<script>alert('订单修改失败! ');</script>";
    }
}
if ($alertType == '3') {
    $merInfo = $adminDB->executeSQL("select merid, meracct from tb_system where mark = 1", $connID);
    $merid = $merInfo[0]['merid'];
    $meracct = $merInfo[0]['meracct'];
    $merURL = 'http://www.mrbooks.cn';
    $orderid = $_SESSION['recuserinfo']['orderNo'];
    $nowtime = date("YmdHis");
    $amount = str_replace(',', '', number_format($_SESSION['recuserinfo']['recpayall'], 2));
    $amount = str_replace(",", "", $amount);
    $amount = str_replace(".", "", $amount);
    $src = "ICBC_PERBANK_B2C1.0.0.0" . $merid . $meracct . $merURL . "HS" . $orderid . $amount . "0010" . $nowtime . "0";
    $smarty->assign('orderid', $orderid);
    $smarty->assign('merID', $merid);
    $smarty->assign('merAcct', $meracct);
    $smarty->assign('amount', $amount);
    $smarty->assign('merURL', $merURL);
    $smarty->assign('orderDate', $nowtime);
    $smarty->assign('src', $src);
} elseif ($alertType == '2') {
    $smarty->assign('orderid', $_SESSION['recuserinfo']['orderNo']);
    $smarty->assign('ydType', 'EXPRESS');
    $smarty->assign('ydPrice', $_SESSION['recuserinfo']['recpay']);
    $smarty->assign('bookPrice', $_SESSION['recuserinfo']['bookprice']);
}
$smarty->display('defpay.phtml');
require_once 'footer.php';