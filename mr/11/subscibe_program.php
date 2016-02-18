<?php  session_start();
include_once("conn/conn.php");
include("config.php");
include_once("top.php");
$u=$_SERVER['HTTP_HOST'];
$url="http://"."$u";
$smarty->assign("ip",$url);
$sql="select * from tb_subscibe where tb_subscibe_user='".$_GET['video_user']."'";
$array=$result->getRows($sql,$conn);
$smarty->assign("user",$_GET['video_user']);		//获取订阅信息
$smarty->assign("user_id",$_GET[user_id]);		//获取用户
$smarty->assign("subscibe",$array);		//获取订阅信息

$sql_video="select tb_user_id,tb_video_user from tb_video_user";
$arrays=$result->getRows($sql_video,$conn);
$smarty->assign("video_user",$arrays);			//获取用户信息

$s_sqlstr="select count(tb_video_user) as subscibe_counts from tb_subscibe where tb_subscibe_user='".$_GET['video_user']."'";
	$array_s=$result->getRows($s_sqlstr,$conn);
	$smarty->assign("subscibe_counts",$array_s[0][subscibe_counts]);		//统计用户订阅的数目

$sqlss="select * from tb_up_video ";
$arrayss=$result->getRows($sqlss,$conn);
$smarty->assign("video_counts",$arrayss);		//获取上传次数



$smarty->display("subscibe_program.tpl");
?>
