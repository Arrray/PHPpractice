<?php
require("global.php");
require("function.php");
//添加类别
	$select=$_POST['select'];
	$picker =$_POST['Picker'];
	$author = $_POST['author'];
	$QQ = $_POST['QQ'];
	$pagecolor=$_POST['paperColor'];
	$face = $_POST['face'];
	$content=$_POST['content'];
	$sendtime=date("Y-m-d H:i");		//获取系统时间，格式为：年-月-日 时:分
	//$ip=$_SERVER['REMOTE_ADDR'];		//获取服务器端IP地址
	$ip=getenv('REMOTE_ADDR');			//获取客户端IP地址
	/********解释IP区域***********/
	$cip=cip($ip);
	$csql="select * from tb_ip where (ip1<'".$cip."' and  ip2>'".$cip."') or (ip1=ip2 and ip2='".$cip."')";
	//执行查询
	$res = $DB->fetch_one_array($csql);
	$cip1=$res['country'];
	if($cip1==""){
		$cip1="IP不详";
	}
	/****************************/
	$ins_sql = "insert into tb_wishes (Picker,author,QQ,pagecolor,face,content,ip,cip,sendtime,wishsort) values ('".$picker."','".$author."','".$QQ."','".$pagecolor."','".$face."','".$content."','".$ip."','".$cip1."','".$sendtime."','".$select."')";
	$DB->query($ins_sql);
	$big_id=mysql_insert_id();					//获取插入记录的ID值
	$url = "index.php?big_id=$big_id";		//将最新的ID值传递到首页
	/*echo "<script>location.href='$url';</script>";*/
	echo "<script>location.href='index.php';</script>";
?>
