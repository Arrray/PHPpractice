<?php
include("global.php");
include ("jpgraph/jpgraph.php");
include ("jpgraph/jpgraph_pie.php");
include_once ("jpgraph/jpgraph_pie3d.php");					//����3D��ͼPiePlot3D�������ڵ����ļ�

/***********************ͳ���������*************************/
	$sql2="select distinct(count(cip)) as num,cip from tb_wishes where wishsort='����' group by cip ";
	$DB->query($sql2); 
	$res2=$DB->get_rows_array($sql2);			//���ɶ�ά����
	$rows_count2=count($res2);
	//��������
	$arraynum2=array();
	$arraycip2=array();
	//��������
	for($k=0;$k<$rows_count2;$k++){
		array_push($arraynum2,$res2[$k][num]);
		array_push($arraycip2,$res2[$k][cip]);
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
$p= new PiePlot3D($arraynum2);
$p->SetLegends($arraycip2);
$p->SetSize($size);
$p->SetCenter(0.45,0.55);
$p->value->SetFont(FF_FONT0);
$p->title->SetFont(FF_SIMSUN,FS_BOLD);
/*************************************************************/
$graph->Add($p);
$graph->Stroke();
?>
