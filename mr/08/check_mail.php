<?php
if(isset($_SESSION['host']) and isset($_SESSION['user']) and isset($_SESSION['pwd'])){
require("Zend/Mail/Storage/Pop3.php");
$mail=new Zend_Mail_Storage_Pop3(array( 'host' => $_SESSION['host'],
                                         	'user'     => $_SESSION['user'],
                                         	'password' => $_SESSION['pwd']));

function dateSwitch($time){
	$weekarray = array(	'Mon'=>'����һ','Tue'=>'���ڶ�','Wed'=>'������','Thu'=>'������',
							'Fri'=>'������','Sat'=>'������','Sun'=>'������');
	$time = strtotime($time);
	$time = date("D Y��m��d�� H:i:s", $time);
	$time = strtr($time, $weekarray);
	return $time;
}

}else{
   echo "<script>alert('��¼��ʱ�������µ�¼!');history.back();</script>";
   exit;
}
?>