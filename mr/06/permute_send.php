<?php session_start();	include("conn/conn.php");
$query=mysql_query("select * from tb_forum_user where tb_forum_user='$_SESSION[tb_forum_user]' and tb_forum_type='2'");
if(mysql_num_rows($query)>0){
	$query=mysql_query("update tb_forum_send set tb_send_type='1' where tb_send_id='$_GET[permute_id]'");
	if($query==true){
		echo "<script> alert('�����ö��ɹ�!'); history.back();</script>";
	}else{
		echo "<script> alert('�����ö�ʧ��!'); history.back();</script>";
	}
}else{
	echo "<script> alert('�����߱���Ȩ��!'); history.back();</script>";
}
?>