<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="js/admin_js.js" language="javascript"></script>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link href="css/addmanager.css" type="text/css" rel="stylesheet" />
<title>�ޱ����ĵ�</title>
</head>

<body>

<table width="450" border="0" align="center" cellpadding="0" cellspacing="0">
              <form name="list" method="post" action="addmanager_chk.php">
              <tr>
                <td height="15" colspan="2" align="center"><font style=" font-size:13px; ">�� �� Ա �� Ϣ �� ��</font></td>
                </tr>
              <tr>
                <td width="131" height="27" align="right" valign="middle"> ����Ա���ƣ�</td>
                <td width="269" height="27" align="left" valign="middle"><input name="names" type="text"  id="names" size="30"></td>
              </tr>
              <tr>
                <td height="30" align="right" valign="middle">�������룺</td>
                <td height="30" align="left" valign="middle"><input name="password" type="password"  id="password" size="30"></td>
              </tr>
              <tr>
                <td height="30" align="right" valign="middle">����ȷ�ϣ�</td>
                <td height="30" align="left" valign="middle"><input name="password2" type="password"  id="password2" size="30"></td>
              </tr>
			  <tr>
                <td height="30" align="right" valign="middle">����Ȩ�ޣ�</td>
                <td height="30" align="left" valign="middle">                  <select name="grade"  id="select">
          
                  <option value="��ͨ����Ա">��ͨ����Ա</option>
                    <option value="super">��������Ա</option>
              
                </select></td>
              </tr>
			  <tr>
                <td height="30" align="right" valign="middle">��ʵ������</td>
                <td height="30" align="left" valign="middle"><input name="realname" type="text"  id="realname" size="30"></td>
              </tr>
              <tr>
                <td height="30" colspan="2" align="center" valign="middle">
					<?php echo $_POST[names]; ?>
                    <input name="Submit" type="button"  value="��  ��" class="submit" onClick="check();">
                    <input name="Submit2" type="button"  value="��  ��" class="submit" onClick="javascript:top.window.close()"></td>
                </tr> </form>
</table>
</body>
</html>
