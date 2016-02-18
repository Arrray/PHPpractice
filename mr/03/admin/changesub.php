<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style type="text/css">
body{ text-align:center;}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>更改用户权限</title>
</head>


<body>
<table border="1" cellpadding="0" cellspacing="0">
<form action="change.php" method="post">
<?php
include_once 'conn/conn.php';
$id=$_GET["id"];
$sql="select * from tb_member where id = $id";
$changearr = $conne->getRowsRst($sql);
?>
<tr>
<td>用户名</td>
<td><?php echo $changearr['name'];?></td>
</tr>
<tr>
<td>当前权限</td>
<td>
<?php 
switch($changearr['right']){
	case '0':
	         echo "普通用户";
			 break;
	case '1':
	         echo "会员用户";
			 break;
	case '2':
	         echo "高级用户";
			 break;
	}
	?>
</td>
</tr>

<tr>
<td>修改权限</td>
<td>
<select name="right">
<option value="0" selected="selected">普通用户</option>
<option value="1">会员用户</option>
<option value="2">高级用户</option>
</select>
</td>
</tr>
<tr><td colspan=2>
<center>
<input type="submit" value="提交" />
</center>
</td>
</tr>
<input type="hidden" name="id" value="<?php echo $changearr['id']?>" />

</form>
</table>
</body>
</html>
