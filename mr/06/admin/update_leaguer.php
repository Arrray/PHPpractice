<?PHP include("../conn/conn.php");
$update_id=$_GET[update_id];
$query=mysql_query("update tb_forum_user set tb_forum_type='$_POST[tb_forum_type]' where tb_forum_id='$update_id'");
if($query==true){
	echo "<script>alert('���³ɹ�!');history.back();</script>";
}else{
	echo "<script>alert('����ʧ��!');history.back();</script>";
}
?>