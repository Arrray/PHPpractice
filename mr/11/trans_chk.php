<?php
	session_start();
	include ("conn/conn.class.php");
	//判断文件后缀
	//$f_type：允许文件的后缀类型
	//$f_upfiles：上传文件名
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
	/*  判断上传图片类型和文件大小，上传图片 */
	if($_FILES['tb_video_picture']['size'] > 0 and $_FILES['tb_video_picture']['size'] < 700000){
		if(($postf = f_postfix($p_type,$_FILES['tb_video_picture']['name'])) != false){
			$picture_path = time().".".$postf;
			$tb_video_picture=$video_path."/".$picture_path;
				if($_FILES['tb_video_picture']['tmp_name'])
					move_uploaded_file($_FILES['tb_video_picture']['tmp_name'],$video_path."\\".$picture_path);
				else{
					echo "<script>alert('上传图片失败！');history.go(-1);</script>";
					exit();
				}
		}else{
			echo "<script>alert('上传图片格式错误！');history.go(-1);</script>";
			exit();
		}
	}else if($_FILES['tb_video_picture']['size'] > 700000){
			echo "<script>alert('上传图片大小超出范围！');history.go(-1);</script>";
			exit();
	}else{
		$picture = "";
	}

	/******************************/
	/*  判断上传文件类型与大小，上传文件  */
	if($_FILES['tb_video_address']['size'] > 0){
		//如果是音频文件
			if($_FILES['tb_video_address']['size'] < 70000000){
				if(($postf = f_postfix($f_type,$_FILES['tb_video_address']['name'])) != false){
					$file_path = time().".".$postf;
	$tb_video_address=$video_path."/".$file_path;
					if($_FILES['tb_video_address']['tmp_name'])
						move_uploaded_file($_FILES['tb_video_address']['tmp_name'],$video_path."\\".$file_path);
					else{
						echo "<script>alert('上传文件错误！');history.go(-1);</script>";
						exit();
					}
				}else{
					echo "<script>alert('上传文件格式错误！');history.back(-1);</script>";
					exit();
				}
			}else{
				echo "<script>alert('上传文件大小错误！');history.go(-1);</script>";
				exit();
			}
	}else{
		echo "<script>alert('没有上传文件或文件大于60M');history.go(-1);</script>";
		exit();
	}
	/****************/
	/*  相同的信息  */
	$tb_video_name = $_POST['tb_video_name'];					//视频名称
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



		echo "<script>alert('添加成功');window.location.href='trans.php';</script>";
include_once("subscibe.php");
		exit();	
	}else{
		echo "<script>alert('添加失败');history.go(-1);</script>";
		exit();
	}
?>