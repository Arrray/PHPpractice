<?php
	session_start();
	include "conn/conn.php";
	include_once("conn/conn.class.php");
	$c_sql = "select * from tb_video_user where tb_video_user = '".$_POST["name"]."'";
	$register=$result->login($c_sql,$conn);
	
	if($register==true){
			echo "<script>alert('�û����ظ�������������');history.go(-1);</script>";
			exit();
		}
		
		if(isset($_POST["regi"])){                               //�������ֵ���ύ
		    if(!empty($_FILES["head_picture"]["tmp_name"])){     //�ж��û��Ƿ��ϴ�ͷ��
		      $head_pictures=$_FILES["head_picture"]["size"];    //�������ϴ��ļ��Ĵ�С��ֵ��$head_picture����
		      if($head_pictures>2000000){
			     echo "<script>alert('���ϴ����ļ������涨�Ĵ�С��');history.go(-1);</script>";
			     exit();
		         }
				 $fp=fopen($_FILES["head_picture"]["tmp_name"],"rb");      //�����ϴ�����ʱ�ļ���
		         $head_picture=addslashes(fread($fp,$head_pictures));      //���򿪵��ļ���ʹ�÷�б��������ʽ����$head_picture
				 }else{
			 $newfp="moren.gif";                                           //���û���ϴ�ͷ����ʹ��Ĭ��ͷ��      
			 $fp=fopen($newfp,"rb");
			 $head_picture=addslashes(fread($fp,filesize($newfp)));
			  }
		}
		$sqlstr = "insert into tb_video_user(tb_video_user,tb_video_pass,tb_video_question,tb_video_answer,tb_video_email,tb_video_qq,tb_video_popedom,tb_user_picture) values ('".$_POST["name"]."','".$_POST["password"]."','".$_POST["question"]."','".$_POST["answer"]."','".$_POST["email"]."','".$_POST["qq"]."',0,'".$head_picture."')";                 
		
		$getresult=$result->indeup($sqlstr,$conn);               //���û���ע�����ϲ������ݿ���
		if($getresult==false){
		     echo "<script>alert('��Ӵ���".$conn->Errormsg()."');history.go(-1);</script>";
		}else{
		     echo "<script>alert('��ϲ,�û�ע��ɹ�.�����µ�¼');window.close();</script>";
		}
		
?>