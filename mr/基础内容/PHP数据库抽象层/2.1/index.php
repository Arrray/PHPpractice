<?php
header("Content-Type:text/html; charset=utf-8");
$dbms='mysql';     					//数据库类型 ,对于开发者来说，使用不同的数据库，只要改这个，不用记住那么多的函数
$host='localhost'; 					//数据库主机名
$dbName='db_database02';    		//使用的数据库
$user='root';      					//数据库连接用户名
$pass='111';          				//对应的密码
$dsn="$dbms:host=$host;dbname=$dbName";
try {
    $pdo = new PDO($dsn, $user, $pass); //初始化一个PDO对象，就是创建了数据库连接对象$pdo
    echo "连接成功<br/>";
    $pdo = null;
} catch (PDOException $e) {
    die ("Error!: " . $e->getMessage() . "<br/>");
}
?>
