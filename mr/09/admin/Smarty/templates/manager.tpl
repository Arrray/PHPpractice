<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title>
</head>

<body>
<table width="450" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td height="10" colspan="5" align="center" valign="middle">�� �� Ա �� ��</td>
              </tr>
              <tr>
                <td height="10" colspan="5" align="right" valign="middle"><a href="#" onclick="javacript:Wopen=open('addmanager.php?action=addmanager','��ӹ���Ա','height=500,width=655,scrollbars=no');">����Ա���</a></td>
              </tr>
              <tr>
                <td height="30" align="center" valign="middle">ID</td>
                <td height="30" align="center" valign="middle">�ȼ�</td>
                <td height="30" align="center" valign="middle">����                </td>
                <td height="30" align="center" valign="middle">��ʵ����</td>
                <td height="30" align="center" valign="middle">����</td>
              </tr>

    {section name=sec6 loop=$managerinfo}
	         <tr>
                <td height="18" align="center" valign="middle">{$managerinfo[sec6].id}</td>
                <td height="18" align="center" valign="middle">{$managerinfo[sec6].type}</td>
                <td height="18" align="center" valign="middle">{$managerinfo[sec6].name}</td>
                <td height="18" align="center" valign="middle">{$managerinfo[sec6].realName}</td>
                 <form name="form1" method="post" action="m_freeze_chk.php">
				
				
				<td height="18" align="center" valign="middle">
				 <input type="hidden" name="id" value="{$managerinfo[sec6].id}">
					<input type="hidden" name="whether" value="{$managerinfo[sec6].whether}">
					 {if $managerinfo[sec6].whether ==1}
					  <input type="submit" name="Submit2" class="submit" value="����">
					  {else}
					  <input type="submit" name="Submit2" class="submit" value="�ⶳ">
					  {/if}
				<a href="del_mfreeze_chk.php?id={$managerinfo[sec6].id}" onClick="return del_chk();">ɾ��</a>
					</td>
				 </form>
	{/section}
</table>
</body>
</html>
