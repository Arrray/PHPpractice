<?php
	session_start();		//��ʼ��SESSION����
	include "config.php";	//�������ݿ⣬ָ�����ݿ��ļ��洢��λ��
	//��д�ָ����ݿ������
	$mysqlstr = MYSQLPATH.'mysql -u'.MYSQLUSER.' -h'.MYSQLHOST.' -p'.MYSQLPWD.' '.MYSQLDATA.' < '.PATH.ROOT.ADMIN.BAK.$_POST['r_name'];
	exec($mysqlstr);		//ִ�лָ����ݿ����������
	echo "<script>alert('�ָ��ɹ�');location='index.php?title=���ݺͻָ�'</script>";
?>
