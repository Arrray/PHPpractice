<?php
header("Content-Type:text/html;charset=gb2312");
require_once("system/system.inc.php");  //调用指定的文件
$arraybbstell=$admindb->ExecSQL("select * from tb_mr_book",$conn); 		//执行select查询语句
if(!$arraybbstell){		
	$smarty->assign("isbbstell","F");		//判断如果执行失败则输出模板变量isbbstell的值为F 
}else{
	$smarty->assign("isbbstell","T");	//判断如果执行成功，则输出模板变量isbbstell的值为T，
    $smarty->assign("arraybbstell",$arraybbstell);	//定义模板变量arraybbstell，输出数据库中数据
}
if(isset($_GET["page"])){
	$page=$_GET["page"];
}else{
	$page=1;
}      
$arraybbs=$seppage->ShowData("select * from tb_mr_book",$conn,1,$page);		//调用分页类，实现分页功能  
if(!$arraybbs){
    $smarty->assign("isbbs","F");
}else{
    $smarty->assign("isbbs","T");
	$smarty->assign("showpage",$seppage->ShowPage("","","","","")); //定义输出分页数据的模板变量showpage
    $smarty->assign("arraybbs",$arraybbs);
}
$smarty->display("index.tpl");		//指定连接的模板页
?>
