<?php
include("global.php");
include ("jpgraph/jpgraph.php");
include ("jpgraph/jpgraph_pie.php");
include_once ("jpgraph/jpgraph_pie3d.php");					//����3D��ͼPiePlot3D�������ڵ����ļ�

/***********************ͳ���������*************************/
	$sql3="select distinct(count(cip)) as num,cip from tb_wishes where wishsort='����' group by cip ";
	$DB->query($sql3); 
	$res3=$DB->get_rows_array($sql3);			//���ɶ�ά����
	$rows_count3=count($res3);
	//��������
	$arraynum3=array();
	$arraycip3=array();
	//��������
	for($l=0;$l<$rows_count3;$l++){
		array_push($arraynum3,$res3[$l][num]);
		array_push($arraycip3,$res3[$l][cip]);
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

/***********************ͳ��������Ը����*************************/
//��������ͼ����
$p= new PiePlot3D($arraynum3);
$p->SetLegends($arraycip3);
$p->SetSize($size);
$p->SetCenter(0.45,0.55);
$p->value->SetFont(FF_FONT0);
$p->title->SetFont(FF_SIMSUN,FS_BOLD);
/*************************************************************/
$graph->Add($p);
$graph->Stroke();
?>
