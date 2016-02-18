<?php
	session_start();
	include_once 'conn/conn.php';
	include_once 'admin/inc/func.php';
	$upname = $_GET['upname'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>明日电子相册</title>
<link rel="stylesheet" href="css/style.css" />
<script language="javascript" src="/js/index.js"></script>
</head>
<body>
<div align="right" style="height:25px; line-height: 25px;">
<?php
$name = $_SESSION['name'];
if(!empty($name)){
?>
欢迎光临：<?php echo $name; ?>  | <a href="admin/index.php" target="manger">我要管理</a> | <a href="#" onclick="return logout()">退出</a>
<?php
}else{
?>
<a href="login/index.php" target="login">登录</a> | <a href="/register.php" target="reg">注册</a>
<?php
}
?>&nbsp;</div>
<div align="center" style="height:375px; border:1px #000000 solid; background-image: url(/images/top.jpg); ">&nbsp;</div>


<table border="1" cellpadding="10" cellspacing="0" align="center">
	<tr>
		<td colspan="5" align="center" valign="middle" height="25"><?php echo $upname;  ?>&nbsp;&nbsp;&nbsp;的影集</td>
<?php
	$typesql = "select id,typename,membername,level,indexpic from tb_type where membername = '".$upname."' order by id desc";
	$typearr = $conne->getRowsArray($typesql);
	$conne->close_rst();
	foreach($typearr as $key => $typevalue){
		$numsql = "select id from tb_photo where typename = ".$typevalue['id'];
		$num = $conne->getRowsNum($numsql);
		if($key % 5 == 0){
?>
</tr><tr>
<?php		
		}else{
?>
<?php
			
	}
?>
<td>
<table border="1" cellpadding="0" cellspacing="0" align="center">
	<tr>
		<td width="155" height="115" align="center" valign="middle" bgcolor="#f0f0f0">
<?php
	if($num != 0){
?>
		<a href="pics.php?smallact=<?php echo $typevalue['id']; ?>" target="showpic">
<?php
	}
?>
		<img id = "indexpic<?php echo $key; ?>" src="<?php echo ($typevalue['level'] == 0?'../uppics/'.$typevalue['indexpic']:'../uppics/mimi.jpg'); ?> " width="<?php echo getWidth(($typevalue['level'] == 0?'uppics/'.$typevalue['indexpic']:'uppics/mimi.jpg'),150,100); ?>" height="<?php echo getHeight(($typevalue['level'] == 0?'uppics/'.$typevalue['indexpic']:'uppics/mimi.jpg'),150,100); ?>" border="0"/>
<?php
	if($num != 0){
?>	
		</a>
<?php
	}
?>
		</td>
	</tr>
	<tr>
		<td height="25" align="center" valign="middle">名称：<?php echo $typevalue['typename']; ?><p /><?php echo $num; ?>&nbsp;张&nbsp;状态：<?php echo ($typevalue['level'] == 0?'<font color=green>公开</font>':'<font color=red>私藏</font>'); ?></td>
	</tr>
</table>
</td>

<?php
	}
?>
	</tr>
</table>
</body>
</html>