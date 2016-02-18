<?php
require_once 'admin-header.php';
$stypes = $adminDB->executeSQL("select id, typename from tb_smalltype order by addtime", $connID);
for ($i = 0; $i < count($stypes); $i ++) {
    $arrayStypeOption[$stypes[$i]['id']] = $stypes[$i]['typename'];
}
$smarty->assign('arrayStypeOption', $arrayStypeOption);
//
$pubs = $adminDB->executeSQL("select id, pubname from tb_pub order by addtime", $connID);
for ($i = 0; $i < count($pubs); $i ++) {
    $arrayPubOption[$pubs[$i]['id']] = $pubs[$i]['pubname'];
}
$smarty->assign('arrayPubOption', $arrayPubOption);
//
for ($i = 1990; $i <= 2050; $i ++) {
    $arrayYear[$i] = $i;
}
$smarty->assign('arrayYear', $arrayYear);
for ($i = 1; $i <= 12; $i ++) {
    $arrayMonth[$i] = $i;
}
$smarty->assign('arrayMonth', $arrayMonth);
//
if (isset($_POST['bookname']) && $_POST['bookname'] != '' && $_POST['change'] == 'F') {
    if (! $adminDB->executeSQL("select id, bookname from tb_bookinfo where bookname='" . trim($_POST['bookname']) . "'", $connID)) {
        if (isset($_FILES["bookimg"]["name"]) && $_FILES["bookimg"]["name"] != "") {
            $dir = "./upfiles/bookimg";
            if (! is_dir($dir)) {
                mkdir($dir);
            }
            $upfilename = $_FILES["bookimg"]["name"];
            $filename = date("YmdHis") . mt_rand(1000, 9999) . substr($upfilename, strpos($upfilename, "."), strlen($upfilename) - strpos($upfilename, "."));
            ;
            $address = $dir . "/" . $filename;
            @move_uploaded_file($_FILES["bookimg"]["tmp_name"], $address);
        } else {
            $filename = "";
        }
        $pubtime = $_POST['pyear'] . '-' . $_POST['pmonth'] . '-00';
        if (! $adminDB->executeSQL("insert into tb_bookinfo(bookname, smalltypeid, pubid, page, zs, isbn, bc, writer, pubtime, oldprice, newprice, bookcc, bookids, bookimg, directory, about, isnew, issepprice, ishotsell, isterm ,ismrbooktj ,ishave, addtime, browsertime) values('" . trim($_POST['bookname']) . "', '" . trim($_POST['smalltypeid']) . "', '" . trim($_POST['pubid']) . "', '" . trim($_POST['page']) . "', '" . trim($_POST['zs']) . "', '" . trim($_POST['isbn']) . "', '" . trim($_POST['bc']) . "', '" . trim($_POST['writer']) . "', '" . $pubtime . "', '" . trim($_POST['oldprice']) . "', '" . trim($_POST['newprice']) . "', '" . trim($_POST['bookcc']) . "', '" . trim($_POST['bookids']) . "', '" . $filename . "', '" . trim($_POST['directory']) . "', '" . trim($_POST['about']) . "', '" . trim($_POST['isnew']) . "', '" . trim($_POST['issepprice']) . "', '" . trim($_POST['ishotsell']) . "', '" . trim($_POST['isterm']) . "', '" . trim($_POST['ismrbooktj']) . "', '" . trim($_POST['ishave']) . "', '" . date('Y-m-d H:i:s') . "', '0')", $connID)) {
            echo "<script>alert('图书添加失败！');</script>";
        } else {
            echo "<script>alert('图书添加成功！');</script>";
        }
    } else {
        echo "<script>alert('该图书已经添加！');</script>";
    }
}
$isEdit = 'F';
if (isset($_GET['f']) && $_GET['f'] == 'edit' || isset($_POST['change']) && $_POST['change'] == 'T') {
    if (isset($_POST['change']) && $_POST['change'] == 'T') {
        if (isset($_FILES["bookimg"]["name"]) && $_FILES["bookimg"]["name"] != "") {
            $dir = "./upfiles/bookimg";
            if (! is_dir($dir)) {
                mkdir($dir);
            }
            $upfilename = $_FILES["bookimg"]["name"];
            $filename = date("YmdHis") . mt_rand(1000, 9999) . substr($upfilename, strpos($upfilename, "."), strlen($upfilename) - strpos($upfilename, "."));
            ;
            $address = $dir . "/" . $filename;
            @move_uploaded_file($_FILES["bookimg"]["tmp_name"], $address);
        } else {
            $tmpbook = $adminDB->executeSQL("select bookimg from tb_bookinfo where id='" . $_POST['id'] . "'", $connID);
            $filename = $tmpbook[0]['bookimg'];
        }
        $pubtime = $_POST['pyear'] . '-' . $_POST['pmonth'] . '-00';
        if ($_POST['isnew'] == 1) {
            $isnew = 1;
        } else {
            $isnew = 0;
        }
        if ($_POST['issepprice'] == 1) {
            $issepprice = 1;
        } else {
            $issepprice = 0;
        }
        if ($_POST['ishotsell'] == 1) {
            $ishotsell = 1;
        } else {
            $ishotsell = 0;
        }
        if ($_POST['isterm'] == 1) {
            $istrem = 1;
        } else {
            $isterm = 0;
        }
        if ($_POST['ismrbooktj'] == 1) {
            $ismrbooktj = 1;
        } else {
            $ismrbooktj = 0;
        }
        if ($_POST['ishave'] == 1) {
            $ishave = 1;
        } else {
            $ishave = 0;
        }
        if (! $adminDB->executeSQL("update tb_bookinfo set bookname='" . trim($_POST['bookname']) . "', smalltypeid='" . trim($_POST['smalltypeid']) . "', pubid='" . trim($_POST['pubid']) . "', page='" . trim($_POST['page']) . "', zs='" . trim($_POST['zs']) . "', isbn='" . trim($_POST['isbn']) . "', bc='" . trim($_POST['bc']) . "', writer='" . trim($_POST['writer']) . "', pubtime='" . $pubtime . "', oldprice='" . trim($_POST['oldprice']) . "', newprice='" . trim($_POST['newprice']) . "', bookcc='" . trim($_POST['bookcc']) . "', bookids='" . trim($_POST['bookids']) . "', bookimg='" . $filename . "', directory='" . trim($_POST['directory']) . "', about='" . trim($_POST['about']) . "', isnew='" . $isnew . "', issepprice='" . $issepprice . "', ishotsell='" . $ishotsell . "', isterm='" . $isterm . "' ,ismrbooktj='" . $ismrbooktj . "' ,ishave='" . $ishave . "' where id='" . $_POST['id'] . "'", $connID)) {
            echo "<script>alert('图书信息更改失败 ！');</script>";
        } else {
            echo "<script>alert('图书信息更改成功 ！');</script>";
        }
    }
    if (isset($_POST['id'])) {
        $id = $_POST['id'];
    } else {
        $id = $_GET['id'];
    }
    $isEdit = 'T';
    $book = $adminDB->executeSQL("select id, bookname, smalltypeid, pubid, page, zs, isbn, bc, writer, pubtime, oldprice, newprice, bookcc, bookids, bookimg, directory, about, isnew, issepprice, ishotsell, isterm ,ismrbooktj ,ishave, addtime, browsertime from tb_bookinfo where id='" . $id . "' ", $connID);
    $smarty->assign('book', $book);
    $smarty->assign('pyear', substr($book[0]['pubtime'], 0, 4));
    $smarty->assign('pmonth', substr($book[0]['pubtime'], 5, 2));
}
$smarty->assign('isEdit', $isEdit);
$smarty->display('admin-book.phtml');
require_once 'admin-footer.php';



