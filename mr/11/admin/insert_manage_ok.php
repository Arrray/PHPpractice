<?php	session_start();
if($_SESSION['admin']!=""){
	include_once("conn/conn.class.php");
$date=date("Y-m-d H:i:s");
echo $_POST['whether'];
$sql="insert into tb_manager(name,password,type,realName,issueDate,whether)values('".$_POST['name']."','".$_POST['password']."','".$_POST['type']."','".$_POST['realName']."','".$date."','".$_POST['whether']."')";
$ret=$result->indeup($sql,$conn);
echo  "<script>alert('����Ա��ӳɹ���'); window.location.href='main.php?caption=manage_admin'</script>";

}else{
echo "<script>alert('����ȷ��¼!'); window.location.href='index.php';</script>";
}
?>