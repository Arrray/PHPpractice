<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="css/found_pwd.css" type="text/css" rel="stylesheet" />
<script src="js/found_pwd.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�����һ�</title>
</head>

<body>

<div class="divbg">
   <div class="main">
    {if $foundpsw==F}
    <div class="found">
	<table width="400" border="0" cellspacing="0" cellpadding="0">
<form name="form1" method="post" action="#">
<tr>
<td width="100" height="30" align="right" valign="middle" scope="col">�û�����</td>
<td width="294" height="30" align="left" valign="middle" scope="col"><input name="username" id="username" type="text" size="25" onmouseover="this.style.backgroundColor='#deebef'" onmouseout="this.style.backgroundColor=''"></td>
</tr>
<tr>
<td height="30" align="right" valign="middle" scope="col">������ʾ���⣺</td>
<td height="30" align="left" valign="middle" scope="col"><input name="question" type="text" size="25" id="question" onmouseover="this.style.backgroundColor='#deebef'" onmouseout="this.style.backgroundColor=''"></td>
</tr>
<tr>
<td width="100" height="30" align="right" valign="middle">������ʾ�𰸣�</td>
<td width="294" height="30" align="left" valign="middle"><input name="answer" id="answer" type="text" size="25" onmouseover="this.style.backgroundColor='#deebef'" onmouseout="this.style.backgroundColor=''"></td>
</tr>
<tr>
<td height="30">&nbsp;</td>
<td height="30">
	<input type="hidden" name="action" value="chk">
	<input type="submit" name="Submit" value="�ύ" class="submit" onClick="return found_chk();">&nbsp;
	<input type="reset" name="Submit2" value="����" class="submit">    
</td>
</tr>
</form>
</table>

	</div>
    {elseif $foundpsw==T}
    <div class="found">
	<table width="400" border="0" cellspacing="0" cellpadding="0">
<form name="form1" method="post" action="#">
<tr>
	<td width="100" height="30" align="right" valign="middle" scope="col">�û�����</td>
	<td width="294" height="30" align="left" valign="middle" scope="col"><input name="username" id="username" type="text" size="25" readonly="readonly" value="{$username}" onmouseover="this.style.backgroundColor='#deebef'" onmouseout="this.style.backgroundColor=''">
	<input type="hidden" name="id" value="{$userid}">
	</td>
</tr>
<tr>
	<td height="30" align="right" valign="middle" scope="col">���������룺</td>
	<td height="30" align="left" valign="middle" scope="col"><input name="password" type="password" size="25" id="password" onmouseover="this.style.backgroundColor='#deebef'" onmouseout="this.style.backgroundColor=''"></td>
</tr>
<tr>
	<td width="100" height="30" align="right" valign="middle">ȷ�����룺</td>
	<td width="294" height="30" align="left" valign="middle"><input name="two_pwd" id="two_pwd" type="password" size="25" onmouseover="this.style.backgroundColor='#deebef'" onmouseout="this.style.backgroundColor=''"></td>
</tr>
<tr>
	<td height="30">&nbsp;</td>
	<td height="30">
		<input type="hidden" name="action" value="mod">
  		<input type="submit" name="Submit" value="�ύ" class="submit" onClick="return chk_pwd();">&nbsp;
  		<input type="reset" name="Submit2" value="����" class="submit">    
	</td>
</tr>
</form>
</table>
	</div>
    {/if}
   </div>
</div>
<!--{if $foundpsw==F}

{elseif $foundpsw==T}

{/if}-->
</body>
</html>
