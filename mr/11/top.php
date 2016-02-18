<?php 
  	include_once("conn/conn.php");
	include_once("config.php");
	include_once("conn/conn.class.php");
	if(isset($_SESSION["id"]) and isset($_SESSION["name"])){
		$smarty->assign("name",$_SESSION["name"]);
	$smarty->assign("id",$_SESSION["id"]);
		$smarty->assign("session_name","T");
	}

	$i_sqlstr="select * from tb_video_type ";
	$arrays=$result->getRows($i_sqlstr,$conn);
	
	$smarty->assign("video_type",$arrays);

   $smarty->display("top.tpl");
?>