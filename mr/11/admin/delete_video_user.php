<?php  include_once("conn/conn.class.php");
$sql1="delete from tb_subscibe  where tb_subscibe_user='".$_GET[user]."' or tb_video_user='".$_GET[user]."'";
$ret1=$result->indeup($sql1,$conn);

$sql2="delete from tb_up_video where tb_video_user='".$_GET[user]."'";
$ret2=$result->indeup($sql2,$conn);

$sql="delete from tb_video_user where tb_user_id='".$_GET[user_id]."'";
$ret=$result->indeup($sql,$conn);
if($ret){
echo "<script>alert('É¾³ý³É¹¦£¡'); history.back();</script>";
}

?>