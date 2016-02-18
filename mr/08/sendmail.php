<?php 
if(isset($_SESSION['host']) and isset($_SESSION['user']) and isset($_SESSION['pwd'])){
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>发送邮件</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<style type="text/css">
<!--
body {
	background-image: url(images/mrbg.gif);
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.STYLE2 {color: #FF0000}
-->
</style>
</head>
<script language="javascript" src="js/editor.js"></script>
<body>
<table width="575" height="104" border="0" cellpadding="0" cellspacing="0" background="images/首页(2)_5.jpg">
  <tr>
    <td width="82" height="60">&nbsp;</td>
    <td width="493">&nbsp;</td>
  </tr>
  <tr>
    <td height="32">&nbsp;</td>
    <td><span class="STYLE34"><?php echo $lmbs;?></span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<table width="575" height="421" border="0" cellpadding="0" cellspacing="0">
    
      <tr>
        <td align="center" valign="top">			<form name="form2" method="post" action="mail_send.php" enctype="multipart/form-data" onSubmit="return chkinput(this)">
<table width="100%" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#D4D4D4">
                      <tr>
                        <td width="13%"  height="25" align="center" bgcolor="#FFFFFF">发件人：</td>
                        <td width="87%" bgcolor="#FFFFFF"><input name="formuser" type="text" class="inputcss" id="formuser" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'" size="50" /></td>
                      </tr>
                      <tr>
                        <td height="25" align="center" bgcolor="#FFFFFF">收件人： </td>
                        <td height="25" bgcolor="#FFFFFF">
   <table width="387" border="0" cellspacing="0" cellpadding="0">
     <tr>
       <td width="260" rowspan="2"><textarea name="touser" cols="45" rows="3" class="inputcss" id="touser" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'"></textarea></td>
       <td width="86" height="33" class="STYLE2"><a href="#" onClick="javascript:document.getElementById('touser').value='';return false;">删除邮箱</a></td>
     </tr>
   </table></td>
                      </tr>
                      <tr>
                        <td height="25" align="center" bgcolor="#FFFFFF">主&nbsp;&nbsp;题：</td>
                        <td height="25" bgcolor="#FFFFFF"><input name="subject" type="text" class="inputcss" id="subject" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'" size="50" /></td>
                      </tr>
                      <tr>
                        <td height="25" align="center" bgcolor="#FFFFFF">附&nbsp;&nbsp;件：</td>
                        <td height="25" bgcolor="#FFFFFF"><input name="upfile" type="file" class="inputcss" id="upfile" size="50" /></td>
                      </tr>
                      <tr>
                        <td colspan="2" align="center" bgcolor="#FFFFFF">

                        <textarea type="hidden" name="mailbody" style="position:absolute;left:0;visibility:hidden;" rows=1 cols=1 class="inputcss" id="mailbody"></textarea>
<script language="javascript" type="text/javascript">
var editor = new FtEditor("editor");
editor.hiddenName = "mailbody";
editor.editorWidth = "100%";
editor.editorHeight = "100px";
editor.show();
</script>  
</td>
                      </tr>
          </table>
                  
                
  <input name="submit" type="submit" class="buttoncss" id="submit" value="发送" />
  &nbsp;&nbsp;
                      <input name="reset" type="reset" class="buttoncss" id="reset" value="重写" />
               
        </form>
		</td>
      </tr>
</table>
</body>
</html>
<?php 
}else{
   echo "<script>alert('登录超时，请重新登录!');history.back();</script>";
   exit;
}
?>