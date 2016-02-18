<?php
header("Content-type:text/html;charset=gb2312");
	session_start();
	include_once("conn/conn.class.php");
	//include("config.php");
	include_once("conn/conn.php");
	if((trim($_POST["name"]) == "") or (trim($_POST["password"]) == "")){
		echo "<script>alert('帐号或密码错误');history.go(-1);</script>";
		exit();
	}
	$sqlstr = "select * from tb_video_user where tb_video_user = '".$_POST["name"]."' and tb_video_pass = '".$_POST["password"]."'";
	$login=$result->login($sqlstr,$conn);
	$chkinfo=$result->chkinfo($sqlstr,$conn);
	
	//$u_rst = $conn->execute($sqlstr);
	if($login==true){
		/*if($u_rst->fields[11] == "0")
			echo "<script>alert('该帐号被冻结!');history.go(-1);</script>";
			}else{
		*/
            $_SESSION["name"]=$chkinfo[0]['tb_video_user'];
			$_SESSION["id"]=$chkinfo[0]['tb_user_id' ];
			
/*$smarty->assign("name",$_SESSION['name']);
$smarty->assign("id",$_SESSION[id]);
$smarty->assign("grades",$_SESSION[grades]);
$smarty->assign("counts",$_SESSION[counts]);
*/

			echo "<script>alert('用户登录成功!');location='index.php';</script>";
		
	}else{
		echo "<script>alert('用户名或密码错误，请重新登录。');history.go(-1);</script>";
	}

$smarty->display("index.tpl");

?>