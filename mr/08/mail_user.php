<?php
session_start(); 
header ("Content-type: text/html; charset=gb2312" );
require("Zend/Mail/Storage/Pop3.php");
if(isset($_POST['hostname']) && isset($_POST['username']) && isset($_POST['userpwd'])){		
/*	
	$config = array('auth' => 'login',
            'username' => $_POST['username'],
            'password' => $_POST['userpwd']);				//����SMTP����֤����
	$transport = new Zend_Mail_Transport_Smtp($_POST['hostname'], $config);		//ʵ������֤�Ķ���
	if(!$transport){
    	echo "<script>alert('��¼ʧ��!');history.back();</script>";
  	}else{
		$_SESSION['host']=$_POST['hostname'];
  		$_SESSION['user']=$_POST['username'];
  		$_SESSION['pwd']=$_POST['userpwd'];
		echo "<script>window.location.href='index.php?lmbs=�ռ���';</script>";  
  	}
*/

	$mail=new Zend_Mail_Storage_Pop3(array( 'host' => $_POST['hostname'],
                                         	'user'     => $_POST['username'],
                                         	'password' => $_POST['userpwd']));
	if(!$mail){
    	echo "<script>alert('��¼ʧ��!');history.back();</script>";
  	}else{
		$_SESSION['host']=$_POST['hostname'];
  		$_SESSION['user']=$_POST['username'];
  		$_SESSION['pwd']=$_POST['userpwd'];
		echo "<script>window.location.href='index.php?lmbs=�ռ���';</script>";  
  	}
}else{
	echo "<script>alert('��������Ϣ����Ϊ�գ�');window.location.href='main.php';</script>";  
}
?>