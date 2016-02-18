<?php	session_start();
include_once("conn/conn.class.php");
include_once("inc/chec.php");

//判断上传文件的格式是否正确
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
//判断上传的音乐是否存在
$sqlstr="select name,actor from tb_video where name='".$_POST[names]."' and actor='".$_POST[actor]."'";
$rstcount=$result->login($sqlstr,$conn);
if($rstcount==true){
	echo "<script>alert('您上传的音乐已经存在！');history.go(-1);</script>";
}else{
	$p_type = array("jpg","jpeg","bmp","gif");					//定义上传图片的类型
	$f_type = array("avi","rm","rmvb","wav","mp3","mpg");		//定义上传文件的类型
	$video_path = "../upfiles//video";								//定义文件存储的位置
	$lyric_path = "../upfiles//lyric";
	$picture_path ="";											//定义图片的名称
	$file_path = "";
	/*  判断上传图片类型和文件大小，上传图片 */
	if($_FILES[picture][size] > 0 and $_FILES[picture][size] < 700000){
		if(($postf = f_postfix($p_type,$_FILES[picture][name])) != false){
			$picture_path = time().".".$postf;
		
				if($_FILES[picture][tmp_name])
					move_uploaded_file($_FILES[picture][tmp_name],$video_path."\\".$picture_path);
				else{
					echo "<script>alert('上传图片失败！');history.go(-1);</script>";
					exit();
				}
		
		}else{
			echo "<script>alert('上传图片格式错误！');history.go(-1);</script>";
			exit();
		}
	}else if($_FILES[picture][size] > 700000){
			echo "<script>alert('上传图片大小超出范围！');history.go(-1);</script>";
			exit();
	}else{
		$picture = "";
	}

	/******************************/
	/*  判断上传文件类型与大小，上传文件  */
	if($_FILES[address][size] > 0){
		
			if($_FILES[address][size] < 10000000){
				if(($postf = f_postfix($f_type,$_FILES[address][name])) != false){
					$file_path = time().".".$postf;
					if($_FILES[address][tmp_name])
						move_uploaded_file($_FILES[address][tmp_name],$video_path."\\".$file_path);
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
		echo "<script>alert('没有上传文件或文件大于300M');history.go(-1);</script>";
		exit();
	}
	/*  相同的信息  */
	$names = $_POST[names];					//视频名称
	$grade = $_POST[grade];					//级别
	$sizes = $_FILES[address][size];
	$publisher = $_POST[publisher];			
	$actor = $_POST[actor];
	$language = $_POST[language];
	$style = $_POST[style];
	$type_1 = $_POST[type_1];
	$froms = $_POST[from];
	$publishtime = $_POST[publishtime];
	$news = $_POST[news];
	$remark = $_POST[remark];
	
//判断是否上传了歌词文件
if($_FILES[lyric][size] > 0){
		if($_FILES[lyric][size] < 10000000){
			$name=$_FILES['lyric']['name']; 		//获取客户端机器原文件的名称
			$type=strstr($name,"."); 				//获取从"."到最后的字符
			if($type==".lrc"){
				$file_paths = time().$type;		//获取上传文件的名称
				$file_pathes = time();				//获取上传文件名称，除后缀之外
				if($_FILES[lyric][tmp_name])
					move_uploaded_file($_FILES[lyric][tmp_name],$lyric_path."\\".$file_paths);
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

		//保存路径
		$actortype = $_POST[actortype];
		$ci = $_POST[ci];
		$qu = $_POST[qu];
		$a_sqlstr = "insert into tb_video (name,picture,actor,ci,qu,actortype,type,style,publisher,froms,sizes,languages,publishTime,remark,property,address,userName,issueDate,lyric) values('$names','$picture_path','$actor','$ci','$qu','$actortype','$type_1','$style','$publisher','$froms','$sizes','$language','$publishtime','$remark','用户','$file_path','$_SESSION[name]','".date("Y-m-d H:i:s")."','$file_pathes')";
	/*  上传图片和文件 */
		
	/***************************/

	$a_rst = $result->indeup($a_sqlstr,$conn);
	if(!($a_rst == false)){
	echo "<script>top.opener.location.reload();alert('添加成功');window.close();</script>";
//echo "<meta http-equiv=\"Refresh\" content=\"3;url=main.php?action=video\">添加成功，3秒钟转入主页,请稍等......";	
		exit();
		
	}else{
		echo "<script>alert('添加失败');history.go(-1);</script>";
		exit();
	}

}else{
	/*****************/

		//保存路径
		$actortype = $_POST[actortype];
		$ci = $_POST[ci];
		$qu = $_POST[qu];
		$a_sqlstr = "insert into tb_video (name,picture,actor,ci,qu,actortype,type,style,publisher,froms,sizes,languages,publishTime,remark,property,address,userName,issueDate) values('$names','$picture_path','$actor','$ci','$qu','$actortype','$type_1','$style','$publisher','$froms','$sizes','$language','$publishtime','$remark','用户','$file_path','$_SESSION[name]','".date("Y-m-d H:i:s")."')";
	
	/*  上传图片和文件 */
		
	/***************************/

	$a_rst = $result->indeup($a_sqlstr,$conn);
	if(!($a_rst == false)){
	echo "<script>top.opener.location.reload();alert('添加成功');window.close();</script>";
//echo "<meta http-equiv=\"Refresh\" content=\"3;url=main.php?action=video\">添加成功，3秒钟转入主页,请稍等......";
	
		exit();
	
	}else{
		echo "<script>alert('添加失败');history.go(-1);</script>";
		exit();
	}
}
}
?>