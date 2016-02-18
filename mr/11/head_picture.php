<?php  include("conn/conn.class.php");   
$recid=$_GET["recid"];     
$sql="select * from tb_video_user where tb_user_id=".$recid;
$array=$result->GetRows($sql,$conn);
echo $array[0]['tb_user_picture'];
?> 



