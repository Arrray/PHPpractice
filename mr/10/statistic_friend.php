<?php
include("global.php");
include ("jpgraph/jpgraph.php");
include ("jpgraph/jpgraph_pie.php");
include_once ("jpgraph/jpgraph_pie3d.php");					//引用3D饼图PiePlot3D对象所在的类文件

/***********************统计友情类别*************************/
	$sql3="select distinct(count(cip)) as num,cip from tb_wishes where wishsort='友情' group by cip ";
	$DB->query($sql3); 
	$res3=$DB->get_rows_array($sql3);			//生成二维数组
	$rows_count3=count($res3);
	//声明数组
	$arraynum3=array();
	$arraycip3=array();
	//解析数组
	for($l=0;$l<$rows_count3;$l++){
		array_push($arraynum3,$res3[$l][num]);
		array_push($arraycip3,$res3[$l][cip]);
	}
/*************************************************************/
//创建画布
$graph = new PieGraph(320,246);
$graph->SetShadow();
//设置标题名称
$graph->title->Set("统计分析全部区域的[ 友情类 ] 许愿比率");
$graph->title->SetFont(FF_SIMSUN,FS_BOLD);
$graph->legend->SetFont(FF_SIMSUN,FS_NORMAL);
$size=0.3;

/***********************统计友情许愿比率*************************/
//创建饼形图对象
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
