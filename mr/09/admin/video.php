<?php 
session_start();
	include_once("conn/conn.class.php");
	include_once("inc/chec.php");
	include_once("config.php");
	$sqlstr = "select * from tb_video";
	$rst=$result->getRows($sqlstr,$conn);
	$rst_num=count($rst);
	if($rst_num==0){                         //�ж����ݿ����Ƿ������Ŀ
	$smarty->assign("record","N");  
	}else{
	$smarty->assign("video_list",$rst);
	}
	$smarty->display("video.tpl");
?>