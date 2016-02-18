<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>无标题文档</title>
</head>

<body>
<table width="61%" border="0" cellspacing="0" cellpadding="0">
<form name="form1" method="post" action="update_type_ok.php">  
<tr>
    <td width="44%" height="15">&nbsp;</td>
    <td width="12%">&nbsp;</td>
    </tr>
  <tr>
    <td height="25" align="center">类型名称：
{section name=video_type_id loop=$video_type}
      <input type="hidden" name="video_type_id" value="{$video_type[video_type_id].tb_type_id}">
    <input name="video_type" type="text" id="video_type" value="{$video_type[video_type_id].tb_type_name}" size="25">  
{/section}  </td>
    <td><input type="submit" name="Submit" value="更改"></td>
    </tr>
</form>
</table>
</body>
</html>
