<?php	
if($_SESSION['admin']!=""){
	include_once "config.php";
	include_once "conn/conn.class.php";
$smarty->assign("caption",$_GET['caption']);

$sql="select tb_user_id,tb_video_user,tb_video_email,tb_video_qq,tb_user_picture from tb_video_user";
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
		$smarty->assign("total1",$total1);			//����ܵ�������      
		$smarty->assign("pagesize1",$pagesize1);	//���ÿҳ��ʾ�ļ�¼˵      
		$smarty->assign("page1",$page1);			//�����ǰ�ǵڶ���ҳ      
		$smarty->assign("pagecount1",$pagecount1);	//�����ҳ��      
	}


	$l_sqlstr="select tb_user_id,tb_video_user,tb_video_email,tb_video_qq,tb_user_picture from tb_video_user";
	$d_rst = $result->SelectLimit($l_sqlstr,$pagesize1,($page1-1)*$pagesize1,$conn);
	$arrayes1=$result->getRows($d_rst,$conn);
	$smarty->assign("video_user",$arrayes1);				//ִ�в�ѯ���������



$smarty->display("manage_user.tpl");



}else{
echo "<script>alert('����ȷ��¼!'); window.location.href='index.php';</script>";
}
?>