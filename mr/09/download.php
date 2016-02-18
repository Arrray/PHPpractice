<?php
	include_once("conn/conn.class.php");		      //链接数据库
	$address = $_GET[id];			                  //获取文件的名称
	if($_GET[action] == "video"){
		$a_sql = "select address,downTime from tb_video where id = '".$address."'";
		$a_rst = $result->singleRow($a_sql,$conn);    //根据文件名称执行查询语句
		$a_rsti=$result->login($a_sql,$conn);
		if($a_rsti==true){
		
		
			$downtime = $a_rst[downTime] + 1;         //更新下载次数
			$updata="update tb_video set downTime = $downtime where id = '".$address."'";
			$result->indeup($updata,$conn);
			$addr=$a_rst["address"];
			$path = "upfiles/video/".$addr;	          //获取文件在服务器中存储的位置
			
		}
	}
	
if(file_exists($path)==false){		                  //判断文件是否存在
 echo "<script>alert('您下载的文件已删除');history.back();</script>";
 exit;
}
$filename=basename($path);
$file=fopen($path,"r");
header("Content-type:application/octet-stream");
header("Accept-ranges:bytes");
header("Accept-length:".filesize($path));
header("Content-Disposition:attachment;filename=".$filename);
echo fread($file,filesize($path));
fclose($file);
exit;
?>