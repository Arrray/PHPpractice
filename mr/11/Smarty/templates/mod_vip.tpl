<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>�޸�����</title>
</head>
<script src="js/chk.js"></script>
<link rel="stylesheet" href="css/reg.css"/>
<link rel="stylesheet" href="css/style.css"/>
<body>
<table width="686" height="394" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td background="images/������ҳ_04.gif"><table width="686" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="26" height="67">&nbsp;</td>
	   
	    <td width="540"></td>
        <td width="120">&nbsp;</td>
      </tr>
      <tr>
        <td height="280">&nbsp;</td>
        <td valign="middle">
          <table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
	<tr>
		<td><table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
 		<form id="reg" name="reg" method="post" action="mod_vip_chk.php">
 			<tr>
   			   <td width="50" rowspan="18" align="center" valign="top">&nbsp;</td>
   			   <td height="20" colspan="2" align="center" valign="top" >&nbsp;</td>
   			   <td width="50" rowspan="18" align="center" valign="top">&nbsp;</td>
  			</tr>
{section name=tb_video_id loop=$tb_video_user}
  			<tr>
      			<td width="97" height="20" align="right" valign="middle"  scope="col">�û�����</td>
   			  <td width="303" align="left" valign="middle"  scope="col"><input type="text" name="name" id="name" class="usual" value="{$tb_video_user[tb_video_id].tb_video_user}" readonly="readonly" onMouseOver="this.style.backgroundColor='#deebef'" onMouseOut="this.style.backgroundColor=''"/></td>
    		</tr>
    		<tr>
      			<td width="97" height="20" align="right" valign="middle" >���룺</td>
   			  <td align="left" valign="middle" ><input type="password" name="password" id="password" class="usual" onMouseOver="this.style.backgroundColor='#deebef'" onMouseOut="this.style.backgroundColor=''"/><span class="STYLE1"> *</span>(����3λ)</td>
    		</tr>
    		<tr>
      			<td width="97" height="20" align="right" valign="middle" >ȷ�����룺</td>
   			  <td align="left" valign="middle" ><input type="password" name="t_password" id="t_password" class="usual" onMouseOver="this.style.backgroundColor='#deebef'" onMouseOut="this.style.backgroundColor=''" /><span class="STYLE1"> *</span></td>
    		</tr>
    		<tr>
      			<td width="97" height="20" align="right" valign="middle" >E-mail��</td>
      			<td align="left" valign="middle" ><input type="text" name="email" id="email" class="usual" value="{$tb_video_user[tb_video_id].tb_video_email}" onMouseOver="this.style.backgroundColor='#deebef'" onMouseOut="this.style.backgroundColor=''"/></td>
    		</tr>
    		<tr>
      			<td width="97" height="20" align="right" valign="middle" >QQ��</td>
      			<td align="left" valign="middle" ><input type="text" name="qq" id="qq" class="usual" value="{$tb_video_user[tb_video_id].tb_video_qq}" onMouseOver="this.style.backgroundColor='#deebef'" onMouseOut="this.style.backgroundColor=''" /></td>
    		</tr>
    		<tr>
      			<td height="30" colspan="2" align="center" valign="middle" >
				<input type="hidden" name="id" value="{$id}">
				<input name="regi" type="submit" id="regi" value="�޸�" onClick="return reg_chk();" />(<span class="STYLE1">*</span>��Ϊ������)
   			    <input name="reset" type="reset" id="reset" value="����" /></td>
    		</tr>
{/section}
</form></table>
	</td></tr></table>
</td>
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
