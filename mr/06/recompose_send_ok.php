<?php  session_start(); include("conn/conn.php");
$tb_send_subject=$_POST["send_subject"];
$tb_send_content=$_POST["send_content"];
$tb_send_small_type=$_POST["send_sort"];
$tb_send_date=date("Y-m-d H:i:s");
$query=mysql_query("update tb_forum_send set tb_send_subject='$tb_send_subject',tb_send_content='$tb_send_content',tb_send_small_type='$tb_send_small_type',tb_send_date='$tb_send_date' where tb_send_id='".$_POST["send_id"]."'");
if($query==true){
 echo "<script>alert('帖子更新成功!');history.back();</script>";
 mysql_close($conn);
 }else{
   echo "<script>alert('帖子更新失败!');history.back();</script>";
   mysql_close($conn);
  }
?>