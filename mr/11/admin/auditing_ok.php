<?php 
include("conn/conn.class.php");
if(isset($_GET["video_id"]) and $_GET["video_id"]==true){
$sql="update tb_video set tb_video_auditing=1 where tb_video_id='".$_GET['video_id']."'";
$ret=$result->indeup($sql,$conn);
echo "<script>alert('通过审核!'); history.back();</script>";
}
if($_GET["video_ids"]==true){
$sqls="update tb_video set tb_video_auditing=0 where tb_video_id='".$_GET['video_ids']."'";
$rets=$result->indeup($sqls,$conn);
echo "<script>alert('取消审核!'); history.back();</script>";
}

?>
