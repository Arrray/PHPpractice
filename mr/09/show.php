<?php 
session_start();
include_once("config.php");
include_once("conn/conn.class.php");
if($_POST[action] == "l_found"){            //�ж���������Ϊ��ͨ����
$smarty->assign("foundtype","normal");      //��ģ�������ֵnormal
$l_sqlstr = "select id,style,name,actor,remark,address from tb_video  where style = '".$_POST[type_ii]."' and name like '%".$_POST[k_word]."%' order by id";
$l_num=$result->login($l_sqlstr,$conn);     //�ж��Ƿ��з��صļ�¼
  if($l_num==false){
  $smarty->assign("retnum","N");            //���û�з��ؼ�¼����ģ��������N ����ʾû�м�¼
  }
$l_rst=$result->getRows($l_sqlstr,$conn);
$smarty->assign("foundresult",$l_rst);      //�����صĲ�ѯ�������ģ�����

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