<?php
include("global.php");
include ("jpgraph/jpgraph.php");
include ("jpgraph/jpgraph_pie.php");
include_once ("jpgraph/jpgraph_pie3d.php");					//����3D��ͼPiePlot3D�������ڵ����ļ�

/***********************ͳ��ȫ�����*************************/
	$sql="select distinct(count(cip)) as num,cip from tb_wishes  group by cip ";
	$DB->query($sql); 
	$res=$DB->get_rows_array($sql);			//���ɶ�ά����
	$rows_count=count($res);
	//��������
	$arraynum0=array();
	$arraycip0=array();
	//��������
	for($i=0;$i<$rows_count;$i++){
		array_push($arraynum0,$res[$i][num]);
		array_push($arraycip0,$res[$i][cip]);
	}
/*************************************************************/
//��������
$graph = new PieGraph(990,276);
$graph->SetShadow();
//���ñ�������
$graph->title->Set("Ӧ��3D����ͼͳ�Ʒ���ȫ��������Ը����");
$graph->title->SetFont(FF_SIMSUN,FS_BOLD);
$graph->legend->SetFont(FF_SIMSUN,FS_NORMAL);
$size=0.5;

/***********************ͳ��ȫ����Ը����*************************/
//��������ͼ����
$p0= new PiePlot3D($arraynum0);
$p0->SetLegends($arraycip0);
$p0->SetSize($size);
$p0->SetCenter(0.45,0.48);
$p0->SetLegends($arraycip0);
$p0->value->SetFont(FF_FONT0);
$p0->title->SetFont(FF_SIMSUN,FS_BOLD);
/*************************************************************/
$graph->Add($p0);
$graph->Stroke();
?>
