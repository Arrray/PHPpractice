<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>通过控制结果集的方法读取数据库中指定的数据</title>
<style type="text/css">
<!--
.STYLE1 {
	color: #DF7D4E;
	font-size: 16px;
	font-family: "方正中倩简体";
}
-->
</style>
</head>

<body>
<table width="550" height="550" border="0" cellpadding="0" cellspacing="0" background="images/reg.jpg">
  <tr>
    <td width="88">&nbsp;</td>
    <td width="374" height="175">&nbsp;</td>
    <td width="74">&nbsp;</td>
  </tr>
  <tr>
    <td height="250">&nbsp;</td>
    <td align="center" valign="top"><table width="421" height="85" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="30" colspan="4" align="center"><span class="STYLE1">通过控制结果集的方法读取数据库中指定的数据</span></td>
    </tr>
  <tr>
    <td width="84" align="center">ID</td>
    <td width="126" height="30" align="center">用户名</td>
    <td width="94" align="center">密码</td>
    <td width="117" align="center">时间</td>
  </tr>
  <tr>
 <?php
include_once 'conn/conn.php';									//载入数据库链接文件
$sqlstr = 'select * from tb_user where id = 3';						//sql查询语句
$rst = $conn -> execute($sqlstr) or die('error： '.$conn -> errorMsg());	//执行查询语句
if(false != $rst){												//如果有查询结果
	for($i = 0; $i < $rst -> FieldCount(); $i++){						//循环输出各个字段
		$fields = $rst -> FetchField($i);							//生成字段信息对象
		$type = $fields -> type;								//从对象中获取字段的类型信息
?>

    <td height="25" align="center">
	<?php 
	
	if($rst -> metaType($type,-1,$fields) == "T"){				//如果标准类型为“T”
			echo $conn -> DBDate($rst -> fields[$i]);				//使用DBDate函数格式化时间
			echo '('.$rst -> metaType($type,-1,$fields).')';				
		}else{
			echo $rst -> fields[$i];							//如果是其他类型，直接输出
			echo '('.$rst -> metaType($type,-1,$fields).')';
		}	
	?>	</td>
  
  
  
<?php
  	}
}
?>
</tr>
</table></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="125">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
