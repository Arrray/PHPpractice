<?php	session_start();
if($_SESSION["admin"]!=""){
	include_once "conn/conn.class.php";
	include_once "config.php";

$sql_t="select tb_video_id,tb_video_name from tb_video";
$arrays=$result->getRows($sql_t,$conn);
$smarty->assign("video",$arrays);

$sql="select * from tb_video_discuss ";

$array=$result->GetRows($sql,$conn);

	$total1=count($array);				//ͳ�����ݿ������ݵ�����
	//���ñ��������з�ҳ���
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
		$smarty->assign("total1",$total1);			//����ܵ�������      
		$smarty->assign("pagesize1",$pagesize1);	//���ÿҳ��ʾ�ļ�¼˵      
		$smarty->assign("page1",$page1);			//�����ǰ�ǵڶ���ҳ      
		$smarty->assign("pagecount1",$pagecount1);	//�����ҳ��      
	}

	$l_sqlstr="select * from tb_video_discuss";
	$d_rst = $result->SelectLimit($l_sqlstr,$pagesize1,($page1-1)*$pagesize1,$conn);
	$arrayes=$result->GetRows($d_rst,$conn);
	$smarty->assign("video_discuss",$arrayes);				//ִ�в�ѯ���������


$smarty->display("manage_discuss.tpl");

}else{
echo "<script>alert('����ȷ��¼!'); window.location.href='index.php';</script>";
}
?>