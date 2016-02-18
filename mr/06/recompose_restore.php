<?php session_start(); include("conn/conn.php");
if($_SESSION[tb_forum_user]==$_GET[recompose_user]){
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>修改回复的帖子</title>
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
</style>
</head>
<script language="javascript">
function check(){
	if(myform.restore_subject.value==""){
		alert("回复标题不允许为空！");myform.restore_subject.focus();return false;
	}

	if(myform.restore_content.value==""){
		alert("回复内容不允许为空！");myform.restore_content.focus();return false;
	}
	myform.submit();
}
</script>
<body>
<?php include_once("enter.php");?>	 
    <table width="950" height="324" border="0" align="center" cellpadding="0" cellspacing="0">
<form  name="myform" method="post" action="recompose_restore_ok.php">
<?php $query=mysql_query("select * from tb_forum_restore where tb_restore_id='$_GET[recompose_id]'");
$myrow=mysql_fetch_array($query);
?>
     <tr>
       <td width="160" height="20">&nbsp;</td>
       <td width="98" height="20" align="right" class="STYLE5">&nbsp;</td>
       <td width="692">&nbsp;</td>
     </tr>
     <tr>
       <td rowspan="2" align="center" valign="top">
<?php $query_5=mysql_query("select * from tb_forum_user where tb_forum_user='$_GET[recompose_user]'");
$myrow_5=mysql_fetch_array($query_5);
echo "<img src='$myrow_5[tb_forum_picture]'>";
echo "<br>";
echo "发帖人:";
echo "<br>";
echo $myrow_5[tb_forum_user];
echo "<br>";
echo "注册时间:";
echo "<br>";
echo $myrow_5[tb_forum_date];
echo "<br>";
echo "积分:";
echo $myrow_5[tb_forum_grade];
?></td>
       <td height="30" align="right" class="STYLE5">回复标题：</td>
       <td>
       &nbsp;<input name="restore_subject" type="text" value="<?php echo $myrow[tb_restore_subject];?>" size="70"></td>
     </tr>
     <tr>
       <td align="right" class="STYLE5">回复内容：</td>
       <td>&nbsp;<textarea name="restore_content" cols="70" rows="15"><?php echo $myrow[tb_restore_content];?></textarea>
       <input type="hidden" name="restore_id" value="<?php echo $_GET[recompose_id];?>"></td>
     </tr>
     <tr>
       <td>&nbsp;</td>
       <td height="40">&nbsp;</td>
       <td><input type="submit" name="Submit" value="提交" onClick="return check();">&nbsp;&nbsp;&nbsp;&nbsp;
       <input type="reset" name="Submit2" value="重置"></td>
     </tr>
     <tr>
       <td>&nbsp;</td>
       <td>&nbsp;</td>
       <td>&nbsp;</td>
     </tr>
     </form>
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
<?php }else{
   echo "<script>alert('对不起，您不具备修改该帖子的权限！');history.back();</script>";
}?>