<?php  
if($_SESSION['admin']!=""){

include_once("conn/conn.class.php");
include_once("config.php");
$sql_t="select * from tb_video_type";
$array_t=$result->getRows($sql_t,$conn);
$smarty->assign("video_type",$array_t);

$sql="select tb_video_id,tb_video_name,tb_video_type,tb_video_author,tb_video_date,tb_video_auditing,tb_video_address,tb_video_picture from tb_video ";
$array=$result->getRows($sql,$conn);

$smarty->assign("video",$array);

$smarty->display("manage_up_video.tpl");


}else{
echo "<script>alert('ÇëÕıÈ·µÇÂ¼!'); window.location.href='index.php';</script>";
}
?>