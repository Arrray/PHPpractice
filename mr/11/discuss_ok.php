<?php 
header('Content-Type: text/html; charset=gb2312' );

include_once("conn/conn.class.php");
$sql = "insert into tb_video_discuss (tb_discuss_user,tb_discuss_content,tb_discuss_date,tb_video_id) values('".$_GET[discuss_user]."','".$_GET[discuss_content]."','".$_GET[discuss_date]."','".$_GET['video_id']."')";
		
	$a_rst = $result->indeup($sql,$conn);
	if(!($a_rst == false)){

$update="update tb_video set tb_video_counts=tb_video_counts+1 where tb_video_id='".$_GET['video_id']."'";
		$b_rst = $result->indeup($update,$conn);
	include_once("discuss_update.php");			//重新调用文件输出评论信息
	}else{
		echo "更新失败";
	}
?>
