<?php
include("global.php");
include ("jpgraph/jpgraph.php");
include ("jpgraph/jpgraph_pie.php");
include_once ("jpgraph/jpgraph_pie3d.php");					//����3D��ͼPiePlot3D�������ڵ����ļ�

/***********************ͳ�ư������*************************/
	$sql1="select distinct(count(cip)) as num,cip from tb_wishes where wishsort='����' group by cip ";
	$DB->query($sql1); 
	$res1=$DB->get_rows_array($sql1);			//���ɶ�ά����
	$rows_count1=count($res1);
	//��������
	$arraynum1=array();
	$arraycip1=array();
	//��������
	for($j=0;$j<$rows_count1;$j++){
		array_push($arraynum1,$res1[$j][num]);
		array_push($arraycip1,$res1[$j][cip]);
	}
/*************************************************************/
//��������
$graph = new PieGraph(320,246);
$graph->SetShadow();
//���ñ�������
$graph->title->Set("ͳ�Ʒ���ȫ�������[ ������ ] ��Ը����");
$graph->title->SetFont(FF_SIMSUN,FS_BOLD);
$graph->legend->SetFont(FF_SIMSUN,FS_NORMAL);
$size=0.3;

/***********************ͳ�ư�����Ը����*************************/
//��������ͼ����
$p= new PiePlot3D($arraynum1);
$p->SetLegends($arraycip1);
$p->SetSize($size);
$p->SetCenter(0.45,0.55);
$p->value->SetFont(FF_FONT0);
$p->title->SetFont(FF_SIMSUN,FS_BOLD);
/*************************************************************/
$graph->Add($p);
$graph->Stroke();
?>
