<?php
include("global.php");
include ("jpgraph/jpgraph.php");
include ("jpgraph/jpgraph_pie.php");
include_once ("jpgraph/jpgraph_pie3d.php");					//����3D��ͼPiePlot3D�������ڵ����ļ�

/***********************ͳ���Լ����*************************/
	$sql4="select distinct(count(cip)) as num,cip from tb_wishes where wishsort='�Լ�' group by cip ";
	$DB->query($sql4); 
	$res4=$DB->get_rows_array($sql4);			//���ɶ�ά����
	$rows_count4=count($res4);
	//��������
	$arraynum4=array();
	$arraycip4=array();
	//��������
	for($m=0;$m<$rows_count4;$m++){
		array_push($arraynum4,$res4[$m][num]);
		array_push($arraycip4,$res4[$m][cip]);
	}
/*************************************************************/
//��������
$graph = new PieGraph(320,246);
$graph->SetShadow();
//���ñ�������
$graph->title->Set("ͳ�Ʒ���ȫ�������[ �Լ��� ] ��Ը����");
$graph->title->SetFont(FF_SIMSUN,FS_BOLD);
$graph->legend->SetFont(FF_SIMSUN,FS_NORMAL);
$size=0.3;

/***********************ͳ���Լ���Ը����*************************/
//��������ͼ����
$p= new PiePlot3D($arraynum4);
$p->SetLegends($arraycip4);
$p->SetSize($size);
$p->SetCenter(0.45,0.55);
$p->value->SetFont(FF_FONT0);
$p->title->SetFont(FF_SIMSUN,FS_BOLD);
/*************************************************************/
$graph->Add($p);
$graph->Stroke();
?>
