<?php
session_start(); 
if(isset($_SESSION['host']) and isset($_SESSION['user']) and isset($_SESSION['pwd'])){
	require_once 'Zend/Mail.php';						//���÷����ʼ����ļ�
	require_once 'Zend/Mail/Transport/Smtp.php';		//����SMTP��֤�ļ�
	if(isset($_POST['formuser']) && isset($_POST['touser']) && isset($_POST['subject'])){
		$formuser=$_POST['formuser'];
		$to=explode("*",$_POST['touser']);
		$subject=$_POST['subject'];
		$mailbody=$_POST['mailbody'];
			
/*	 ����淢���ʼ�����  

	
    //username => 'mrsoft8888',
   	//password => 'mrsoft8888');				//����SMTP����֤����
	//$transport = new Zend_Mail_Transport_Smtp('smtp.sohu.com', $config);		//ʵ������֤�Ķ���
	

		$config = array('auth' => 'login',
            'username' => $_SESSION['user'],
            'password' => $_SESSION['pwd']);				//����SMTP����֤����
		$transport = new Zend_Mail_Transport_Smtp($_SESSION['host'], $config);		//ʵ������֤�Ķ���
		$mail = new Zend_Mail('GBK');				//ʵ���������ʼ�����
    	$mail->setBodyHtml($mailbody);				//�����ʼ�����
    	$mail->setFrom($formuser, '���տƼ�����������䣬��ϲ���û�ע��ɹ���');	//�����ʼ�����ʹ�õ�����
    	$mail->addTo($touser, '���տƼ��������');	//�����ʼ��Ľ�������
    	$mail->setSubject($subject);				//�����ʼ�����
		if(empty($_POST['upfile'])){
			$mail->send($transport);
			echo "<script>alert('���ͳɹ�!');window.location.href='index.php?lmbs=������';</script>";
		}else{
			if($_FILES['upfile']['size']>3000000){
				echo "<script>alert('������С����2M!');history.back();</script>";
   				exit;
			}else{
				$fileName = $_FILES['upfile']['name'];
				$file = $_FILES['upfile']['tmp_name'];
				$fileType = $_FILES['upfile']['type'];
				$body=file_get_contents($file);
				//$body=base_convert($content,16,2);
				$attach=$mail->createAttachment($body,$fileType,Zend_Mime::DISPOSITION_ATTACHMENT,Zend_Mime::ENCODING_BASE64,$fileName);
    				$mail->send($transport);				//ִ�з��Ͳ���
				echo "<script>alert('���ͳɹ�!');window.location.href='index.php?lmbs=������';</script>";

			}
		}
*/
/*   smtp���԰淢���ʼ���ʽ��ʹ��smtp��Ϊ������*/
		if(empty($_POST['upfile'])){
			for($i=0; $i<count($to);$i++){
				$tr = new Zend_Mail_Transport_Smtp($_SESSION['host']);
				$mail = new Zend_Mail();						
				$touser=$to[$i];			
				$mail->addTo($touser,'dog');
				$mail->setFrom($formuser,$_SESSION['user']);
				$mail->setSubject($subject);
				$mail->setBodyHtml($mailbody);
				$mail->send($tr);
			}
			echo "<script>alert('���ͳɹ�!');window.location.href='index.php?lmbs=������';</script>";
		}else{
			if($_FILES['upfile']['size']>3000000){
				echo "<script>alert('������С����2M!');history.back();</script>";
   				exit;
			}else{				
				for($i=0; $i<count($to);$i++){
					$tr = new Zend_Mail_Transport_Smtp($_SESSION['host']);
					$mail = new Zend_Mail();						
					$touser=$to[$i];			
					$mail->addTo($touser,'dog');
					$mail->setFrom($formuser,$_SESSION['user']);
					$mail->setSubject($subject);
					$mail->setBodyHtml($mailbody);	
					$fileName = $_FILES['upfile']['name'];
					$file = $_FILES['upfile']['tmp_name'];
					$fileType = $_FILES['upfile']['type'];
					$content=file_get_contents($file);
					$body=base_convert($content,16,2);
					$attach=$mail->createAttachment($body,$fileType,Zend_Mime::DISPOSITION_ATTACHMENT,Zend_Mime::ENCODING_BASE64,$fileName);
    				$mail->send($transport);				//ִ�з��Ͳ���
				}
				echo "<script>alert('���ͳɹ�!');window.location.href='index.php?lmbs=������';</script>";
			}

		}
 	}else{
   		echo "<script>alert('��Ϣ����Ϊ��!');history.back();</script>";
   		exit;
 	}
}else{
   echo "<script>alert('��¼��ʱ�������µ�¼!');history.back();</script>";
   exit;
}
?>