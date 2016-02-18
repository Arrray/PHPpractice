<?php session_start();
  	include_once("conn/conn.class.php");
	include_once("config.php");

if($_SESSION["name"]!=""){
$smarty->assign("names","T");
$smarty->assign("name",$_SESSION["name"]);
}
include_once("top.php");
$smarty->assign("user_id",$_GET[user_id]);		//获取用户
$smarty->assign("user",$_GET['video_user']);		//获取用户

	$i_sqlstr="select * from tb_video_type ";
	$arrays=$result->getRows($i_sqlstr,$conn);
	$smarty->assign("video_type",$arrays);

	$l_sqlstr="select * from tb_video where tb_video_author='".$_GET['video_user']."' order by tb_video_id ";
//	$l_sqlstr="select * from tb_video where tb_video_auditing=1 order by tb_video_id limit 4";  需要审核
    $arrays=$result->getRows($l_sqlstr,$conn);
	$total1=count($arrays);
if(empty($_GET['pages'])==true || is_numeric($_GET['pages'])==false){
	$page1=1;
}else{
	$page1=intval($_GET['pages']);
}
if($total1==0){

$smarty->assign("discuss_false","F");

}else{ 
	$pagesize1=1;
	if($total1<$pagesize1){
		$pagecount1=1;
	}else{
		if($total1%$pagesize1==0){
			$pagecount1=intval($total1/$pagesize1);
		}else{
			$pagecount1=intval($total1/$pagesize1)+1;
		} 
	}
$smarty->assign("total1",$total1);			//通过assign方法将数组$array中的数据写入到myrow中      
$smarty->assign("pagesize1",$pagesize1);	//通过assign方法将数组$array中的数据写入到myrow中      
$smarty->assign("page1",$page1);			//通过assign方法将数组$array中的数据写入到myrow中      
$smarty->assign("pagecount1",$pagecount1);	//通过assign方法将数组$array中的数据写入到myrow中      

}

	$d_sqlstr="select * from tb_video where tb_video_author='".$_GET['video_user']."' order by tb_video_id desc";
	$d_rst = $result->SelectLimit($d_sqlstr,$pagesize1,($page1-1)*$pagesize1,$conn);
	$arrayes=$result->getRows($d_rst,$conn);
	$smarty->assign("video",$arrayes);


	$s_sqlstr="select count(tb_video_user) as subscibe_counts from tb_subscibe where tb_subscibe_user='".$_GET['video_user']."'";
	$array_s=$result->getRows($s_sqlstr,$conn);
	$smarty->assign("subscibe_counts",$array_s[0]['subscibe_counts']);		//统计用户订阅的数目


	$smarty->display("individualism_video.tpl");
?>