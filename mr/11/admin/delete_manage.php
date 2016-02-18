<?php  include_once("conn/conn.class.php");
$sql="delete from tb_manager where id='".$_GET['manage_id']."'";
$ret=$result->indeup($sql,$conn);
if($ret){
echo "<script>alert('管理员删除成功！'); history.back();</script>";
}

?>