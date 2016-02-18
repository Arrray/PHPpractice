<?php
	session_start();
	header('Content-Type:text/html;charset=gb2312');
	include_once 'conn/conn.php';
	include_once 'inc/admin.php';
	//上传图片名称、类别、文件和图片描述
	$picname = $_POST['picname'];
	$typename = $_POST['pictype'];
	$file = $_FILES['uppath'];
	$bewrite = $_POST['picmess'];
	//上传图片的信息数组
	$fileinfo = getimagesize($file['tmp_name']);
	//判断上传文件大小
	if($file['size'] > (1024 * 20000)){
		echo "<script>alert('上传文件超过200K的上限！');history.go(-1);</script>";
		exit();
	}
	//判断上传文件类型，只允许上传jpg和gif类型
	if((false == $fileinfo) or ($fileinfo[2] != 1 and $fileinfo[2] != 2)){
		echo "<script>alert('上传文件类型错误！');history.go(-1);</script>";
		exit();
	}
	//生成新文件名
	$newname = time().strrchr($file['name'],'.');
	//上传图片
	move_uploaded_file($file['tmp_name'],'../uppics/'.$newname);
	//生成缩略图
	//打开原始图片
	if($fileinfo[2] == 1){
		$source = imagecreatefromgif('../uppics/'.$newname);
	}else if($fileinfo[2] == 2){
		$source = imagecreatefromjpeg('../uppics/'.$newname);
	}
	//设置缩略图的长和宽
	$oldwidth = $fileinfo[0];
	$oldheight = $fileinfo[1];
	if($oldwidth > $oldheight){
		$newwidth = 50;
		$newheight = $oldheight / ($oldwidth / 50);
	}else{
		$newheight = 50;
		$newwidth = $oldwidth / ($oldheight / 50);
	}
	//创建画板
	$dst = imagecreatetruecolor($newwidth,$newheight);
	//复制图片
	imagecopyresized($dst,$source, 0, 0, 0, 0, $newwidth, $newheight, $oldwidth, $oldheight);
	//保存缩略图
	imagejpeg($dst,'../uppics/breviary/'.$newname);
	//销毁画板
	imagedestroy($dst);
	//保存到数据库
	$tmpnum = $conne->getRowsNum("select id from tb_photo where typename = ".$typename);
	if($tmpnum == 0){
		$upsql = "update tb_type set indexpic = '".$newname."' where id = ".$typename;
		$upnum = $conne->uidRst($upsql);
	}
	
	
	$sql = "insert into tb_photo(typename,picname,picpath,bewrite,upname) values(".$typename.",'".$picname."','".$newname."','".$bewrite."','".$_SESSION['name']."')";
	$num = $conne->uidRst($sql);
	
	
	echo "<script>alert('上传文件成功！');location='index.php?act=upload';</script>";
	exit();
?>