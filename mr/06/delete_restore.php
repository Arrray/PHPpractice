<?php session_start(); include("conn/conn.php");
if($_SESSION[tb_forum_user]==$_GET[delete_restore_user]){
	if(mysql_query("delete from tb_forum_restore where tb_restore_id='$_GET[delete_id]'")){
		echo "<script>alert('ɾ���ɹ�');history.back();</script>";
 		mysql_close($conn);
	}else{
		echo "<script>alert('����ɾ��ʧ��!');history.back();</script>";
   		mysql_close($conn);
	}
}elseif(mysql_num_rows(mysql_query("select * from tb_forum_user where tb_forum_user='$_SESSION[tb_forum_user]' and tb_forum_type='2'"))>=1){
	$query_2=mysql_query("delete from tb_forum_restore where tb_restore_id='$_GET[delete_id]'");
	if($query_2==true){
		echo "<script>alert('ɾ���ɹ�!');history.back();</script>";
   		mysql_close($conn);
	}else{
		echo "<script>alert('����ɾ��ʧ��!');history.back();</script>";
	}
}else{
	echo "<script>alert('�����߱�ɾ�����ӵ�Ȩ��!');history.back();</script>";
}

?>








