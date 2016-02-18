<?php
session_start(); 
if(isset($_SESSION['host']) and isset($_SESSION['user']) and isset($_SESSION['pwd'])){
	require_once 'Zend/Mail.php';						//调用发送邮件的文件
	require_once 'Zend/Mail/Transport/Smtp.php';		//调用SMTP验证文件
	if(isset($_POST['formuser']) && isset($_POST['touser']) && isset($_POST['subject'])){
		$formuser=$_POST['formuser'];
		$to=explode("*",$_POST['touser']);
		$subject=$_POST['subject'];
		$mailbody=$_POST['mailbody'];
			
/*	 网络版发送邮件方法  

	
    //username => 'mrsoft8888',
   	//password => 'mrsoft8888');				//定义SMTP的验证参数
	//$transport = new Zend_Mail_Transport_Smtp('smtp.sohu.com', $config);		//实例化验证的对象
	

		$config = array('auth' => 'login',
            'username' => $_SESSION['user'],
            'password' => $_SESSION['pwd']);				//定义SMTP的验证参数
		$transport = new Zend_Mail_Transport_Smtp($_SESSION['host'], $config);		//实例化验证的对象
		$mail = new Zend_Mail('GBK');				//实例化发送邮件对象
    	$mail->setBodyHtml($mailbody);				//发送邮件主体
    	$mail->setFrom($formuser, '明日科技程序测试邮箱，恭喜您用户注册成功！');	//定义邮件发送使用的邮箱
    	$mail->addTo($touser, '明日科技程序测试');	//定义邮件的接收邮箱
    	$mail->setSubject($subject);				//定义邮件主题
		if(empty($_POST['upfile'])){
			$mail->send($transport);
			echo "<script>alert('发送成功!');window.location.href='index.php?lmbs=发件箱';</script>";
		}else{
			if($_FILES['upfile']['size']>3000000){
				echo "<script>alert('附件大小超出2M!');history.back();</script>";
   				exit;
			}else{
				$fileName = $_FILES['upfile']['name'];
				$file = $_FILES['upfile']['tmp_name'];
				$fileType = $_FILES['upfile']['type'];
				$body=file_get_contents($file);
				//$body=base_convert($content,16,2);
				$attach=$mail->createAttachment($body,$fileType,Zend_Mime::DISPOSITION_ATTACHMENT,Zend_Mime::ENCODING_BASE64,$fileName);
    				$mail->send($transport);				//执行发送操作
				echo "<script>alert('发送成功!');window.location.href='index.php?lmbs=发件箱';</script>";

			}
		}
*/
/*   smtp测试版发送邮件方式，使用smtp作为服务器*/
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
			echo "<script>alert('发送成功!');window.location.href='index.php?lmbs=发件箱';</script>";
		}else{
			if($_FILES['upfile']['size']>3000000){
				echo "<script>alert('附件大小超出2M!');history.back();</script>";
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
    				$mail->send($transport);				//执行发送操作
				}
				echo "<script>alert('发送成功!');window.location.href='index.php?lmbs=发件箱';</script>";
			}

		}
 	}else{
   		echo "<script>alert('信息不能为空!');history.back();</script>";
   		exit;
 	}
}else{
   echo "<script>alert('登录超时，请重新登录!');history.back();</script>";
   exit;
}
?>