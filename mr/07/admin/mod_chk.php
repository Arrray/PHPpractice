<?php
	/* ��ȡ��������
	 * 
	 */
	 session_start();
	 include_once 'inc/func.php';
	 $smallact = $_GET['smallact'];					//ͼƬ���
	 $picpath = $_GET['picpath'];					//ͼƬ·��
	 $flyword=$_GET['flyword'];						//�������
	 $flyword = iconv('gb2312','utf-8',$flyword);	//ת������
	 $fontstyle=$_GET['fontstyle'];					//��������
	 $fontcolor=$_GET['fontcolor'];					//������ɫ
	 $bigfont = $_GET['bigfont'];					//�����С
	 $left=$_GET['left'];							//�������꣨��һ���ֵ����Ͻţ�
	 $top=$_GET['top'];								//�������꣨��һ���ֵ����Ͻţ�
	 $width=$_GET['width'];							//���ֿ��
	 $height=$_GET['height'];						//���ָ߶�
	 //���ݲ�ͬ���ļ����ʹ�ͼƬ
	 $picinfo = getimagesize($picpath);
	 if($picinfo[2] == 1){
		$source = imagecreatefromgif($picpath);
	 }else if($picinfo[2] == 2){
		$source = imagecreatefromjpeg($picpath);
	 }
	 $red = '0x'.substr($fontcolor,0,2);
	 $green = '0x'.substr($fontcolor,2,2);
	 $blue = '0x'.substr($fontcolor,4,2);
	 //Ϊ������ɫ �� ���ֵ�͸��������
	 $font_handle = imagecolorallocatealpha($source,$red,$green,$blue,0);
	//�������
	imagettftext($source,$bigfont,0,$left,($top+$height),$font_handle,'fontstyle/'.$fontstyle.'.ttf',$flyword);
	imagejpeg($source,$picpath);
	echo "<script>alert('������ֳɹ�');top.opener.location.reload();window.close();</script>";
?>