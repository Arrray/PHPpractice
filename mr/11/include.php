<?php session_start();
  	include_once("conn/conn.php");
	include_once("config.php");
	include_once("top.php");
	if(isset($_SESSION["id"]) and isset($_SESSION["name"])){
		$smarty->assign("session_name",$_SESSION["name"]);
	$smarty->assign("session_id",$_SESSION["id"]);

		$smarty->assign("session_name","T");
	}

	$smarty->assign("video_types",$_GET['video_type']);

	$i_sqlstr="select * from tb_video_type ";
	$arrays=$result->GetRows($i_sqlstr,$conn);
	$smarty->assign("video_type",$arrays);

	$s_sqlstr="select * from tb_video where tb_video_type=".$_GET['video_type']." order by tb_video_id desc";
	$arrays=$result->GetRows($s_sqlstr,$conn);
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
		$pagesize1=12;
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

	$l_sqlstr="select * from tb_video where tb_video_type=".$_GET['video_type']." order by tb_video_id desc";
	$d_rst = $result->SelectLimit($l_sqlstr,$pagesize1,($page1-1)*$pagesize1,$conn);
	$arrayes=$result->getRows($d_rst,$conn);
	$smarty->assign("video",$arrayes);				//ִ�в�ѯ���������

    $smarty->display("include.tpl");
?>