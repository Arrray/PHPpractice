<?php session_start(); include("conn/conn.php"); if (empty($page)) {$page=1;}?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>�ҵĺ���</title>
<style type="text/css">
<!--
body {
	background-color: #8496BD;
}
.STYLE1 {font-size: 12px}
.STYLE3 {font-size: 12px; font-weight: bold; }
-->
</style></head>

<body>
  <table width="950" height="114" border="0" align="center" cellpadding="0" cellspacing="0">
   <form name="form1" method="post" action="delete_friend.php">
<tr>
    <td height="43" colspan="2"><img src="images/�ҵĺ���.jpg" width="137" height="34"></td>
    <td width="285">&nbsp;</td>
    <td width="299"><input name="Submit" type="submit" id="Submit" value=" ɾ������ "></td>
    </tr>
  <tr>
    <td width="198" align="center" bgcolor="#F7F7FF"><span class="STYLE3">����</span></td>
    <td width="168" bgcolor="#F7F7FF"><span class="STYLE3">����</span></td>
    <td bgcolor="#F7F7FF"><span class="STYLE3">qq</span></td>
    <td bgcolor="#F7F7FF"><span class="STYLE3">��ʶʱ��</span></td>
    </tr>
<?php 
   if(empty($_GET["page"]))
   $page=1;
   else
   $page=$_GET["page"];
  if($page){
    $page_size=5;          //ÿҳ��ʾ2����¼
    $query="select count(*) as total from tb_my_friend where tb_my='$_GET[my]'";  //�����ݿ��ж�ȡ����
	$result=mysql_query($query);
    $message_count=mysql_result($result,0,"total");  //��ȡ�ܵļ�¼��
    $page_count=ceil($message_count/$page_size);	 //��ȡ�ܵ�ҳ��
    $offset=($page-1)*$page_size;			 
$query=mysql_query("select * from tb_my_friend where tb_my='$_GET[my]' limit $offset, $page_size");
while($myrow=mysql_fetch_array($query)){
?>
  <tr>
    <td align="center" bgcolor="#F7F7FF"><input name="<?php echo $myrow["tb_friend_id"];?>" type="checkbox" value="<?php echo $myrow["tb_friend_id"];?>">    </td>
    <td bgcolor="#F7F7FF"><a href="person_data.php?person_id=<?php echo $myrow["tb_friend"];?>" target="_blank" class="STYLE1"><?php echo $myrow["tb_friend"];?></a></td>
    <td bgcolor="#F7F7FF"><span class="STYLE1">

<?php 
$querys=mysql_query("select * from tb_forum_user where tb_forum_user='$myrow[tb_friend]'");
$myrows=mysql_fetch_array($querys);
echo $myrows["tb_forum_qq"];?>

</span></td>
    <td bgcolor="#F7F7FF"><span class="STYLE1"><?php echo $myrow["tb_date"];?></span></td>
    </tr>
<?php }}?></form>
</table>

   <table width="950" border="0" align="center" cellpadding="0" cellspacing="0">
     <tr>
       <td width="45%" align="center" bgcolor="#F7F7FF"><span class="STYLE1">&nbsp;&nbsp;ҳ�Σ�<?php echo $page;?> / <?php echo $page_count;?> ҳ ��¼��<?php echo $message_count;?> ��&nbsp; </span></td>
       <td width="55%" height="22" align="center" bgcolor="#F7F7FF"><span class="STYLE1"> ��ҳ��
         <?php
				  if($page!=1)
				   {   
				     echo  "<a href=browse_friend.php?my=$_GET[my]&&page=1>��ҳ</a>&nbsp;";
					 echo "<a href=browse_friend.php?my=$_GET[my]&&page=".($page-1).">��һҳ</a>&nbsp;";
				   }
				  if($page<$page_count)
				   {
				        echo "<a href=browse_friend.php?my=$_GET[my]&&page=".($page+1).">��һҳ</a>&nbsp;";
				        echo  "<a href=browse_friend.php?my=$_GET[my]&&page=".$page_count.">βҳ</a>";
				   }
				 
				?>
       </span></td>
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
