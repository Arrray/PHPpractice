<?php 
session_start();
include_once("conn/conn.class.php");               //调用配置文件
include_once("config.php");
if(isset($_SESSION['name'])){
	$smarty->assign("names","T");
	$smarty->assign("name",$_SESSION["name"]);		       //判断是否已经登录
	$smarty->assign("names1",$_GET["video_user"]);		   //判断是否已经登录
}
include_once("top.php");
if(!isset($_SESSION["temp"]) or $_SESSION["temp"]!=$_GET["user_id"]){		//统计个人主页被访问的次数
	$ii_sqlstr="update tb_video_user set tb_individualism_accessing=tb_individualism_accessing+1 where tb_user_id=".$_GET['user_id']." ";
	$ii_rst = $result->indeup($ii_sqlstr,$conn);       //利用pdo封装的类进行更新操作
	$_SESSION["temp"]=$_GET["user_id"];
}
$smarty->assign("user_id",$_GET["user_id"]);		   //获取用户
$smarty->assign("user",$_GET["video_user"]);		   //获取用户
$iii_sqlstrs="select * from tb_video_type ";
$arrayiii= $result->getRows($iii_sqlstrs,$conn);   //利用pdo封装的类进行查询操作
$smarty->assign("video_type1",$arrayiii);		   //获取视频类型
$d_sqlstrs="select * from tb_video where tb_video_author='".$_GET['video_user']."' order by tb_video_id desc";
$arrayes=$result->GetRows($d_sqlstrs,$conn);
$total1=count($arrayes);				//统计数据库中数据的数量
//设置变量，进行分页输出
if(!isset($_GET['pages'])){
	$page1=1;
}else{
	$page1=intval($_GET['pages']);
}
if($total1==0){
	$smarty->assign("discuss_false","F");
}else{ 
	$pagesize1=4;
	if($total1<$pagesize1){
		$pagecount1=1;
	}else{
		if($total1%$pagesize1==0){
			$pagecount1=intval($total1/$pagesize1);
		}else{
			$pagecount1=intval($total1/$pagesize1)+1;
		} 
	}
	$smarty->assign("total1",$total1);			//输出总的数据量      
	$smarty->assign("pagesize1",$pagesize1);	//输出每页显示的记录数     
	$smarty->assign("page1",$page1);			//输出当前是第多少页      
	$smarty->assign("pagecount1",$pagecount1);	//输出总页数      
}

$l_sqlstr="select * from tb_video where tb_video_author='".$_GET['video_user']."' order by tb_video_id desc";
$d_rst = $result->selectLimit($l_sqlstr,$pagesize1,($page1-1)*$pagesize1,$conn);
$arrayes1=$result->getRows($d_rst,$conn);
$smarty->assign("video1",$arrayes1);			 //执行查询，输出数据
$i_sqlstr="select * from tb_video_user where tb_user_id=".$_GET['user_id']." ";
$arrays=$result->getRows($i_sqlstr,$conn);
$smarty->assign("video_user",$arrays);			 //获取用户信息

$v_sqlstr="select sum(tb_video_play) as video_play from tb_video where tb_video_author='".$_GET['video_user']."'";
$arrayes=$result->getRows($v_sqlstr,$conn);	
$video_play=$arrayes[0]['video_play'];
$smarty->assign("video_plays",$video_play);		 //统计指定用户上传视频的播放次数

$s_sqlstr="select count(tb_video_user) as subscibe_counts from tb_subscibe where tb_subscibe_user='".$_GET['video_user']."'";
$array_s=$result->getRows($s_sqlstr,$conn);
$smarty->assign("subscibe_counts",$array_s[0]['subscibe_counts']);		//统计用户订阅的数目
$smarty->display("individualism.tpl");
?>