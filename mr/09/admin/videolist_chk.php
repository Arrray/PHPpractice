<?php
	session_start();
	include_once("inc/chec.php");
	include_once("conn/conn.class.php");
if($_POST[father]==""){
	$a_sqlstr = "insert into tb_videolist (grade,father,name,userName,issueDate) values('$_POST[grade]','$_POST[names]','$_POST[father]','$_SESSION[admin]','".date("Y-m-d H:i:s")."')";
}else{

	$a_sqlstr = "insert into tb_videolist (grade,name,father,userName,issueDate) values('$_POST[grade]','$_POST[names]','$_POST[father]','$_SESSION[admin]','".date("Y-m-d H:i:s")."')";


}
    $rst=$result->indeup($a_sqlstr,$conn);
	if($rst == false)
		echo "<script>alert('���ʧ��');history.go(-1);</script>";
	else
		echo "<script>top.opener.location.reload();alert('��ӳɹ�');window.close();</script>";
	
?>