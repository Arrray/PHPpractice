<?php session_start();
  	include_once("conn/conn.php");
	include_once("config.php");
	include_once("top.php");	
$smarty->assign("video_types",$_GET['video_type']);
	$i_sqlstr="select * from tb_video_type ";
	$arrays=$result->getRows($i_sqlstr,$conn);
	$smarty->assign("video_type",$arrays);		//��ȡ��Ƶ������

	$l_sqlstr="select * from tb_video order by tb_video_id desc ";		//��ȡ��Ƶ�е����ݣ������ϴ�ID���н�������
//	$l_sqlstr="select * from tb_video where tb_video_auditing=1 order by tb_video_id limit 4";  ��Ҫ���
	$arrays=$result->getRows($l_sqlstr,$conn);
	$total1=count($arrays);				//ͳ�����ݿ������ݵ�����
	//���ñ��������з�ҳ���
	if(empty($_GET['pages'])==true || is_numeric($_GET['pages'])==false){
		$page1=1;
	}else{
		$page1=intval($_GET['pages']);
	}
	if($total1==0){
		$smarty->assign("discuss_false","F");
	}else{ 
		$pagesize1=2;
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

	$d_sqlstr="select * from tb_video order by tb_video_id desc";
	$d_rst = $result->SelectLimit($d_sqlstr,$pagesize1,($page1-1)*$pagesize1,$conn);
	$arrayes=$result->GetRows($d_rst,$conn);
	$smarty->assign("video",$arrayes);				//ִ�в�ѯ���������

	$smarty->display("new_play.tpl");
?>