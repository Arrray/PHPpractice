<center>
<?php
	include "conn/conn.class.php";
	if(!isset($_GET[name]) or $_GET[name] == ""){
		echo "<font color='red'>�Ƿ��û���!</font>";
		exit();
	}
	$c_sql = "select * from tb_music_user where tb_music_user='".$_GET[name]."'";
	$c_rst = $result->login($c_sql,$conn);
	
		if(!$c_rst!=true){
			echo "<font color='red'>�û�����ռ��!</font>";
			exit();
		}else{
			echo "<font color='green'>��ϲ�������û�������!</font>";
			exit();
		}
		
?>
</center>