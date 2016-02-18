<?php
	session_start();			//初始化session变量
	include "config.php";		//连接数据库
	//编写备份数据库的命令
	$mysqlstr = MYSQLPATH.'mysqldump -u'.MYSQLUSER.' -h'.MYSQLHOST.' -p'.MYSQLPWD. ' --opt -B '.MYSQLDATA.' > '.PATH.ROOT.ADMIN.BAK.$_POST['b_name'];
	//echo $mysqlstr;
	exec($mysqlstr);			//执行备份数据库的命令
	echo "<script>alert('备份成功');location='index.php?title=备份和恢复'</script>";
?>
