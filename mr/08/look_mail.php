<?php
session_start();						//初始化SESSION变量
include("check_mail.php");				//完成邮件服务器的登录操作
$sum="(".$mail->countMessages().")";	//统计邮件记录数
echo $sum;								//输出统计结果
?>


