<?php
header("Content-type:text/html;charset=gb2312");
	session_start();
	session_destroy();
	echo "<script>alert('�Ѿ���ȫ�˳�!');window.location.href='index.php';</script>";
?>
