<?php
include_once("../adodb/adodb.inc.php");								//����adodb
$conn = &ADONewConnection('mysql');							//����mysql����
$conn->PConnect("localhost","root","root","db_video");		//����"db_online"���ݿ�
$conn->execute("set names gb2312");
?>