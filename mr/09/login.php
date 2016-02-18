<?php 
include_once("config.php");            //调用Smarty配置文件
include_once("conn/conn.class.php");   //调用PDO连接

if(isset($_SESSION["id"]) and isset($_SESSION["names"])){          //判断当前用户是否为登陆状态
	$smarty->assign("session_name","T");
	$smarty->assign("name",$_SESSION["names"]);
	$sqlstr="select * from tb_music_user where tb_music_user = '$_SESSION[names]'";
	$arrays=$result->getRows($sqlstr,$conn);
	$smarty->assign("upcount",$arrays[0][tb_music_counts]);
	}
	else 
	$smarty->assign("session_name","F");
	
    $smarty->display("login.tpl");
?>