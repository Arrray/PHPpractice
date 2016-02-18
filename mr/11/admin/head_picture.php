<?php  include("conn/conn.class.php");        
include("config.php");
$recid=$_GET["recid"];
$sql="select * from tb_video_user where tb_user_id=".$recid;
$array=$result->getRows($sql,$conn);
echo $array[0]['tb_user_picture'];
?> 



