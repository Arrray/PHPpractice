<?php session_start(); include("conn/conn.php");
if($_GET["send_id"]==true and $_GET["send_user"]==$_SESSION["tb_forum_user"]){
	$result=mysql_query("update tb_forum_send set tb_forum_end='1' where tb_send_id='".$_GET[send_id]."'");          
    if($result==true){
	    echo "<script>alert('��������!'); history.back();</script>";
	}
}else{
	    echo "<script>alert('�����߱���Ȩ��!'); history.back();</script>";
}
?>