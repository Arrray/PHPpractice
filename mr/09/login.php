<?php 
include_once("config.php");            //����Smarty�����ļ�
include_once("conn/conn.class.php");   //����PDO����

if(isset($_SESSION["id"]) and isset($_SESSION["names"])){          //�жϵ�ǰ�û��Ƿ�Ϊ��½״̬
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