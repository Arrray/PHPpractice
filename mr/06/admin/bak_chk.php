<?php
	session_start();			//��ʼ��session����
	include "config.php";		//�������ݿ�
	//��д�������ݿ������
	$mysqlstr = MYSQLPATH.'mysqldump -u'.MYSQLUSER.' -h'.MYSQLHOST.' -p'.MYSQLPWD. ' --opt -B '.MYSQLDATA.' > '.PATH.ROOT.ADMIN.BAK.$_POST['b_name'];
	//echo $mysqlstr;
	exec($mysqlstr);			//ִ�б������ݿ������
	echo "<script>alert('���ݳɹ�');location='index.php?title=���ݺͻָ�'</script>";
?>
