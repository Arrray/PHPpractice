<?php
require("global.php");
require("function.php");
	$id =$_GET['id'];
	$ins="update tb_wishes set hits=hits+1 where id=$id";
	$DB->query($ins);
	$sql="select * from tb_wishes where id=$id";
	$info=$DB->fetch_one_array($sql);
	echo $hit=$id."#".$info['hits'];
?>

