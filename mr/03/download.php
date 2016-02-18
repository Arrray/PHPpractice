<?php
    include_once 'conn/conn.php';
	$id = $_GET['id'];
	$downsql = "select * from tb_upfile where id = $id";
	$downarr = $conne->getRowsRst($downsql);
	//echo $downarr['filepath'];
	$path=$downarr['filepath']; 
	if(!empty($path) and !is_null($path)){
		$filename=basename($path);
		$file=fopen($path,"r");
		header("Content-type:application/octet-stream");
		header("Accept-ranges:bytes");
		header("Accept-length:".filesize($path));
		header("Content-Disposition:attachment;filename=".$filename);
		echo fread($file,filesize($path));
		fclose($file);
		exit;
	}
?>