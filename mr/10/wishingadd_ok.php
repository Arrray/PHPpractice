<?php
require("global.php");
require("function.php");
//������
	$select=$_POST['select'];
	$picker =$_POST['Picker'];
	$author = $_POST['author'];
	$QQ = $_POST['QQ'];
	$pagecolor=$_POST['paperColor'];
	$face = $_POST['face'];
	$content=$_POST['content'];
	$sendtime=date("Y-m-d H:i");		//��ȡϵͳʱ�䣬��ʽΪ����-��-�� ʱ:��
	//$ip=$_SERVER['REMOTE_ADDR'];		//��ȡ��������IP��ַ
	$ip=getenv('REMOTE_ADDR');			//��ȡ�ͻ���IP��ַ
	/********����IP����***********/
	$cip=cip($ip);
	$csql="select * from tb_ip where (ip1<'".$cip."' and  ip2>'".$cip."') or (ip1=ip2 and ip2='".$cip."')";
	//ִ�в�ѯ
	$res = $DB->fetch_one_array($csql);
	$cip1=$res['country'];
	if($cip1==""){
		$cip1="IP����";
	}
	/****************************/
	$ins_sql = "insert into tb_wishes (Picker,author,QQ,pagecolor,face,content,ip,cip,sendtime,wishsort) values ('".$picker."','".$author."','".$QQ."','".$pagecolor."','".$face."','".$content."','".$ip."','".$cip1."','".$sendtime."','".$select."')";
	$DB->query($ins_sql);
	$big_id=mysql_insert_id();					//��ȡ�����¼��IDֵ
	$url = "index.php?big_id=$big_id";		//�����µ�IDֵ���ݵ���ҳ
	/*echo "<script>location.href='$url';</script>";*/
	echo "<script>location.href='index.php';</script>";
?>
