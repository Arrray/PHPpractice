<?php
	header("content-type:image/png");	//����ҳ�����		
	$num = $_GET['num'];			//��ȡ�������Ӵ��ݵ������
	$imagewidth=60;				//���廭���Ŀ�
	$imageheight=18;				//���廭���ĸ�
	$numimage = imagecreate($imagewidth,$imageheight);			//��������
	imagecolorallocate($numimage,240,240,240);				//���û�����ɫ
	for($i=0;$i<strlen($num);$i++){							//ѭ����ȡ�����
		$x = mt_rand(1,8)+$imagewidth*$i/4;
		$y = mt_rand(1,$imageheight/4);
		$color=imagecolorallocate($numimage,mt_rand(0,150),mt_rand(0,150),mt_rand(0,150)); //����ͼ�����ɫ
		imagestring($numimage,5,$x,$y,$num[$i],$color);			//�������д�뵽������
	}
	for($i=0;$i<200;$i++){			//forѭ��������ɸ�����
  		$randcolor=imagecolorallocate($numimage,rand(200,255),rand(200,255),rand(200,255));	//������ɫ
  		imagesetpixel($numimage,rand()%70,rand()%20,$randcolor); 		//���ɸ�����
	}
	imagepng($numimage);			//����ͼ��
	imagedestroy($numimage);			//�ͷ���Դ
?>
