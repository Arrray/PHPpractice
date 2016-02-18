<?php
	session_start();
	header('Content-Type:text/html;charset=gb2312');
	include_once 'conn/conn.php';
	$reback = '0';
	$sql = "insert into tb_member(name,password,question,answer,email) values('".trim($_GET['name'])."','".md5(trim($_GET['pwd']))."','".$_GET['question']."','".$_GET['answer']."','".$_GET['email']."')";
	$num = $conne->uidRst($sql);
	if($num == 1){
		$_SESSION['name'] = $_GET['name'];

                $username=$_SESSION['name'];      
                $dirname="../upfile/$username";   //创建一个和用户名相同的文件夹
                mkdir($dirname,0700);
		$reback = '1';
		$file = 'index.txt';
		$newfile="../upfile/$username/index.php";
		if (!copy($file, $newfile)) {
    echo "failed to copy $file...\n";
}
	}else{
		$reback = $conne->msg_error();
	}
	echo $reback;
?>