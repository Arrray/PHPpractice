<?php
include_once ("conn.php");
$truepwd = $_POST[userpwd1];
$pwd = md5($truepwd);
if (mysql_query("update tb_user set pwd='$pwd',truepwd='$truepwd' where id='" . $_POST["userid"] . "'", $conn)) {
    echo "<script>alert('������ĳɹ�!');history.back();</script>";
} else {
    echo "<script>alert('�������ʧ��!');history.back();</script>";
}
mysql_close($conn);
?>