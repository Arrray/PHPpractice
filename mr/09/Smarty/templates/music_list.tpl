<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="css/music_list.css" type="text/css" rel="stylesheet" />
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�����б�</title>
</head>

<body>
<div class="music_l_div1">
   <div class="music_l_mid">
     <div class="music_l_include">
	 <table width="420" border="0" align="center" cellpadding="0" cellspacing="0">
           
	<form name="form1" method="post" action="realplay.php">		
            <tr>
              <td width="58" height="22"><div align="center">����</div></td>
              <td width="73"><div align="center">ID</div></td>
              <td width="146"><div align="center">��������</div></td>
              <td width="120"><div align="center">����</div></td>
            </tr>
			{if $listnum!=Y}
			<tr>
              <td height="22" colspan="4" bgcolor="#FFFFFF"><div align="center">���Ĳ����б���û�����ݣ�</div></td>
            </tr>
			{else if $listnum==Y}
			{section name=sec4 loop=$playlist}
            <tr>
              <td height="22" align="center" bgcolor="#FFFFFF"><input type="checkbox" name="checkbox[]" value="{$playlist[sec4].id}"></td>
              <td height="22" align="center" bgcolor="#FFFFFF">{$playlist[sec4].id}</td>
              <td height="22" align="center" bgcolor="#FFFFFF">{$playlist[sec4].name}</td>
              <td height="22" align="center" bgcolor="#FFFFFF">{$playlist[sec4].actor}</td>
			</tr>
            {/section}
			{/if}
			<tr>
              <td height="22" colspan="4" align="center" bgcolor="#FFFFFF"><a href="index.php">�������</a>&nbsp;
                <input type="submit" name="Submit2" value="ѭ������" />                &nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="Submit" value="��������">
			  <a href="clear_music_list.php">��ղ����б�</a></td>
            </tr>
	
</form>
</table>
	 </div>
   </div>
</div>
<!--<table border="1">
{section name=sec4 loop=$playlist}
<tr>
 <td>{$playlist[sec4].id}</td>
<td> {$playlist[sec4].name}</td>
</tr>
{/section}
</table>-->
</body>
</html>
