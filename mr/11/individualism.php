<?php 
session_start();
include_once("conn/conn.class.php");               //���������ļ�
include_once("config.php");
if(isset($_SESSION['name'])){
	$smarty->assign("names","T");
	$smarty->assign("name",$_SESSION["name"]);		       //�ж��Ƿ��Ѿ���¼
	$smarty->assign("names1",$_GET["video_user"]);		   //�ж��Ƿ��Ѿ���¼
}
include_once("top.php");
if(!isset($_SESSION["temp"]) or $_SESSION["temp"]!=$_GET["user_id"]){		//ͳ�Ƹ�����ҳ�����ʵĴ���
	$ii_sqlstr="update tb_video_user set tb_individualism_accessing=tb_individualism_accessing+1 where tb_user_id=".$_GET['user_id']." ";
	$ii_rst = $result->indeup($ii_sqlstr,$conn);       //����pdo��װ������и��²���
	$_SESSION["temp"]=$_GET["user_id"];
}
$smarty->assign("user_id",$_GET["user_id"]);		   //��ȡ�û�
$smarty->assign("user",$_GET["video_user"]);		   //��ȡ�û�
$iii_sqlstrs="select * from tb_video_type ";
$arrayiii= $result->getRows($iii_sqlstrs,$conn);   //����pdo��װ������в�ѯ����
$smarty->assign("video_type1",$arrayiii);		   //��ȡ��Ƶ����
$d_sqlstrs="select * from tb_video where tb_video_author='".$_GET['video_user']."' order by tb_video_id desc";
$arrayes=$result->GetRows($d_sqlstrs,$conn);
$total1=count($arrayes);				//ͳ�����ݿ������ݵ�����
//���ñ��������з�ҳ���
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
	$smarty->assign("total1",$total1);			//����ܵ�������      
	$smarty->assign("pagesize1",$pagesize1);	//���ÿҳ��ʾ�ļ�¼��     
	$smarty->assign("page1",$page1);			//�����ǰ�ǵڶ���ҳ      
	$smarty->assign("pagecount1",$pagecount1);	//�����ҳ��      
}

$l_sqlstr="select * from tb_video where tb_video_author='".$_GET['video_user']."' order by tb_video_id desc";
$d_rst = $result->selectLimit($l_sqlstr,$pagesize1,($page1-1)*$pagesize1,$conn);
$arrayes1=$result->getRows($d_rst,$conn);
$smarty->assign("video1",$arrayes1);			 //ִ�в�ѯ���������
$i_sqlstr="select * from tb_video_user where tb_user_id=".$_GET['user_id']." ";
$arrays=$result->getRows($i_sqlstr,$conn);
$smarty->assign("video_user",$arrays);			 //��ȡ�û���Ϣ

$v_sqlstr="select sum(tb_video_play) as video_play from tb_video where tb_video_author='".$_GET['video_user']."'";
$arrayes=$result->getRows($v_sqlstr,$conn);	
$video_play=$arrayes[0]['video_play'];
$smarty->assign("video_plays",$video_play);		 //ͳ��ָ���û��ϴ���Ƶ�Ĳ��Ŵ���

$s_sqlstr="select count(tb_video_user) as subscibe_counts from tb_subscibe where tb_subscibe_user='".$_GET['video_user']."'";
$array_s=$result->getRows($s_sqlstr,$conn);
$smarty->assign("subscibe_counts",$array_s[0]['subscibe_counts']);		//ͳ���û����ĵ���Ŀ
$smarty->display("individualism.tpl");
?>