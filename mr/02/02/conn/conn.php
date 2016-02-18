<?php
	$dbms='mysql';										//数据库类型
	$dbName='db_pagination';								//使用的数据库名称
	$user='root';										//使用的数据库用户名
	$pwd='111';										//使用的数据库密码
	$host='localhost';									//使用的主机名称
	$dsn="$dbms:host=$host;dbname=$dbName";			
	try {												//捕获异常
		$conn=new PDO($dsn,$user,$pwd);					//实例化对象
		$conn->query("set names gb2312");
	} catch (Exception $e) {
		echo $e->getMessage()."<br>";
	}
?>	
