<?php include("conn/conn.php");
	$query=mysql_query("select * from tb_mail_box where tb_receiving_person='".$_GET["sender"]."' and tb_mail_type=''");
	$myrow=mysql_num_rows($query);
	echo $myrow;
?>