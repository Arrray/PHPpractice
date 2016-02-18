<?php session_start();include("conn/conn.php"); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>我参与的帖子</title>
<style type="text/css">
<!--
.STYLE5 {font-size: 12px}
-->
</style>
</head>
<style type="text/css">
<!--
body {
	background-color: #8394BF;
}
-->
</style>
<body>
<table width="950" border="0" align="center" cellpadding="0" cellspacing="0">
  
  <tr>
    <td colspan="3" align="left"><img src="images/我参与的帖子.jpg" width="137" height="34"></td>
    <td align="left">&nbsp;<a href="send_forum.php" target="_blank">我要提问</a></td>
    <td align="left">&nbsp;</td>
  </tr>
  <tr>
    <td width="98" height="35" align="center" bgcolor="#F7F7FF">&nbsp;</td>
    <td width="235" bgcolor="#F7F7FF"><span class="STYLE5"><strong>标题</strong></span></td>
    <td width="180" bgcolor="#F7F7FF"><span class="STYLE5"><strong>创建时间</strong></span></td>
    <td width="187" bgcolor="#F7F7FF"><span class="STYLE5"><strong>创建人</strong></span></td>
    <td width="250" bgcolor="#F7F7FF"><span class="STYLE5"><strong>回复次数</strong></span></td>
  </tr>
  <?php 
$i=0;
	$queryes=mysql_query("select distinct tb_send_id from(select * from tb_forum_restore where tb_restore_user='$_GET[my_forum_user]')as total");                        //利用MySQL语句去除重复的帖子
	while($myrowes=mysql_fetch_array($queryes)){
$i++;
?>
  <?php 
$query_2=mysql_query("select * from tb_forum_send where tb_send_id='$myrowes[tb_send_id]'");
$myrow_2=mysql_fetch_array($query_2);
$content=$myrow_2['tb_send_small_type'];
$query_3=mysql_query("select * from tb_forum_small_type where tb_small_type_content = '$content'");
$myrow_3=mysql_fetch_array($query_3);
$getcontent=$myrow_3["tb_big_type_content"];


if($i%2==0){
?>
  <tr>
    <td align="center" bgcolor="#FFFFFF"><img src="images/index_9.jpg" width="25" height="27"></td>
    <td bgcolor="#FFFFFF"><a href="send_forum_content.php?send_big_type=<?php echo $getcontent;?>&&send_small_type=<?php echo $myrow_2["tb_send_small_type"];?>&&send_id=<?php echo $myrow_2["tb_send_id"];?>" target="_blank" class="STYLE5"><?php echo $myrow_2["tb_send_subject"];?></a></td>
    <td bgcolor="#FFFFFF"><span class="STYLE5"><?php echo $myrow_2["tb_send_date"];?></span></td>
    <td bgcolor="#FFFFFF"><span class="STYLE5"><?php echo $myrow_2["tb_send_user"];?></span></td>
    <td bgcolor="#FFFFFF"><span class="STYLE5">
      <?php  $query_s=mysql_query("select * from tb_forum_restore where tb_send_id='$myrow_2[tb_send_id]'");
echo mysql_num_rows($query_s);
?>
    </span></td>
  </tr>
  <?php }
if($i%2!=0){

?>
  <tr>
    <td align="center" bgcolor="#F5F5F5"><img src="images/index_9 (1).jpg" width="25" height="27"></td>
    <td bgcolor="#F5F5F5"><a href="send_forum_content.php?send_big_type=<?php echo $getcontent;?>&&send_small_type=<?php echo $myrow_2["tb_send_small_type"];?>&&send_id=<?php echo $myrow_2["tb_send_id"];?>" target="_blank" class="STYLE5"><?php echo $myrow_2["tb_send_subject"];?></a></td>
    <td bgcolor="#F5F5F5"><span class="STYLE5"><?php echo $myrow_2["tb_send_date"];?></span></td>
    <td bgcolor="#F5F5F5"><span class="STYLE5"><?php echo $myrow_2["tb_send_user"];?></span></td>
    <td bgcolor="#F5F5F5"><span class="STYLE5">
      <?php  $query_s=mysql_query("select * from tb_forum_restore where tb_send_id='$myrow_2[tb_send_id]'");
echo mysql_num_rows($query_s);
?>
    </span></td>
  </tr>
  <?php
}
}

?>
</table>
<table width="950" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#F7F7FF">
  <tr>
    <td width="643" height="114" align="right">&nbsp;</td>
    <td width="307">&nbsp;</td>
</tr>
  <tr>
    <td align="right">&nbsp;</td>
    <td bgcolor="#FFFFFF"><img src="images/index_8 (2).jpg" width="218" height="75"></td>
  </tr>
</table>
</body>
</html>
