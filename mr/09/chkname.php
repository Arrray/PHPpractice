<center>
<?php
	include "conn/conn.class.php";
	if(!isset($_GET[name]) or $_GET[name] == ""){
		echo "<font color='red'>非法用户名!</font>";
		exit();
	}
	$c_sql = "select * from tb_music_user where tb_music_user='".$_GET[name]."'";
	$c_rst = $result->login($c_sql,$conn);
	
		if(!$c_rst!=true){
			echo "<font color='red'>用户名被占用!</font>";
			exit();
		}else{
			echo "<font color='green'>恭喜您：该用户名可用!</font>";
			exit();
		}
		
?>
</center>