<html>
<head>
<style type="text/css">
*{font-size:12px; background:#FFFFCC; margin:0; padding:0;}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>�һ�����</title>
</head>
<?php
 include("conn/conn.php");
?>
<body topmargin="0" leftmargin="0" bottommargin="0">
<table width="300" height="120" border="0" align="center" cellpadding="0" cellspacing="0">
 <script language="javascript">
   function checkinput(form)
   {
     if(form.tb_forum_result.value=="")
	 {
	  alert('������������ʾ��!');
	  form.tb_forum_result.select();
	  return(false);
	 }
	  return(true);
   }
 </script>
  <form name="form1" method="post" action="getback_pass_oks.php" onSubmit="return checkinput(this)">
  <tr>
    <td height="25" colspan="2"><div align="center">�һ�����</div></td>
  </tr>
  <tr>
    <td width="73" height="25"><div align="center">������ʾ��</div></td>
    <td width="127"><div align="left">
	<?php
	  
	  $tb_user=$_POST["tb_user"];
	   $sql=mysql_query("select * from tb_forum_user where tb_forum_user='".$tb_user."'",$conn);
	  $info=mysql_fetch_array($sql);
	  if($info==false){
	     echo "<script>alert('�޴��û�!');history.back();</script>";
		 exit;
	   }else{
	     echo $info["tb_forum_pass_problem"];
	   }
	   
	?>
	</div></td>
  </tr>
  <tr>
    <td height="25"><div align="center">��ʾ�𰸣�</div></td>
    <td height="25"><div align="left"><input type="text" name="tb_forum_result"  size="18">
	</div></td>
  </tr>
 <tr>
    <td height="25"><div align="center">�����ַ��</div></td>
    <td height="25"><div align="left"><input type="text" name="tb_forum_email"  size="18">
	  <input type="hidden" name="tb_user" value="<?php echo $tb_user;?>">
	</div></td>
  </tr>

  <tr>
    <td height="25" colspan="2"><div align="center"><input type="submit" value="ȷ��"></div></td>
  </tr>
  </form>
</table>
</body>
</html>
