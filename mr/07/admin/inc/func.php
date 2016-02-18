<?php
	//����ͼƬ�Ŀ��������Ϊ$width
	function getWidth($filepath,$width='',$height=''){
		$fileinfo = getimagesize($filepath);
		$filewidth = $fileinfo[0];
		$fileheight = $fileinfo[1];
		if($width != '' and $height != ''){
			if($filewidth > $fileheight){
				if($filewidth > $width){
					$filewidth = $width;
				}
			}else{
				if($fileheight > $height){
					$filewidth = $filewidth / ($fileheight / $height);
				}
			}
		}
		return $filewidth;
	}
	//����ͼƬ�ĸߣ��������Ϊ$height
	function getHeight($filepath,$width='',$height=''){
		$fileinfo = getimagesize($filepath);
		$filewidth = $fileinfo[0];
		$fileheight = $fileinfo[1];
		if($width != '' and $height != ''){
			if($fileheight > $filewidth){
				if($fileheight > $height){
					$fileheight = $height;
				}
			}else{
				if($filewidth > $width){
					$fileheight = $fileheight / ($filewidth / $width);
				}
			}
		}
		return $fileheight;
	}
?>