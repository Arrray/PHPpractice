<?php include("conn/conn.php");
if($_SESSION["admin_user"]==""){
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
    <td width="323" height="35" align="center"><span class="STYLE3">�������⣺</span></td>
    <td width="92" align="center"><span class="STYLE3">�����ˣ�</span></td>
    <td width="152" align="center"><span class="STYLE3">����ʱ�䣺</span></td>
    <td width="94" align="center"><span class="STYLE3">�������ͣ�</span></td>
    <td width="265" align="center"><span class="STYLE3">����</span></td>
  </tr>
<?php 
   if(empty($_GET["page"]))
   $page=1;
   else
   $page=$_GET["page"];
   if($page){
    $page_size=5;          //ÿҳ��ʾ2����¼
    $query="select count(*) as total from tb_forum_send where tb_send_type=1";  //�����ݿ��ж�ȡ����
	$result=mysql_query($query);
    $message_count=mysql_result($result,0,"total");  //��ȡ�ܵļ�¼��
    $page_count=ceil($message_count/$page_size);	 //��ȡ�ܵ�ҳ��
    $offset=($page-1)*$page_size;			 
	$query=mysql_query("select * from tb_forum_send where tb_send_type=1 order by tb_send_id desc limit $offset, $page_size");
while($myrow=mysql_fetch_array($query)){
?>
  <tr>
    <td height="25" align="left">&nbsp;&nbsp;<span class="STYLE1"><?php echo $myrow[tb_send_subject];?></span></td>
    <td align="center"><span class="STYLE1"><?php echo $myrow[tb_send_user];?></span></td>
    <td align="center"><span class="STYLE1"><?php echo $myrow[tb_send_date];?></span></td>
    <td align="center"><span class="STYLE1"><?php echo $myrow[tb_send_type];?></span></td>
    <td align="center">
<form action="update_permute.php?update_id=<?php echo $myrow[tb_send_id];?>" method="post" name="form1" class="STYLE1">
	<select name="tb_send_type" id="tb_send_type">
  		<option value="1">�ö�</option>
  		<option value="0">ȡ��</option>
	</select>
	<input type="submit" name="Submit" value="ִ��">
</form></td>
  </tr>
<?php }}?>

  <tr>
    <td height="30" colspan="5" align="center"><table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr> 
   <td width="45%" align="center" class="STYLE1">&nbsp;&nbsp;ҳ�Σ�<?php echo $page;?>
      / <?php echo $page_count;?> ҳ ��¼��<?php echo $message_count;?> ��&nbsp; </td>
   <td width="55%" height="22" align="center" class="STYLE1"> ��ҳ�� 
      <?php
				  if($page!=1)
				   {
				     echo  "<a href=index.php?title=��������&&page=1>��ҳ</a>&nbsp;";
					 echo "<a href=index.php?title=��������&&page=".($page-1).">��һҳ</a>&nbsp;";
				   }
				  if($page<$page_count)
				   {
				        echo "<a href=index.php?title=��������&&page=".($page+1).">��һҳ</a>&nbsp;";
				        echo  "<a href=index.php?title=��������&&page=".$page_count.">βҳ</a>";
				   }
				 
				?>    </td>
  </tr>
</table></td>
  </tr>
</table>
</body>
</html>
<?php }?>