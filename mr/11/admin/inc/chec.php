<?

	if(!isset($_SESSION['m_id']) and !isset($_SESSION['type'])){
		echo "<script>alert('�Ƿ���¼');window.close();</script>";
		exit();
	}
?>