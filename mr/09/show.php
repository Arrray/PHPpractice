<?php 
session_start();
include_once("config.php");
include_once("conn/conn.class.php");
if($_POST[action] == "l_found"){            //判断搜索类型为普通搜索
$smarty->assign("foundtype","normal");      //向模板变量赋值normal
$l_sqlstr = "select id,style,name,actor,remark,address from tb_video  where style = '".$_POST[type_ii]."' and name like '%".$_POST[k_word]."%' order by id";
$l_num=$result->login($l_sqlstr,$conn);     //判断是否有返回的记录
  if($l_num==false){
  $smarty->assign("retnum","N");            //如果没有返回记录则向模板变量输出N 即显示没有记录
  }
$l_rst=$result->getRows($l_sqlstr,$conn);
$smarty->assign("foundresult",$l_rst);      //将返回的查询结果赋给模板变量

$smarty->display("show.tpl");

}else if($_GET[action] == "high"){
   //echo $_SESSION["sql"];
    $smarty->assign("foundtype","advance");
	$h_sql=stripslashes($_GET["direction"]); 
    //$h_sql=$_SESSION[sql];
	$ll_num = $result->getRows($h_sql,$conn);
	 if($ll_num==false){
	 $smarty->assign("returnnum","N");
	 }
	$ll_rst = $result->getRows($h_sql,$conn);
	$smarty->assign("afoundresult",$ll_rst);
$smarty->display("show.tpl");
}
/*
	
	$l_rst = $conn->execute($l_sqlstr);
	if($l_rst->EOF){
	*/
?>