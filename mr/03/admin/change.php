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
echo "权限更改成功！";
echo "<p>";
}
else
{
echo "权限更改失败！";
echo "<p>";
}
?>
<meta http-equiv="refresh" content="2;url=admin.php" />

2seconds  later to return the manger page!
