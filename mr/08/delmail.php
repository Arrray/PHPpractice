<?php
session_start();				//��ʼ��SESSION����
include("check_mail.php");			//�����ʼ��������洢����
if(isset($_POST['del_id'])){			//�жϱ����ύ��ֵ�Ƿ�Ϊ��
	for($i=0; $i<count($_POST['del_id']); $i++){	//ѭ����ȡ���ύ��IDֵ
		$message=$mail->removeMessage($_POST['del_id'][$i]);	//ִ��ɾ������
	}
 	echo "<script>alert('ɾ���ɹ�!'); window.location.href='index.php?lmbs=�ռ���'</script>";
}else{
	echo "<script>alert('��ѡ��Ҫɾ�����ʼ�!');history.back();</script>";
}
?>