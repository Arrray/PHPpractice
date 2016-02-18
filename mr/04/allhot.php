<?php
include_once("system/system.inc.php");
if(isset($_GET['page'])){
	$page=$_GET['page'];
}else{
	$page=1;
}
$sql = $seppage->ShowData("select * from tb_commo order by sell,id desc",$conn,2,$page);	
$smarty->assign("hotarr",$sql);
$smarty->assign('rst1_page',$seppage->ShowPage("产品","个",$_GET['page_type'],'',"a"));
$smarty->assign('title','热门商品');
?>