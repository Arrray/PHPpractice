<?php 
 $content=$_GET["content"];
 $content_1=$_GET["content_1"];?>
<style type="text/css">
<!--
.STYLE2 {color: #000000}
.STYLE4 {color: #FF0000; font-weight: bold; }
-->
</style>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
<?php 
$query=mysql_query("select * from tb_forum_affiche where tb_affiche_type='$content'");
while($myrow=mysql_fetch_array($query)){
?>
  <tr>
    <td width="10%" align="center"><span class="STYLE4">�� �� �� ��</span></td>
    <td width="90%"><a href="send_affiche.php?tb_affiche_type=<?php echo $myrow["tb_affiche_type"];?>&&tb_affiche_id=<?php echo $myrow["tb_affiche_id"];?>" target="_blank"><?php echo $myrow["tb_affiche_subject"];?></a></td>
  </tr>
<?php }?>
<?php 
$query_1=mysql_query("select * from tb_forum_send where tb_send_type='1' and tb_send_small_type='$content_1'");
while($myrow_1=mysql_fetch_array($query_1)){
?>
  <tr>
    <td align="center" width="10%"><span class="STYLE4">�� �� �� ��</span></td>
    <td width="90%"><a href="send_forum_content.php?send_big_type=<?php echo $_GET["content"];?>&&send_small_type=<?php echo $myrow_1["tb_send_small_type"];?>&&send_id=<?php echo $myrow_1["tb_send_id"];?>" target="_blank"><?php echo $myrow_1["tb_send_subject"];?></a></td>
  </tr>
<?php }?>
</table>
<table width="100%" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#8394BF">
  <tr>
    <td height="24" colspan="2" align="center">����</td>
    <td align="center">����ʱ��</td>
    <td align="center">������</td>
    <td align="center">�ظ�����</td>
  </tr>
<?php 
if(empty($_GET["page"]))
   $page=1;
   else
   $page=$_GET["page"];
 if($page){
    $page_size=1;
	 if(empty($_GET["link_type"]))
   $link_type=0;
   else
   $link_type=$_GET["link_type"];
    $query="select count(*) as total from tb_forum_send where tb_send_small_type='$_GET[content_1]' and tb_send_type_hotspot=1";
	$result=mysql_query($query);
    $message_count=mysql_result($result,0,"total");
    $page_count=ceil($message_count/$page_size);	
	$page_count=$page_count-10*$link_type;
    $offset=($page-1)*$page_size;	

$query_2=mysql_query("select * from tb_forum_send where tb_send_small_type='$content_1' and tb_send_type_hotspot='1' limit $offset, $page_size");
while($myrow_2=mysql_fetch_array($query_2)){
?>
  <tr>
    <td width="5%" align="center" bgcolor="#FFFFFF"><img src="<?php echo $myrow_2["tb_send_picture"];?>"></td>
    <td width="35%" bgcolor="#FFFFFF"><a href="send_forum_content.php?send_big_type=<?php echo $_GET["content"];?>&&send_small_type=<?php echo $myrow_2["tb_send_small_type"];?>&&send_id=<?php echo $myrow_2["tb_send_id"];?>" target="_blank"><?php echo $myrow_2["tb_send_subject"];?></a></td>
    <td width="25%" bgcolor="#FFFFFF"><?php echo $myrow_2["tb_send_date"];?></td>
    <td width="25%" bgcolor="#FFFFFF"><?php echo $myrow_2["tb_send_user"];?></td>
    <td width="10%" bgcolor="#FFFFFF">
<?php  $query_s=mysql_query("select * from tb_forum_restore where tb_send_id='$myrow_2[tb_send_id]'");
echo mysql_num_rows($query_s);
?></td>
  </tr>
<?php }}?>
</table>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="573"><table width="100%" border="0" cellpadding="0" cellspacing="0">
              <tr> 
                <td width="27%" height="22" align="center"><span class="STYLE2">����ͳ�ƣ�<?php echo $message_count;?> ��&nbsp; </span></td>
                <td width="57%" align="center"><span class="STYLE2"> ��ҳ�� 
                <?php
				$next=$link_type*10;
				$n=$link_type-1;
				$m=$link_type+1;	
                $prev_page=$page-10;						
					if ($link_type==0){
                    echo "<img src=\"images/02.jpg\" width=\"8\" height=\"9\" border=\"0\" title=\"��ҳ\">";					
					}else
					{
                     echo "<a href='content.php?vv=0&link_type=0&page=1&content=$_GET[content]&&content_1=$_GET[content_1]&&tb_send_type_hotspot=1&&class=�ȵ���'><img src=\"images/02.jpg\" width=\"8\" border=\"0\" height=\"9\" border=\"0\" title=\"��ҳ\"></a>&nbsp;";
					 $ccc=$vv-10;
                     echo "<a href='content.php?vv=$ccc&link_type=$n&page=$prev_page&content=$_GET[content]&&content_1=$_GET[content_1]&&tb_send_type_hotspot=1&&class=�ȵ���'><img src=\"images/01.jpg\" width=\"8\" height=\"9\" border=\"0\" title=\"��ʮҳ\"></a>";
					}?>
                <?php	
 		        for ($j=1;$j<=$page_count;$j++) {
				       $pnext=$next+$j;
				       if ($mm==10){
					       break;
					   }
						if ($mm>$page_count){
							break;
						}
						if ($page_count-$vv<10){
	  						if ($mm>=$page_count-$vv){
								break;
							}									
						}
						?>
                <?php
                        echo "<a href='content.php?vv=$vv&link_type=$link_type&page=$pnext&content=$_GET[content]&&content_1=$_GET[content_1]&&tb_send_type_hotspot=1&&class=�ȵ���'> $pnext </a>";											
              	        $mm=$mm+1;						
	     	     }
				 ?>			    
                </span></td>
				 <td width="16%" align="center">
                   <span class="STYLE2">
                   <?php
				$vv=$vv+$mm;
				       if ($page_count-$vv<=0){
	                       echo "<img src=\"images/03.jpg\" width=\"8\" height=\"9\" border=\"0\" title=\"βҳ\">";					
					   }else{
	                       echo "<a href='content.php?vv=$vv&link_type=$m&page=$pnext&content=$_GET[content]&&content_1=$_GET[content_1]&&tb_send_type_hotspot=1&&class=�ȵ���'><img src=\"images/03.jpg\" width=\"8\" height=\"9\" border=\"0\" title=\"��ʮҳ\"></a>";														
					   }
                if ($message_count==0){
					     echo "û�м�¼!";

				}
?>
                  </span> </td>
              </tr>
</table>
</td>
    <td width="195">&nbsp;<a href="send_forum.php" target="_blank">��Ҫ����</a></td>
</tr></table>