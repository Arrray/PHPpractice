<?php
$num=$_GET[num];   //��ô��ݵ�����
$address="img/code/".$num.".gif";   //��ȡ��ӦͼƬ����
$fp=fopen($address,"r");  //�򿪶�Ӧ��ͼƬ
echo fread($fp,filesize($address)); //��ͼƬ�Զ����Ƶ���ʽ����������
fclose($fp);  //�رմ򿪵�ͼƬ
?>



