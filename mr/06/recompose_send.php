<?php session_start(); include("conn/conn.php");
if($_SESSION["tb_forum_user"]==$_GET["recompose_user"]){
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>修改帖子</title>
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
	if(myform.send_sort.value==""){
		alert("帖子类别不允许为空！");myform.send_sort.focus();return false;
	}
	if(myform.send_subject.value==""){
		alert("帖子标题不允许为空！");myform.send_subject.focus();return false;
	}

	if(myform.send_content.value==""){
		alert("帖子内容不允许为空！");myform.send_content.focus();return false;
	}

	myform.submit();
}
</script>
<body>
<?php include_once("enter.php");?>	 
 <form  name="myform" method="post" action="recompose_send_ok.php">
   <table width="950" height="319" border="0" align="center" cellpadding="0" cellspacing="0">
<?php $query=mysql_query("select * from tb_forum_send where tb_send_id='$_GET[recompose_id]'");
$myrow=mysql_fetch_array($query);
?>

     <tr>
       <td width="200">&nbsp;</td>
       <td width="100" height="30" align="right">帖子类别：</td>
       <td width="680"><select name="send_sort" id="send_sort">
<option selected="selected"><?php echo $myrow["tb_send_small_type"];?></option>         
<?php $query_1=mysql_query("select * from tb_forum_small_type");
while($myrow_1=mysql_fetch_array($query_1)){
?>
<option value="<?php echo $myrow_1["tb_small_type_content"];?>"><?php echo $myrow_1["tb_small_type_content"];?></option>
<?php }?>
       </select>       </td>
     </tr>
     <tr>
       <td rowspan="2" align="center" valign="top">
<?php $query_5=mysql_query("select * from tb_forum_user where tb_forum_user='$_GET[recompose_user]'");
$myrow_5=mysql_fetch_array($query_5);
echo "<img src='$myrow_5[tb_forum_picture]'>";
echo "<br>";
echo "发帖人:";
echo "<br>";
echo $myrow_5["tb_forum_user"];
echo "<br>";
echo "注册时间:";
echo "<br>";
echo $myrow_5["tb_forum_date"];
echo "<br>";
echo "积分:";
echo $myrow_5["tb_forum_grade"];
?></td>
       <td height="30" align="right">帖子标题：</td>
       <td>
       <input name="send_subject" type="text" value="<?php echo $myrow["tb_send_subject"];?>" size="75"></td>
     </tr>
     <tr>
       <td height="216" align="right">帖子内容：</td>
       <td><textarea name="send_content" cols="75" rows="15"><?php echo $myrow["tb_send_content"];?></textarea>
       <input type="hidden" name="send_id" value="<?php echo $_GET["recompose_id"];?>"></td>
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
   </table>
 </form>
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