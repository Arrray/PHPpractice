<?php
	include_once 'conn/conn.php';
	require_once 'Zend/Mail.php';						//调用发送邮件的文件
	require_once 'Zend/Mail/Transport/Smtp.php';		//调用SMTP验证文件
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
			//发送密码邮件
			$subject="找回密码";
			$mailbody='密码找回成功。您帐号的新密码是'.$rnd;
			//$envelope["from"]="cym3100@163.com";
			$envelope="mrsoft8888@sohu.com";		//网络版定义登录使用的邮箱
			
			/*  smtp测试版发送邮件方式，使用smtp作为服务器*/
				//$tr = new Zend_Mail_Transport_Smtp('192.168.1.247');
				//$mail = new Zend_Mail();				
				//$mail->addTo($email,'获取用户新密码');
				//$mail->setFrom('cym3100@163.com','明日科技典型模块程序测试邮箱，修改用户注册密码！');
				//$mail->setSubject($subject);
				//$mail->setBodyHtml($mailbody);
				//$mail->send($tr);

/*   网络版发送邮件方法  */

	$config = array('auth' => 'login',
            'username' => 'mrsoft8888',
            'password' => 'mrsoft8888');				//定义SMTP的验证参数
	$transport = new Zend_Mail_Transport_Smtp('smtp.sohu.com', $config);		//实例化验证的对象
	$mail = new Zend_Mail('GBK');			//实例化发送邮件对象
    $mail->setBodyHtml($mailbody);				//发送邮件主体
    $mail->setFrom($envelope, '明日科技典型模块程序测试邮箱，修改用户注册密码！');	//定义邮件发送使用的邮箱
    $mail->addTo($email, '获取用户新密码');		//定义邮件的接收邮箱
    $mail->setSubject($subject);				//定义邮件主题
    $mail->send($transport);				//执行发送操作
	
/*   网络版发送邮件方法  */	

			
				$reback = '1';
			
		}else{
			$reback = '2';
		}
	}else{
		$reback = $sql;
	}
	echo $reback;
?>
