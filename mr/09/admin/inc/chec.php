<?
	session_start();
	if(!isset($_SESSION[m_id])){
		echo "<script>alert('·Ç·¨µÇÂ¼');window.close();</script>";
		exit();
	}
?>