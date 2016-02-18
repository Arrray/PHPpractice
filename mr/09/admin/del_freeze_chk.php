<?php
	session_start();
	include_once("conn/conn.class.php");
	include_once("inc/chec.php");
	$d_sqlstr = "delete from tb_music_user where tb_music_id = ".$_GET[id];
	$d_rst=$result->indeup($d_sqlstr,$conn);
	if(!($d_rst)==false)
	//if(!($d_rst = $conn->execute($d_sqlstr)) == false)
		echo "<script>alert('É¾³ý³É¹¦');location='main.php?action=member';</script>";
	else
		echo "<script>alert('É¾³ýÊ§°Ü');history.go(-1);</script>";
?>