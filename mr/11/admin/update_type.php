<?php	session_start();
if($_SESSION['admin']!=""){
	include_once("config.php");
	include_once("conn/conn.class.php");

$sql="select * from tb_video_type where tb_type_id='".$_GET['type_id']."'";
$array=$result->getRows($sql,$conn);
$smarty->assign("video_type",$array);

$smarty->display("update_type.tpl");

}else{
echo "<script>alert('ÇëÕıÈ·µÇÂ¼!'); window.location.href='index.php';</script>";
}
?>