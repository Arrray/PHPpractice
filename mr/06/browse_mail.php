<table width="940" height="70">
   <form name="form1" method="post" action="delete_mail.php?sender=<?php echo $_GET["sender"];?>&&mails=<?php echo $_GET["mails"];?>">
  <tr>
    <td width="77" height="35" align="center"><strong><span class="STYLE_mail">����</span></strong></td>
    <td width="266" align="center"><strong><span class="STYLE_mail">����</span></strong></td>
    <td width="178" align="center"><strong><span class="STYLE_mail">������</span></strong></td>
    <td width="206" align="center"><strong><span class="STYLE_mail">����ʱ��</span></strong></td>
    <td width="189" height="35" align="center" class="STYLE_mail"><input name="Submit" type="submit" id="Submit" value=" �����Ϣ "></td>
  </tr>
<?php 
  if(empty($_GET["page"]))
   $page=1;
   else
   $page=$_GET["page"];
  if($page){
    $page_size=10;          //ÿҳ��ʾ2����¼
    $query="select count(*) as total from tb_mail_box where tb_receiving_person='$_GET[sender]' ";  //�����ݿ��ж�ȡ����
	$result=mysql_query($query);
    $message_count=mysql_result($result,0,"total");  //��ȡ�ܵļ�¼��
    $page_count=ceil($message_count/$page_size);	 //��ȡ�ܵ�ҳ��
    $offset=($page-1)*$page_size;			 
$query=mysql_query("select * from tb_mail_box where tb_receiving_person='$_GET[sender]' order by tb_mail_type='1' limit $offset, $page_size");
while($myrow=mysql_fetch_array($query)){
?>
  <tr>
    <td height="35" align="center"><input name="<?php echo $myrow["tb_mail_id"];?>" type="checkbox" value="<?php echo $myrow["tb_mail_id"];?>">   </td>
    <td align="center"><a href="browse_mail_content.php?mail_id=<?php echo $myrow["tb_mail_id"];?>" target="_blank" class="STYLE3_mail"><?php echo $myrow["tb_mail_subject"];?></a></td>
    <td align="center"><span class="STYLE3_mail"><?php echo $myrow["tb_mail_sender"];?></span></td>
    <td align="center"><span class="STYLE3_mail"><?php echo $myrow["tb_mail_date"];?></span></td>
    <td align="center"><span class="STYLE3_mail">
      <?php if($myrow["tb_mail_type"]=='1'){echo "�Ѷ���Ϣ";}else{echo "δ����Ϣ";}?>
    </span></td>
  </tr>
<?php }}?>
</form>
</table>

<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr> 
   <td width="45%" align="center"><span class="STYLE3_mail">&nbsp;&nbsp;ҳ�Σ�<?php echo $page;?>
      / <?php echo $page_count;?> ҳ ��¼��<?php echo $message_count;?> ��&nbsp; </span></td>
   <td width="55%" height="22" align="center"><span class="STYLE3_mail"> ��ҳ�� 
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