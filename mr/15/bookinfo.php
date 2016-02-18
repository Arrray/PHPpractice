<?php
require_once 'header.php';
if (isset($_GET['bid']) && $_GET['bid'] != '') {
    $bid = $_GET['bid'];
} else {
    $bid = $_POST['bid'];
}
$smarty->assign('bid', $bid);
//
@$adminDB->executeSQL("update tb_bookinfo set browsertime = browsertime+1 where id='" . $bid . "'", $connID);
//
if (isset($_SESSION['browserIDs']) && $_SESSION['browserIDs'] != '') {
    $arrayBrowserID = explode('@', $_SESSION['browserIDs']);
    $flag = 0;
    for ($i = 0; $i < count($arrayBrowserID); $i ++) {
        if ($arrayBrowserID[$i] != '' && $arrayBrowserID[$i] == $bid) {
            $flag = 1;
        }
    }
    if ($flag == 0) {
        $_SESSION['browserIDs'] .= $bid . '@';
    }
} else {
    $_SESSION['browserIDs'] = $bid . '@';
}
$arrayBrowserBookids = explode('@', $_SESSION['browserIDs']);
$arrayBrowserBooks = array();
for ($i = 0; $i < count($arrayBrowserBookids); $i ++) {
    if ($arrayBrowserBookids[$i] != '') {
        $tmpBookinfo = $adminDB->executeSQL("select id, bookname, bookimg from tb_bookinfo where id='" . $arrayBrowserBookids[$i] . "'", $connID);
        array_push($arrayBrowserBooks, $tmpBookinfo);
    }
}
$smarty->assign('arrayBrowserBooks', $arrayBrowserBooks);
//
if (! isset($_GET['cctype']) || $_GET['cctype'] == '') {
    if (isset($_POST['cctype']) && $_POST['cctype'] != '') {
        $cctype = $_POST['cctype'];
    } else {
        $cctype = '1';
    }
} else {
    $cctype = $_GET['cctype'];
}
$smarty->assign('cctype', $cctype);
//
$bigtypes = $adminDB->executeSQL("select id, typename from tb_bigtype order by addtime", $connID);
$smarty->assign('bigtypes', $bigtypes);
$smalltypes = $adminDB->executeSQL("select id, typename, bigtypeid from tb_smalltype order by addtime", $connID);
$smarty->assign('smalltypes', $smalltypes);
//
$bookinfo = $adminDB->executeSQL("select tb_bookinfo.id as bid, bookname, bookids, page, isbn, zs, bookcc, bc, about, directory, writer, pubname, pubtime, bookimg, typename, oldprice, newprice from tb_bookinfo, tb_pub, tb_smalltype where tb_bookinfo.pubid = tb_pub.id and tb_bookinfo.smalltypeid = tb_smalltype.id and tb_bookinfo.id = '" . $bid . "'", $connID);
$smarty->assign('bookinfo', $bookinfo);






$arrayBookids = explode('@', $bookinfo[0]['bookids']);
$arrayZhBooks = array();
$zhIDs = $bookinfo[0]['bid'] . '@';
for ($i = 0; $i < count($arrayBookids); $i ++) {
    if ($arrayBookids[$i] != '') {
        $tmpBookinfo = $adminDB->executeSQL("select id, bookname, bookimg from tb_bookinfo where id='" . $arrayBookids[$i] . "'", $connID);
        array_push($arrayZhBooks, $tmpBookinfo);
        $zhIDs .= $tmpBookinfo[0]['id'] . '@';
    }
}
$smarty->assign('zhIDs', $zhIDs);
$smarty->assign('arrayZhBooks', $arrayZhBooks);
$sdinfo = $adminDB->executeSQL("select id, filename from tb_read where bookinfoid = '" . $bookinfo[0]['bid'] . "'", $connID);
if (! $sdinfo) {
    $isRead = 'F';
} else {
    $isRead = 'T';
    $smarty->assign('sdinfo', $sdinfo);
}
$smarty->assign('isRead', $isRead);
//
$system = $adminDB->executeSQL("select bookimgurl, readurl from tb_system where mark = 1", $connID);
$smarty->assign('system', $system);
//
if (isset($_SESSION['unc'])) {
    $unc = $_SESSION['unc'];
    $admin = $adminDB->executeSQL("select usertype from tb_user where usernc='$unc'", $connID);
    if ($admin[0]['usertype'] == 1) {
        $smarty->assign('isAdmin', 'T');
    }
}
//
if (isset($_GET['did']) && $_GET['did'] != '') {
    if (! $adminDB->executeSQL("delete from tb_pl where id='" . $_GET['did'] . "'", $connID)) {
        echo "<script>alert('评论删除失败!');</script>";
    } else {
        echo "<script>alert('评论删除成功!');</script>";
    }
}
//
if (isset($_POST['content']) && $_POST['content'] != '') {
    if (isset($_SESSION['unc'])) {
        $unc = $_SESSION['unc'];
    } else {
        $unc = '匿名';
    }
    if (! $adminDB->executeSQL("select id, bookinfoid from tb_pl where bookinfoid='" . $bid . "' and content='" . $_POST['content'] . "'", $connID)) {
        if ($adminDB->executeSQL("insert into tb_pl(bookinfoid, content, addtime, usernc, ip) values('" . $bid . "', '" . $_POST['content'] . "', '" . date('Y-m-d H:i:s') . "','" . $unc . "', '" . $_SERVER['REMOTE_ADDR'] . "' )", $connID)) {
            echo "<script>alert('评论发表成功!');</script>";
        } else {
            echo "<script>alert('评论发表失败!');</script>";
        }
    }
}
$pls = $adminDB->executeSQL("select id, content, usernc, addtime, ip from tb_pl where bookinfoid='" . $bid . "' order by addtime desc", $connID);
$smarty->assign('pls', $pls);
if ($pls) {
    $totalpl = count($pls);
} else {
    $totalpl = 0;
}
$smarty->assign('totalpl', $totalpl);
$smarty->display('bookinfo.phtml');
require_once 'footer.php';