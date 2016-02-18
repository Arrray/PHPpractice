<?php
include("global.php");
include ("jpgraph/jpgraph.php");
include ("jpgraph/jpgraph_pie.php");
include_once ("jpgraph/jpgraph_pie3d.php");					//引用3D饼图PiePlot3D对象所在的类文件

/***********************统计全部类别*************************/
	$sql="select distinct(count(cip)) as num,cip from tb_wishes  group by cip ";
	$DB->query($sql); 
	$res=$DB->get_rows_array($sql);			//生成二维数组
	$rows_count=count($res);
	//声明数组
	$arraynum0=array();
	$arraycip0=array();
	//解析数组
	for($i=0;$i<$rows_count;$i++){
		array_push($arraynum0,$res[$i][num]);
		array_push($arraycip0,$res[$i][cip]);
	}
/*************************************************************/
//创建画布
$graph = new PieGraph(990,276);
$graph->SetShadow();
//设置标题名称
$graph->title->Set("应用3D饼形图统计分析全部区域许愿比率");
$graph->title->SetFont(FF_SIMSUN,FS_BOLD);
$graph->legend->SetFont(FF_SIMSUN,FS_NORMAL);
$size=0.5;

/***********************统计全部许愿比率*************************/
//创建饼形图对象
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
