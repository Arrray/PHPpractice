<?php session_start();
include_once("conn/conn.class.php");
if($_GET["video_id"]==true){
$d_sql="delete from tb_video where tb_video_id='".$_GET['video_id']."'";
$d_rst=$result->indeup($d_sql,$conn);

$d_sqls="delete from tb_video_discuss where tb_video_id='".$_GET['video_id']."'";
$d_ret=$result->indeup($d_sqls,$conn);

echo "<script>alert('删除数据成功!'); window.location.href='my_video_manage.php?video_user=".$_SESSION['name']."';</script>";
}
?>