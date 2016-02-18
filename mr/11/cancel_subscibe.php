<?php  session_start();
include_once("conn/conn.php");
include_once("config.php");

if($_SESSION['name']!=""){
$smarty->assign("names","T");
$smarty->assign("name",$_SESSION['name']);
$smarty->assign("user_id",$_SESSION['id']);

}
include_once("top.php");
$smarty->assign("user",$_GET['video_user']);		//获取用户

$u=$_SERVER['HTTP_HOST'];
$url="http://"."$u";
$smarty->assign("ip",$url);

$sql="select * from tb_subscibe where tb_subscibe_user='".$_GET['video_user']."'";
$array=$result->getRows($sql,$conn);
$smarty->assign("subscibe",$array);

$sql_video="select tb_user_id,tb_video_user,tb_user_picture from tb_video_user";
$arrays=$result->getRows($sql_video,$conn);
$smarty->assign("video_user",$arrays);

$s_sql="select * from tb_subscibe where tb_subscibe_user='".$_SESSION['name']."'";
$array_s=$result->getRows($s_sql,$conn);
$smarty->assign("subscibe_address",$array_s);

$sqlss="select * from tb_up_video ";
$arrayss=$result->getRows($sqlss,$conn);
$smarty->assign("video_counts",$arrayss);

$s_sqlstr="select count(tb_video_user) as subscibe_counts from tb_subscibe where tb_subscibe_user='".$_GET['video_user']."'";
	$array_s=$result->getRows($s_sqlstr,$conn);
	$smarty->assign("subscibe_counts",$array_s[0]['subscibe_counts']);		//统计用户订阅的数目


$smarty->display("cancel_subscibe.tpl");
?>
