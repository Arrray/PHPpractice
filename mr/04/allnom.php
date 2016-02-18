<?php
include_once("system/system.inc.php");
if(isset($_GET['page'])){
	$page=$_GET['page'];
}else{
	$page=1;
}	
$rst1 = $seppage->ShowData("select * from tb_commo where isnom = 1 order by isnom,id desc",$conn,3,$page);	
$smarty->assign("nomarr",$rst1);
$smarty->assign('rst1_page',$seppage->ShowPage("产品","个",$_GET['page_type'],'',"a"));
$smarty->assign('title','推荐商品');
?>