<?php
	if(empty($_SESSION['name']) or is_null($_SESSION['name'])){
		echo "<script>alert('���ȵ�¼��');location='../index.php';</script>";
	}
?>