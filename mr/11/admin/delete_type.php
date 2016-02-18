<?php  include_once("conn/conn.class.php");

$sql="delete from tb_video_type where tb_type_id=".$_GET['type_id']."";
$ret=$result->indeup($sql,$conn);
if($ret){
echo "<script>alert('É¾³ý³É¹¦£¡'); history.back();</script>";
}

?>