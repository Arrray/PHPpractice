<?php session_start(); include("../conn/conn.php");
$tb_affiche_subject=$_POST["tb_affiche_subject"];
$tb_affiche_content=$_POST["tb_affiche_content"];
$tb_affiche_user=$_POST["tb_affiche_user"];
$tb_affiche_type=$_POST["tb_affiche_type"];
$tb_affiche_date=date("Y-m-d");


$query=mysql_query("insert into tb_forum_affiche (tb_affiche_subject,tb_affiche_content,tb_affiche_user,tb_affiche_type,tb_affiche_date)values('$tb_affiche_subject','$tb_affiche_content','$tb_affiche_user','$tb_affiche_type','$tb_affiche_date')");
if($query==true){
	echo "<script>alert('公告添加成功！');history.back();</script>";
}else{
	echo "<script>alert('公告添加失败！');history.back();</script>";
}

?>