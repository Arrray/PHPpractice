<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="css/register.css" type="text/css" rel="stylesheet" />
<script src="js/chk.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>ע���ʺ�</title>
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
      			<td width="86" height="20" align="right" valign="middle" class="left_td" scope="col">�û�����</td>
   			  <td width="275" align="left" valign="middle" class="right_td" scope="col"><input class="input1" type="text" name="name" id="name"  onmouseover="this.style.backgroundColor='#deebef'" onmouseout="this.style.backgroundColor=''"/><span class="STYLE1"> *</span>[<input class="button" type="button" name="chk_name" id="chk_name" value="����û���" onclick="return chkname()"/>]</td>
    		</tr>
    		<tr>
      			<td width="86" height="20" align="right" valign="middle" class="left_td">���룺</td>
   			  <td align="left" valign="middle" class="right_td"><input class="input1"  type="password" name="password" id="password" onmouseover="this.style.backgroundColor='#deebef'" onmouseout="this.style.backgroundColor=''"/><span class="STYLE1"> *</span>(����3λ)</td>
    		</tr>
    		<tr>
      			<td width="86" height="20" align="right" valign="middle" class="left_td">ȷ�����룺</td>
   			  <td align="left" valign="middle" class="right_td"><input type="password" name="t_password" id="t_password" class="input1"onmouseover="this.style.backgroundColor='#deebef'" onmouseout="this.style.backgroundColor=''" /><span class="STYLE1"> *</span></td>
    		</tr>
    		<tr>
      			<td width="86" height="20" align="right" valign="middle" class="left_td">������ʾ���⣺</td>
   			  <td align="left" valign="middle" class="right_td"><input   type="text" name="question" id="question" class="input1" onmouseover="this.style.backgroundColor='#deebef'" onmouseout="this.style.backgroundColor=''"/><span class="STYLE1"> *</span></td>
    		</tr>
    		<tr>
      			<td width="86" height="20" align="right" valign="middle" class="left_td">����𰸣�</td>
   			  <td align="left" valign="middle" class="right_td"><input  type="text" name="answer" id="answer" class="input1" onmouseover="this.style.backgroundColor='#deebef'" onmouseout="this.style.backgroundColor=''"/><span class="STYLE1"> *</span></td>
    		</tr>
    		
    		<tr>
      			<td width="86" height="20" align="right" valign="middle" class="left_td">�Ա�</td>
      			<td align="left" valign="middle" class="right_td">
				<input name="sex" id="sex" type="radio" value="man" checked />��
				<input name="sex" id="sex" type="radio" value="woman"/>Ů
				</td>
    		</tr>
    	
    		<tr>
      			<td width="86" height="20" align="right" valign="middle" class="left_td">E-mail��</td>
      			<td align="left" valign="middle" class="right_td"><input  type="text" name="email" id="email" class="input1" onmouseover="this.style.backgroundColor='#deebef'" onmouseout="this.style.backgroundColor=''"/></td>
    		</tr>
    		
    		<tr>
      			<td width="86" height="20" align="right" valign="middle" class="left_td">QQ��</td>
      			<td align="left" valign="middle" class="right_td"><input  type="text" name="qq" id="qq" class="input1"onmouseover="this.style.backgroundColor='#deebef'" onmouseout="this.style.backgroundColor=''" /></td>
    		</tr>
   			<tr>
     			 <td width="86" height="20" align="right" valign="middle" class="left_td">������ҳ��</td>
      			<td align="left" valign="middle" class="right_td"><input  type="text" name="http" id="http" class="input1" onmouseover="this.style.backgroundColor='#deebef'" onmouseout="this.style.backgroundColor=''"/></td>
   		 	</tr>
    		<tr>
      			<td height="30" colspan="2" align="center" valign="middle" class="bottom_td">
				<input class="button "name="regi" type="submit" id="regi" value="ע��" onclick="return reg_chk();"/>(<span class="STYLE1">*</span>��Ϊ������)
   			    <input class="button" name="reset" type="reset" id="reset" value="����" /></td>
	  </tr></form></table> 
   </div>
</div>
</body>
</html>
