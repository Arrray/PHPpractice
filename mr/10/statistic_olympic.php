<?php
include("global.php");
include ("jpgraph/jpgraph.php");
include ("jpgraph/jpgraph_pie.php");
include_once ("jpgraph/jpgraph_pie3d.php");					//����3D��ͼPiePlot3D�������ڵ����ļ�

/***********************ͳ�ư��˻����*************************/
	$sql5="select distinct(count(*)) as num,cip from tb_wishes where wishsort='���˻�' group by cip ";
	$DB->query($sql5); 
	$res5=$DB->get_rows_array($sql5);			//���ɶ�ά����
	$rows_count5=count($res5);
	//��������
	$arraynum5=array();
	$arraycip5=array();
	//��������
	for($n=0;$n<$rows_count5;$n++){
		array_push($arraynum5,$res5[$n][num]);
		array_push($arraycip5,$res5[$n][cip]);
	}
/*************************************************************/
//��������
$graph = new PieGraph(320,246);
$graph->SetShadow();
//���ñ�������
$graph->title->Set("ͳ�Ʒ���ȫ�������[ ���˻� ] ��Ը����");
$graph->title->SetFont(FF_SIMSUN,FS_BOLD);
$graph->legend->SetFont(FF_SIMSUN,FS_NORMAL);
$size=0.3;

/***********************ͳ�ư��˻���Ը����*************************/
//��������ͼ����
$p= new PiePlot3D($arraynum5);
$p->SetLegends($arraycip5);
$p->SetSize($size);
$p->SetCenter(0.45,0.55);
$p->value->SetFont(FF_FONT0);
$p->title->SetFont(FF_SIMSUN,FS_BOLD);
/*************************************************************/
$graph->Add($p);
$graph->Stroke();
?>
