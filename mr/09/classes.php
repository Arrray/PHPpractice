<?php
include_once("conn/conn.class.php");
include_once("config.php");
	$l_sqlstr = "select * from tb_videolist where grade=2";
	//$l_sqlstr = "select * from tb_videolist where id=47";
	$array=$result->getRows($l_sqlstr,$conn);
	$smarty->assign("classes",$array);
    
	$smarty->display("classes.tpl");
	
?>