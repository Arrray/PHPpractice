<?php
	$dbms='mysql';										//���ݿ�����
	$dbName='db_pagination';								//ʹ�õ����ݿ�����
	$user='root';										//ʹ�õ����ݿ��û���
	$pwd='111';										//ʹ�õ����ݿ�����
	$host='localhost';									//ʹ�õ���������
	$dsn="$dbms:host=$host;dbname=$dbName";			
	try {												//�����쳣
		$conn=new PDO($dsn,$user,$pwd);					//ʵ��������
		$conn->query("set names gb2312");
	} catch (Exception $e) {
		echo $e->getMessage()."<br>";
	}
?>	
