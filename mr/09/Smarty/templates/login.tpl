<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="css/login.css" type="text/css" rel="stylesheet" />
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>
<div class="bgimg">

   <div class="main">
   {if $session_name=="F"}
   <table width="150" height="60" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="45" colspan="2">&nbsp;</td>
  </tr>
  <form name="login" id="login" action="login_chk.php" method="post">
    <tr>
      <td width="54"><div align="right">用户名：</div></td>
	  <td width="103"><div align="left">
	    <input class="input1" type="text" id="name" name="name" size="12" onMouseOver="this.style.backgroundColor='#deebef'" onMouseOut="this.style.backgroundColor=''" />
	    </div></td>
	</tr> 
	<tr>
	  <td><div align="right">密码：</div></td>
	  <td><div align="left">
	    <input class="input1" type="password" id="password" name="password"  size="12" onMouseOver="this.style.backgroundColor='#deebef'" onMouseOut="this.style.backgroundColor=''"/>
	    </div></td>
    </tr>
	<tr>
	  <td colspan="2"><input type="image" name="login" onClick="return chk_log();" src="images/首页_19.jpg" />
	  <input type="image" name="imageField2" src="images/首页_21.jpg" onClick="form.reset();return false;" /></td>
	</tr>
	<tr>
	  <td  colspan="2"><a href="#" id="dw" class="b" onClick="javascript:Wopen=open('found_pwd.php?','found_pwd','width=1004,height=720,scrollbars=no')"><img src="images/首页_31.jpg" width="68" height="26" border="0"></a><img src="images/首页_32.jpg" width="89" height="26" onClick="javacript:Wopen=open('register.php?','用户注册','height=720,width=1004,scrollbars=no');"></td>
	  
	</tr>
  </form>
</table>
   {else}
   {include file="messagebox.tpl"}
   {/if}
   </div>
   
</div>
</body>
</html>
