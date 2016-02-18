<?php
include("global.php");
include ("jpgraph/jpgraph.php");
include ("jpgraph/jpgraph_pie.php");
include_once ("jpgraph/jpgraph_pie3d.php");					//引用3D饼图PiePlot3D对象所在的类文件

/***********************统计奥运会类别*************************/
	$sql5="select distinct(count(*)) as num,cip from tb_wishes where wishsort='奥运会' group by cip ";
	$DB->query($sql5); 
	$res5=$DB->get_rows_array($sql5);			//生成二维数组
	$rows_count5=count($res5);
	//声明数组
	$arraynum5=array();
	$arraycip5=array();
	//解析数组
	for($n=0;$n<$rows_count5;$n++){
		array_push($arraynum5,$res5[$n][num]);
		array_push($arraycip5,$res5[$n][cip]);
	}
/*************************************************************/
//创建画布
$graph = new PieGraph(320,246);
$graph->SetShadow();
//设置标题名称
$graph->title->Set("统计分析全部区域的[ 奥运会 ] 许愿比率");
$graph->title->SetFont(FF_SIMSUN,FS_BOLD);
$graph->legend->SetFont(FF_SIMSUN,FS_NORMAL);
$size=0.3;

/***********************统计奥运会许愿比率*************************/
//创建饼形图对象
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
