<?php
session_start();												//声明session
header("content-type:text/html;charset=utf-8");
include("conn/conn.php");										//包含数据库文件
if(isset($_POST['user']) and isset($_POST['pwd'])){				//判断用户名和密码是否存在
	if($_POST['user']!=null and $_POST['pwd']!=null){			//判断用户名和密码是否为空
		$select=mysql_query("select * from tb_login where user='".$_POST['user']."' and pwd='".$_POST['pwd']."'",$conn);
		if(mysql_num_rows($select)==1){
			echo "<script>alert('登录成功！');window.location.href='index.php';</script>";
			$_SESSION['user']=$_POST['user'];					//定义session变量
		}else{
			echo "<script>alert('用户名和密码不正确！');window.location.href='enter.php';</script>";
		}
	}else{
		echo "<script>alert('请输入用户名和密码！');window.location.href='enter.php';</script>";
	}
}
?>