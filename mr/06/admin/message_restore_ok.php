<?php session_start(); include("conn/conn.php");
$Submit=$_POST["Submit"];
$Submit2=$_POST["Submit2"];
if($Submit=="����"){
    while(list($name,$value)=each($_POST)){    
         $result=mysql_query("update tb_forum_restore set tb_restore_tag='1' where tb_restore_id='".$name."'");          
    if($result==true){
	    echo "<script>alert('���γɹ�!'); window.location.href='index.php?title=��������';</script>";}}
}

if($Submit2=="ȡ��"){
    while(list($name,$value)=each($_POST)){    
         $result=mysql_query("update tb_forum_restore set tb_restore_tag='0' where tb_restore_id='".$name."'");          
    if($result==true){
	    echo "<script>alert('ȡ������!'); window.location.href='index.php?title=��������';</script>";}}
}

?>