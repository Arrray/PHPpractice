<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="css/found.css" type="text/css" rel="stylesheet" />
<script src="js/found.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>

<table width="532" height="35" border="0" cellpadding="0" cellspacing="0">
<form id="found" name="found" method="post" action="index.php?lmbs=搜索" onSubmit="return check_submit();">
  <tr>
    <td width="186" valign="top">&nbsp;
      <input name="k_word" type="text" id="k_word" onmouseover="this.style.backgroundColor='#deebef'" onmouseout="this.style.backgroundColor=''" size="15" />
      <input type="hidden" name="action" value="l_found" /></td>
    <td width="152" valign="top" align="right"><select class="selectlist" name="type_ii">
	   <option  value="请选择" selected="selected"> 歌曲类别</option>
	   {section name=sec5 loop=$selclass}
	   <option value="{$selclass[sec5].name}">{$selclass[sec5].name}</option>
	   {/section}
	</select>	</td>
    <td width="74" valign="top">	
	 <input type="image" name="query" id="query" src="images/首页_09.jpg" />  </td>
    <td width="120" valign="top">
<img src="images/首页_11.jpg" width="92" height="27" onclick="javascript:Wopen=open('high.php?','','height=720,width=1004,scrollbars=no');"></td>
  </tr>
  </form>
</table>


</body>
</html>
