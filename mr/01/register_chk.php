<?php
	include_once 'conn/conn.php';
	require_once 'Zend/Mail.php';						//调用发送邮件的文件
	require_once 'Zend/Mail/Transport/Smtp.php';		//调用SMTP验证文件
	$reback = '0';
	$url = 'http://'.$_SERVER['SERVER_NAME'].dirname($_SERVER['SCRIPT_NAME']).'/activation.php';
	$url .= '?name='.trim($_GET['name']).'&pwd='.md5(trim($_GET['pwd']));
	
	//发送激活邮件
	$subject="激活码的获取";
	$mailbody='注册成功。您的激活码是：'.'<a href="'.$url.'" target="_blank">'.$url.'</a><br>'.'请点击该地址，激活您的用户！';
//定义邮件内容
	$envelope="mrsoft8888@sohu.com";		//定义登录使用的邮箱
	
	/*   smtp测试版发送邮件方式，使用smtp作为服务器
				$tr = new Zend_Mail_Transport_Smtp('192.168.1.247');
				$mail = new Zend_Mail();				
				$mail->addTo('cym3100@163.com','获取用户注册激活码');
				$mail->setFrom('cym3100@163.com','明日科技典型模块程序测试邮箱，恭喜您用户注册成功！');
				$mail->setSubject('获取注册用户的激活码');
				$mail->setBodyHtml($mailbody);
				$mail->send($tr);
	*/
/*   网络版发送邮件方法  */

	$config = array('auth' => 'login',
            'username' => 'mrsoft8888',
            'password' => 'mrsoft8888');				//定义SMTP的验证参数
	$transport = new Zend_Mail_Transport_Smtp('smtp.sohu.com', $config);		//实例化验证的对象
	$mail = new Zend_Mail('GBK');			//实例化发送邮件对象
    $mail->setBodyHtml($mailbody);				//发送邮件主体
    $mail->setFrom($envelope, '明日科技典型模块程序测试邮箱，恭喜您用户注册成功！');	//定义邮件发送使用的邮箱
    $mail->addTo($_GET['email'], '获取用户注册激活码');		//定义邮件的接收邮箱
    $mail->setSubject('获取注册用户的激活码');				//定义邮件主题
    $mail->send($transport);								//执行发送操作
	
/*   网络版发送邮件方法  */	

	$sql = "insert into tb_member(name,password,question,answer,email,realname,birthday,telephone,qq) values('".trim($_GET['name'])."','".md5(trim($_GET['pwd']))."','".$_GET['question']."','".$_GET['answer']."','".$_GET['email']."','".$_GET['realname']."','".$_GET['birthday']."','".$_GET['telephone']."','".$_GET['qq']."')";
		$num = $conne->uidRst($sql);
		if($num == 1){
			$reback = '1';
		}
	echo $reback;
?>