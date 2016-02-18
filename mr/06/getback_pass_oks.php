<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>找回密码</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<?php
include("conn/conn.php");
$nc=$_POST[tb_user];
$da=$_POST[tb_forum_result];
$email=$_POST[tb_forum_email];
$sql=mysql_query("select * from tb_forum_user where tb_forum_user='".$nc."'",$conn);
$info=mysql_fetch_array($sql);
if($info[tb_forum_pass_result]==$da and $info[tb_forum_email]==$email){
?>
<body topmargin="0" leftmargin="0" bottommargin="0">
<table width="270" height="120" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="25"><div align="center"></div></td>
  </tr>
  <tr>
    <td height="25"><div align="center"><font color="#FF0000">密码找会成功！</font></div></td>
  </tr>
  <tr>
    <td height="25"><div align="center"><a href="javascript:alert('<?php echo "原密码为&nbsp;".$info[tb_forum_truepass];?>');" class="a1">显示原密码</a></div></td>
  </tr>
</table>
</body>
</html>
<?php
 }else{
   echo "<script>alert('提示答案或者邮箱地址输入错误!');history.back();</script>";
  exit;
  mysql_close($conn);
}
?>
