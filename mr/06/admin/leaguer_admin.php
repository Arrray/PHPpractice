<?php include("conn/conn.php");
if(empty($_SESSION["admin_user"])){
  echo "<script>alert('��ֹ�Ƿ���¼!');window.location.href='enter_manage.php';</script>";
  exit;
 }else{
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>�ޱ����ĵ�</title>
</head>

<body>

<table width="95%" height="90" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="109" height="35" align="center"><span class="STYLE3">��Ա�ǳƣ�</span></td>
    <td width="109" align="center"><span class="STYLE3">��Ա���룺</span></td>
    <td width="109" align="center"><span class="STYLE3">ע��ʱ�䣺</span></td>
    <td width="109" align="center"><span class="STYLE3">�������ͣ�</span></td>
    <td width="87" align="center"><span class="STYLE3">����</span></td>
    <td width="252" align="center">&nbsp;</td>
  </tr>
<?php 
   if(empty($_GET["page"]))
   $page=1;
   else
   $page=$_GET["page"];
   if($page){
    $page_size=2;          //ÿҳ��ʾ2����¼
    $query="select count(*) as total from tb_forum_user where tb_forum_id";  //�����ݿ��ж�ȡ����
	$result=mysql_query($query);
    $message_count=mysql_result($result,0,"total");  //��ȡ�ܵļ�¼��
    $page_count=ceil($message_count/$page_size);	 //��ȡ�ܵ�ҳ��
    $offset=($page-1)*$page_size;			 
	$query=mysql_query("select * from tb_forum_user where tb_forum_id order by tb_forum_id desc limit $offset, $page_size");
while($myrow=mysql_fetch_array($query)){
?>
  <tr>
    <td height="25" align="center"><span class="STYLE1"><?php echo $myrow[tb_forum_user];?></span></td>
    <td align="center"><span class="STYLE1"><?php echo $myrow[tb_forum_truepass];?></span></td>
    <td align="center"><span class="STYLE1"><?php echo $myrow[tb_forum_date];?></span></td>
    <td align="center"><span class="STYLE1"><?php echo $myrow[tb_forum_type];?></span></td>
    <td align="center"><a href="delete_leaguer.php?delete_id=<?php echo $myrow[tb_forum_id];?>&&delete_user=<?php echo $myrow[tb_forum_user];?>" class="STYLE1">ɾ����Ա</a></td>
    <td align="center">
<form name="form1" method="post" action="update_leaguer.php?update_id=<?php echo $myrow[tb_forum_id];?>">
	<select name="tb_forum_type" id="tb_forum_type">
  		<option value="2">����</option>
  		<option value="1">��Ա</option>
	</select>
	<input type="submit" name="Submit" value="Ȩ������">
</form></td>
  </tr>
<?php }}?>

  <tr>
    <td height="30" colspan="6"><table width="95%" cellpadding="0" cellspacing="0">
  <tr> 
   <td width="45%" align="center"><span class="STYLE1">&nbsp;&nbsp;ҳ�Σ�<?php echo $page;?>
      / <?php echo $page_count;?> ҳ ��¼��<?php echo $message_count;?> ��&nbsp; </span></td>
   <td width="55%" height="22" align="center"><span class="STYLE1"> ��ҳ�� 
      <?php
				  if($page!=1)
				   {
				     echo  "<a href=index.php?title=��Ա����&&page=1>��ҳ</a>&nbsp;";
					 echo "<a href=index.php?title=��Ա����&&page=".($page-1).">��һҳ</a>&nbsp;";
				   }
				  if($page<$page_count)
				   {
				        echo "<a href=index.php?title=��Ա����&&page=".($page+1).">��һҳ</a>&nbsp;";
				        echo  "<a href=index.php?title=��Ա����&&page=".$page_count.">βҳ</a>";
				   }
				 
				?>	  
    </span></td>
  </tr>
</table></td>
  </tr>
</table>
</body>
</html>
<?php }?>