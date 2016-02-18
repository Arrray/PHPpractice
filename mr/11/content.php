<?php 
  	include_once("conn/conn.php");
	include_once("config.php");                                //调用Smarty配置文件
	include_once("conn/conn.class.php");                       //调用类库文件

	if(isset($_SESSION["id"]) and isset($_SESSION["name"])){
		$smarty->assign("name",$_SESSION["name"]);
	$smarty->assign("id",$_SESSION["id"]);
		$smarty->assign("session_name","T");
	}
	$l_sqlstr="select * from tb_video order by tb_video_id desc limit 4";
    $array=$result->getRows($l_sqlstr,$conn);
	if(count($array)<=0){
	$smarty->assign("videos","F");
	}
	$smarty->assign("video",$array);
	
	$ii_sqlstr="select * from tb_video_user order by tb_individualism_accessing desc limit 9";
	$arraysi=$result->getRows($ii_sqlstr,$conn);
	
	//echo $arraysi[0]["tb_user_picture"];
    if(count($arraysi)==0){
	   $smarty->assign("discuss_false","F");
	}
	   $smarty->assign("video_user",$arraysi);
	   $smarty->display("content.tpl");
?>