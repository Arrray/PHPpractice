<?php	session_start();
if($_SESSION['admin']!=""){
	include_once("conn/conn.class.php");

$sql="insert into tb_video_type(tb_type_name)values('".$_POST['type_name']."')";
$ret=$result->indeup($sql,$conn);
echo  "<script>alert('��Ƶ������ӳɹ���'); window.location.href='main.php?caption=manage_video_type'</script>";

}else{
echo "<script>alert('����ȷ��¼!'); window.location.href='index.php';</script>";
}
?>