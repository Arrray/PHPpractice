<?php
include('../adodb5/adodb.inc.php');			//载入（include）adodb.inc.php文件
$conn = ADONewConnection('access');			//连接Access数据库
if($conn-> PConnect("Driver={Microsoft Access Driver (*.mdb)};Dbq=C:\\AppServ\\www\\lll\\02\\2.9\\data\\db_database02.mdb")){
	$conn -> execute('set names gb2312');							//设置编码
	echo "<script>alert('数据库连接成功！');window.location.href='http://www.mrbccd.com';</script>";
}else{
	echo "<script>alert('数据库连接失败！');window.location.href='index.php';</script>";
}
?>
