<?php	session_start(); include("../conn/conn.php");
if($_SESSION["admin_user"]==""){
  echo "<script>alert('��ֹ�Ƿ���¼!');window.location.href='enter_manage.php';</script>";
  exit;
 }else{
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>��̨����</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<style type="text/css">
<!--
.STYLE1 {font-size: 12px}
.STYLE3 {font-size: 12px; font-weight: bold; }
-->
</style>
</head>
	  <script language="javascript">
	     function check_type(form){
		   if(form.tb_big_type_content.value==""){
		     alert("��ѡ������ר����");
		     form.tb_big_type_content.focus();
			 return(false);
		   }
		   
		   if(form.tb_small_type_content.value==""){
		     alert("���������");
		     form.tb_small_type_content.focus();
			 return(false);
		   }
		 return(true);
		 
		 
		 }
	  
	  
	  </script>

<body topmargin="0" leftmargin="0" bottommargin="0" class="scrollbar">
<form name="form1" method="post" action="append_small_type_ok.php" onSubmit="javscript: return check_type(this)">
  <table width="95%" height="90" border="0" cellpadding="0" cellspacing="0">
    
    <tr>
      <td width="141" height="35" align="right"><span class="STYLE3">����ר��:</span></td>
      <td width="804"><select name="tb_big_type_content" id="tb_big_type_content">
<option selected="selected">��ѡ��ר��</option>
<?php  $query=mysql_query("select * from tb_forum_big_type");
while($result=mysql_fetch_array($query)){
?>        
<option value="<?php echo $result[tb_big_type_content];?>"><?php echo $result[tb_big_type_content];?></option>
<?php }?>
      </select>      </td>
    </tr>
    <tr>
      <td height="35" align="right"><span class="STYLE3">�������:</span></td>
      <td><input name="tb_small_type_content" type="text" size="65"></td>
    </tr>
    <tr>
      <td height="25">&nbsp;</td>
      <td><input type="submit" name="Submit" value="�ύ">
      <input type="reset" name="Submit2" value="����"></td>
    </tr>
  </table>
</form>
<table width="95%" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="223" height="25" align="center" class="STYLE3">����ר��</td>
      <td width="353" align="center" class="STYLE3">�������</td>
      <td width="221" align="center" class="STYLE3">����ʱ��</td>
      <td width="148" align="center" class="STYLE3">����</td>
    </tr>
<?php 
  if(empty($_GET["page"]))
   $page=1;
   else
   $page=$_GET["page"];
   if($page){
    $page_size=1;          //ÿҳ��ʾ2����¼
    $query="select count(*) as total from tb_forum_small_type where tb_small_type_id";  //�����ݿ��ж�ȡ����
	$result=mysql_query($query);
    $message_count=mysql_result($result,0,"total");  //��ȡ�ܵļ�¼��
    $page_count=ceil($message_count/$page_size);	 //��ȡ�ܵ�ҳ��
    $offset=($page-1)*$page_size;			 
	$query=mysql_query("select * from tb_forum_small_type where tb_small_type_id order by tb_small_type_id desc limit $offset, $page_size");
	while($result=mysql_fetch_array($query)){
?>
    <tr>
      <td height="25" align="center" class="STYLE1"><?php echo $result[tb_big_type_content];?></td>
      <td align="center" class="STYLE1"><?php echo $result[tb_small_type_content];?></td>
      <td align="center" class="STYLE1"><?php echo $result[tb_small_type_date];?></td>
      <td align="center" class="STYLE1"><a href="delete_small_type.php?delete_id=<?php echo $result[tb_small_type_id];?>">ɾ��</a></td>
    </tr>
<?php } }?>
</table><table width="95%" border="0" cellpadding="0" cellspacing="0">
  <tr> 
   <td width="45%" height="30" align="center"><span class="STYLE1">&nbsp;&nbsp;ҳ�Σ�<?php echo $page;?>
      / <?php echo $page_count;?> ҳ ��¼��<?php echo $message_count;?> ��&nbsp; </span></td>
   <td width="55%" height="22" align="center"><span class="STYLE1"> ��ҳ�� 
      <?php
				  if($page!=1)
				   {
				     echo  "<a href=index.php?title=����������&&page=1>��ҳ</a>&nbsp;";
					 echo "<a href=index.php?title=����������&&page=".($page-1).">��һҳ</a>&nbsp;";
				   }
				  if($page<$page_count)
				   {
				        echo "<a href=index.php?title=����������&&page=".($page+1).">��һҳ</a>&nbsp;";
				        echo  "<a href=index.php?title=����������&&page=".$page_count.">βҳ</a>";
				   }
				 
				?>	  
    </span></td>
  </tr>
</table>
</body>
</html>
<?php }?>