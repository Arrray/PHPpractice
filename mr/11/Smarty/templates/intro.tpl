<html>
<head>
<link  href="css/intro.css" type="text/css" rel="stylesheet">
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>��Ƶ���</title>
</head>
<script type="text/javascript" src="js/discuss_js.js"></script>
<body>
<table width="686" height="394" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td background="images/������ҳ_01.gif"><table width="686" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="26" height="67">&nbsp;</td>
	   
	    <td width="540"></td>
        <td width="120">&nbsp;</td>
      </tr>
{section name=video_id loop=$video}
      <tr>
        <td height="280">&nbsp;</td>
        <td valign="top"><table width="540" border="0" cellpadding="0" cellspacing="0">
		  	<tr>
				<td width="150" height="200" align="center" valign="middle"><img name="news" src="{$video[video_id].tb_video_picture}" width="130" height="150" alt="" border="0"/></td>
				<td width="390" align="center" valign="middle"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td height="25" colspan="2" align="center">{$video[video_id].tb_video_name}</td>
                  </tr>
                  <tr>
                    <td width="21%" height="25" align="right" valign="middle">���ͣ�</td>
                    <td width="79%"><div>{section name=type_ids loop=$video_type}
{if $video_type[type_ids].tb_type_id==$video[video_id].tb_video_type}
{$video_type[type_ids].tb_type_name}
{/if} 
{/section}</div></td>
                  </tr>

                  <tr>
                    <td height="25" align="right" valign="middle">ʱ�䣺</td>
                    <td>{$video[video_id].tb_video_date}</td>
                  </tr>
                  <tr>
                    <td height="25" align="right" valign="middle">���ͣ�</td>
                    <td>{$video[video_id].tb_video_author}</td>
                  </tr>
                  <tr>
                    <td height="25" align="right" valign="middle">���ۣ�</td>
                    <td>{$video[video_id].tb_video_counts}</td>
                  </tr>
                  <tr>
                    <td height="25" align="right" valign="middle">���Ŵ�����</td>
                    <td>{$video[video_id].tb_video_play}</td>
                  </tr>
                  <tr>
                    <td height="25" align="right" valign="middle">���ش�����</td>
                    <td>{$video[video_id].tb_video_down}</td>
                  </tr>
                  <tr>
                    <td height="25" colspan="2" align="center" valign="middle"><a href="look.php?video_id={$video[video_id].tb_video_id}" target="_blank">����</a> &nbsp;&nbsp;&nbsp;&nbsp;<a href="download.php?id={$video[video_id].tb_video_id}">����</a></td>
                  </tr>
              </table></td>
		  	</tr>
		  	<tr>
		  	  <td height="80" colspan="2" align="center" valign="top">

                ���:
              <p>{$video[video_id].tb_video_explain}</p></td>
        </tr>
    </table></td>
        <td>&nbsp;</td>
      </tr>
{/section}
      <tr>
        <td height="47">&nbsp;</td>
        <td valign="bottom">&nbsp;</td>
        <td>&nbsp;</td>
      </tr>

    </table></td>
  </tr>
</table>
</body>
</html>
