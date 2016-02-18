<?php
	session_start();
	include_once("conn/conn.class.php");
	include_once("inc/chec.php");
	$file_path = "../upfiles/video/";
	$s_sqlstr = "select * from tb_video where id = ".$_GET[id];
	$s_rst = $result->singleRow($s_sqlstr,$conn);
	if(!($s_rst == false)){	
		if(file_exists($file_path.$s_rst[address])){
			if(unlink($file_path.$s_rst[address])){
				$d_sqlstr = "delete from tb_video where id = ".$_GET[id];
				$d_rst = $result->indeup($d_sqlstr,$conn);
				unlink($file_path.$s_rst[picture]);
				if(!($d_rst == false)){
					echo "<script>alert('É¾³ý³É¹¦');location='main.php?action=video';</script>";
					exit();
				}else{
					echo "<script>alert('É¾³ýÊ§°Ü');history.go(-1);</script>";
					exit();
				}
			}
		}else{
			$d_sqlstr = "delete from tb_video where id = ".$_GET[id];
			$d_rst = $result->indeup($d_sqlstr,$conn);
			if(!($d_rst == false)){
				echo "<script>alert('É¾³ý³É¹¦');location='main.php?action=video';</script>";
				exit();
			}else{
				echo "<script>alert('É¾³ýÊ§°Ü');history.go(-1);</script>";
				exit();
			}
		}
	}
	else
		echo "<script>alert('É¾³ýÊ§°Ü');history.go(-1);</script>";
?>