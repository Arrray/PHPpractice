<?
	session_start();
	if(!isset($_SESSION["id"]) or !isset($_SESSION["names"])){
		echo "<script>alert('��û�е�¼��ʱ');window.close();</script>";
		exit();
	}
?>