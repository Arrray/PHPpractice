<?php
	session_start();
	header('Content-Type:text/html;charset=gb2312');
	include_once 'conn/conn.php';
	include_once 'config.php';
	include_once 'inc/admin.php';
	$act = $_GET['act'];
	if($act == 'del'){
		$chk = $_POST['chk'];
		$sql = "delete from tb_uppics where id = -1 ";
		$cont = 'ɾ��������ɾ����ͼƬ��';
		if(!empty($chk)){
			foreach($chk as $value){
				$linkname = $conne->getFields('select id,picpath from tb_uppics where id = '.$value,1);
				echo "<script>alert('".$_SERVER['DOCUMENT_ROOT'].ROOT.PIC.$linkname."');</script>";
				if(file_exists($_SERVER['DOCUMENT_ROOT'].ROOT.PIC.$linkname)){
					unlink($_SERVER['DOCUMENT_ROOT'].ROOT.PIC.$linkname);
					$cont .= $value.' ';
					$sql .= "or id = ".$value." ";
				}
			}
			$num = $conne->uidRst($sql);
			if(!empty($num)){
				echo "<script>alert('ɾ���ɹ�');location='pics.php';</script>";
			}else{
				echo "<script>alert('��ͼƬ��ɾ����');location='pics.php';</script>";
			}
		}
	}
?>