<?php session_start(); include("../conn/conn.php");
$tb_big_type_content=$_POST[tb_big_type_content];
$tb_big_type_date=date("Y-m-d");
$query=mysql_query("insert into tb_forum_big_type (tb_big_type_content,tb_big_type_date)values('$tb_big_type_content','$tb_big_type_date')");
if($query==true){
	echo "<script>alert('专区添加成功！');history.back();</script>";
}else{
	echo "<script>alert('专区添加失败！');history.back();</script>";
}
?>