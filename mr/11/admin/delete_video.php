<?php  include_once("conn/conn.class.php");
$video_file="../".$_GET["video_file"];
$video_picture="../".$_GET["video_picture"];


if(file_exists($video_file) and file_exists($video_picture)){
	if(unlink($video_file) and unlink($video_picture)){

	$sqls="delete from tb_video where tb_video_id='".$_GET['video_id']."'";
	$rets=$result->indeup($sqls,$conn);

	$sql="delete from tb_video_discuss where tb_video_id=".$_GET['video_id']."";
	$ret=$result->indeup($sql,$conn);
		
	echo "<script>alert('删除成功！'); history.back();</script>";
		
	}else{
		echo "<script>alert('该文件不存在！'); history.back();</script>";
	}
}
?>