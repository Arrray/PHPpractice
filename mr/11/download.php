<?php
header("Content-type:text/html;charset=gb2312");
	include ("conn/conn.class.php");
	$tb_video = $_GET['id'];
	$ll_sqlstr="select * from tb_video where tb_video_id=".$tb_video."";
	$array=$result->getRows($ll_sqlstr,$conn);
if($array[0]['tb_video_auditing']==0){
echo "��ѡ�����Ƶ�ļ�δͨ����ˣ��������أ��Բ���";
}else{
	$a_sql = "select tb_video_address from tb_video where tb_video_id = '".$tb_video."'";
	$a_rst = $result->getRows($a_sql,$conn);
	if(count($a_rst)>0){
	$path=$a_rst[0][tb_video_address];
	}
	/*
	if(!$a_rst->eof){
		$path = $a_rst->fields[0];
	}
	*/

if(file_exists($path)==false){
 echo "<script>alert('�������ļ���ɾ�����������Ա��ϵ��');history.back();</script>";
 exit;
}
$filename=basename($path);
$file=fopen($path,"r");
header("Content-type:application/octet-stream");
header("Accept-ranges:bytes");
header("Accept-length:".filesize($path));
header("Content-Disposition:attachment;filename=".$filename);
echo fread($file,filesize($path));
	$update="update tb_video set tb_video_down=tb_video_down+1 where tb_video_id='".$tb_video."'";
	$c_rst = $result->indeup($update);

fclose($file);
exit;

}
?>