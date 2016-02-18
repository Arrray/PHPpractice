<?php
include("global.php");
include ("jpgraph/jpgraph.php");
include ("jpgraph/jpgraph_pie.php");
include_once ("jpgraph/jpgraph_pie3d.php");					//引用3D饼图PiePlot3D对象所在的类文件

/***********************统计汶川类别*************************/
	$sql6="select distinct(count(cip)) as num,cip from tb_wishes where wishsort='汶川' group by cip ";
	$DB->query($sql6); 
	$res6=$DB->get_rows_array($sql6);			//生成二维数组
	$rows_count6=count($res6);
	//声明数组
	$arraynum6=array();
	$arraycip6=array();
	//解析数组
	for($z=0;$z<$rows_count6;$z++){
		array_push($arraynum6,$res6[$z][num]);
		array_push($arraycip6,$res6[$z][cip]);
	}
/*************************************************************/
//创建画布
$graph = new PieGraph(320,246);
$graph->SetShadow();
//设置标题名称
$graph->title->Set("统计分析全部区域的[ 汶川类 ] 许愿比率");
$graph->title->SetFont(FF_SIMSUN,FS_BOLD);
$graph->legend->SetFont(FF_SIMSUN,FS_NORMAL);
$size=0.3;

/***********************统计汶川类许愿比率*************************/
//创建饼形图对象
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
