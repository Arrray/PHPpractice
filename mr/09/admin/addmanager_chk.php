<?php
	session_start();
	include_once("conn/conn.class.php");
	include_once("inc/chec.php");
	
	$a_sql="select * from tb_manager where name='".$_POST[names]."'";
	$a_rst=$result->login($a_sql,$conn);
	//$a_rst = $conn->execute($a_sql);
	if($a_rst==true)
		echo "<script>alert('�����ƵĹ���Ա�Ѿ����ڣ����������');history.go(-1);</script>";
	else{
		$a_sqlstr="insert into tb_manager values('','".$_POST[names]."','".$_POST[password]."','".$_POST[grade]."','".$_POST[realname]."','".date("Y-m-d")."','1')";
		$a_rst1 = $result->indeup($a_sqlstr,$conn);
		if(!($a_rst1 == false)){
?>
		<script>
			top.opener.location.reload(); 
			alert("����Ա��ӳɹ�");
			top.window.close();
		</script>
<?php
		}
		else
			echo "<script>alert('���ʧ��".$a_sqlstr."');history.go(-1);</script>";
	}
?>	
