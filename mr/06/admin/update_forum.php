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
<form name="form1" method="post" action="update_forum_ok.php">
  <tr>
    <td width="72" height="35" align="center"><span class="STYLE3">ѡ��    </span></td>
    <td width="271" align="center"><span class="STYLE3">��������</span></td>
    <td width="214" align="center"><span class="STYLE3">������</span></td>
    <td width="192" align="center"><span class="STYLE3">����ʱ��</span></td>
    <td width="100" align="center"><span class="STYLE3">������</span></td>
    <td width="77" align="center"><span class="STYLE3">�ȵ���</span></td>
    <td width="77" align="center"><span class="STYLE3">�Ƿ����</span></td>
  </tr>
<?php 
     if(empty($_GET["page"]))
   $page=1;
   else
   $page=$_GET["page"];
   if($page){
    $page_size=10;          //ÿҳ��ʾ2����¼
    $query="select count(*) as total from tb_forum_send where tb_send_id ";  //�����ݿ��ж�ȡ����
	$result=mysql_query($query);
    $message_count=mysql_result($result,0,"total");  //��ȡ�ܵļ�¼��
    $page_count=ceil($message_count/$page_size);	 //��ȡ�ܵ�ҳ��
    $offset=($page-1)*$page_size;			 
	$query=mysql_query("select * from tb_forum_send where tb_send_id order by tb_send_id desc limit $offset, $page_size");
while($myrow=mysql_fetch_array($query)){
?>
  <tr>
    <td height="25" align="center" class="STYLE1"><input name="<?php echo $myrow["tb_send_id"];?>" type="checkbox" value="<?php echo $myrow["tb_send_id"];?>"></td>
    <td align="center" class="STYLE1"><?php echo $myrow["tb_send_subject"];?></td>
    <td align="center" class="STYLE1"><?php echo $myrow["tb_send_user"];?></td>
    <td align="center" class="STYLE1"><?php echo $myrow["tb_send_date"];?></td>
    <td align="center" class="STYLE1"><?php echo $myrow["tb_send_type_distillate"];?></td>
    <td align="center" class="STYLE1"><?php echo $myrow["tb_send_type_hotspot"];?></td>
    <td align="center" class="STYLE1"><?php if($myrow["tb_forum_end"]==1){echo "�ѽ���";}else{echo "δ����";}?></td>
  </tr>
     
<?php }}?>

  <tr>
    <td height="25" align="center">&nbsp;</td>
    <td align="center"><input name="button" type=button class="buttoncss" onClick="checkAll(form1,status)" value="ȫѡ">
<input type=button value="��ѡ" class="buttoncss" onClick="switchAll(form1,status)">
<input type=button value="��ѡ" class="buttoncss" onClick="uncheckAll(form1,status)"></td>
    <td align="center"><input type="submit" name="Submit" value="������">
      <input type="submit" name="Submit3" value="ȡ��"></td>
    <td align="center"><input type="submit" name="Submit2" value="������">
      <input type="submit" name="Submit4" value="ȡ��"></td>
    <td colspan="3" align="center"><input type="submit" name="Submit5" value="����">
      <input type="submit" name="Submit6" value="ȡ��"></td>
    </tr>
 </form>
  <tr>
    <td height="30" colspan="7"><table width="95%" border="0" cellpadding="0" cellspacing="0">
  <tr> 
   <td width="45%" align="center"><span class="STYLE1">&nbsp;&nbsp;ҳ�Σ�<?php echo $page;?>
      / <?php echo $page_count;?> ҳ ��¼��<?php echo $message_count;?> ��&nbsp; </span></td>
   <td width="55%" height="22" align="center"><span class="STYLE1"> ��ҳ�� 
      <?php
				  if($page!=1)
				   {
				     echo  "<a href=index.php?title=���ӹ���&&page=1>��ҳ</a>&nbsp;";
					 echo "<a href=index.php?title=���ӹ���&&page=".($page-1).">��һҳ</a>&nbsp;";
				   }
				  if($page<$page_count)
				   {
				        echo "<a href=index.php?title=���ӹ���&&page=".($page+1).">��һҳ</a>&nbsp;";
				        echo  "<a href=index.php?title=���ӹ���&&page=".$page_count.">βҳ</a>";
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