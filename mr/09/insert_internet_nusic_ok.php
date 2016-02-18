<?php 
include_once("conn/conn.class.php");
if($_POST["Submit"] == true){
	$sqlstr="select * from tb_internet_video where tb_song_name='".$_POST["song_name"]."' and tb_singer_name='".$_POST["singer_name"]."'";
	$array=$result->GetRows($sqlstr,$conn);
	if(count($array)<=0){
	$a_sqlstr = "insert into tb_internet_video (tb_song_name,tb_singer_name,tb_internet_address,tb_music_user) values('".$_POST[song_name]."','".$_POST[singer_name]."','".$_POST[internet_address]."','".$_POST[tb_music_user]."')";
	$a_rst = $result->indeup($a_sqlstr,$conn);

if($a_rst){
echo "<script>alert('添加成功！'); history.back();</script>";
}
}else{
echo "<script>alert('您上传的音乐已经存在');history.back();</script>";
}

	}else{
		echo "<script>alert('添加失败！');window.close();</script>";
		exit();
	}

?>