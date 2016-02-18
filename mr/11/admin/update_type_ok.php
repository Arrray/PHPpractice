<?php	session_start();
if($_SESSION['admin']!=""){
	include_once("conn/conn.class.php");

$sql="update tb_video_type set tb_type_name='".$_POST['video_type']."' where tb_type_id='".$_POST['video_type_id']."'";
$ret=$result->indeup($sql,$conn);
echo  "<script>alert('视频类型更改成功！'); window.location.href='main.php?caption=manage_video_type'</script>";

}else{
echo "<script>alert('请正确登录!'); window.location.href='index.php';</script>";
}
?>