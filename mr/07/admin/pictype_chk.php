<?php
	session_start();
	header('Content-Type:text/html; charset=gb2312');
	include_once 'conn/conn.php';
	include_once 'inc/admin.php';
	//�������û�
	$act = $_GET['act'];
	if($act == 'addtype'){
		$addpictype = trim($_POST['addpictype']);
		$ispub = trim($_POST['ispub']);
		$typepwd = md5(trim($_GET['typepwd']));
		//�ж���������Ƿ��ظ�
		$selsql = "select * from tb_type where typename = '".$addpictype."' and membername = '".$_SESSION['name']."'";
		$selnum = $conne->getRowsNum($selsql);
		if($selnum >= 1){
			echo "<script>alert('�����ظ������������');history.go(-1);</script>";
		}else if($selnum == 0){
			$inssql = "insert into tb_type(typename,membername,level,typepwd,indexpic) values('".$addpictype."','".$_SESSION['name']."',".$ispub.",'".$typepwd."','null.jpg')";
			$typenum = $conne->uidRst($inssql);
			$conne->close_rst();
			if($typenum == 1){
				echo "<script>alert('��ӳɹ�');location=('index.php?act=type');</script>";
			}else{
				echo "<script>alert('���ʧ��');;history.go(-1);</script>";
			}
		}
	}else if($act == 'modtype'){
		$id = $_POST['hiddenid'];
		$modpictype = trim($_POST['modpictype']);
		$ispub1 = trim($_POST['ispub1']);
		$typepwd1 = md5(trim($_POST['typepwd1']));
		//�ж��޸ĺ�������Ƿ��ظ�
		$selsql = "select * from tb_type where typename = '".$modpictype."' and membername = '".$_SESSION['name']."'";
		$selnum = $conne->getRowsNum($selsql);
		if($selnum > 1){
			echo "<script>alert('�����ظ����������޸�');history.go(-1);</script>";
		}else{
			$updatesql = "update tb_type set typename = '".$modpictype."',level=".$ispub1.",typepwd='".$typepwd1."' where id = ".$id;
			$typenum = $conne->uidRst($updatesql);
			$conne->close_rst();
			if($typenum == 1){
				echo "<script>alert('�޸ĳɹ�');location=('index.php?act=type');</script>";
			}else{
				echo "<script>alert('�޸�ʧ�ܣ����뱣֤�޸�����ȷʵ�ı�');history.go(-1);</script>";
			}
		}
		
	}else if($act == 'deltype'){
		$sql = "delete from tb_type where id = '".$_GET['tid']."'";
		if($conne->uidRst($sql) == 1){
			echo "<script>location=('index.php?act=type');</script>";
		}
	}
?>