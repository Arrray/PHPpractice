<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>会员注册</title>
</head>
<script src="js/chk.js"></script>
<link rel="stylesheet" href="css/reg.css"/>
<link rel="stylesheet" href="css/style.css"/>
<body>
<table width="686" height="394" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td background="images/个人主页_05.gif"><table width="686" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="26" height="67">&nbsp;</td>
	   
	    <td width="540"></td>
        <td width="120">&nbsp;</td>
      </tr>
      <tr>
        <td height="280">&nbsp;</td>
        <td align="center" valign="middle">
<table width="494" border="0" cellspacing="0" cellpadding="0">
 		<form action="register_chk.php" method="post" enctype="multipart/form-data" name="reg" id="reg">
 			
  			<tr>
      			<td width="101" height="20" align="right" valign="middle" class="left_td" scope="col">用户名：</td>
   			  <td width="381" align="left" valign="middle" class="right_td" scope="col"><input type="text" name="name" id="name" class="usual" onMouseOver="this.style.backgroundColor='#deebef'" onMouseOut="this.style.backgroundColor=''"/><span class="STYLE1"> *</span>[<input type="button" name="chk_name" id="chk_name" value="检测用户名" onClick="return chkname()"/>]</td>
    		</tr>
    		<tr>
    		  <td height="20" align="right" valign="middle" class="left_td">头像：</td>
    		  <td align="left" valign="middle" class="right_td"><input name="head_picture" type="file" id="head_picture" size="25"class="usual" onMouseOver="this.style.backgroundColor='#deebef'" onMouseOut="this.style.backgroundColor=''" />
   		      120*135</td>
  		  </tr>
    		<tr>
      			<td width="101" height="20" align="right" valign="middle" class="left_td">密码：</td>
   			  <td align="left" valign="middle" class="right_td"><input type="password" name="password" id="password" class="usual" onMouseOver="this.style.backgroundColor='#deebef'" onMouseOut="this.style.backgroundColor=''"/><span class="STYLE1"> *</span>(最少3位)</td>
    		</tr>
    		<tr>
      			<td width="101" height="20" align="right" valign="middle" class="left_td">确认密码：</td>
   			  <td align="left" valign="middle" class="right_td"><input type="password" name="t_password" id="t_password" class="usual"onmouseover="this.style.backgroundColor='#deebef'" onMouseOut="this.style.backgroundColor=''" /><span class="STYLE1"> *</span></td>
    		</tr>
    		<tr>
      			<td width="101" height="20" align="right" valign="middle" class="left_td">密码提示问题：</td>
   			  <td align="left" valign="middle" class="right_td"><input type="text" name="question" id="question" class="usual" onMouseOver="this.style.backgroundColor='#deebef'" onMouseOut="this.style.backgroundColor=''"/><span class="STYLE1"> *</span></td>
    		</tr>
    		<tr>
      			<td width="101" height="20" align="right" valign="middle" class="left_td">问题答案：</td>
   			  <td align="left" valign="middle" class="right_td"><input type="text" name="answer" id="answer" class="usual" onMouseOver="this.style.backgroundColor='#deebef'" onMouseOut="this.style.backgroundColor=''"/><span class="STYLE1"> *</span></td>
    		</tr>
    		<tr>
      			<td width="101" height="20" align="right" valign="middle" class="left_td">E-mail：</td>
      			<td align="left" valign="middle" class="right_td"><input type="text" name="email" id="email" class="usual" onMouseOver="this.style.backgroundColor='#deebef'" onMouseOut="this.style.backgroundColor=''"/></td>
    		</tr>
    		
    		<tr>
      			<td width="101" height="20" align="right" valign="middle" class="left_td">QQ：</td>
      			<td align="left" valign="middle" class="right_td"><input type="text" name="qq" id="qq" class="usual"onmouseover="this.style.backgroundColor='#deebef'" onMouseOut="this.style.backgroundColor=''" /></td>
    		</tr>
    		<tr>
      			<td height="30" colspan="2" align="center" valign="middle" class="bottom_td">
				<input name="regi" type="submit" id="regi" value="注册" onClick="return regs_chk();"/>(<span class="STYLE1">*</span>号为必填项)
   			    <input name="reset" type="reset" id="reset" value="重置" /></td>
   		  </tr></form></table></td>
        <td>&nbsp;</td>
      </tr>

      <tr>
        <td height="47">&nbsp;</td>
        <td valign="bottom">&nbsp;</td>
        <td>&nbsp;</td>
      </tr>

    </table></td>
  </tr>
</table>
</body>
</html>
