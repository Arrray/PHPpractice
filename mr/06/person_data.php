<?php session_start(); include("conn/conn.php");?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>我的好友</title>
</head><style type="text/css">
<!--
body {
	background-color: #8496BD;
}
.STYLE5 {font-size: 12px}
-->
</style>
<body>
<?php
include_once("enter.php"); 
$query_2=mysql_query("select * from tb_forum_user where tb_forum_user='$_GET[person_id]'",$conn);
$myrow_2=mysql_fetch_array($query_2);
?>
<table width="950" height="200" border="1" align="center" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#999999">
  <tr>
    <td width="141" height="100" rowspan="2" align="center" bgcolor="#F7F7FF"><img src='<?php echo $myrow_2["tb_forum_picture"];?>' border="0"></td>
    <td width="491" height="50" bgcolor="#F7F7FF"><span class="STYLE5">好友：<?php echo $myrow_2["tb_forum_user"];?></span></td>
    <td width="318" rowspan="2" bgcolor="#F7F7FF"><span class="STYLE5">积分：<?php echo $myrow_2["tb_forum_grade"];?></span></td>
  </tr>
  <tr>
    <td height="50" bgcolor="#F7F7FF"><span class="STYLE5">注册时间：<?php echo $myrow_2["tb_forum_date"];?></span></td>
  </tr>
<?php 
if($_SESSION["tb_forum_user"]==true){
?>
  <tr>
    <td height="35" align="center" bgcolor="#FFF7D6"><a href='my_friend.php?friend=<?php echo $myrow_2["tb_forum_user"];?>&&my=<?php echo $_SESSION["tb_forum_user"];?>'><img src="images/index_8 (1).jpg" width="82" height="24" border="0"></a></td>
    <td colspan="2" bgcolor="#F7F7FF"><span class="STYLE5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;个人特长：</span></td>
  </tr>
<?php }else{
	echo "<script>alert('您没有正确登录!');history.back();</script>";

}
?>
  <tr>
    <td height="65" align="center" bgcolor="#FFF7D6"><a href='send_mail.php?receiving_person=<?php echo $myrow_2t["b_forum_user"];?>&&sender=<?php echo $_SESSION["tb_forum_user"]?>'><img src="images/index_8.jpg" width="76" height="24" border="0"></a></td>
    <td colspan="2" bgcolor="#F7F7FF"><span class="STYLE5"><?php echo $myrow_2["tb_forum_speciality"];?></span></td>
  </tr>
</table>   
<table width="950" height="50" border="0" align="center" cellpadding="0" cellspacing="0">
     <tr>
       <td width="634" bgcolor="#F7F7FF">&nbsp;</td>
       <td width="316" bgcolor="#F7F7FF"><img src="images/index_8 (2).jpg" width="218" height="75"></td>
     </tr>
</table>
</body>
</html>
