<?php include("conn/conn.php");?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>无标题文档</title>
</head>
<body>
<?php 
$query=mysql_query("select * from tb_forum_user where tb_forum_user='$_POST[tb_forum_user]'");
$result=mysql_num_rows($query);
if($result>0){
echo "您可以使用该用户名";
}else{
echo "您不可以使用该用户名,请重新输入!";
}
?>
</body>
</html>
