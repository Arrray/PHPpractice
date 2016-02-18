<?php
header( "Content-type: text/html; charset=UTF-8" ); 		//设置文件编码格式
include_once ('../adodb5/adodb.inc.php');					//载入（include）adodb.inc.php文件
$conn = ADONewConnection('mysql');							//建立连接
if($conn -> PConnect('localhost','root','111','db_database02')){
$conn -> execute('set names utf8');							//设置编码
	echo "<script>alert('数据库连接成功！');window.location.href='http://www.mrbccd.com';</script>";
}else{
	echo "<script>alert('数据库连接失败！');window.location.href='index.php';</script>";
}
?>
