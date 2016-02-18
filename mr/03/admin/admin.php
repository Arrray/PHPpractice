<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style type="text/css">
body{font-size:12px; text-align:center }
table tr td{width:70px; border-collapse:collapse; text-align:center;}
.tr1{background:#CCCCCC;}
.main{text-align:left; width:300px;}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>后台管理权限</title>
</head>

<body>
<h2>用户权限管理</h2>
<div class="main">
<?php
include_once 'conn/conn.php';
$list_num=10;
$sql = "select * from tb_member";
$sqlarr = $conne->getRowsRst($sql);
$totnum = $conne->getRowsNum($sql);
$conne->close_rst();
if(!$_GET['page'])
$page=1;
else
$page=$_GET['page'];
echo "目前共有".$totnum."条记录&nbsp;&nbsp;";			//输出记录数
$p_count=ceil($totnum/$list_num);					//总页数为总条数除以每页显示数
echo "共分".$p_count."页显示&nbsp;&nbsp;";			//输出页数
echo "当前显示第".$page."页";
echo "<p>";
if($totnum>0)	
{
?>
<p>
<table cellpadding="0" cellspacing="0" border="0">
<tr class="tr1">
<td>用户名</td>
<td>使用权限</td>
<td>使用容量</td>
<td>修改</td>
</tr>
<?php
$sql = $sql." order by id desc limit ".($list_num *($page-1)).",".$list_num;
//echo $sql;
	$filearray = $conne->getRowsArray($sql);
foreach($filearray as $value)
{
echo "<tr>\n";
	echo "<td>".$value['name']."</td>\n";
	switch($value['right']){
	case '0':
	         echo "<td>普通用户</td>\n";
			 break;
	case '1':
	         echo "<td>会员用户</td>\n";
			 break;
	case '2':
	         echo "<td>高级用户</td>\n";
			 break;
	}
	echo "<td>".sprintf("%-01.2f",($value['content']/1000000))."MB</td>\n";
	echo "<td><a href=changesub.php?id=".$value['id'].">修改</a></td>\n";
	echo "</tr>\n";
	}
echo "</table>";
$prev_page=$page-1;						
$next_page=$page+1;						
echo "<p align=\"center\"> ";
if ($page<=1)								
   {
	echo "第一页 | ";
    }
else	{									
	echo "<a href='$_SERVER[PHP_SELF]?page=1'>第一页</a> | ";
}
if ($prev_page<1)							
{
	echo "上一页 | ";
}
else										
{
	echo "<a href='$_SERVER[PHP_SELF]?page=$prev_page'>上一页</a> | ";
}
if ($next_page>$p_count)						
{
	echo "下一页 | ";
}
else										
{
	echo "<a href='$_SERVER[PHP_SELF]?page=$next_page'>下一页</a> | ";
}
if ($page>=$p_count)						
{
	echo "最后一页</p>\n";
}
else										
{
	echo "<a href='$_SERVER[PHP_SELF]?page=$p_count'>最后一页</a></p>\n";
}
}
else										
{
	echo "暂时没有记录！";
}

?>
</div>

</body>
</html>

