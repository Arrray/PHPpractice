<?php
	session_start();
	header('Content-Type:text/html;charset=gb2312');
	include_once 'conn/conn.php';
	include_once 'inc/admin.php';
	//�ϴ�ͼƬ���ơ�����ļ���ͼƬ����
	$picname = $_POST['picname'];
	$typename = $_POST['pictype'];
	$file = $_FILES['uppath'];
	$bewrite = $_POST['picmess'];
	//�ϴ�ͼƬ����Ϣ����
	$fileinfo = getimagesize($file['tmp_name']);
	//�ж��ϴ��ļ���С
	if($file['size'] > (1024 * 20000)){
		echo "<script>alert('�ϴ��ļ�����200K�����ޣ�');history.go(-1);</script>";
		exit();
	}
	//�ж��ϴ��ļ����ͣ�ֻ�����ϴ�jpg��gif����
	if((false == $fileinfo) or ($fileinfo[2] != 1 and $fileinfo[2] != 2)){
		echo "<script>alert('�ϴ��ļ����ʹ���');history.go(-1);</script>";
		exit();
	}
	//�������ļ���
	$newname = time().strrchr($file['name'],'.');
	//�ϴ�ͼƬ
	move_uploaded_file($file['tmp_name'],'../uppics/'.$newname);
	//��������ͼ
	//��ԭʼͼƬ
	if($fileinfo[2] == 1){
		$source = imagecreatefromgif('../uppics/'.$newname);
	}else if($fileinfo[2] == 2){
		$source = imagecreatefromjpeg('../uppics/'.$newname);
	}
	//��������ͼ�ĳ��Ϳ�
	$oldwidth = $fileinfo[0];
	$oldheight = $fileinfo[1];
	if($oldwidth > $oldheight){
		$newwidth = 50;
		$newheight = $oldheight / ($oldwidth / 50);
	}else{
		$newheight = 50;
		$newwidth = $oldwidth / ($oldheight / 50);
	}
	//��������
	$dst = imagecreatetruecolor($newwidth,$newheight);
	//����ͼƬ
	imagecopyresized($dst,$source, 0, 0, 0, 0, $newwidth, $newheight, $oldwidth, $oldheight);
	//��������ͼ
	imagejpeg($dst,'../uppics/breviary/'.$newname);
	//���ٻ���
	imagedestroy($dst);
	//���浽���ݿ�
	$tmpnum = $conne->getRowsNum("select id from tb_photo where typename = ".$typename);
	if($tmpnum == 0){
		$upsql = "update tb_type set indexpic = '".$newname."' where id = ".$typename;
		$upnum = $conne->uidRst($upsql);
	}
	
	
	$sql = "insert into tb_photo(typename,picname,picpath,bewrite,upname) values(".$typename.",'".$picname."','".$newname."','".$bewrite."','".$_SESSION['name']."')";
	$num = $conne->uidRst($sql);
	
	
	echo "<script>alert('�ϴ��ļ��ɹ���');location='index.php?act=upload';</script>";
	exit();
?>