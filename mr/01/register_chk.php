<?php
	include_once 'conn/conn.php';
	require_once 'Zend/Mail.php';						//���÷����ʼ����ļ�
	require_once 'Zend/Mail/Transport/Smtp.php';		//����SMTP��֤�ļ�
	$reback = '0';
	$url = 'http://'.$_SERVER['SERVER_NAME'].dirname($_SERVER['SCRIPT_NAME']).'/activation.php';
	$url .= '?name='.trim($_GET['name']).'&pwd='.md5(trim($_GET['pwd']));
	
	//���ͼ����ʼ�
	$subject="������Ļ�ȡ";
	$mailbody='ע��ɹ������ļ������ǣ�'.'<a href="'.$url.'" target="_blank">'.$url.'</a><br>'.'�����õ�ַ�����������û���';
//�����ʼ�����
	$envelope="mrsoft8888@sohu.com";		//�����¼ʹ�õ�����
	
	/*   smtp���԰淢���ʼ���ʽ��ʹ��smtp��Ϊ������
				$tr = new Zend_Mail_Transport_Smtp('192.168.1.247');
				$mail = new Zend_Mail();				
				$mail->addTo('cym3100@163.com','��ȡ�û�ע�ἤ����');
				$mail->setFrom('cym3100@163.com','���տƼ�����ģ�����������䣬��ϲ���û�ע��ɹ���');
				$mail->setSubject('��ȡע���û��ļ�����');
				$mail->setBodyHtml($mailbody);
				$mail->send($tr);
	*/
/*   ����淢���ʼ�����  */

	$config = array('auth' => 'login',
            'username' => 'mrsoft8888',
            'password' => 'mrsoft8888');				//����SMTP����֤����
	$transport = new Zend_Mail_Transport_Smtp('smtp.sohu.com', $config);		//ʵ������֤�Ķ���
	$mail = new Zend_Mail('GBK');			//ʵ���������ʼ�����
    $mail->setBodyHtml($mailbody);				//�����ʼ�����
    $mail->setFrom($envelope, '���տƼ�����ģ�����������䣬��ϲ���û�ע��ɹ���');	//�����ʼ�����ʹ�õ�����
    $mail->addTo($_GET['email'], '��ȡ�û�ע�ἤ����');		//�����ʼ��Ľ�������
    $mail->setSubject('��ȡע���û��ļ�����');				//�����ʼ�����
    $mail->send($transport);								//ִ�з��Ͳ���
	
/*   ����淢���ʼ�����  */	

	$sql = "insert into tb_member(name,password,question,answer,email,realname,birthday,telephone,qq) values('".trim($_GET['name'])."','".md5(trim($_GET['pwd']))."','".$_GET['question']."','".$_GET['answer']."','".$_GET['email']."','".$_GET['realname']."','".$_GET['birthday']."','".$_GET['telephone']."','".$_GET['qq']."')";
		$num = $conne->uidRst($sql);
		if($num == 1){
			$reback = '1';
		}
	echo $reback;
?>