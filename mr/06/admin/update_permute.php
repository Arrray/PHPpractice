<?php include("../conn/conn.php");
$update_id=$_GET[update_id];	//��ȡ���ӵ�IDֵ
//ִ�������ö�����ȡ���ö��Ĳ���
$query=mysql_query("update tb_forum_send set tb_send_type='$_POST[tb_send_type]' where tb_send_id='$update_id'");
if($query==true){
	echo "<script>alert('���³ɹ�!');history.back();</script>";
}else{
	echo "<script>alert('����ʧ��!');history.back();</script>";
}
?>