<?php
	session_start();
	session_destroy();
	header('location:http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['SCRIPT_NAME']).'/'.'index.php');
?>