<?php 
session_start(); include_once("conn/conn.php");
if($_SESSION["tb_forum_user"]==true){				//�ж��Ƿ�����ȷ��¼
if(file_exists($_GET[accessories])==false)
{
 echo "<script>alert('���ļ���ɾ�����������Ա��ϵ��');history.back();</script>";
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
   echo "<script>alert('�Բ��������������ظø��������ȵ�¼����վ��лл!');history.back();</script>";


}
?>