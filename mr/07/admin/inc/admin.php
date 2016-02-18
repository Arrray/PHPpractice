<?php
	if(empty($_SESSION['name']) or is_null($_SESSION['name'])){
		echo "<script>alert('гКох╣гб╪ё║');location='../index.php';</script>";
	}
?>