<?PHP include("../conn/conn.php");
$delete_id=$_GET[delete_id];
$query=mysql_query("delete from tb_forum_big_type where tb_big_type_id='$delete_id'");
if($query==true){
	echo "<script>alert('ɾ���ɹ�!');history.back();</script>";
}else{
	echo "<script>alert('ɾ��ʧ��!');history.back();</script>";
}
?>