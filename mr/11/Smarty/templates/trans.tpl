<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>�ϴ���Ƶ</title>
</head>

<body>
<table width="686" height="394" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td background="images/������ҳ_06.gif"><table width="686" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="26" height="67">&nbsp;</td>
	   
	    <td width="540"></td>
        <td width="120">&nbsp;</td>
      </tr>
      <tr>
        <td height="280">&nbsp;</td>
        <td align="center" valign="middle"><table width="520" height="225" border="0" cellpadding="0" cellspacing="0">
  
    <form name="form1" method="post" action="trans_chk.php" enctype="multipart/form-data">

<tr>
    <td width="153" height="25" align="right">��Ƶ���ƣ�</td>
    <td width="367"><input name="tb_video_name" type="text" id="tb_video_name"></td>
    </tr>
  <tr>
    <td height="25" align="right">ͼƬԤ����</td>
    <td><input name="tb_video_picture" type="file" id="tb_video_picture"></td>
    </tr>
  <tr>
    <td height="25" align="right">��Ƶ���ͣ�</td>
    <td><select name="tb_video_type" id="tb_video_type">
	{html_options values=$type_id  output=$type_name }
 </select>    </td>
    </tr>
  <tr>
    <td height="25" align="right">��Ƶ��ַ��</td>
    <td><input name="tb_video_address" type="file" id="tb_video_address"></td>
    </tr>
  <tr>
    <td height="75" align="right">��Ƶ���ܣ�</td>
    <td><textarea name="tb_video_explain" cols="30" rows="5" id="tb_video_explain"></textarea></td>
    </tr>
  <tr>
    <td height="25" align="right">���ͣ�</td>
    <td><input name="tb_video_author" type="text" id="tb_video_author" value="{$video_author}" readonly="0"></td>
    </tr>
  <tr>
    <td height="25">&nbsp;</td>
    <td><input type="submit" name="Submit" value="�ύ">
    <input type="reset" name="Submit2" value="����"></td>
    </tr>
    </form>
</table></td>
        <td>&nbsp;</td>
      </tr>
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
