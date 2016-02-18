<?php 
require_once 'header.php';
if(isset($_GET['cid']) && $_GET['cid']!=''){
    $cid = $_GET['cid'];
}else{
    $cid = $_POST['cid'];
}
$smarty->assign('cid', $cid);


//
if(!isset($_GET['cctype']) || $_GET['cctype']=='')
{
	if(isset($_POST['cctype']) && $_POST['cctype']!=''){
	    $cctype = $_POST['cctype'];
	}else{
	    $cctype='1';
	}
}
else 
{
	$cctype = $_GET['cctype'];
}
$smarty->assign('cctype', $cctype);

//
$bigtypes = $adminDB->executeSQL("select id, typename from tb_bigtype order by addtime", $connID);
$smarty->assign('bigtypes', $bigtypes);

$smalltypes = $adminDB->executeSQL("select id, typename, bigtypeid from tb_smalltype order by addtime", $connID);
$smarty->assign('smalltypes', $smalltypes);

//

$cxsx = $adminDB->executeSQL("select id, title, content, addtime from tb_cxsx where id='$cid'", $connID);
$smarty->assign('cxsx', $cxsx);


$smarty->display('cxsxinfo.phtml');
require_once 'footer.php';