<?php
	header('Content-Type:image/jpeg');
	$im = imagecreatefromjpeg('2.jpg');
	$color1 = imagecolorallocate($im, 255, 255, 255);
	$color2 = imagecolorallocate($im, 200, 0, 255);
	$color3 = imagecolorallocate($im, 20, 180, 25);
	$color4 = imagecolorallocate($im, 15, 50, 200);
	$font = 'simhei.ttf';
	imagettftext($im, 60, 0, 150, 75, $color1, $font, iconv('gb2312','utf-8','文字写入……'));
	imagettftext($im, 60, 180, 600, 100, $color2, $font, iconv('gb2312','utf-8','文字写入……'));
	imagettftext($im, 60, 90, 100, 500, $color3, $font, iconv('gb2312','utf-8','文字写入……'));
	imagettftext($im, 60, 270, 650, 10, $color4, $font, iconv('gb2312','utf-8','文字写入……'));
	imagejpeg($im);
	imagedestroy($im);
?> 