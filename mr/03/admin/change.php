<?php
include_once 'conn/conn.php';
$right=$_POST['right'];
echo "The User's Right is:";
echo $right;
$id=$_POST['id'];
$upsql = "update tb_member set tb_member.right =$right where id = $id";
$num=$conne->uidRst($upsql);
$conne->close_rst();
echo "<p>";
if($num==1)
{
echo "Ȩ�޸��ĳɹ���";
echo "<p>";
}
else
{
echo "Ȩ�޸���ʧ�ܣ�";
echo "<p>";
}
?>
<meta http-equiv="refresh" content="2;url=admin.php" />

2seconds  later to return the manger page!
