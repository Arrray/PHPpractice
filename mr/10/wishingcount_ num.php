<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>������Ը��Ըǽ_��ǽͳ�Ʒ���</title>
<link href="CSS/index.css" rel="stylesheet"/>
<script src="JS/index.js"></script>
<script>
 function chkinput(form){
   if(document.form.from.value==""){
     alert("��������ʼ����!");
      document.form.from.focus();
	  return false;
   }
    if(document.form.to.value==""){
     alert("��������ֹ����!");
      document.form.to.focus();
	  return false;
   }
   form.submit;
 }
</script>
<style type="text/css">
<!--
.STYLE4 {
	color: #FF6699;
	font-weight: bold;
}
-->
</style>
</head>
<body>
<?php require("top.php");?>
<!--��ʼ��ʾ��ǽ��Ϣ-->
<div id="main" style="padding-top:5px;">
	<table width="1004" height="25" border="0" cellpadding="0" cellspacing="0">
     <form name="form" method="post" action=""> 
	  <tr>
        <td width="912"align="center" bgcolor="#339933">�������ѯʱ��Σ�
          <input type="text" name="from" size="18" class="inputs">&nbsp;��
          &nbsp;<input type="text" name="to" size="18" class="inputs">
        &nbsp;<input type="submit" name="submit" value="ͳ�Ʒ���" onclick="return chkinput(form);" class="btn_search">&nbsp;(ע�⣺���ڸ�ʽ��YYYY-MM-DD����������������)</td>
        <td width="180"align="center" bgcolor="#339933"><a href="wishingcount.php" target="_blank" class="STYLE4">��3D����ͼ�������ͳ��</a>&nbsp;&nbsp;</td>
	  </tr>
	  </form>
  </table>
<?php
require("global.php");
if($_POST['submit']!=""){
	$from=$_POST[from];
	$to=$_POST[to];
	$sql="select distinct(count(cip)) as num,cip from tb_wishes where sendtime between '".$from."' and '".$to."' group by cip order by  num desc";
}else{
/***********************ͳ��ȫ�����,������������������*************************/
	$sql="select distinct(count(cip)) as num,cip from tb_wishes  group by cip order by  num desc";
}
	$DB->query($sql); 
	$res=$DB->get_rows_array($sql);			//���ɶ�ά����
	$rows_count=count($res);
	//��������
	$arraynum=array();
	$arraycip=array();
	//��������
	for($i=0;$i<$rows_count;$i++){
		array_push($arraynum,$res[$i][num]);
		array_push($arraycip,$res[$i][cip]);
	}
?>
	<table width="1004" border="0" align="left" cellpadding="0" cellspacing="1" bgcolor="#000000">
	
      <tr>
        <td width="15%" height="27" align="center" bgcolor="#7CC842">�� �� </td>
        <td width="15%" align="center" bgcolor="#7CC842">��Ը����</td>
        <td width="60%" align="center" bgcolor="#7CC842">��Ը����</td>
      </tr>
<?php
		$col1 = "#ffffff";			//���ü�¼�б�����ɫΪ��ɫ
		$col2 = "#F6FFDA";			//���ü�¼�б�����ɫΪ��ɫ
		$col = $col2;
		for($j=0;$j<count($arraycip);$j++){
			$totalnum+=$arraynum[$j];
		}
		for($i=0;$i<count($arraycip);$i++){
			//��¼�б���ɫ����
			if($col == $col1)
				$col = $col2;
			else
				$col = $col1;
				$scale=intval(500*$arraynum[$i]/$totalnum);
?>

      <tr bgcolor="<?php echo $col;?>">
        <td height="27" class="ListID"><?php echo $arraycip[$i];?></td>
        <td align="center"><?php echo "<font color=red>".$arraynum[$i]."</font> &nbsp;��";?></td>
        <td align="left">&nbsp;<img src="images/scale.gif" height="10" width="<?php echo $scale;?>"/>	&nbsp;<?php echo round(($arraynum[$i]/$totalnum*100),2)."%";
		 ?></td>
      </tr>
<?php }?>
      <tr>
        <td height="22" colspan="3" align="right" bgcolor="#EFEFEF"><?php echo "��Ը������".$totalnum." ��";?>  &nbsp;</td>
      </tr>
  </table>
</div>
<!--��ʾ������Ϣ����-->
<?php require_once("copyright.php");?>
</body>
</html>