<?php
require_once 'header.php';
if (isset($_POST['username']) && $_POST['username'] != '') {
    $_SESSION['recuserinfo']['username'] = $_POST['username'];
    $_SESSION['recuserinfo']['sex'] = $_POST['sex'];
    $_SESSION['recuserinfo']['address'] = $_POST['address'];
    $_SESSION['recuserinfo']['yb'] = $_POST['yb'];
    $_SESSION['recuserinfo']['tel'] = $_POST['tel'];
    $_SESSION['recuserinfo']['bz'] = $_POST['bz'];
    $_SESSION['recuserinfo']['rectype'] = $_POST['rectype'];
    $_SESSION['recuserinfo']['tt'] = $_POST['tt'];
    $_SESSION['recuserinfo']['unc'] = $_SESSION['unc'];
    $_SESSION['recuserinfo']['idStr'] = $_SESSION['idStr'];
    $_SESSION['recuserinfo']['numStr'] = $_SESSION['numStr'];
    $rect = $_POST['rectype'];
    if ($rect == 0 || $rect == '1') {
        $recpay = '0';
    } elseif ($rect == '2') {
        $recpay = '8';
    } elseif ($rect == '3') {
        $recpay = '20';
    } elseif ($rect == '4') {
        $recpay = '30';
    }
    $_SESSION['recuserinfo']['recpay'] = $recpay;
    //header('location:deforder.php'); 
    echo "<script>window.location.href='" . $util->baseUrl() . "/deforder.html';</script>";
    exit();
}
$smarty->display('getbuyuserinfo.phtml');
require_once 'footer.php';