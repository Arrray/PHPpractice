<?php 
 $content=$_GET[content];
 $content_1=$_GET[content_1];?>
<style type="text/css">
<!--
.STYLE4 {color: #FF0000; font-weight: bold; }
-->
</style>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
<?php 
$query=mysql_query("select * from tb_forum_affiche where tb_affiche_type='$content'");
while($myrow=mysql_fetch_array($query)){
?>
  <tr>
    <td width="10%" align="center"><span class="STYLE4">【 公 告 】</span></td>
    <td width="90%"><a href="send_affiche.php?tb_affiche_type=<?php echo $myrow[tb_affiche_type];?>&&tb_affiche_id=<?php echo $myrow[tb_affiche_id];?>" target="_blank"><?php echo $myrow[tb_affiche_subject];?></a></td>
  </tr>
<?php }?>
<?php 
$query_1=mysql_query("select * from tb_forum_send where tb_send_type='1' and tb_send_small_type='$content_1'");
while($myrow_1=mysql_fetch_array($query_1)){
?>
  <tr>
    <td align="center"><span class="STYLE4">【 置 顶 】</span></td>
    <td><a href="send_forum_content.php?send_big_type=<?php echo $_GET[content];?>&&send_small_type=<?php echo $myrow_1[tb_send_small_type];?>&&send_id=<?php echo $myrow_1[tb_send_id];?>" target="_blank"><?php echo $myrow_1[tb_send_subject];?></a></td>
  </tr>
<?php }?>
</table>
<table width="100%" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#8394BF">
  <tr>
    <td height="24" colspan="2" align="center">标题</td>
    <td align="center">创建时间</td>
    <td align="center">创建人</td>
    <td align="center">回复次数</td>
  </tr>
<?php 
 if($page){
    $page_size=1;
    $query="select count(*) as total from tb_forum_send where tb_send_small_type='$_GET[content_1]'";
	$result=mysql_query($query);
    $message_count=mysql_result($result,0,"total");
    $page_count=ceil($message_count/$page_size);	
    $offset=($page-1)*$page_size;	

$query_2=mysql_query("select * from tb_forum_send where tb_send_small_type='$content_1' limit $offset, $page_size");
while($myrow_2=mysql_fetch_array($query_2)){
?>
  <tr>
    <td width="5%" align="center" bgcolor="#FFFFFF"><img src="<?php echo $myrow_2[tb_send_picture];?>"></td>
    <td width="35%" bgcolor="#FFFFFF"><a href="send_forum_content.php?send_big_type=<?php echo $_GET[content];?>&&send_small_type=<?php echo $myrow_2[tb_send_small_type];?>&&send_id=<?php echo $myrow_2[tb_send_id];?>" target="_blank"><?php echo $myrow_2[tb_send_subject];?></a></td>
    <td width="25%" bgcolor="#FFFFFF"><?php echo $myrow_2[tb_send_date];?></td>
    <td width="25%" bgcolor="#FFFFFF"><?php echo $myrow_2[tb_send_user];?></td>
    <td width="10%" bgcolor="#FFFFFF"><?php  $query_s=mysql_query("select * from tb_forum_restore where tb_send_id='$myrow_2[tb_send_id]'");
echo mysql_num_rows($query_s);
?></td>
  </tr>
<?php }}?>
</table>
