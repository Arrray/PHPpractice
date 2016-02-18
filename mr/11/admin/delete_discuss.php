<?php  include_once("conn/conn.class.php");

$sql="delete from tb_video_discuss where tb_discuss_id=".$_GET[discuss_id]."";
$ret=$result->indeup($sql,$conn);
if($ret){
echo "<script>alert('É¾³ý³É¹¦£¡'); history.back();</script>";
}

?>