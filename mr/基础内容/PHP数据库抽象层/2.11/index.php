<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>通过ADODB操作MySQL数据库</title>
</head>

<body>
<table width="550" height="550" border="0" cellpadding="0" cellspacing="0" background="images/reg.jpg">
  <tr>
    <td width="88">&nbsp;</td>
    <td width="374" height="175">&nbsp;</td>
    <td width="74">&nbsp;</td>
  </tr>
  <tr>
    <td height="250">&nbsp;</td>
    <td valign="top"><table width="421" height="61" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="151" height="30" align="center">用户名</td>
    <td width="110" align="center">密码</td>
    <td width="160" align="center">时间</td>
  </tr>
  <?php
include_once ('../adodb5/adodb.inc.php');						//载入adodb.ini.php文件
$conn = ADONewConnection('mysql');							//连接MySQL数据库
$conn -> PConnect('localhost','root','111','db_database02');			//连接db_database02库
$conn -> execute('set names utf8');							//设置编码
$rst = $conn -> execute("select * from tb_user where id limit 5") or die('执行错误');	//执行sql语句
while(!$rst -> EOF){
?>
  <tr>
    <td height="25" align="center"><?php echo $rst -> fields['user'];?></td>
    <td align="center"><?php echo $rst -> fields['pass']; ?></td>
    <td align="center"><?php echo $rst -> fields['dates']; ?></td>
  </tr>
<?php
  	$rst -> movenext();									//指针下移
}
$rst -> close();							//关闭连接
$conn -> close();
?>
</table></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="125">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
