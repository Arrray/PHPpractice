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
<script language="javascript" src="js/checkbox.js"></script>
<body>

<table width="95%" height="110" border="0" cellpadding="0" cellspacing="0">
<form name="form1" method="post" action="message_restore_ok.php">
  <tr>
    <td width="51" height="35" align="center"><span class="STYLE3">ѡ��    </span></td>
    <td width="291" align="center"><span class="STYLE3">��������</span></td>
    <td width="281" align="center"><span class="STYLE3">�ظ�����</span></td>
    <td width="235" align="center"><span class="STYLE3">ԭ��</span></td>
    <td width="68" align="center"><span class="STYLE3">���</span></td>
    </tr>
<?php 
     if(empty($_GET["page"]))
   $page=1;
   else
   $page=$_GET["page"];
   if($page){
    $page_size=10;          //ÿҳ��ʾ2����¼
    $query="select count(*) as total from tb_forum_restore where tb_send_id ";  //�����ݿ��ж�ȡ����
	$result=mysql_query($query);
    $message_count=mysql_result($result,0,"total");  //��ȡ�ܵļ�¼��
    $page_count=ceil($message_count/$page_size);	 //��ȡ�ܵ�ҳ��
    $offset=($page-1)*$page_size;			 
	$query=mysql_query("select * from tb_forum_restore where tb_send_id order by tb_send_id desc limit $offset, $page_size");
while($myrow=mysql_fetch_array($query)){
?>
  <tr>
    <td height="25" align="center" class="STYLE1"><input name="<?php echo $myrow[tb_restore_id];?>" type="checkbox" value="<?php echo $myrow[tb_restore_id];?>"></td>
    <td align="center" class="STYLE1"><?php echo $myrow[tb_restore_subject];?></td>
    <td align="center" class="STYLE1"><?php echo $myrow[tb_restore_content];?></td>
    <td align="center" class="STYLE1"><?php 
$sql=mysql_query("select * from tb_forum_send where tb_send_id='".$myrow[tb_send_id]."'");
$myrows=mysql_fetch_array($sql);
echo $myrows[tb_send_subject];
?></td>
    <td align="center" class="STYLE1"><?php if($myrow[tb_restore_tag]==1){echo "������";}else{echo "δ����";}?></td>
    </tr>
     
<?php }}?>

  <tr>
    <td height="25" align="center">&nbsp;</td>
    <td align="center"><input name="button" type=button class="buttoncss" onClick="checkAll(form1,status)" value="ȫѡ">
<input type=button value="��ѡ" class="buttoncss" onClick="switchAll(form1,status)">
<input type=button value="��ѡ" class="buttoncss" onClick="uncheckAll(form1,status)"></td>
    <td colspan="2" align="center"><span class="STYLE1">
      <input type="submit" name="Submit" value="����">
/
<input type="submit" name="Submit2" value="ȡ��">
    </span></td>
    <td align="center">&nbsp;</td>
    </tr>
 </form>
  <tr>
    <td height="30" colspan="5"><table width="95%" border="0" cellpadding="0" cellspacing="0">
  <tr> 
   <td width="45%" align="center"><span class="STYLE1">&nbsp;&nbsp;ҳ�Σ�<?php echo $page;?>
      / <?php echo $page_count;?> ҳ ��¼��<?php echo $message_count;?> ��&nbsp; </span></td>
   <td width="55%" height="22" align="center"><span class="STYLE1"> ��ҳ�� 
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
				 
				?>	  
    </span></td>
  </tr>
</table></td>
  </tr>
</table>
</body>
</html>
<?php }?>