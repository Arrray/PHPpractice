<?php 
session_start();	
include_once("conn/conn.php");
$tb_forum_user=trim($_SESSION['tb_forum_user']);
$tb_forum_pass=md5($_POST['tb_forum_pass']);
$tb_forum_truepass=$_POST['tb_forum_pass'];
$tb_forum_email=trim($_POST['tb_forum_email']);
$tb_forum_qq=trim($_POST['tb_forum_qq']);
$tb_forum_date=date("Y-m-d h:i:s");
$tb_forum_type=1;
$tb_forum_grade=10;
$tb_forum_speciality=$_POST['tb_forum_speciality'];
$filesize=$_FILES['tb_forum_picture']['size'];
if($filesize>1000000){
	echo "<script> alert('对不起,您输入的图片太大,不能上传!!'); history.back();</script>";
}else{
	$path = 'images/face/'. $_FILES['tb_forum_picture']['name'];
if (move_uploaded_file($_FILES['tb_forum_picture']['tmp_name'],$path)){ 
	$query=mysql_query("update tb_forum_user set  tb_forum_user='$tb_forum_user',tb_forum_pass='$tb_forum_pass',tb_forum_type='$tb_forum_type',tb_forum_email='$tb_forum_email',tb_forum_truepass='$tb_forum_truepass',tb_forum_date='$tb_forum_date',tb_forum_picture='$path',tb_forum_qq='$tb_forum_qq',tb_forum_grade='$tb_forum_grade',tb_forum_speciality='$tb_forum_speciality' where tb_forum_user='$tb_forum_user'",$conn);
if($query==true){ 
	echo "<script>alert('会员信息修改成功!');history.back();</script>";
}else{
  	echo "<script language='javascript'>alert('修改失败!');history.back();</script>"; 
  	exit;
}}}
?>