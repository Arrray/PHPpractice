<?php
	session_start();
	include_once("conn/conn.class.php");
	include_once("inc/chec.php");
	
	if($_POST[whether] == "1")
		$wt = "0";
	else if($_POST[whether] == "0")
		$wt = "1";
	else{
		echo "<script>alert('非法操作!');history.go(-1);</script>";
		exit();
	}
	$o_sqlstr = "update tb_music_user set tb_music_whether = '".$wt."' where tb_music_id = ".$_POST[id];
	$o_rst = $result->indeup($o_sqlstr,$conn);
	if(!($o_rst == false)){
		echo "<script>alert('操作成功');location='main.php?action=member';</script>";
	}
?>
