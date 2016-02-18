<?php
	session_start();
	include_once("conn/conn.class.php");
	include_once("config.php");
	include_once("inc/chec.php");
	if($_SESSION['admin']=="mr"){
	 $smarty->assign("manager","Y");
	}else{
	 $smarty->assign("manager","N");
	}
	$smarty->display("left.tpl");

?>