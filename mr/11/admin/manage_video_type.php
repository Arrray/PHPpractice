<?php	
if($_SESSION['admin']!=""){
	include_once("config.php");
	include_once("conn/conn.class.php");

$sql="select * from tb_video_type";
$array=$result->getRows($sql,$conn);
$smarty->assign("video_type",$array);


$smarty->display("manage_video_type.tpl");











}else{
echo "<script>alert('����ȷ��¼!'); window.location.href='index.php';</script>";
}
?>