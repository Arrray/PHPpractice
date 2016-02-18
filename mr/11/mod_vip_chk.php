<?php
	session_start();
	include_once("conn/conn.class.php");
		$password = $_POST["password"];
		$email = $_POST["email"];
		$qq = $_POST["qq"];
		if(!empty($password)){
		$up_sqlstr = "update tb_video_user set tb_video_pass = '$password',tb_video_email='$email',tb_video_qq='$qq' where tb_user_id = ".$_POST['id']."";
		$getresult=$result->indeup($up_sqlstr,$conn);
		  if($getresult==false){
		       echo "<script>alert('信息修改失败!');history.go(-1);</script>";
	      }else{
		       echo "<script>alert('信息修改成功!');window.close();</script>";
	           }
		 }
		
		//if($getresult==false){
		//echo "Failed";
		//}
		/*
	if($getresult == false){
		echo "<script>alert('修改错误：".urlencode($conn->Errormsg())."');history.go(-1);</script>";
	}else{
		echo "<script>alert('信息修改成功!');window.close();</script>";
	}
	*/
?>