<?php session_start();	include_once("conn/conn.php");
$tb_forum_user=trim($_POST["tb_forum_user"]);
$sql=mysql_query("select tb_forum_user from tb_forum_user where tb_forum_user='$tb_forum_user'",$conn);
$info=mysql_fetch_array($sql);
if($info!=false){
  echo "<script language='javascript'>alert('�Բ��𣬸��ǳ��ѱ������û�ʹ��!');history.back();</script>"; 
  exit; 
}
$tb_forum_user=trim($_POST["tb_forum_user"]);
$tb_forum_pass=md5($_POST["tb_forum_pass"]);
$tb_forum_truepass=$_POST["tb_forum_pass"];
$tb_forum_email=trim($_POST["tb_forum_email"]);
$tb_forum_qq=trim($_POST["tb_forum_qq"]);
$tb_forum_pass_problem=trim($_POST["tb_forum_pass_problem"]);
$tb_forum_pass_result=trim($_POST["tb_forum_pass_result"]);
$tb_forum_date=date("Y-m-d h:i:s");
$tb_forum_speciality=$_POST["tb_forum_speciality"];
$tb_forum_picture=$_POST["tb_forum_picture"];
$tb_forum_type=1;
$tb_forum_grade=10;


$tb_mail_subject="��ӭ��������̳";
$tb_mail_content="�𾴵�".$tb_forum_user."����ӭ����mrsoft��̳������ͥ��ע���ʺź��뵽������������֤��";
$tb_date=date("Y-m-d");

$query=mysql_query("insert into tb_forum_user(tb_forum_user,tb_forum_pass,tb_forum_type,tb_forum_email,tb_forum_truepass,tb_forum_date,tb_forum_picture,tb_forum_qq,tb_forum_grade,tb_forum_pass_problem,tb_forum_pass_result,tb_forum_speciality) values('$tb_forum_user','$tb_forum_pass','$tb_forum_type','$tb_forum_email','$tb_forum_truepass','$tb_forum_date','$tb_forum_picture','$tb_forum_qq','$tb_forum_grade','$tb_forum_pass_problem','$tb_forum_pass_result','$tb_forum_speciality')",$conn);

//ע���ʺź��Զ�����һ��վ���Ÿ�ע���û�
$queryss=mysql_query("insert into tb_mail_box(tb_receiving_person,tb_mail_subject,tb_mail_content,tb_mail_sender,tb_mail_date,yanzheng )values('$tb_forum_user','$tb_mail_subject','$tb_mail_content','ϵͳ��Ϣ','$tb_date',0)");
if($query==true){ 
	session_register("tb_forum_user");
  	$_SESSION["tb_forum_user"]=$tb_forum_user; 	
	echo "<script>alert('ע��ɹ�!');window.location.href='index.php';</script>";
}else{
  	echo "<script language='javascript'>alert('�Բ���,ע��ʧ��!');history.back();</script>"; 
  	exit;
}

?>