<?php session_start();
  	include_once("conn/conn.class.php");
	include_once("config.php");
include_once("top.php");
	$i_sqlstr="select * from tb_video_user order by tb_individualism_accessing desc ";
	$arrays=$result->GetRows($i_sqlstr,$conn);

	if(count($arrays)==0){
		$smarty->assign("discuss_false","F");
	}
	$smarty->assign("video_user",$arrays);

	$smarty->display("more_user.tpl");
?>