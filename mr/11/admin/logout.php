<?php
header("Content-type:text/html;charset=gb2312");
	session_start();
	session_destroy();
	echo "<script>alert('已经安全退出!');window.location.href='index.php';</script>";
?>
