<?php
$filename=$_GET['filename'];
$rid = $_GET['rid'];
@$conn = mysql_connect('127.0.0.1', 'root', 'root');
@mysql_select_db('db_mrbooks_cn', $conn);
@mysql_query("update tb_read set downtimes = downtimes+1 where id='$rid'", $conn);

if(file_exists($filename)==false)
{
 echo "<script>alert('对不起，本站暂时停止该文件下载!');history.back();</script>";
 exit;
}

$fp=fopen($filename,"r");
header("Content-type:application/octet-stream");
header("Accept-ranges:bytes");
header("Accept-length:".filesize($filename));
header("Content-Disposition:attachment;filename=".$filename);
echo fread($fp,filesize($filename));
fclose($fp);

