<?php session_start(); include_once("conn/conn.php");
$tb_send_type=0;						           //���������Ƿ��ö�
$tb_send_types=0;						           //�ж������Ƿ��лظ�
$tb_send_small_type=$_POST["send_sort"];	       //��ȡ�����ύ������
$tb_send_subject=$_POST["send_subject"];	       //��ȡ�����ύ������
$tb_send_picture=$_POST["face"];			       //��ȡ�����ύ������
$tb_send_content=trim($_POST["menu"]);	           //��ȡ�����ύ������
$tb_send_user=$_POST["tb_forum_user"];
$tb_send_date=date("Y-m-j H:i:s");
if($_FILES["send_accessories"]["size"]==0){	       //�ж��Ƿ��и����ϴ�
	if(mysql_query("insert into tb_forum_send(tb_send_subject,tb_send_content,tb_send_user,tb_send_date,tb_send_picture,tb_send_type,tb_send_types,tb_send_small_type,tb_send_author,tb_send_ltime) values ('".$tb_send_subject."','".$tb_send_content."','".$tb_send_user."','".$tb_send_date."','".$tb_send_picture."','".$tb_send_type."','".$tb_send_types."','".$tb_send_small_type."','".$tb_send_user."','".$tb_send_date."')",$conn)){
 		mysql_query("update tb_forum_user set tb_forum_grade=tb_forum_grade+5",$conn);
 			echo "<script>alert('��������ɹ�!');history.back();</script>";
 		mysql_close($conn);
 	}else{
   		echo "<script>alert('��������ʧ��!');history.back();</script>";
   		mysql_close($conn);
  	}
}
if($_FILES["send_accessories"]["size"] > 20000000){	//�ж��ϴ������Ƿ񳬹�ָ���Ĵ�С
	echo "<script>alert('�ϴ��ļ�����ָ����С��');history.go(-1);</script>";
	exit();
}else{
$path = './file/'.time().$_FILES['send_accessories']['name'];			//�����ϴ��ļ���·��������
if (move_uploaded_file($_FILES['send_accessories']['tmp_name'],$path)) { //�������洢����������ָ��λ��
	if(mysql_query("insert into tb_forum_send(tb_send_subject,tb_send_content,tb_send_user,tb_send_date,tb_send_picture,tb_send_type,tb_send_types,tb_send_small_type,tb_send_accessories,tb_send_author,tb_send_ltime) values ('".$tb_send_subject."','".$tb_send_content."','".$tb_send_user."','".$tb_send_date."','".$tb_send_picture."','".$tb_send_type."','".$tb_send_types."','".$tb_send_small_type."','".$path."','".$tb_send_user."','".$tb_send_date."')",$conn)){
 		mysql_query("update tb_forum_user set tb_forum_grade=tb_forum_grade+5",$conn);
 		echo "<script>alert('��������ɹ�!');history.back();</script>";
 		mysql_close($conn);
 	}else{
   		echo "<script>alert('��������ʧ��!');history.back();</script>";
   		mysql_close($conn);
  	}
}
}
?>

