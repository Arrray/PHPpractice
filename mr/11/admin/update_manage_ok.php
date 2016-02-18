<?php	session_start();
if($_SESSION['admin']!=""){
	include_once("conn/conn.class.php");

$sql="update tb_manager set name='".$_POST['name']."',password='".$_POST['password']."',whether='".$_POST['whether']."' where id='".$_POST['manage_id']."'";
$ret=$result->indeup($sql,$conn);
echo  "<script>alert('管理员信息修改成功！'); window.location.href='main.php?caption=manage_admin'</script>";

}else{
echo "<script>alert('请正确登录!'); window.location.href='index.php';</script>";
}
?>