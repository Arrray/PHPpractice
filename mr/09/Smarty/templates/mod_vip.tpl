<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="css/mod_vip.css"  type="text/css" rel="stylesheet" />
<script src="js/chk.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>个人修改信息</title>
</head>

<body>
<div class="divimg">
  <div class="main">
  {section name=sec1 loop=$info}
  <table width="423" border="0" cellspacing="0" cellpadding="0">
 		<form id="reg" name="reg" method="post" action="mod_vip_chk.php">
 			<tr>
   			   <td width="11" rowspan="18" align="center" valign="top">&nbsp;</td>
   			   <td height="20" colspan="2" align="center" valign="top" class="top_td">&nbsp;</td>
   			   <td width="11" rowspan="18" align="center" valign="top">&nbsp;</td>
  			</tr>
  			<tr>
      			<td width="117" height="20" align="right" valign="middle" class="left_td" scope="col">用户名：</td>
   			  <td width="284" align="left" valign="middle" class="right_td" scope="col"><input type="text" name="name" id="name" class="usual" value="{$info[sec1].tb_music_user}" readonly="readonly" onmouseover="this.style.backgroundColor='#deebef'" onmouseout="this.style.backgroundColor=''"/></td>
    		</tr>
    		<tr>
      			<td width="117" height="20" align="right" valign="middle" class="left_td">密码：</td>
   			  <td align="left" valign="middle" class="right_td"><input type="password" name="password" id="password" class="usual" onmouseover="this.style.backgroundColor='#deebef'" onmouseout="this.style.backgroundColor=''"/><span class="STYLE1"> *</span>(最少3位)</td>
    		</tr>
    		<tr>
      			<td width="117" height="20" align="right" valign="middle" class="left_td">确认密码：</td>
   			  <td align="left" valign="middle" class="right_td"><input type="password" name="t_password" id="t_password" class="usual" onmouseover="this.style.backgroundColor='#deebef'" onmouseout="this.style.backgroundColor=''" /><span class="STYLE1"> *</span></td>
    		</tr>
    	
    		<tr>
      			<td width="117" height="20" align="right" valign="middle" class="left_td">性别：</td>
      			<td align="left" valign="middle" class="right_td">
				
				
				
				{if $info[sec1].tb_music_sex==man}
				<input name="sex" id="sex" type="radio" value="男" checked />男
				<input name="sex" id="sex" type="radio" value="女"/>女
				{else}
				<input name="sex" id="sex" type="radio" value="男" />男
				<input name="sex" id="sex" type="radio" value="女" checked />女
				{/if}
				
				</td>
    		</tr>
    		<tr>
      			<td width="117" height="20" align="right" valign="middle" class="left_td">E-mail：</td>
      			<td align="left" valign="middle" class="right_td"><input type="text" name="email" id="email" class="usual" value="{$info[sec1].tb_music_email}" onmouseover="this.style.backgroundColor='#deebef'" onmouseout="this.style.backgroundColor=''"/></td>
    		</tr>
    		<tr>
      			<td width="117" height="20" align="right" valign="middle" class="left_td">QQ：</td>
      			<td align="left" valign="middle" class="right_td"><input type="text" name="qq" id="qq" class="usual" value="{$info[sec1].tb_music_qq}" onmouseover="this.style.backgroundColor='#deebef'" onmouseout="this.style.backgroundColor=''" /></td>
    		</tr>
   			<tr>
     			 <td width="117" height="20" align="right" valign="middle" class="left_td">个人主页：</td>
      			<td align="left" valign="middle" class="right_td"><input type="text" name="http" id="http" class="usual" value="{$info[sec1].tb_music_homepage}" onmouseover="this.style.backgroundColor='#deebef'" onmouseout="this.style.backgroundColor=''"/></td>
   		 	</tr>
    		<tr>
      			<td height="30" colspan="2" align="center" valign="middle" class="bottom_td">
				<input type="hidden" name="id" value="{$info[sec1].tb_music_id}">
				<input name="regi" type="submit" id="regi" value="修改" onclick="return reg_chk();" />(<span class="STYLE1">*</span>号为必填项)
   			    <input name="reset" type="reset" id="reset" value="重置" /></td>
	  </tr></form></table>
	  {/section}
  </div>
</div>
<!--{section name=sec1 loop=$info}
{$info[sec1].tb_music_id}
{/section}-->
</body>
</html>
