<?php
session_start();						//��ʼ��SESSION����
include("check_mail.php");				//����ʼ��������ĵ�¼����
$sum="(".$mail->countMessages().")";	//ͳ���ʼ���¼��
echo $sum;								//���ͳ�ƽ��
?>


