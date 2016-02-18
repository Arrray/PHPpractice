<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="js/chk.js" language="javascript"></script>
<script language="javascript" src="js/checkbox.js"></script>
<script language="javascript" src="js/internet_video.js"></script>
<link rel="stylesheet" href="css/style.css" />
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>
<table width="450" border="0" align="center" cellpadding="2" cellspacing="2">
              <tr>
                <td height="10" colspan="5" align="center" valign="middle">网络 音乐 管 理</td>
              </tr>
              <tr>
                <td width="26" height="30" align="center" valign="middle">ID</td>
                <td width="83" height="30" align="center" valign="middle">试听</td>
                <td width="194" height="30" align="center" valign="middle">绝对路径</td>
                <td width="58" height="30" align="center" valign="middle">歌手</td>
                <td width="57" height="30" align="center" valign="middle">操作</td>
              </tr>
              
			  {section name=sec3 loop=$inter_video}
              <tr>
                <td height="18" align="center" valign="middle">{$inter_video[sec3].tb_internet_id}</td>
                <td height="18" align="center" valign="middle">
<img src="images/首页_24.jpg" alt="{$inter_video[sec3].tb_song_name}" width="28" height="23" border="0" onclick="MM_openBrWindow('{$inter_video[sec3].tb_internet_address}','','width=1004,height=720')">
</td>
				<td height="18" align="center" valign="middle">{$inter_video[sec3].tb_internet_address}</td>
                <td height="18" align="center" valign="middle">{$inter_video[sec3].tb_singer_name}</td>
				 <td height="18" align="center" valign="middle"><a href="delete_internet_video.php?id={$inter_video[sec3].tb_internet_id}" onclick="return del_chk();">删除</a></td> 
			  </tr>
              {/section}
</table>
</body>
</html>
