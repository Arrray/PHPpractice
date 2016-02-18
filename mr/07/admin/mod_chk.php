<?php
	/* 获取各个参数
	 * 
	 */
	 session_start();
	 include_once 'inc/func.php';
	 $smallact = $_GET['smallact'];					//图片类别
	 $picpath = $_GET['picpath'];					//图片路径
	 $flyword=$_GET['flyword'];						//添加文字
	 $flyword = iconv('gb2312','utf-8',$flyword);	//转换文字
	 $fontstyle=$_GET['fontstyle'];					//字体名称
	 $fontcolor=$_GET['fontcolor'];					//字体颜色
	 $bigfont = $_GET['bigfont'];					//字体大小
	 $left=$_GET['left'];							//横向坐标（第一个字的左上脚）
	 $top=$_GET['top'];								//纵向坐标（第一个字的左上脚）
	 $width=$_GET['width'];							//文字宽度
	 $height=$_GET['height'];						//文字高度
	 //根据不同的文件类型打开图片
	 $picinfo = getimagesize($picpath);
	 if($picinfo[2] == 1){
		$source = imagecreatefromgif($picpath);
	 }else if($picinfo[2] == 2){
		$source = imagecreatefromjpeg($picpath);
	 }
	 $red = '0x'.substr($fontcolor,0,2);
	 $green = '0x'.substr($fontcolor,2,2);
	 $blue = '0x'.substr($fontcolor,4,2);
	 //为文字着色 及 文字的透明度设置
	 $font_handle = imagecolorallocatealpha($source,$red,$green,$blue,0);
	//添加文字
	imagettftext($source,$bigfont,0,$left,($top+$height),$font_handle,'fontstyle/'.$fontstyle.'.ttf',$flyword);
	imagejpeg($source,$picpath);
	echo "<script>alert('添加文字成功');top.opener.location.reload();window.close();</script>";
?>