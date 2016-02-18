<?php 
require_once 'header.php';
if(isset($_GET['tid']) && $_GET['tid']!=''){
    $tid = $_GET['tid'];
}else{
    $tid = $_POST['tid'];
}
$smarty->assign('tid', $tid);


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

$tell = $adminDB->executeSQL("select id, title, content, addtime from tb_tell where id='$tid'", $connID);
$smarty->assign('tell', $tell);


$smarty->display('tellinfo.phtml');
require_once 'footer.php';