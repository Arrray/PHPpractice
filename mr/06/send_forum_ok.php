<?php session_start(); include_once("conn/conn.php");
$tb_send_type=0;						           //设置帖子是否置顶
$tb_send_types=0;						           //判断帖子是否有回复
$tb_send_small_type=$_POST["send_sort"];	       //获取表单中提交的数据
$tb_send_subject=$_POST["send_subject"];	       //获取表单中提交的数据
$tb_send_picture=$_POST["face"];			       //获取表单中提交的数据
$tb_send_content=trim($_POST["menu"]);	           //获取表单中提交的数据
$tb_send_user=$_POST["tb_forum_user"];
$tb_send_date=date("Y-m-j H:i:s");
if($_FILES["send_accessories"]["size"]==0){	       //判断是否有附件上传
	if(mysql_query("insert into tb_forum_send(tb_send_subject,tb_send_content,tb_send_user,tb_send_date,tb_send_picture,tb_send_type,tb_send_types,tb_send_small_type,tb_send_author,tb_send_ltime) values ('".$tb_send_subject."','".$tb_send_content."','".$tb_send_user."','".$tb_send_date."','".$tb_send_picture."','".$tb_send_type."','".$tb_send_types."','".$tb_send_small_type."','".$tb_send_user."','".$tb_send_date."')",$conn)){
 		mysql_query("update tb_forum_user set tb_forum_grade=tb_forum_grade+5",$conn);
 			echo "<script>alert('新帖发表成功!');history.back();</script>";
 		mysql_close($conn);
 	}else{
   		echo "<script>alert('新帖发表失败!');history.back();</script>";
   		mysql_close($conn);
  	}
}
if($_FILES["send_accessories"]["size"] > 20000000){	//判断上传附件是否超过指定的大小
	echo "<script>alert('上传文件超过指定大小！');history.go(-1);</script>";
	exit();
}else{
$path = './file/'.time().$_FILES['send_accessories']['name'];			//定义上传文件的路径和名称
if (move_uploaded_file($_FILES['send_accessories']['tmp_name'],$path)) { //将附件存储到服务器的指定位置
	if(mysql_query("insert into tb_forum_send(tb_send_subject,tb_send_content,tb_send_user,tb_send_date,tb_send_picture,tb_send_type,tb_send_types,tb_send_small_type,tb_send_accessories,tb_send_author,tb_send_ltime) values ('".$tb_send_subject."','".$tb_send_content."','".$tb_send_user."','".$tb_send_date."','".$tb_send_picture."','".$tb_send_type."','".$tb_send_types."','".$tb_send_small_type."','".$path."','".$tb_send_user."','".$tb_send_date."')",$conn)){
 		mysql_query("update tb_forum_user set tb_forum_grade=tb_forum_grade+5",$conn);
 		echo "<script>alert('新帖发表成功!');history.back();</script>";
 		mysql_close($conn);
 	}else{
   		echo "<script>alert('新帖发表失败!');history.back();</script>";
   		mysql_close($conn);
  	}
}
}
?>

