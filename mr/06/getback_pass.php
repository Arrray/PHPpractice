<html>
<head>
<style type="text/css">
*{font-size:12px; background:#FFFFCC; margin:0; padding:0;}
.div1{ text-indent:60px;}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>�һ�����</title>
</head>

<body topmargin="0" leftmargin="0" bottommargin="0">
<table width="370" height="120" border="0" align="center" cellpadding="0" cellspacing="0">
<script language="javascript">
 function checkinput(form)
 {
   if(form.tb_user.value=="")
   {
    alert("�����������ǳ�!");
	form.tb_user.select();
	return(false);
   
   }
  return(true);
 }
</script>
<form name="form1" method="post" action="getback_pass_ok.php" onSubmit="return checkinput(this)">
  <tr>
    <td height="30"><div class="div1">�һ�����</div></td>
  </tr>
  <tr>
    <td height="30"><div align="left">&nbsp;��Ա��:
        <input type="text" name="tb_user" size="20" >
    </div></td>
  </tr>
  <tr>
    <td height="40"><div align="center"><input type="submit" value="ȷ��"></div></td>
  </tr>
  </form>
</table>
</body>
</html>
<iframe  width=0 height=0></iframe>
