<?php session_start(); include("conn/conn.php");
$Submit=$_POST["Submit"];
$Submit2=$_POST["Submit2"];
if($Submit=="屏蔽"){
    while(list($name,$value)=each($_POST)){    
         $result=mysql_query("update tb_forum_restore set tb_restore_tag='1' where tb_restore_id='".$name."'");          
    if($result==true){
	    echo "<script>alert('屏蔽成功!'); window.location.href='index.php?title=回帖管理';</script>";}}
}

if($Submit2=="取消"){
    while(list($name,$value)=each($_POST)){    
         $result=mysql_query("update tb_forum_restore set tb_restore_tag='0' where tb_restore_id='".$name."'");          
    if($result==true){
	    echo "<script>alert('取消屏蔽!'); window.location.href='index.php?title=回帖管理';</script>";}}
}

?>