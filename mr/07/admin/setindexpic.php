<?php
	header('Content-Type:tex/html;charset=gb2312');
	include_once 'conn/conn.php';
	$tid = $_GET['tid'];
	$indexpic = $_GET['indexpic'];
	if(!empty($tid) and !empty($indexpic)){
		$sql = "update tb_type set indexpic = '".$indexpic."' where id = ".$tid;
		$num = $conne->uidRst($sql);
		if($num == 1){
			echo '1';
		}else if($num == 0){
			echo '2';
		}else{
			echo $num;
		}
	}
?>