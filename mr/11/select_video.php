<?php session_start();
  	include_once("conn/conn.class.php");
	include_once("config.php");
	$smarty->assign("session_name",$_SESSION['name']);
	$smarty->assign("session_id",$_SESSION[id]);
	if(isset($_SESSION[id]) and isset($_SESSION['name'])){
		$smarty->assign("session_name","T");
	}
include_once("top.php");
	$i_sqlstr="select * from tb_video_type ";
	$arrays=$result->getRows($i_sqlstr,$conn);
	$smarty->assign("video_type",$arrays);		//获取视频类型

	if($_POST[video]=="视频" and $_POST[select_video_play]!=""){			//判断提交的值是视频还是播客
		$smarty->assign("video","T");
		$l_sqlstr="select * from tb_video where tb_video_name like  '%".$_POST[select_video_play]."%' order by tb_video_id ";
		$arrays=$result->getRows($l_sqlstr,$conn);

		if(count($arrays)==0){
			$smarty->assign("discuss_false","F");
		}
		$smarty->assign("video_user",$arrays);
	}else{							////判断提交的值是视频还是播客
		$ll_sqlstr="select * from tb_video_user where tb_video_user like  '%".$_POST[select_video_play]."%' order by tb_user_id ";
		$arrayes=$result->getRows($ll_sqlstr,$conn);
		
		if(count($arrayes)==0){
			$smarty->assign("discuss_false","F");
		}
		$smarty->assign("video_user",$arrayes);
	}
$smarty->display("select_video.tpl");
?>