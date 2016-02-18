<style type="text/css">
<!--
.STYLE333 {font-size: 12px; color: #000000; }
.distance{margin:2px; line-height:20px;}
-->
</style>

<table width="940" height="70" border="0" cellpadding="0" cellspacing="0">
  
  <tr>
    <td width="250" height="35" align="center"><span class="STYLE333">标题</span></td>
    <td width="318" align="center">收件人</td>
    <td width="372" align="center">发送时间</td>
  </tr>
<?php 
 if(empty($_GET["page"]))
   $page=1;
   else
   $page=$_GET["page"];
  if($page){
    $page_size=5;          //每页显示2条记录
    $query="select count(*) as total from tb_mail_box where tb_mail_sender='$_GET[sender]' ";  //从数据库中读取数据
	$result=mysql_query($query);
    $message_count=mysql_result($result,0,"total");  //获取总的记录数
    $page_count=ceil($message_count/$page_size);	 //获取总的页数
    $offset=($page-1)*$page_size;			 
$query=mysql_query("select * from tb_mail_box where tb_mail_sender='$_GET[sender]' limit $offset, $page_size");
while($myrow=mysql_fetch_array($query)){
?>
  <div class="distance">
  <tr>
    <td align="center"><a href="browse_send_mail_content.php?mail_id=<?php echo $myrow["tb_mail_id"];?>" target="_blank"><?php echo $myrow["tb_mail_subject"];?></a></td>
    <td align="center"><?php echo $myrow["tb_receiving_person"];?></td>
    <td align="center"><?php echo $myrow["tb_mail_date"];?></td>
  </tr>
  </div>
<?php }}?>
</table>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr> 
   <td width="45%" height="30" align="center"><span class="STYLE333">&nbsp;&nbsp;页次：<?php echo $page;?>
      / <?php echo $page_count;?> 页 记录：<?php echo $message_count;?> 条&nbsp; </span></td>
   <td width="55%" height="22" align="center"><span class="STYLE333"> 分页： 
      <?php
				  if($page!=1)
				   {   
				     echo  "<a href=send_mail.php?sender=$_GET[sender]&&mails=$mails&&page=1>首页</a>&nbsp;";
					 echo "<a href=send_mail.php?sender=$_GET[sender]&&mails=$mails&&page=".($page-1).">上一页</a>&nbsp;";
				   }
				  if($page<$page_count)
				   {
				        echo "<a href=send_mail.php?sender=$_GET[sender]&&mails=$mails&&page=".($page+1).">下一页</a>&nbsp;";
				        echo  "<a href=send_mail.php?sender=$_GET[sender]&&mails=$mails&&page=".$page_count.">尾页</a>";
				   }
				 
				?>	  
    </span></td>
  </tr>
</table>

