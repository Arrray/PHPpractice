<style type="text/css">
<!--
.STYLE333 {font-size: 12px; color: #000000; }
.distance{margin:2px; line-height:20px;}
-->
</style>

<table width="940" height="70" border="0" cellpadding="0" cellspacing="0">
  
  <tr>
    <td width="250" height="35" align="center"><span class="STYLE333">����</span></td>
    <td width="318" align="center">�ռ���</td>
    <td width="372" align="center">����ʱ��</td>
  </tr>
<?php 
 if(empty($_GET["page"]))
   $page=1;
   else
   $page=$_GET["page"];
  if($page){
    $page_size=5;          //ÿҳ��ʾ2����¼
    $query="select count(*) as total from tb_mail_box where tb_mail_sender='$_GET[sender]' ";  //�����ݿ��ж�ȡ����
	$result=mysql_query($query);
    $message_count=mysql_result($result,0,"total");  //��ȡ�ܵļ�¼��
    $page_count=ceil($message_count/$page_size);	 //��ȡ�ܵ�ҳ��
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
   <td width="45%" height="30" align="center"><span class="STYLE333">&nbsp;&nbsp;ҳ�Σ�<?php echo $page;?>
      / <?php echo $page_count;?> ҳ ��¼��<?php echo $message_count;?> ��&nbsp; </span></td>
   <td width="55%" height="22" align="center"><span class="STYLE333"> ��ҳ�� 
      <?php
				  if($page!=1)
				   {   
				     echo  "<a href=send_mail.php?sender=$_GET[sender]&&mails=$mails&&page=1>��ҳ</a>&nbsp;";
					 echo "<a href=send_mail.php?sender=$_GET[sender]&&mails=$mails&&page=".($page-1).">��һҳ</a>&nbsp;";
				   }
				  if($page<$page_count)
				   {
				        echo "<a href=send_mail.php?sender=$_GET[sender]&&mails=$mails&&page=".($page+1).">��һҳ</a>&nbsp;";
				        echo  "<a href=send_mail.php?sender=$_GET[sender]&&mails=$mails&&page=".$page_count.">βҳ</a>";
				   }
				 
				?>	  
    </span></td>
  </tr>
</table>

