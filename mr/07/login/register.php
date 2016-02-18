<?php
	session_start();
	header('Content-Type:text/html;charset=gb2312');
?>
<link rel="stylesheet" href="css/style.css" />
<script language="javascript" src="js/xmlhttprequest.js"></script>
<script language="javascript" src="js/register.js"></script>
<table id="regfm" width="700" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td height="25" colspan="4" align="center" valign="middle">电子相册注册页面</td>
    </tr>
  <tr>
    <td width="200" height="75" rowspan="3" align="center" valign="middle">&nbsp;</td>
    <td width="100" height="25" align="right" valign="middle">注册名称：</td>
    <td width="200" height="25" align="left" valign="middle">&nbsp;<input id="regname" name="regname" type="text" class="txt" /></td>
    <td height="25"><div id="namediv" class="regdiv">名称由英文字母和数字及下划线组成</div></td>
    </tr>
  <tr>
    <td width="100" height="25" align="right" valign="middle">注册密码：</td>
    <td width="200" height="25" align="left" valign="middle">&nbsp;<input id="regpwd1" name="regpwd1" type="password" class="txt" /></td>
    <td height="25"><div id="pwddiv1" class="regdiv">请输入密码</div></td>
    </tr>
  <tr>
    <td width="100" height="25" align="right" valign="middle">确认密码：</td>
    <td width="200" height="25" align="left" valign="middle">&nbsp;<input id="regpwd2" name="regpwd2" type="password" class="txt" /></td>
    <td height="25"><div id="pwddiv2" class="regdiv">确认密码</div></td>
    </tr>
</table>
<div id="morediv" style="display:none;">
<hr />
	<table id="regfm" width="700" border="0" cellspacing="0" cellpadding="0" align="center">
		<tr>
    <td width="200" height="25" align="center" valign="middle">&nbsp;</td>
    <td width="100" height="25" align="right" valign="middle">密保问题：</td>
    <td width="200" height="25" align="left" valign="middle">&nbsp;<input id="question" name="question" type="text" class="txt" /></td>
    <td height="25">&nbsp;</td>
		</tr>
		<tr>
    <td width="200" height="25" align="center" valign="middle">&nbsp;</td>
    <td width="100" height="25" align="right" valign="middle"> 密保答案：</td>
    <td width="200" height="25" align="left" valign="middle">&nbsp;<input id="answer" name="answer" type="text" class="txt" /></td>
    <td height="25">&nbsp;</td>
		</tr>
		<tr>
    <td width="200" height="25" align="center" valign="middle">&nbsp;</td>
    <td width="100" height="25" align="right" valign="middle">Email：</td>
    <td width="200" height="25" align="left" valign="middle">&nbsp;<input id="email" name="email" type="text" class="txt" /></td>
    <td height="25">&nbsp;</td>
		</tr>
	</table>
</div>
<div style="text-align:center;"><button id="regbtn" class="btn" disabled="disabled">注册</button>&nbsp;<button id="morebtn" class="btn">详细信息</button>&nbsp;<button id="logbtn" class="btn">登录</button></div>
