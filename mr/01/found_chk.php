<?php
	include_once 'conn/conn.php';
	require_once 'Zend/Mail.php';						//���÷����ʼ����ļ�
	require_once 'Zend/Mail/Transport/Smtp.php';		//����SMTP��֤�ļ�
	$reback = '0';
	$name = $_GET['foundname'];
	$question = $_GET['question'];
	$answer = $_GET['answer'];
	$sql = "select email from tb_member where name = '".$name."' and question = '".$question."' and answer = '".$answer."'";
	$email = $conne->getFields($sql,0);
	if($email != ''){
		$rnd = rand(1000,time());
		$sql = "update tb_member set password = '".md5($rnd)."' where name = '".$name."' and question = '".$question."' and answer = '".$answer."'";
		$tmpnum = $conne->uidRst($sql);
		if($tmpnum >= 1){
			//���������ʼ�
			$subject="�һ�����";
			$mailbody='�����һسɹ������ʺŵ���������'.$rnd;
			//$envelope["from"]="cym3100@163.com";
			$envelope="mrsoft8888@sohu.com";		//����涨���¼ʹ�õ�����
			
			/*  smtp���԰淢���ʼ���ʽ��ʹ��smtp��Ϊ������*/
				//$tr = new Zend_Mail_Transport_Smtp('192.168.1.247');
				//$mail = new Zend_Mail();				
				//$mail->addTo($email,'��ȡ�û�������');
				//$mail->setFrom('cym3100@163.com','���տƼ�����ģ�����������䣬�޸��û�ע�����룡');
				//$mail->setSubject($subject);
				//$mail->setBodyHtml($mailbody);
				//$mail->send($tr);

/*   ����淢���ʼ�����  */

	$config = array('auth' => 'login',
            'username' => 'mrsoft8888',
            'password' => 'mrsoft8888');				//����SMTP����֤����
	$transport = new Zend_Mail_Transport_Smtp('smtp.sohu.com', $config);		//ʵ������֤�Ķ���
	$mail = new Zend_Mail('GBK');			//ʵ���������ʼ�����
    $mail->setBodyHtml($mailbody);				//�����ʼ�����
    $mail->setFrom($envelope, '���տƼ�����ģ�����������䣬�޸��û�ע�����룡');	//�����ʼ�����ʹ�õ�����
    $mail->addTo($email, '��ȡ�û�������');		//�����ʼ��Ľ�������
    $mail->setSubject($subject);				//�����ʼ�����
    $mail->send($transport);				//ִ�з��Ͳ���
	
/*   ����淢���ʼ�����  */	

			
				$reback = '1';
			
		}else{
			$reback = '2';
		}
	}else{
		$reback = $sql;
	}
	echo $reback;
?>
