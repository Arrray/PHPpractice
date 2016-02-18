<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<style type="text/css">
<!--
body {
	background-color: #00CC66;
}
body,td,th {
	font-size: 12px;
}
-->
</style></head>

<body>
<?php
include("conn/conn.php");
if(isset($_GET['id'])){
	$id=$_GET['id'];	
	$select="select * from tb_board where id='$id'";	
	$query=mysql_query($select,$conn);
	$count=mysql_fetch_array($query);
}
?>
<?php echo $count['count'];?>

</body>
</html>
