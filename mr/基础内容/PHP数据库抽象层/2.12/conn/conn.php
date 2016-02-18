<?php 
include_once ('../adodb5/adodb.inc.php');						//载入adodb.ini.php文件
$conn = ADONewConnection('mysql');								//连接MySQL数据库
$conn -> PConnect('localhost','root','111','db_database02');	//连接db_database02库
//$ADODB_FETCH_MODE = ADODB_FETCH_ASSOC;						//设置结果集以字段名称为索引
$conn -> execute('set names utf8');								//设置编码

?>