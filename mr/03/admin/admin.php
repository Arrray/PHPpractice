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
<title>��̨����Ȩ��</title>
</head>

<body>
<h2>�û�Ȩ�޹���</h2>
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
echo "Ŀǰ����".$totnum."����¼&nbsp;&nbsp;";			//�����¼��
$p_count=ceil($totnum/$list_num);					//��ҳ��Ϊ����������ÿҳ��ʾ��
echo "����".$p_count."ҳ��ʾ&nbsp;&nbsp;";			//���ҳ��
echo "��ǰ��ʾ��".$page."ҳ";
echo "<p>";
if($totnum>0)	
{
?>
<p>
<table cellpadding="0" cellspacing="0" border="0">
<tr class="tr1">
<td>�û���</td>
<td>ʹ��Ȩ��</td>
<td>ʹ������</td>
<td>�޸�</td>
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
	         echo "<td>��ͨ�û�</td>\n";
			 break;
	case '1':
	         echo "<td>��Ա�û�</td>\n";
			 break;
	case '2':
	         echo "<td>�߼��û�</td>\n";
			 break;
	}
	echo "<td>".sprintf("%-01.2f",($value['content']/1000000))."MB</td>\n";
	echo "<td><a href=changesub.php?id=".$value['id'].">�޸�</a></td>\n";
	echo "</tr>\n";
	}
echo "</table>";
$prev_page=$page-1;						
$next_page=$page+1;						
echo "<p align=\"center\"> ";
if ($page<=1)								
   {
	echo "��һҳ | ";
    }
else	{									
	echo "<a href='$_SERVER[PHP_SELF]?page=1'>��һҳ</a> | ";
}
if ($prev_page<1)							
{
	echo "��һҳ | ";
}
else										
{
	echo "<a href='$_SERVER[PHP_SELF]?page=$prev_page'>��һҳ</a> | ";
}
if ($next_page>$p_count)						
{
	echo "��һҳ | ";
}
else										
{
	echo "<a href='$_SERVER[PHP_SELF]?page=$next_page'>��һҳ</a> | ";
}
if ($page>=$p_count)						
{
	echo "���һҳ</p>\n";
}
else										
{
	echo "<a href='$_SERVER[PHP_SELF]?page=$p_count'>���һҳ</a></p>\n";
}
}
else										
{
	echo "��ʱû�м�¼��";
}

?>
</div>

</body>
</html>

