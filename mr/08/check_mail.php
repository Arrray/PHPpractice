<?php
if(isset($_SESSION['host']) and isset($_SESSION['user']) and isset($_SESSION['pwd'])){
require("Zend/Mail/Storage/Pop3.php");
$mail=new Zend_Mail_Storage_Pop3(array( 'host' => $_SESSION['host'],
                                         	'user'     => $_SESSION['user'],
                                         	'password' => $_SESSION['pwd']));

function dateSwitch($time){
	$weekarray = array(	'Mon'=>'星期一','Tue'=>'星期二','Wed'=>'星期三','Thu'=>'星期四',
							'Fri'=>'星期五','Sat'=>'星期六','Sun'=>'星期日');
	$time = strtotime($time);
	$time = date("D Y年m月d日 H:i:s", $time);
	$time = strtr($time, $weekarray);
	return $time;
}

}else{
   echo "<script>alert('登录超时，请重新登录!');history.back();</script>";
   exit;
}
?>