<?php session_start(); include("conn/conn.php"); include("function.php");
$self=$_SERVER['HTTP_REFERER'];
$query_es=mysql_query("update tb_forum_affiche set tb_affiche_counts=tb_affiche_counts+1 where tb_affiche_id=$_GET[tb_affiche_id]");
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>公告信息</title><style type="text/css">
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
<script src="js/UBBCode.js"></script>
<script language="javascript">
function check(){
	if(myform.restore_subject.value==""){
		alert("帖子标题不允许为空！");myform.restore_subject.focus();return false;
	}

	if(myform.file.value==""){
		alert("帖子内容不允许为空！");myform.file.focus();return false;
	}

	myform.submit();
}
</script>
<body>
<?php include_once("enter.php");?>	 
<table width="950" height="307" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="41" colspan="2">&nbsp;<?php echo $_GET["tb_affiche_type"];?>>>><?php echo $_GET["tb_affiche_id"];?></td>
  </tr>
  <tr>
    <td height="22" colspan="2" bgcolor="#F7F7FF">&nbsp;<?php 
$query_3=mysql_query("select * from tb_forum_affiche where tb_affiche_id='$_GET[tb_affiche_id]'");
$myrow_3=mysql_fetch_array($query_3);
echo $myrow_3["tb_affiche_subject"];
?></td>
  </tr>
  <tr>
    <td width="200" rowspan="3" align="center" valign="top" bgcolor="#FFFFFF"><?php 
$query_1=mysql_query("select * from tb_forum_affiche where tb_affiche_id='$_GET[tb_affiche_id]'",$conn);
$myrow_1=mysql_fetch_array($query_1);
$query_2=mysql_query("select * from tb_forum_user where tb_forum_user='$myrow_1[tb_affiche_user]'",$conn);
$myrow_2=mysql_fetch_array($query_2);
echo "<img src='$myrow_2[tb_forum_picture]'>";
echo "<br>";
echo "<br>";
echo "发帖人:";
echo "<br>";
echo $myrow_2["tb_forum_user"];
echo "<br>";
echo "<br>";
echo "注册时间:";
echo "<br>";
echo $myrow_2["tb_forum_date"];
echo "<br>";
echo "<br>";
echo "积分:";
echo $myrow_2["tb_forum_grade"];
?></td>
    <td width="780" height="21" bgcolor="#FFFFFF"><?php echo $myrow_3["tb_affiche_date"]; ?>   楼主</td>
  </tr>
  <tr>
    <td height="21" bgcolor="#FFFFFF"><?php 
    $length=strlen($myrow_3["tb_affiche_content"]);
    $page_count=ceil($length/80);
	if($length<80){
		echo $myrow_3["tb_affiche_content"];
	}else{
		for($i=1; $i<$page_count;$i++){
     		$c=msubstr($myrow_3["tb_affiche_content"],0,($i-1)*80);
     		$c1=msubstr($myrow_3["tb_affiche_content"],0,$i*80);
			echo unhtml(substr($c1,strlen($c),strlen($c1)-strlen($c))); 
			echo "\n";
		}
	}
?></td>
  </tr>
  <tr>
    <td align="right" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
</table><table width="1003" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="667" bgcolor="#F7F7FF">&nbsp;</td>
    <td width="283" bgcolor="#F7F7FF"><img src="images/index_8 (2).jpg" width="218" height="75"></td>
  </tr>
</table>
<?php include_once("bottom.php");?>
</body>
</html>
