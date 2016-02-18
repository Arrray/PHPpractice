<?php
include("global.php");
include ("jpgraph/jpgraph.php");
include ("jpgraph/jpgraph_pie.php");
include_once ("jpgraph/jpgraph_pie3d.php");					//引用3D饼图PiePlot3D对象所在的类文件

/***********************统计自己类别*************************/
	$sql4="select distinct(count(cip)) as num,cip from tb_wishes where wishsort='自己' group by cip ";
	$DB->query($sql4); 
	$res4=$DB->get_rows_array($sql4);			//生成二维数组
	$rows_count4=count($res4);
	//声明数组
	$arraynum4=array();
	$arraycip4=array();
	//解析数组
	for($m=0;$m<$rows_count4;$m++){
		array_push($arraynum4,$res4[$m][num]);
		array_push($arraycip4,$res4[$m][cip]);
	}
/*************************************************************/
//创建画布
$graph = new PieGraph(320,246);
$graph->SetShadow();
//设置标题名称
$graph->title->Set("统计分析全部区域的[ 自己类 ] 许愿比率");
$graph->title->SetFont(FF_SIMSUN,FS_BOLD);
$graph->legend->SetFont(FF_SIMSUN,FS_NORMAL);
$size=0.3;

/***********************统计自己许愿比率*************************/
//创建饼形图对象
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
