<?
	session_start();
	if(!isset($_SESSION[m_id])){
		echo "<script>alert('�Ƿ���¼');window.close();</script>";
		exit();
	}
?>