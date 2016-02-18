<?php
	session_start();
	include_once("config.php");
	include_once("conn/conn.class.php");
	$m_sqlstr = "select * from tb_video_user where tb_user_id ='$_SESSION[id]'";
	$array=$result->getRows($m_sqlstr,$conn);
	$smarty->assign("tb_video_user",$array); 
	$smarty->assign("id",$_SESSION['id']); 

	$smarty->display("mod_vip.tpl"); 
?>
