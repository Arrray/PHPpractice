<?php session_start();
if($_SESSION["admin_user"]==""){
  echo "<script>alert('��ֹ�Ƿ���¼!');window.location.href='enter_manage.php';</script>";
  exit;
 }else{
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>ר������</title>
</head>
<body>
<form name="form1" method="post" action="area_admin_ok.php">
  <table width="95%" height="57" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="133" align="right" class="STYLE3">ר�����ݣ�</td>
    <td width="793"><input name="tb_big_type_content" type="text" id="tb_big_type_content" size="25">
      <input type="submit" name="Submit" value="�ύ">
      <input type="reset" name="Submit2" value="����"></td>
  </tr>
</table>
</form>

<table width="95%" height="95" border="0" cellpadding="0" cellspacing="0">
 <?php 
   if(empty($_GET["page"]))
   $page=1;
   else
   $page=$_GET["page"];
   if($page){
    $page_size=2;          //ÿҳ��ʾ2����¼
    $query="select count(*) as total from tb_forum_big_type where tb_big_type_id";  //�����ݿ��ж�ȡ����
	$result=mysql_query($query);
    $message_count=mysql_result($result,0,"total");  //��ȡ�ܵļ�¼��
    $page_count=ceil($message_count/$page_size);	 //��ȡ�ܵ�ҳ��
    $offset=($page-1)*$page_size;			 
	$query=mysql_query("select * from tb_forum_big_type where tb_big_type_id order by tb_big_type_id desc limit $offset, $page_size");
while($myrow=mysql_fetch_array($query)){
?>
  <tr>
    <td width="132" align="right" class="STYLE3">ר�����ݣ�</td>
    <td width="452"><span class="STYLE1"><?php echo $myrow[tb_big_type_content];?></span></td>
    <td width="83"><span class="STYLE3">����ʱ�䣺</span></td>
    <td width="133" class="STYLE1"><?php echo $myrow[tb_big_type_date];?></td>
    <td width="126"><a href="delete_area.php?delete_id=<?php echo $myrow[tb_big_type_id];?>">ɾ��</a></td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr><?php }}?>
</table>
<table width="95%" border="0" cellpadding="0" cellspacing="0">
  <tr> 
   <td width="45%" align="center" class="STYLE1"><span class="STYLE1">&nbsp;&nbsp;ҳ�Σ�<?php echo $page;?>
      / <?php echo $page_count;?> ҳ ��¼��<?php echo $message_count;?> ��&nbsp; </span></td>
   <td width="55%" height="22" align="center" class="STYLE1"><span class="STYLE1"> ��ҳ�� 
      <?php
				  if($page!=1)
				   {
				     echo  "<a href=index.php?title=ר������&&page=1>��ҳ</a>&nbsp;";
					 echo "<a href=index.php?title=ר������&&page=".($page-1).">��һҳ</a>&nbsp;";
				   }
				  if($page<$page_count)
				   {
				        echo "<a href=index.php?title=ר������&&page=".($page+1).">��һҳ</a>&nbsp;";
				        echo  "<a href=index.php?title=ר������&&page=".$page_count.">βҳ</a>";
				   }
				 
				?>	  
    </span></td>
  </tr>
</table>
</body>
</html>
<?php }?>