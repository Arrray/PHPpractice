<?php
	session_start();
	header('Content-Type:text/html;charset=gb2312');
?>
<link rel="stylesheet" href="css/style.css" />
<script language="javascript" src="js/xmlhttprequest.js"></script>
<script language="javascript" src="js/register.js"></script>
<table id="regfm" width="500" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td height="25" colspan="3" align="center" valign="middle">����U��ע��ҳ��</td>
    </tr>
  <tr>
    <td width="100" height="25" align="right" valign="middle">ע�����ƣ�</td>
    <td width="200" height="25" align="left" valign="middle">&nbsp;<input id="regname" name="regname" type="text" class="txt" /></td>
    <td height="25"><div id="namediv" class="regdiv">������Ӣ����ĸ�����ּ��»������</div></td>
    </tr>
  <tr>
    <td width="100" height="25" align="right" valign="middle">ע�����룺</td>
    <td width="200" height="25" align="left" valign="middle">&nbsp;<input id="regpwd1" name="regpwd1" type="password" class="txt" /></td>
    <td height="25"><div id="pwddiv1" class="regdiv">����������</div></td>
    </tr>
  <tr>
    <td width="100" height="25" align="right" valign="middle">ȷ�����룺</td>
    <td width="200" height="25" align="left" valign="middle">&nbsp;<input id="regpwd2" name="regpwd2" type="password" class="txt" /></td>
    <td height="25"><div id="pwddiv2" class="regdiv">ȷ������</div></td>
    </tr>
</table>
<div id="morediv" style="display:non;">
<hr />
	<table id="regfm" width="500" border="0" cellspacing="0" cellpadding="0" align="center">
		<tr>
    <td width="100" height="25" align="right" valign="middle">�ܱ����⣺</td>
    <td width="200" height="25" align="left" valign="middle">&nbsp;<input id="question" name="question" type="text" class="txt" /></td>
    <td height="25">&nbsp;</td>
		</tr>
		<tr>
    <td width="100" height="25" align="right" valign="middle"> �ܱ��𰸣�</td>
    <td width="200" height="25" align="left" valign="middle">&nbsp;<input id="answer" name="answer" type="text" class="txt" /></td>
    <td height="25">&nbsp;</td>
		</tr>
		<tr>
    <td width="100" height="25" align="right" valign="middle">Email��</td>
    <td width="200" height="25" align="left" valign="middle">&nbsp;<input id="email" name="email" type="text" class="txt" /></td>
    <td height="25">&nbsp;</td>
		</tr>
	</table>
</div><center>
<div style=" text-align:center;text-align:center; width:50%; height:25px; line-height:25px;"><button id="regbtn" class="btn" disabled="disabled">ע��</button>&nbsp;<button id="morebtn" class="btn">��ϸ��Ϣ</button></div></center>
<!--ʡ�Բ��ִ���-->