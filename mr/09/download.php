<?php
	include_once("conn/conn.class.php");		      //�������ݿ�
	$address = $_GET[id];			                  //��ȡ�ļ�������
	if($_GET[action] == "video"){
		$a_sql = "select address,downTime from tb_video where id = '".$address."'";
		$a_rst = $result->singleRow($a_sql,$conn);    //�����ļ�����ִ�в�ѯ���
		$a_rsti=$result->login($a_sql,$conn);
		if($a_rsti==true){
		
		
			$downtime = $a_rst[downTime] + 1;         //�������ش���
			$updata="update tb_video set downTime = $downtime where id = '".$address."'";
			$result->indeup($updata,$conn);
			$addr=$a_rst["address"];
			$path = "upfiles/video/".$addr;	          //��ȡ�ļ��ڷ������д洢��λ��
			
		}
	}
	
if(file_exists($path)==false){		                  //�ж��ļ��Ƿ����
 echo "<script>alert('�����ص��ļ���ɾ��');history.back();</script>";
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