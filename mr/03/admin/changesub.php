<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style type="text/css">
body{ text-align:center;}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�����û�Ȩ��</title>
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
<td>�û���</td>
<td><?php echo $changearr['name'];?></td>
</tr>
<tr>
<td>��ǰȨ��</td>
<td>
<?php 
switch($changearr['right']){
	case '0':
	         echo "��ͨ�û�";
			 break;
	case '1':
	         echo "��Ա�û�";
			 break;
	case '2':
	         echo "�߼��û�";
			 break;
	}
	?>
</td>
</tr>

<tr>
<td>�޸�Ȩ��</td>
<td>
<select name="right">
<option value="0" selected="selected">��ͨ�û�</option>
<option value="1">��Ա�û�</option>
<option value="2">�߼��û�</option>
</select>
</td>
</tr>
<tr><td colspan=2>
<center>
<input type="submit" value="�ύ" />
</center>
</td>
</tr>
<input type="hidden" name="id" value="<?php echo $changearr['id']?>" />

</form>
</table>
</body>
</html>
