<?php	
if($_SESSION['admin']!=""){
	include_once "config.php";
	include_once "conn/conn.class.php";
$smarty->assign("caption",$_GET['caption']);

$sql="select tb_user_id,tb_video_user,tb_video_email,tb_video_qq,tb_user_picture from tb_video_user";
$array=$result->GetRows($sql,$conn);

$total1=count($array);				//统计数据库中数据的数量
	//设置变量，进行分页输出
	if(empty($_GET['pages'])==true || is_numeric($_GET['pages'])==false){
		$page1=1;
	}else{
		$page1=intval($_GET['pages']);
	}
	if($total1==0){
		$smarty->assign("discuss_false","F");
	}else{ 
		$pagesize1=5;
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
		$smarty->assign("pagesize1",$pagesize1);	//输出每页显示的记录说      
		$smarty->assign("page1",$page1);			//输出当前是第多少页      
		$smarty->assign("pagecount1",$pagecount1);	//输出总页数      
	}


	$l_sqlstr="select tb_user_id,tb_video_user,tb_video_email,tb_video_qq,tb_user_picture from tb_video_user";
	$d_rst = $result->SelectLimit($l_sqlstr,$pagesize1,($page1-1)*$pagesize1,$conn);
	$arrayes1=$result->getRows($d_rst,$conn);
	$smarty->assign("video_user",$arrayes1);				//执行查询，输出数据



$smarty->display("manage_user.tpl");



}else{
echo "<script>alert('请正确登录!'); window.location.href='index.php';</script>";
}
?>