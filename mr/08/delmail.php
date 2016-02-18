<?php
session_start();				//初始化SESSION变量
include("check_mail.php");			//包含邮件服务器存储对象
if(isset($_POST['del_id'])){			//判断标题提交的值是否为真
	for($i=0; $i<count($_POST['del_id']); $i++){	//循环读取表单提交的ID值
		$message=$mail->removeMessage($_POST['del_id'][$i]);	//执行删除操作
	}
 	echo "<script>alert('删除成功!'); window.location.href='index.php?lmbs=收件箱'</script>";
}else{
	echo "<script>alert('请选择要删除的邮件!');history.back();</script>";
}
?>