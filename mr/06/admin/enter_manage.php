<?php session_start(); include("conn/conn.php");?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>后台登录界面</title>
<style type="text/css">
<!--
.STYLE1 {
	font-size: 12px;
	font-weight: bold;
	color: #FFFFFF;
}
-->
</style>
</head>

<body>
<table width="100%" height="104" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="80" colspan="3"><img src="images/index_2.jpg" width="1003" height="80"></td>
  </tr>
  <tr>
    <td height="24" colspan="3" background="images/index_4.jpg"><table align="center" width="750" height="24" border="0" cellpadding="0" cellspacing="0" background="images/bg_13(1).JPG">
<script language="JavaScript" type="text/javascript">
 function check_user(form){
   if(form.tb_user.value==""){
     alert("请输入管理名");
	 form.tb_user.select();
	 return(false);
	}
	if(form.tb_pass.value==""){
     alert("请输入登录密码！");
	 form.tb_pass.select();
	 return(false);
    }
	if(form.tb_validate.value==""){
     alert("请输入验证码！");
	 form.tb_validate.select();
	 return(false);
    }
   return(true);	 
 }
</script>
            <form action="enter_manage_ok.php" method="post" name="form1" id="form1" onSubmit="return check_user(this)">
  <tr>
    <td width="71" align="right"><span class="STYLE1">用户名：</span></td>
    <td width="138"><input type="text" name="tb_user" size="18"  /></td>
    <td width="68" align="right" class="STYLE1">密码：</td>
    <td width="145"><input type="password" name="tb_pass" size="18" /></td>
    <td width="80" align="right" class="STYLE1">验证码：</td>
    <td width="94"><input type="text" name="tb_validate" size="10" /></td>
    <td width="50" align="center"><img src="../tb_validate.php"></td>
    <td width="87" align="center"><input type="submit" name="Submit" value="登录"></td>
    <td width="17">&nbsp;</td>
  </tr>
</form>
</table></td>
  </tr>
</table>

</body>
</html>
