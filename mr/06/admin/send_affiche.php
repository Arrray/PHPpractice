<?php session_start();
if($_SESSION["admin_user"]==""){
  echo "<script>alert('��ֹ�Ƿ���¼!');window.location.href='enter_manage.php';</script>";
  exit;
 }else{$admin_user=$_SESSION["admin_user"];
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>�������</title>
</head>
<body>
<form name="form1" method="post" action="send_affiche_ok.php">
  <table width="95%" height="129" border="0" cellpadding="0" cellspacing="0">
  <tr>
       <td height="45" align="right"><span class="STYLE3">�������</span></td>
    <td><select name="tb_affiche_type" id="tb_affiche_type">
<?php 
   if(empty($_GET["page"]))
   $page=1;
   else
   $page=$_GET["page"];
$query=mysql_query("select * from tb_forum_big_type ");
while($myrow=mysql_fetch_array($query)){
?>
      <option value="<?php echo $myrow["tb_big_type_content"];?>"><?php echo $myrow["tb_big_type_content"];?></option>
<?php }?>
    </select>
      <input name="tb_affiche_user" type="hidden" id="tb_affiche_user" value="<?php echo $admin_user;?>">    </td>
    </tr>
<tr>
<td width="137" height="25" align="right"><span class="STYLE3">������⣺</span></td>
    <td width="789"><input name="tb_affiche_subject" type="text" id="tb_affiche_subject" size="65"></td>
    </tr>
  <tr>
    <td align="right"><span class="STYLE3">�������ݣ�</span></td>
    <td><textarea name="tb_affiche_content" cols="65" rows="10" id="tb_affiche_content"></textarea></td>
    </tr>
  <tr>
    <td align="right">&nbsp;</td>
    <td><input type="submit" name="Submit" value="�ύ">
      <input type="reset" name="Submit2" value="����"></td>
    </tr>
</table>
</form>

<table width="95%" height="95" border="0" cellpadding="0" cellspacing="0">
 <?php 
   if($page){
    $page_size=2;          //ÿҳ��ʾ2����¼
    $query="select count(*) as total from tb_forum_affiche where tb_affiche_id";  //�����ݿ��ж�ȡ����
	$result=mysql_query($query);
    $message_count=mysql_result($result,0,"total");  //��ȡ�ܵļ�¼��
    $page_count=ceil($message_count/$page_size);	 //��ȡ�ܵ�ҳ��
    $offset=($page-1)*$page_size;			 
	$query=mysql_query("select * from tb_forum_affiche where tb_affiche_id order by tb_affiche_id desc limit $offset, $page_size");
while($myrow=mysql_fetch_array($query)){
?>
  <tr>
    <td width="125" height="25" align="right" class="STYLE3">������⣺</td>
    <td width="512" class="STYLE1"><?php echo $myrow["tb_affiche_subject"];?></td>
    <td width="96" class="STYLE3">����ʱ�䣺</td>
    <td width="111" class="STYLE1"><?php echo $myrow["tb_affiche_date"];?></td>
  </tr>
  <tr>
    <td height="25" align="right" class="STYLE3">�������ݣ�</td>
    <td class="STYLE1"><?php echo $myrow["tb_affiche_content"];?></td>
    <td class="STYLE3">&nbsp;</td>
    <td class="STYLE1"><a href="delete_affiche.php?delete_id=<?php echo $myrow["tb_affiche_id"];?>">ɾ��</a></td>
  </tr>
  <tr>
    <td height="25" align="right" class="STYLE3">�������</td>
    <td class="STYLE1"><?php echo $myrow["tb_affiche_type"];?></td>
    <td class="STYLE3">�����ˣ�</td>
    <td class="STYLE1"><?php echo $myrow["tb_affiche_user"];?></td>
  </tr>
  <tr>
    <td height="25" align="right">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr><?php }}?>
</table>
<table width="95%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="45%" align="center"><span class="STYLE1">&nbsp;&nbsp;ҳ�Σ�<?php echo $page;?> / <?php echo $page_count;?> ҳ ��¼��<?php echo $message_count;?> ��&nbsp; </span></td>
    <td width="55%" height="22" align="center"><span class="STYLE1"> ��ҳ��
      <?php
				  if($page!=1)
				   {
				     echo  "<a href=index.php?title=�������&&page=1>��ҳ</a>&nbsp;";
					 echo "<a href=index.php?title=�������&&page=".($page-1).">��һҳ</a>&nbsp;";
				   }
				  if($page<$page_count)
				   {
				        echo "<a href=index.php?title=�������&&page=".($page+1).">��һҳ</a>&nbsp;";
				        echo  "<a href=index.php?title=�������&&page=".$page_count.">βҳ</a>";
				   }
				 
				?>
				
    </span></td>
  </tr>
</table>
</body>
</html>
<?php }?>