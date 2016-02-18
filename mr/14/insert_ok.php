<?php 
header("content-type:text/html;charset=utf-8");
include("conn/conn.php");			//包含数据库文件
if(isset($_POST['Submit']) and $_POST['Submit']=="提交"){
	$sort=$_POST['sort'];
	$talk=$_POST['talk'];
	$books=$_POST['books'];
	$synopsis=$_POST['synopsis'];
	$catalog=$_POST['catalog'];
	$cata=str_replace(chr(13),"<br>",$catalog);		//定义目录存储格式
	$bookpath=$_POST['bookpath'];
	$programpath=$_POST['programpath'];	
	$videopath=$_POST['videopath'];
	$date=date('Y-m-d');			//获取时间
	$insert=mysql_query("insert into tb_book(sort,talk,books,synopsis,catalog,bookpath,programpath,videopath,date,row) values('$sort','$talk','$books','$synopsis','$cata','$bookpath','$programpath','$videopath','$date','0')",$conn);
	if($insert){
		echo "<script>alert('添加成功！');window.location.href='index.php'</script>";
	}else{
		echo "<script>		          alert('添加失败！'); window.location.href = 'insert.php'</script>";
	}
}
?>