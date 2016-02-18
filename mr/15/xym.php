<?php
$num=$_GET[num];   //获得传递的数字
$address="img/code/".$num.".gif";   //获取对应图片地质
$fp=fopen($address,"r");  //打开对应的图片
echo fread($fp,filesize($address)); //将图片以二进制的形式输出到浏览器
fclose($fp);  //关闭打开的图片
?>



