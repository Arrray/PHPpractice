<?php
	session_start();		//初始化SESSION变量
	include "config.php";	//连接数据库，指定数据库文件存储的位置
	//编写恢复数据库的命令
	$mysqlstr = MYSQLPATH.'mysql -u'.MYSQLUSER.' -h'.MYSQLHOST.' -p'.MYSQLPWD.' '.MYSQLDATA.' < '.PATH.ROOT.ADMIN.BAK.$_POST['r_name'];
	exec($mysqlstr);		//执行恢复数据库操作的命令
	echo "<script>alert('恢复成功');location='index.php?title=备份和恢复'</script>";
?>
