<?php include("conn/conn.php");?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>�ޱ����ĵ�</title>
</head>
<body>
<?php 
$query=mysql_query("select * from tb_forum_user where tb_forum_user='$_POST[tb_forum_user]'");
$result=mysql_num_rows($query);
if($result>0){
echo "������ʹ�ø��û���";
}else{
echo "��������ʹ�ø��û���,����������!";
}
?>
</body>
</html>
