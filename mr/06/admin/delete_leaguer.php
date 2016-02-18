<?PHP include("../conn/conn.php");
$delete_id=$_GET[delete_id];
$query=mysql_query("delete from tb_forum_user where tb_forum_id='$delete_id'");
if($query==true){
	$query_1=mysql_query("delete from tb_forum_restore where tb_restore_user='$delete_user'");
	$query_2=mysql_query("delete from tb_forum_send where tb_send_user='$delete_user'");
	echo "<script>alert('É¾³ý³É¹¦!');history.back();</script>";
}else{
	echo "<script>alert('É¾³ýÊ§°Ü!');history.back();</script>";
}
?>