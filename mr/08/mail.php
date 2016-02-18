<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>邮件接收系统</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-image: url(images/bg.gif);
}
-->
</style></head>
<script language="javascript">
  function chkinput(form){
    if(form.hostname.value==""){
	  alert("请输入服务器IP!");
	  form.hostname.select();
	  return(false);
	}
   if(form.username.value==""){
	  alert("请输入用户邮箱名称!");
	  form.username.select();
	  return(false);
	}
   if(form.userpwd.value==""){
	  alert("请输入用户邮箱密码!");
	  form.userpwd.select();
	  return(false);
	}
	return(true);
  }
</script>
<body>
<table width="596" height="318" border="0" align="center" cellpadding="0" cellspacing="0" background="images/登录(1).jpg">
   <form action="mail_user.php" method="post" name="form1" id="form1" onSubmit="return chkinput(this)"> 
 <tr>
    <td width="176" height="200">&nbsp;</td>
    <td width="185">&nbsp;</td>
    <td width="235">&nbsp;</td>
  </tr>
  <tr>
    <td height="25"></td>
    <td><div align="left">
                      <input name="hostname" type="text" class="inputcss" id="hostname" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'" size="22" />
                  </div></td>
    <td></td>
  </tr>
  <tr>
    <td height="25"></td>
    <td><div align="left">
                      <input name="username" type="text" class="inputcss" id="username" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'" size="22" />
                  </div></td>
    <td></td>
  </tr>
  <tr>
    <td height="25"></td>
    <td> <input name="userpwd" type="password" class="inputcss" id="userpwd" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'" size="22" />
                  </div></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td align="center"><input type="image" name="imageField3" src="images/登录_03.jpg">
      <input type="image" name="imageField4" src="images/登录_05.jpg" onClick="form.reset();return false;"></td>
    <td></td>
  </tr>
  
  <tr>
    <td height="15">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  </form>
</table>
</body>
</html>