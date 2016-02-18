<?php
	session_start();
	include_once("inc/chec.php");
	include_once("conn/conn.class.php");
	if($_GET[action] == "audiolist")
		$t_name = "tb_audiolist";
	else if($_GET[action] == "videolist")
		$t_name = "tb_videolist";
	$sqlstr = "delete from ".$t_name." where id =".$_GET[id];
    $rst=$result->indeup($sqlstr,$conn);
	   if($rst == false){
		   echo "<script>alert('É¾³ý´íÎó£¡".$sqlstr."');history.go(-1);</script>";
	    }else{
		   echo "<script>alert('É¾³ý³É¹¦');location='".$_SERVER['HTTP_REFERER']."';</script>";
		      }
?>