
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>�һ�����</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<?php
 include("conn.php");
 $nc=$_POST[nc];
 $da=$_POST[da];
 $sql=mysql_query("select * from tb_user where usernc='".$nc."'",$conn);
 $info=mysql_fetch_array($sql);
 if($info[answer]!=$da)
 {
   echo "<script>alert('��ʾ���������!');history.back();</script>";
  exit;
 }
 else
 {
?>
<body topmargin="0" leftmargin="0" bottommargin="0">
<table width="200" height="100" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="25"><div align="center"></div></td>
  </tr>
  <tr>
    <td height="25"><div align="center"><font color="#FF0000">�����һ�ɹ���</font></div></td>
  </tr>
  <tr>
    <td height="25"><div align="center">�����������������룡</div></td>
  </tr>
  <tr>
    <td height="25"><div align="center"><a href="javascript:alert('<?php echo "ԭ����Ϊ&nbsp;".$info[truepwd];?>');" class="a4">��ʾԭ����</a>&nbsp;<a href="changepwd.php?userid=<?php echo $info[id];?>" class="a4">��������</a></div></td>
  </tr>
</table>
</body>
</html>
<?php

  }
  mysql_close($conn);
?>
