<?php session_start();?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>添加收藏夹</title>
<style type="text/css">
<!--
body {
	background-color: #F7F7FF;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.STYLE5 {
	font-size: 12px;
	font-weight: bold;
}
.STYLE2_friend {
	font-size: 12px;
	color: #FF0000;
}
-->
</style></head>
<body><?php include_once("enter.php");?>
<table width="800" height="314" border="0" align="center" cellpadding="0" cellspacing="0">
<form name="form1" method="post" action="my_collection_ok.php">
  <tr>
    <td height="20" align="center" class="STYLE5">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="112" height="30" align="center" class="STYLE5">标题：</td>
    <td width="688"><input name="collection_subject" type="text" id="collection_subject" size="65" value="<?php echo $_GET["forum_subject"];?>"></td>
  </tr>
  <tr>
    <td height="30" align="center" class="STYLE5">网址：</td>
    <td><input name="collection_address" type="text" id="collection_address" size="65" value="<?php echo $_POST["my_collection"];?>"></td>
  </tr>
  <tr>
    <td height="30" align="center" class="STYLE5">标签：</td>
    <td><input name="collection_label" type="text" id="collection_label" size="65"></td>
  </tr>
  <tr>
    <td height="165" align="center" class="STYLE5">摘要：</td>
    <td><textarea name="collection_summary" cols="65" rows="10" id="collection_summary"></textarea>
      <input type="hidden" name="collection_user" value="<?php echo $_GET["collection_user"];?>"></td>
  </tr>
  <tr>
    <td height="40">&nbsp;</td>
    <td><input type="submit" name="Submit" value="提交"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr></form>
</table>

<table width="1003" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="667" bgcolor="#F7F7FF">&nbsp;</td>
    <td width="283" bgcolor="#F7F7FF"><img src="images/index_8 (2).jpg" width="218" height="75"></td>
  </tr>
</table>
<?php include_once("bottom.php");?>
</body>
</html>
