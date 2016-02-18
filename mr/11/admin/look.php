<?php session_start();
include_once("conn/conn.class.php");
include_once("config.php");
	//查询指定要播放的视频文件
	$l_sqlstr="select * from tb_video where tb_video_id=".$_GET['video_id']."";
	$array=$result->getRows($l_sqlstr,$conn);
	$smarty->assign("video",$array);

	$i_sqlstr="select * from tb_video_type ";
	$arraysi=$result->getRows($i_sqlstr,$conn);
	$smarty->assign("video_type",$arraysi);
	$smarty->display("look.tpl");	
?>