<?php session_start();
include_once("conn/conn.class.php");
$tb_subscibe_address=$_GET["user_id"].".xml";
if($_GET["video_user"]==true){
	$sqls="select * from tb_subscibe where tb_video_user='".$_GET['video_user']."'and tb_subscibe_user='".$_SESSION['name']."'";
	$array=$result->getRows($sqls,$conn);
	if(count($array)>0){
		echo "<script>alert('该节目已经订阅!'); history.back();</script>";
	}else{
		$sql="insert into tb_subscibe (tb_subscibe_address,tb_video_user,tb_subscibe_user)values('".$tb_subscibe_address."','".$_GET['video_user']."','".$_GET['subscibe_user']."')";
		$rst = $result->indeup($sql,$conn);
		echo "<script>alert('订阅成功!'); history.back();</script>";
	}
}
?>