<?php 
session_start(); include_once("conn/conn.php");
if($_SESSION["tb_forum_user"]==true){				//判断是否是正确登录
if(file_exists($_GET[accessories])==false)
{
 echo "<script>alert('该文件已删除，请与管理员联系。');history.back();</script>";
 exit;
}
$filename=basename($_GET[accessories]);
$file=fopen($_GET[accessories],"r");
header("Content-type:application/octet-stream");
header("Accept-ranges:bytes");
header("Accept-length:".filesize($_GET[accessories]));
header("Content-Disposition:attachment;filename=".$filename);
echo fread($file,filesize($_GET[accessories]));
fclose($file);
exit;
}
else{
   echo "<script>alert('对不起，您不可以下载该附件，请先登录到本站，谢谢!');history.back();</script>";


}
?>