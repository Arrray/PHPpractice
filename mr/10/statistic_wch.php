<?php
include("global.php");
include ("jpgraph/jpgraph.php");
include ("jpgraph/jpgraph_pie.php");
include_once ("jpgraph/jpgraph_pie3d.php");					//����3D��ͼPiePlot3D�������ڵ����ļ�

/***********************ͳ���봨���*************************/
	$sql6="select distinct(count(cip)) as num,cip from tb_wishes where wishsort='�봨' group by cip ";
	$DB->query($sql6); 
	$res6=$DB->get_rows_array($sql6);			//���ɶ�ά����
	$rows_count6=count($res6);
	//��������
	$arraynum6=array();
	$arraycip6=array();
	//��������
	for($z=0;$z<$rows_count6;$z++){
		array_push($arraynum6,$res6[$z][num]);
		array_push($arraycip6,$res6[$z][cip]);
	}
/*************************************************************/
//��������
$graph = new PieGraph(320,246);
$graph->SetShadow();
//���ñ�������
$graph->title->Set("ͳ�Ʒ���ȫ�������[ �봨�� ] ��Ը����");
$graph->title->SetFont(FF_SIMSUN,FS_BOLD);
$graph->legend->SetFont(FF_SIMSUN,FS_NORMAL);
$size=0.3;

/***********************ͳ���봨����Ը����*************************/
//��������ͼ����
$p= new PiePlot3D($arraynum6);
$p->SetLegends($arraycip6);
$p->SetSize($size);
$p->SetCenter(0.45,0.55);
$p->value->SetFont(FF_FONT0);
$p->title->SetFont(FF_SIMSUN,FS_BOLD);
/*************************************************************/
$graph->Add($p);
$graph->Stroke();
?>
