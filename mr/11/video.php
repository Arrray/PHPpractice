<?php session_start();
  	include_once("conn/conn.class.php");
	include_once("config.php");
	include_once("top.php");
	$i_sqlstr="select * from tb_video_type ";
	$arrays=$result->getRows($i_sqlstr,$conn);
	$smarty->assign("video_type",$arrays);

	$l_sqlstr="select * from tb_video order by tb_video_id ";
//	$l_sqlstr="select * from tb_video where tb_video_auditing=1 order by tb_video_id limit 4";  ��Ҫ���
$arrays=$result->GetRows($l_sqlstr,$conn);
	$total1=count($arrays);
if(empty($_GET['pages'])==true || is_numeric($_GET['pages'])==false){
	$page1=1;
}else{
	$page1=intval($_GET['pages']);
}
if($total1==0){

$smarty->assign("discuss_false","F");

}else{ 
	$pagesize1=9;
	if($total1<$pagesize1){
		$pagecount1=1;
	}else{
		if($total1%$pagesize1==0){
			$pagecount1=intval($total1/$pagesize1);
		}else{
			$pagecount1=intval($total1/$pagesize1)+1;
		} 
	}
$smarty->assign("total1",$total1);			//ͨ��assign����������$array�е�����д�뵽myrow��      
$smarty->assign("pagesize1",$pagesize1);	//ͨ��assign����������$array�е�����д�뵽myrow��      
$smarty->assign("page1",$page1);			//ͨ��assign����������$array�е�����д�뵽myrow��      
$smarty->assign("pagecount1",$pagecount1);	//ͨ��assign����������$array�е�����д�뵽myrow��      

}

	$d_sqlstr="select * from tb_video order by tb_video_id desc";
	 $d_rst= $result->SelectLimit($d_sqlstr,$pagesize1,($page1-1)*$pagesize1,$conn);
	$arrayes=$result->getRows($d_rst,$conn);
	$smarty->assign("video",$arrayes);


	$smarty->display("video.tpl");
?>