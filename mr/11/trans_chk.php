<?php
	session_start();
	include ("conn/conn.class.php");
	//�ж��ļ���׺
	//$f_type�������ļ��ĺ�׺����
	//$f_upfiles���ϴ��ļ���
	function f_postfix($f_type,$f_upfiles){
		$is_pass = false;
		$tmp_upfiles = split("\.",$f_upfiles);
		$tmp_num = count($tmp_upfiles);
		for($num = 0; $num < count($f_type);$num++){
			if(strtolower($tmp_upfiles[$tmp_num - 1]) == $f_type[$num])
				$is_pass = $f_type[$num];
		}
		return $is_pass;
	}
	$p_type = array("jpg","jpeg","bmp","gif");
	$f_type = array("avi","rm","rmvb","wav","mp3","mpg");
	$video_path = "upfiles/video";
	$picture_path ="";
	$file_path = "";
	/*  �ж��ϴ�ͼƬ���ͺ��ļ���С���ϴ�ͼƬ */
	if($_FILES['tb_video_picture']['size'] > 0 and $_FILES['tb_video_picture']['size'] < 700000){
		if(($postf = f_postfix($p_type,$_FILES['tb_video_picture']['name'])) != false){
			$picture_path = time().".".$postf;
			$tb_video_picture=$video_path."/".$picture_path;
				if($_FILES['tb_video_picture']['tmp_name'])
					move_uploaded_file($_FILES['tb_video_picture']['tmp_name'],$video_path."\\".$picture_path);
				else{
					echo "<script>alert('�ϴ�ͼƬʧ�ܣ�');history.go(-1);</script>";
					exit();
				}
		}else{
			echo "<script>alert('�ϴ�ͼƬ��ʽ����');history.go(-1);</script>";
			exit();
		}
	}else if($_FILES['tb_video_picture']['size'] > 700000){
			echo "<script>alert('�ϴ�ͼƬ��С������Χ��');history.go(-1);</script>";
			exit();
	}else{
		$picture = "";
	}

	/******************************/
	/*  �ж��ϴ��ļ��������С���ϴ��ļ�  */
	if($_FILES['tb_video_address']['size'] > 0){
		//�������Ƶ�ļ�
			if($_FILES['tb_video_address']['size'] < 70000000){
				if(($postf = f_postfix($f_type,$_FILES['tb_video_address']['name'])) != false){
					$file_path = time().".".$postf;
	$tb_video_address=$video_path."/".$file_path;
					if($_FILES['tb_video_address']['tmp_name'])
						move_uploaded_file($_FILES['tb_video_address']['tmp_name'],$video_path."\\".$file_path);
					else{
						echo "<script>alert('�ϴ��ļ�����');history.go(-1);</script>";
						exit();
					}
				}else{
					echo "<script>alert('�ϴ��ļ���ʽ����');history.back(-1);</script>";
					exit();
				}
			}else{
				echo "<script>alert('�ϴ��ļ���С����');history.go(-1);</script>";
				exit();
			}
	}else{
		echo "<script>alert('û���ϴ��ļ����ļ�����60M');history.go(-1);</script>";
		exit();
	}
	/****************/
	/*  ��ͬ����Ϣ  */
	$tb_video_name = $_POST['tb_video_name'];					//��Ƶ����
	$tb_video_type = $_POST['tb_video_type'];			
	$tb_video_explain = $_POST['tb_video_explain'];
	$tb_video_author = $_POST['tb_video_author'];
	$tb_video_date = date("Y-m-d H:i:s");
	/*****************/
 
		$a_sqlstr = "insert into tb_video (tb_video_name,tb_video_picture,tb_video_type,tb_video_address,tb_video_author,tb_video_date,tb_video_explain,tb_video_auditing) values('$tb_video_name','$tb_video_picture','$tb_video_type','$tb_video_address','$tb_video_author','$tb_video_date','$tb_video_explain','0')";
		
	/***************************/

	$a_rst = $result->indeup($a_sqlstr,$conn);
	if(!($a_rst == false)){

$b_sqlstr="select * from tb_up_video where tb_video_user='$tb_video_author'";	
$arrays=$result->getRows($b_sqlstr,$conn);

if(count($arrays)<=0){

$b1_sqlstr="insert into tb_up_video (tb_video_user,tb_up_counts)values('$tb_video_author','1')";
$b1_rst=$result->indeup($b1_sqlstr,$conn);	

}else{
$b2_sqlstr="update tb_up_video set tb_up_counts=tb_up_counts+1 where tb_video_user='$tb_video_author'";
$b2_rst=$result->indeup($b2_sqlstr,$conn);	
}



		echo "<script>alert('��ӳɹ�');window.location.href='trans.php';</script>";
include_once("subscibe.php");
		exit();	
	}else{
		echo "<script>alert('���ʧ��');history.go(-1);</script>";
		exit();
	}
?>