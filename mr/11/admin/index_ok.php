<?php	
header("Content-type:text/html;charset=gb2312");
session_start();
	include "conn/conn.class.php";
	$a_sqlstr = "select * from tb_manager where name= '$_POST[manager]'";
	$a_rst=$result->login($a_sqlstr,$conn);
	$a_rsti=$result->getRows($a_sqlstr,$conn);
	if($a_rst!=false)
	{
	$pwd=$a_rsti[0]['password'];
	    if($pwd!=$_POST["pwd"])
	    {
	     echo "<script>alert('�û����������������');history.go(-1);</script>";
		 exit();
	    }else{
		     if($a_rsti[0]['whether']=="0"){
			  echo "<script>alert('������¼���û������ᣬ����������벦��绰0431-1234****��ѯ��ϸ��Ϣ');history.go(-1)</script>";
			  exit();
			 }
			 $_SESSION['admin']=$a_rsti[0]['name'];
			 $_SESSION['type']=$a_rsti[0]['type'];
			 $_SESSION['m_id']=$a_rsti[0]['id'];
			 echo "<script>alert('��¼�ɹ�');location='main.php';</script>";
		 
		
		}
	}else if($a_rst==false){
	        echo "<script>alert('�û����������������');history.go(-1);</script>";
	}
	
	
	/*if(!$a_rst->EOF){
		if($a_rst->fields[2] != $_POST[pwd]){
			echo "<script>alert('�û����������������');history.go(-1);</script>";
			exit();
		}
		if($a_rst->fields[6] == "0"){
			echo "<script>alert('������¼���û������ᣬ����������벦��绰0431-1234****��ѯ��ϸ��Ϣ');history.go(-1)</script>";
			exit();
		}
		$_SESSION['admin']=$a_rst->fields[1];
		$_SESSION['type']=$a_rst->fields[3];
		$_SESSION['m_id']=$a_rst->fields[0];
		echo "<script>alert('��¼�ɹ�');location='main.php';</script>";
	}
	else{
		echo "<script>alert('�û����������������');history.go(-1);</script>";
	}
	*/
?>