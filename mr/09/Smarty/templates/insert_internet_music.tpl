<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="css/insert_internet_music.css" type="text/css" rel="stylesheet" />
<script language="javascript" src="js/chk.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>
<div class="iimusic">

   <div class="iimusicmain">
     <table width="420" border="0" cellspacing="0" cellpadding="0">
     <form name="form1" method="post" action="insert_internet_nusic_ok.php" onSubmit="return chk_internet()">
       <tr>
        <td width="124" align="center">歌曲名称：</td>
        <td width="299"><input name="song_name" type="text" id="song_name"></td>
      </tr>
      <tr>
       <td align="center">歌手：</td>
       <td><input name="singer_name" type="text" id="singer_name"></td>
     </tr>
     <tr>
       <td align="center">地址：</td>
       <td><input name="internet_address" type="text" id="internet_address">
       <input type="hidden" name="tb_music_user" value="{$username}"></td>
     </tr>
	 <tr>
	   <td></td><td>示例地址"http://192.168.1.1/12345.mp3"</td>
	 </tr>
     <tr>
       <td height="54" align="center">&nbsp;</td>
       <td><input type="submit" name="Submit" value="提交"></td>
    </tr>
    </form>
   </table>

   </div>
</div>
</body>
</html>
