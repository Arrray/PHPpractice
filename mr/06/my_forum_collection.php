<?php session_start(); include("conn/conn.php"); if (empty($page)) {$page=1;}?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>�ҵ��ղ�</title>
<style type="text/css">
<!--
body {
	background-color: #8496BD;
}
-->
</style></head>

<body>
<table width="950" height="123" border="0" align="center" cellpadding="0" cellspacing="0">
 <form name="form1" method="post" action="delete_collection.php">
  <tr>
    <td height="37" colspan="2"><img src="images/�ҵ��ղ�.jpg" width="137" height="34"></td>
    <td width="195">&nbsp;</td>
    <td width="165">&nbsp;</td>
    <td width="171">&nbsp;</td>
  </tr>
  <tr>
    <td width="137" align="center" bgcolor="#F7F7FF">ID</td>
    <td width="282" bgcolor="#F7F7FF">����</td>
    <td bgcolor="#F7F7FF">��ǩ</td>
    <td bgcolor="#F7F7FF">ʱ��</td>
    <td bgcolor="#F7F7FF">����</td>
  </tr>
<?php 
$collection_user=$_GET["collection_user"];
  if(empty($_GET["page"]))
   $page=1;
   else
   $page=$_GET["page"];

  if($page){
    $page_size=2;          //ÿҳ��ʾ2����¼
    $query="select count(*) as total from tb_my_collection where tb_collection_user='$_GET[collection_user]' ";  //�����ݿ��ж�ȡ����
	$result=mysql_query($query);
    $message_count=mysql_result($result,0,"total");  //��ȡ�ܵļ�¼��
    $page_count=ceil($message_count/$page_size);	 //��ȡ�ܵ�ҳ��
    $offset=($page-1)*$page_size;			 
$query=mysql_query("select * from tb_my_collection where tb_collection_user='$_GET[collection_user]' limit $offset, $page_size");
while($myrow=mysql_fetch_array($query)){
?>
  <tr>
    <td height="24" align="center" bgcolor="#F7F7FF"><?php echo $myrow["tb_collection_id"];?></td>
    <td bgcolor="#F7F7FF"><a href="<?php echo $myrow["tb_collection_address"];?>"><?php echo $myrow["tb_collection_subject"];?></a></td>
    <td bgcolor="#F7F7FF"><?php echo $myrow["tb_collection_label"];?></td>
    <td bgcolor="#F7F7FF"><?php echo $myrow["tb_collection_date"];?></td>
    <td bgcolor="#F7F7FF"><input name="<?php echo $myrow["tb_collection_id"];?>" type="checkbox" value="<?php echo $myrow["tb_collection_id"];?>">    </td>
  </tr>
<?php }}?>
  <tr>
    <td height="28" bgcolor="#F7F7FF">&nbsp;</td>
    <td bgcolor="#F7F7FF">&nbsp;</td>
    <td bgcolor="#F7F7FF">&nbsp;</td>
    <td bgcolor="#F7F7FF">&nbsp;</td>
    <td bgcolor="#F7F7FF"><input type="submit" name="Submit" value=" ɾ����ǩ "></td>
  </tr>
     </form>
</table>
<table width="950" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#F7FBFF">
  <tr> 
   <td width="45%" align="center" bgcolor="#F7F7FF"><span class="STYLE1">&nbsp;&nbsp;ҳ�Σ�<?php echo $page;?>
      / <?php echo $page_count;?> ҳ ��¼��<?php echo $message_count;?> ��&nbsp; </span></td>
   <td width="55%" height="22" align="center" bgcolor="#F7F7FF"><span class="STYLE1"> ��ҳ�� 
      <?php
				  if($page!=1)
				   {   
				     echo  "<a href=my_forum_collection.php?collection_user=$collection_user&&page=1>��ҳ</a>&nbsp;";
					 echo "<a href=my_forum_collection.php?collection_user=$collection_user&&page=".($page-1).">��һҳ</a>&nbsp;";
				   }
				  if($page<$page_count)
				   {
				        echo "<a href=my_forum_collection.php?collection_user=$collection_user&&page=".($page+1).">��һҳ</a>&nbsp;";
				        echo  "<a href=my_forum_collection.php?collection_user=$collection_user&&page=".$page_count.">βҳ</a>";
				   }
				 
				?>	  
    </span></td>
  </tr>
</table>
<table width="950" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="661" bgcolor="#F7F7FF">&nbsp;</td>
    <td width="289" bgcolor="#F7F7FF"><img src="images/index_8 (2).jpg" width="218" height="75"></td>
  </tr>
</table>
</body>
</html>
