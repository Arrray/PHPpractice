
<style type="text/css">
<!--
.STYLE4 {color: #FF0000; font-weight: bold; }
-->
</style>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <?php 
$query=mysql_query("select * from tb_forum_affiche where tb_affiche_type='".$_GET["content"]."'");
while($myrow=mysql_fetch_array($query)){
?>
  <tr>
    <td width="10%" align="center"><span class="STYLE4">�� �� �� ��</span></td>
    <td width="90%" colspan="4"><a href="send_affiche.php?tb_affiche_type=<?php echo $myrow["tb_affiche_type"];?>&&tb_affiche_id=<?php echo $myrow["tb_affiche_id"];?>" target="_blank"><?php echo $myrow["tb_affiche_subject"];?></a></td>
  </tr>
  <?php }?>
  <?php 
$query_1=mysql_query("select * from tb_forum_send where tb_send_type='1' and tb_send_small_type='".$_GET["content_1"]."'");
while($myrow_1=mysql_fetch_array($query_1)){
?>
  <tr>
    <td width="10%" align="center"><span class="STYLE4">�� �� �� ��</span></td>
    <td colspan="4" width="90%"><a href="send_forum_content.php?send_big_type=<?php echo $_GET["content"];?>&&send_small_type=<?php echo $myrow_1["tb_send_small_type"];?>&&send_id=<?php echo $myrow_1["tb_send_id"];?>" target="_blank"><?php echo $myrow_1["tb_send_subject"];?></a></td>
  </tr>
  <?php }?>
</table>
<table width="100%" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#8394BF">
 <tr>
    <td height="24" colspan="2" align="center">����</td>
    <td width="244" align="center">����ʱ��</td>
    <td width="187" align="center">������/���ظ�</td>
    <td width="249" align="center">�ظ�/���</td>
  </tr>
<?php 
   if($page==true){
   if(empty($_GET["page"]))
   $page=1;
   else
   $page=$_GET["page"];
   if(empty($_GET["link_type"]))
   $link_type=0;
   else
   $link_type=$_GET["link_type"];
    $page_size=1;		//����ÿҳ���10������
	//����ָ�����������ݿ��ж�ȡ���ӵ�����
    $query="select count(*) as total from tb_forum_send where tb_send_small_type='$_GET[content_1]'";
	$result=mysql_query($query);
    $message_count=mysql_result($result,0,"total");
    $page_count=ceil($message_count/$page_size);	
	$page_count=$page_count-10*$link_type;
    $offset=($page-1)*$page_size;	
	//�����ݿ��ж�ȡ���ӵ����ݣ��������ӷ�����ʱ����н����������
	$query_2=mysql_query("select * from tb_forum_send where tb_send_small_type='$_GET[content_1]' order by tb_send_ltime desc limit $offset, $page_size");
	while($myrow_2=mysql_fetch_array($query_2)){
?>
  <tr>
    <td width="5%" align="center" bgcolor="#FFFFFF"><img src="<?php echo $myrow_2["tb_send_picture"];?>" /></td>
    <td width="35%" align="center" bgcolor="#FFFFFF"><a href="send_forum_content.php?send_big_type=<?php echo $_GET["content"];?>&&send_small_type=<?php echo $myrow_2["tb_send_small_type"];?>&&send_id=<?php echo $myrow_2["tb_send_id"];?>" target="_blank"><?php echo $myrow_2["tb_send_subject"];?></a></td>
    <td width="25%" align="center" bgcolor="#FFFFFF"><?php echo $myrow_2["tb_send_date"];?></td>
    <td width="25%" align="center" bgcolor="#FFFFFF">
	<?php echo $myrow_2["tb_send_user"]."/";?>
	<?php $query_ta=mysql_query("select * from tb_forum_send where tb_send_id=$myrow_2[tb_send_id]");

$myrow_ta=mysql_fetch_array($query_ta); 
if($myrow_ta["tb_send_types"]==1)
    echo $myrow_ta["tb_send_author"];
	else
	echo $myrow_ta["tb_send_user"];
    ?>
	</td>
<td width="10%" align="center" bgcolor="#FFFFFF">
    <?php  $query_s=mysql_query("select * from tb_forum_restore where tb_send_id='$myrow_2[tb_send_id]'");
	echo mysql_num_rows($query_s);
echo "/";
$query_tn=mysql_query("select * from tb_forum_send where tb_send_id=$myrow_2[tb_send_id]");
$myrow_tn=mysql_fetch_array($query_tn);
echo $myrow_tn["tb_send_count"];
?></td>
  </tr>
  <?php }}?>
</table>
<table width="100%" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#8394BF">
  <tr>
    <td width="573" bgcolor="#FFFFFF"><table width="100%" border="0" cellpadding="0" cellspacing="0">
              <tr> 
                <td width="27%" height="22" align="center"><span class="STYLE2">����ͳ�ƣ�<?php echo $message_count;?> ��&nbsp; </span></td>
                <td width="57%" align="center"><span class="STYLE2"> ��ҳ�� 
                <?php
                //$link_type=0;
				//$vv=0;
				$next=$link_type*10;              //����next��10ҳ
				$n=$link_type-1;                  //����nΪ��һҳ
				$m=$link_type+1;	              //����mΪ��һҳ
                $prev_page=$page-10;	          //����prev_pageΪ��10ҳ				
					if ($link_type==0){
                    echo "<img src=\"images/02.jpg\" width=\"8\" height=\"9\" border=\"0\" title=\"��ҳ\">";					
					}else
					{
					echo "<a href='content.php?vv=0&link_type=0&page=1&content=$_GET[content]&&content_1=$_GET[content_1]'><img src=\"images/02.jpg\" width=\"8\" border=\"0\" height=\"9\" border=\"0\" title=\"��ҳ\"></a>&nbsp;";
					 $ccc=$vv-10;
                     echo "<a href='content.php?vv=$ccc&link_type=$n&page=$prev_page&content=$_GET[content]&&content_1=$_GET[content_1]'><img src=\"images/01.jpg\" width=\"8\" height=\"9\" border=\"0\" title=\"��ʮҳ\"></a>";
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
                        echo "<a href='content.php?vv=$vv&link_type=$link_type&page=$pnext&content=$_GET[content]&&content_1=$_GET[content_1]'> $pnext </a>";											
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
	                       echo "<a href='content.php?vv=$vv&link_type=$m&page=$pnext&content=$_GET[content]&&content_1=$_GET[content_1]'><img src=\"images/03.jpg\" width=\"8\" height=\"9\" border=\"0\" title=\"��ʮҳ\"></a>";														
					   }
                if ($message_count==0){
					     echo "û�м�¼!";

				}
?>
                  </span> </td>
              </tr>
</table>
</td>
    <td width="195" bgcolor="#FFFFFF">&nbsp;<a href="send_forum.php" target="_blank">��Ҫ����</a></td>
</tr></table>