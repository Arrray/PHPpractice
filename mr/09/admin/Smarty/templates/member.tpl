<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title>
</head>

<body>
<table width="450" height="60" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td height="20" colspan="4" align="center" valign="middle">�� Ա �� �� �� ��</td>
        </tr>
        <tr>
          <td colspan="4"><table width="375" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td height="10" colspan="5" align="right" valign="middle"></td>
              </tr>
              <tr>
                <td width="40" height="30" align="center" valign="middle">ID</td>
             
                <td width="76" height="30" align="center" valign="middle">�û���</td>
                <td width="78" height="30" align="center" valign="middle">QQ</td>
                <td width="95" align="center" valign="middle">����</td>
              </tr>
			  {section name=sec5 loop=$memberinfo}
           <tr>
                <td height="18" align="center" valign="middle">{$memberinfo[sec5].tb_music_id}</td>
           
                <td height="18" align="center" valign="middle">{$memberinfo[sec5].tb_music_user}</td>
                <td height="18" align="center" valign="middle">{$memberinfo[sec5].tb_music_qq}</td>
                                 <form name="form1" method="post" action="freeze_chk.php">
				 <td height="18" align="center" valign="middle">
				 <input type="hidden" name="id" value="{$memberinfo[sec5].tb_music_id}">
					<input type="hidden" name="whether" value="{$memberinfo[sec5].tb_music_whether}">
					{if $memberinfo[sec5].tb_music_whether==1}
                    <input type="submit" name="Submit2" class="submit" value="����">
					{else}
					<input type="submit" name="Submit2" class="submit" value="�ⶳ">
					{/if}
					<a href="del_freeze_chk.php?id={$memberinfo[sec5].tb_music_id}" onClick="return del_chk();">ɾ��</a>
                </td> 
				 
				 </form>
			</tr>
			{/section}
</table>  

</table>
</body>
</html>
