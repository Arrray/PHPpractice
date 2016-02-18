<?php 
    session_start();
	include_once("config.php");
	include_once("conn/conn.class.php");
	$m_sqlstr = "select * from tb_music_user where tb_music_id = ".$_SESSION[id];
	$rst_i=$result->login($m_sqlstr,$conn);
	$array=$result->getRows($m_sqlstr,$conn);
	if($rst_i==true){
	$smarty->assign("info",$array);
	}
	
	$smarty->display("mod_vip.tpl");
?>
