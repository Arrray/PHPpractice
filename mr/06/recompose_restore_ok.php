<?php  session_start(); include("conn/conn.php");
$tb_restore_subject=$_POST[restore_subject];
$tb_restore_content=$_POST[restore_content];
$tb_restore_date=date("Y-m-d H:i:s");
$query=mysql_query("update tb_forum_restore set tb_restore_subject='$tb_restore_subject',tb_restore_content='$tb_restore_content',tb_restore_date='$tb_restore_date' where tb_restore_id='".$_POST[restore_id]."'");
if($query==true){
 echo "<script>alert('回复更新成功!');history.back();</script>";
 mysql_close($conn);
 }else{
   echo "<script>alert('回复更新失败!');history.back();</script>";
   mysql_close($conn);
  }
?>