<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>�һ�����</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body topmargin="0" leftmargin="0" bottommargin="0">
<table width="200" height="100" border="0" align="center" cellpadding="0" cellspacing="0">
<script language="javascript">

   function chkinput(form){
   
     	 if(form.userpwd1.value==""){
							  alert("�������¼���룡");
							  form.userpwd1.select();
							  return(false);
							}
							 if(form.userpwd2.value==""){
							  alert("������ȷ�����룡");
							  form.userpwd2.select();
							  return(false);
							}
							 if(form.userpwd1.value!=form.userpwd2.value){
							  alert("��¼������ȷ�����벻ͬ��");
							  form.userpwd1.select();
							  return(false);
							}
							if(form.userpwd1.value.length<6){
							  alert("��¼����Ӧ����6λ��");
							  form.userpwd1.select();
							  return(false);
							}
						  return(true);
   }

</script>
  <form name="form1" method="post" action="savechangepwd.php" onSubmit="return chkinput(this)">
  <tr>
    <td height="25" colspan="2"><div align="center"></div></td>
  </tr>
  <tr>
    <td width="63" height="25"><div align="center">�����룺</div></td>
    <td width="137">&nbsp;<input type="password" name="userpwd1" size="16" class="inputcss"></td>
  </tr>
  <tr>
    <td height="25"><div align="center">ȷ�����룺</div></td>
    <td height="25">&nbsp;<input type="password" name="userpwd2" size="16" class="inputcss"></td>
  </tr>
  <tr>
    <td height="25" colspan="2"><div align="center"><input type="hidden" name="userid" value="<?php echo $_GET[userid];?>"><input type="submit" value="����"></div></td>
  </tr>
  </form>
</table>
</body>
</html>

