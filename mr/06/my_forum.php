<?php session_start();include("conn/conn.php"); if (empty($page)) {$page=1;};if (empty($link_type)) {$link_type=0;};?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<style type="text/css">
<!--
body {
	background-color: #8496BD;
}
.STYLE5 {font-size: 12px}
body,td,th {
	font-size: 12px;
}
-->
</style>
<title>�ҵ�����</title>
</head>
<body>
<table width="950" border="0" align="center" cellpadding="0" cellspacing="0">

  <tr>
    <td colspan="2" align="left"><img src="images/�ҵ�����.jpg" width="137" height="34"></td>
    <td>&nbsp;</td>
    <td width="189">&nbsp;</td>
    <td width="253">&nbsp;</td>
  </tr>
  <tr>
    <td width="98" height="40" align="center" bgcolor="#F7F7FF"><span class="STYLE5"></span></td>
    <td width="228" bgcolor="#F7F7FF"><span class="STYLE5">����</span></td>
    <td width="182" bgcolor="#F7F7FF"><span class="STYLE5">����ʱ��</span></td>
    <td bgcolor="#F7F7FF"><span class="STYLE5">������</span></td>
    <td bgcolor="#F7F7FF"><span class="STYLE5">�ظ�����</span></td>
  </tr>
<?php 
  $my_forum_user=$_GET["my_forum_user"];
  if(empty($_GET["page"]))
   $page=1;
   else
   $page=$_GET["page"];
 if($page){
    $page_size=2;         //����ÿҳ��ʾ����¼��
    $query="select count(*) as total from tb_forum_send where tb_send_user='$_GET[my_forum_user]'";
	$result=mysql_query($query);
    $message_count=mysql_result($result,0,"total");
    $page_count=ceil($message_count/$page_size);	
    $offset=($page-1)*$page_size;	
$query_2=mysql_query("select * from tb_forum_send where tb_send_user='$_GET[my_forum_user]' limit $offset, $page_size");
while($myrow_2=mysql_fetch_array($query_2)){
$content=$myrow_2['tb_send_small_type'];
$query_3=mysql_query("select * from tb_forum_small_type where tb_small_type_content = '$content'");
$myrow_3=mysql_fetch_array($query_3);
$getcontent=$myrow_3["tb_big_type_content"];
?>
  <tr>
    <td align="center" bgcolor="#F7F7FF"><img src="<?php echo $myrow_2["tb_send_picture"];?>" /></td>
    <td bgcolor="#F7F7FF"><a href="send_forum_content.php?send_big_type=<?php echo $getcontent;?>&amp;&amp;send_small_type=<?php echo $myrow_2["tb_send_small_type"];?>&amp;&amp;send_id=<?php echo $myrow_2["tb_send_id"];?>" target="_blank"><?php echo $myrow_2["tb_send_subject"];?></a></td>
    <td bgcolor="#F7F7FF"><?php echo $myrow_2["tb_send_date"];?></td>
    <td bgcolor="#F7F7FF"><?php echo $myrow_2["tb_send_user"];?></td>
    <td bgcolor="#F7F7FF"><?php  $query_s=mysql_query("select * from tb_forum_restore where tb_send_id='$myrow_2[tb_send_id]'");
echo mysql_num_rows($query_s);
?></td>
  </tr>
<?php }}?>
</table>
<table width="950" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#F7F7FF">
  <tr>
    <td width="573"><table width="100%" border="0" cellpadding="0" cellspacing="0">
              <tr> 
                <td width="27%" height="22" align="center"><span class="STYLE5">����ͳ�ƣ�<?php echo $message_count;?> ��&nbsp; </span></td>
                <td width="57%" align="center"><span class="STYLE5"> ��ҳ�� 
                <?php
				$next=$link_type*10;
				$n=$link_type-1;
				$m=$link_type+1;	
                $prev_page=$page-10;						
					if ($link_type==0){
                    echo "<img src=\"images/02.jpg\" width=\"8\" height=\"9\" border=\"0\" title=\"��ҳ\">";					
					}else
					{
                     echo "<a href='my_forum.php?vv=0&link_type=0&page=1&&my_forum_user=$my_forum_user'><img src=\"images/02.jpg\" width=\"8\" border=\"0\" height=\"9\" border=\"0\" title=\"��ҳ\"></a>&nbsp;";
					 $ccc=$vv-10;
                     echo "<a href='my_forum.php?vv=$ccc&link_type=$n&page=$prev_page&&my_forum_user=$my_forum_user'><img src=\"images/01.jpg\" width=\"8\" height=\"9\" border=\"0\" title=\"��ʮҳ\"></a>";
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
                        echo "<a href='my_forum.php?vv=$vv&link_type=$link_type&page=$pnext&&my_forum_user=$my_forum_user'> $pnext </a>";											
              	        $mm=$mm+1;						
	     	     }
				 ?>			    
                </span></td>
				 <td width="16%" align="center">
                   <span class="STYLE5">
                   <?php
				$vv=$vv+$mm;
				       if ($page_count-$vv<=0){
	                       echo "<img src=\"images/03.jpg\" width=\"8\" height=\"9\" border=\"0\" title=\"βҳ\">";					
					   }else{
	                       echo "<a href='my_forum.php?vv=$vv&link_type=$m&page=$pnext&&my_forum_user=$my_forum_user'><img src=\"images/03.jpg\" width=\"8\" height=\"9\" border=\"0\" title=\"��ʮҳ\"></a>";														
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
<table width="950" height="119" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="663" bgcolor="#F7F7FF">&nbsp;</td>
    <td width="287" bgcolor="#F7F7FF"><img src="images/index_8 (2).jpg" width="218" height="75"></td>
  </tr>
</table>
</body>
</html>
