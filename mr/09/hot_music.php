<?php
session_start();
include_once("conn/conn.class.php");
$sql = "select id,style,name,actor,remark,address from tb_video order by id desc";
$arrays=$result->GetRows($sql,$conn);
	$total1=count($arrays);		
	if(empty($_GET["lmbs"])){
	$lmbs="���ֹ㳡";
	}else{
	$lmbs=$_GET["lmbs"];
	}
	echo $lmbs;

if(empty($_GET[pages])==true || is_numeric($_GET[pages])==false){
		$page1=1;
	}else{
		$page1=intval($_GET[pages]);
	}
	if($total1==0){
		$smarty->assign("showmusic_false","F");
	}else{ 
		$pagesize1=2;                             //ÿҳ��ʾ����¼��
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
	
	$l_sqlstr="select id,style,name,actor,remark,address from tb_video order by id desc";
	
	$d_rst = $result->SelectLimit($l_sqlstr,$pagesize1,($page1-1)*$pagesize1,$conn);
	$arrayes=$result->getRows($d_rst,$conn);
	$smarty->assign("music",$arrayes);	
	
	if($_SESSION["names"]==true){
	$smarty->assign("loginyon","Y");
	$lsqlstr= "select * from tb_internet_video where tb_music_user='".$_SESSION[names]."'";
	$arraytst=$result->getRows($lsqlstr,$conn);
	$resnum=count($arraytst);
	
	if(empty($_GET[page])==true || is_numeric($_GET[page])==false){
		$page=1;
	}else{
		$page=intval($_GET[page]);
	}
	
		$pagesize=2;                             //ÿҳ��ʾ����¼��
	
	$s_rst = $result->SelectLimit($lsqlstr,$pagesize,($page-1)*$pagesize,$conn);
	$arrayss=$result->getRows($s_rst,$conn);
	$smarty->assign("mymusic",$arrayss);
	$smarty->assign("mymusicnum",$resnum);
	}
	
$smarty->display("hot_music.tpl");
?>
