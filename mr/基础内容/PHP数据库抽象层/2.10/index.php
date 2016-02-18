<?php
header( "Content-type: text/html; charset=UTF-8" ); 		//设置文件编码格式
include_once ('../adodb5/adodb.inc.php');						//载入adodb.inc.php文件
$conn = ADONewConnection('odbc_mssql');							//连接SQL数据库
if($conn-> PConnect("Driver={SQL Server};Server=LLL-SC08Z7OW0V9;Database=db_database02;",'sa','')){
	$conn -> execute('set names utf8');							//设置编码
	echo "<script>alert('数据库连接成功！');window.location.href='http://www.mrbccd.com';</script>";
}else{
	echo "<script>alert('数据库连接失败！');window.location.href='index.php';</script>";
}
?>
