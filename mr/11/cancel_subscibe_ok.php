<?php 
session_start();
include_once("conn/conn.class.php");
if($_GET['video_user']==true){
	$s_sql="delete from tb_subscibe where tb_video_user='".$_GET['video_user']."' and tb_subscibe_user='".$_GET[name]."'";
	$s_rst=$result->indeup($s_sql,$conn);
echo "<script>alert('取消订阅成功！'); window.location.href='cancel_subscibe.php?video_user=".$_SESSION['name']."';</script>";
}

?>