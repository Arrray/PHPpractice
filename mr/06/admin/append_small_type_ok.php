<?php include("../conn/conn.php");
$tb_big=$_POST[tb_big_type_content];
$tb_small=$_POST[tb_small_type_content];
$tb_date=date("Y-m-d");
$query=mysql_query("insert into tb_forum_small_type(tb_small_type_content,tb_big_type_content,tb_small_type_date)values('$tb_small','$tb_big','$tb_date')");
if($query==true){
	echo "<script>alert('类别添加成功！');history.back();</script>";
}else{
	echo "<script>alert('类别添加失败！');history.back();</script>";
}
?>
