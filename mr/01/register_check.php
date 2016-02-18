<?php
	include_once 'conn/conn.php';
	$reback = '0';
	$sql = "insert into tb_member(name,password,question,answer,email,realname,birthday,telephone,qq,active) values('".trim($_GET['name'])."','".md5(trim($_GET['pwd']))."','".$_GET['question']."','".$_GET['answer']."','".$_GET['email']."','".$_GET['realname']."','".$_GET['birthday']."','".$_GET['telephone']."','".$_GET['qq']."','1')";
		$num = $conne->uidRst($sql);
		if($num == 1){
			$reback = '1';
		}
	echo $reback;
?>