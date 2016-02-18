<?php
	session_start();
	include "conn/conn.php";
	include_once("conn/conn.class.php");
	$c_sql = "select * from tb_video_user where tb_video_user = '".$_POST["name"]."'";
	$register=$result->login($c_sql,$conn);
	
	if($register==true){
			echo "<script>alert('用户名重复，请重新输入');history.go(-1);</script>";
			exit();
		}
		
		if(isset($_POST["regi"])){                               //如果传递值是提交
		    if(!empty($_FILES["head_picture"]["tmp_name"])){     //判断用户是否上传头像
		      $head_pictures=$_FILES["head_picture"]["size"];    //将打算上传文件的大小赋值给$head_picture变量
		      if($head_pictures>2000000){
			     echo "<script>alert('您上传的文件超过规定的大小！');history.go(-1);</script>";
			     exit();
		         }
				 $fp=fopen($_FILES["head_picture"]["tmp_name"],"rb");      //将已上传的临时文件打开
		         $head_picture=addslashes(fread($fp,$head_pictures));      //将打开的文件以使用反斜线引用形式赋给$head_picture
				 }else{
			 $newfp="moren.gif";                                           //如果没有上传头像则使用默认头像      
			 $fp=fopen($newfp,"rb");
			 $head_picture=addslashes(fread($fp,filesize($newfp)));
			  }
		}
		$sqlstr = "insert into tb_video_user(tb_video_user,tb_video_pass,tb_video_question,tb_video_answer,tb_video_email,tb_video_qq,tb_video_popedom,tb_user_picture) values ('".$_POST["name"]."','".$_POST["password"]."','".$_POST["question"]."','".$_POST["answer"]."','".$_POST["email"]."','".$_POST["qq"]."',0,'".$head_picture."')";                 
		
		$getresult=$result->indeup($sqlstr,$conn);               //将用户的注册资料插入数据库中
		if($getresult==false){
		     echo "<script>alert('添加错误：".$conn->Errormsg()."');history.go(-1);</script>";
		}else{
		     echo "<script>alert('恭喜,用户注册成功.请重新登录');window.close();</script>";
		}
		
?>