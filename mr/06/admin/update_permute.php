<?php include("../conn/conn.php");
$update_id=$_GET[update_id];	//获取帖子的ID值
//执行帖子置顶或者取消置顶的操作
$query=mysql_query("update tb_forum_send set tb_send_type='$_POST[tb_send_type]' where tb_send_id='$update_id'");
if($query==true){
	echo "<script>alert('更新成功!');history.back();</script>";
}else{
	echo "<script>alert('更新失败!');history.back();</script>";
}
?>