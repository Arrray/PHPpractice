<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title>
</head>

<body>
{if $foundtype==normal}
  {if $retnum==N}
  û�з��ϵĲ�ѯ�����
  {else}
  <table width="500" border="0" cellspacing="0" cellpadding="0" >
  <form name="form1" method="post" action="realplay.php">
    <tr>
	  <td width="50" height="25" align="center" valign="middle">����</td>
	  <td width="150" align="center" valign="middle">��������</td>
	  <td width="150" align="center" valign="middle">����</td>
	  <td width="50" align="center" valign="middle">��������</td>
	  <td width="50" align="center" valign="middle">����</td>
	  <td width="50" align="center" valign="middle">����</td> 
	</tr>
	{section name=sec6 loop=$foundresult}
	<tr>
	<td><input type="checkbox" name="checkbox[]" value="{$foundresult[sec6].id}"></td>
	<td>{$foundresult[sec6].name}</td>
	<td>{$foundresult[sec6].actor}</td>
	<td><a href="#" onclick="javascript:Wopen=open('listens.php?id={$foundresult[sec6].id}','','height=720,width=1004,scrollbars=no');">
	<img src="images/��ҳ_24.jpg" width="28" height="23" border="0" alt="���߲���"></a></td>
	<td><a href="download.php?id={$foundresult[sec6].id}&action=video">
		<img src=images/��ҳ_26.jpg width=28 height=23 border=0 alt=����/></a></td>
	<td><a href="#" onclick="javascript:Wopen=open('v_intro.php?id={$foundresult[sec6].id}','','height=720,width=1004,scrollbars=no');">
		<img src="images/��ҳ_28.jpg" width="28" height="23" border="0" alt="����"></a></td>
		<td></td>
	</tr>
	{/section}
	<tr onmouseover="this.style.backgroundColor='#deebef'" onmouseout="this.style.backgroundColor=''">
	<td height="25" align="center" valign="middle" ></td>
	<td colspan="5" align="center" valign="middle"><input type="submit" name="Submit2" value="ѭ������" />
			  &nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="Submit" value="��������"></td>
    </tr>
	</form>
  </table>
  {/if}
{elseif $foundtype==advance}
  {if $returnnum==N}
  û�з��ϵĲ�ѯ�����
  {else}
   <table width="500" border="0" cellspacing="0" cellpadding="0" >
    <form name="form1" method="post" action="realplay.php">
    <tr>
	  <td width="50" height="25" align="center" valign="middle">����</td>
	  <td width="150" align="center" valign="middle">��������</td>
	  <td width="150" align="center" valign="middle">����</td>
	  <td width="50" align="center" valign="middle">��������</td>
	  <td width="50" align="center" valign="middle">����</td>
	  <td width="50" align="center" valign="middle">����</td> 
	</tr>
	{section name=sec7 loop=$afoundresult}
	<tr>
	<td><input type="checkbox" name="checkbox[]" value="{$afoundresult[sec7].id}"></td>
	<td>{$afoundresult[sec7].name}</td>
	<td>{$afoundresult[sec7].actor}</td>
	<td><a href="#" onclick="javascript:Wopen=open('listens.php?id={$afoundresult[sec7].id}','','height=720,width=1004,scrollbars=no');">
	<img src="images/��ҳ_24.jpg" width="28" height="23" border="0" alt="���߲���"></a></td>
	<td><a href="download.php?id={$afoundresult[sec7].id}&action=video">
		<img src=images/��ҳ_26.jpg width=28 height=23 border=0 alt=����/></a></td>
	<td><a href="#" onclick="javascript:Wopen=open('v_intro.php?id={$afoundresult[sec7].id}','','height=720,width=1004,scrollbars=no');">
		<img src="images/��ҳ_28.jpg" width="28" height="23" border="0" alt="����"></a></td>
	</tr>
	{/section}
	<tr onmouseover="this.style.backgroundColor='#deebef'" onmouseout="this.style.backgroundColor=''">
	<td height="25" align="center" valign="middle" ></td>
	<td colspan="5" align="center" valign="middle"><input type="submit" name="Submit2" value="ѭ������" />
			  &nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="Submit" value="��������"></td>
    </tr>
	</form>
  </table>
  {/if}
{/if}
</body>
</html>
