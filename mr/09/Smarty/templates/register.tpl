<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="css/register.css" type="text/css" rel="stylesheet" />
<script src="js/chk.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>注册帐号</title>
</head>

<body>

<div class="divbg">
   <div class="main">
     <table width="408">
<form id="reg" name="reg" method="post" action="register_chk.php">
 			<tr>
   			   <td width="16" rowspan="18" align="center" valign="top">&nbsp;</td>
   			   <td height="20" colspan="2" align="center" valign="top" class="top_td">&nbsp;</td>
   			   <td width="11" rowspan="18" align="center" valign="top">&nbsp;</td>
  			</tr>
  			<tr>
      			<td width="86" height="20" align="right" valign="middle" class="left_td" scope="col">用户名：</td>
   			  <td width="275" align="left" valign="middle" class="right_td" scope="col"><input class="input1" type="text" name="name" id="name"  onmouseover="this.style.backgroundColor='#deebef'" onmouseout="this.style.backgroundColor=''"/><span class="STYLE1"> *</span>[<input class="button" type="button" name="chk_name" id="chk_name" value="检测用户名" onclick="return chkname()"/>]</td>
    		</tr>
    		<tr>
      			<td width="86" height="20" align="right" valign="middle" class="left_td">密码：</td>
   			  <td align="left" valign="middle" class="right_td"><input class="input1"  type="password" name="password" id="password" onmouseover="this.style.backgroundColor='#deebef'" onmouseout="this.style.backgroundColor=''"/><span class="STYLE1"> *</span>(最少3位)</td>
    		</tr>
    		<tr>
      			<td width="86" height="20" align="right" valign="middle" class="left_td">确认密码：</td>
   			  <td align="left" valign="middle" class="right_td"><input type="password" name="t_password" id="t_password" class="input1"onmouseover="this.style.backgroundColor='#deebef'" onmouseout="this.style.backgroundColor=''" /><span class="STYLE1"> *</span></td>
    		</tr>
    		<tr>
      			<td width="86" height="20" align="right" valign="middle" class="left_td">密码提示问题：</td>
   			  <td align="left" valign="middle" class="right_td"><input   type="text" name="question" id="question" class="input1" onmouseover="this.style.backgroundColor='#deebef'" onmouseout="this.style.backgroundColor=''"/><span class="STYLE1"> *</span></td>
    		</tr>
    		<tr>
      			<td width="86" height="20" align="right" valign="middle" class="left_td">问题答案：</td>
   			  <td align="left" valign="middle" class="right_td"><input  type="text" name="answer" id="answer" class="input1" onmouseover="this.style.backgroundColor='#deebef'" onmouseout="this.style.backgroundColor=''"/><span class="STYLE1"> *</span></td>
    		</tr>
    		
    		<tr>
      			<td width="86" height="20" align="right" valign="middle" class="left_td">性别：</td>
      			<td align="left" valign="middle" class="right_td">
				<input name="sex" id="sex" type="radio" value="man" checked />男
				<input name="sex" id="sex" type="radio" value="woman"/>女
				</td>
    		</tr>
    	
    		<tr>
      			<td width="86" height="20" align="right" valign="middle" class="left_td">E-mail：</td>
      			<td align="left" valign="middle" class="right_td"><input  type="text" name="email" id="email" class="input1" onmouseover="this.style.backgroundColor='#deebef'" onmouseout="this.style.backgroundColor=''"/></td>
    		</tr>
    		
    		<tr>
      			<td width="86" height="20" align="right" valign="middle" class="left_td">QQ：</td>
      			<td align="left" valign="middle" class="right_td"><input  type="text" name="qq" id="qq" class="input1"onmouseover="this.style.backgroundColor='#deebef'" onmouseout="this.style.backgroundColor=''" /></td>
    		</tr>
   			<tr>
     			 <td width="86" height="20" align="right" valign="middle" class="left_td">个人主页：</td>
      			<td align="left" valign="middle" class="right_td"><input  type="text" name="http" id="http" class="input1" onmouseover="this.style.backgroundColor='#deebef'" onmouseout="this.style.backgroundColor=''"/></td>
   		 	</tr>
    		<tr>
      			<td height="30" colspan="2" align="center" valign="middle" class="bottom_td">
				<input class="button "name="regi" type="submit" id="regi" value="注册" onclick="return reg_chk();"/>(<span class="STYLE1">*</span>号为必填项)
   			    <input class="button" name="reset" type="reset" id="reset" value="重置" /></td>
	  </tr></form></table> 
   </div>
</div>
</body>
</html>
