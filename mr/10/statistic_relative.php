<?php
include("global.php");
include ("jpgraph/jpgraph.php");
include ("jpgraph/jpgraph_pie.php");
include_once ("jpgraph/jpgraph_pie3d.php");					//引用3D饼图PiePlot3D对象所在的类文件

/***********************统计亲情类别*************************/
	$sql2="select distinct(count(cip)) as num,cip from tb_wishes where wishsort='亲情' group by cip ";
	$DB->query($sql2); 
	$res2=$DB->get_rows_array($sql2);			//生成二维数组
	$rows_count2=count($res2);
	//声明数组
	$arraynum2=array();
	$arraycip2=array();
	//解析数组
	for($k=0;$k<$rows_count2;$k++){
		array_push($arraynum2,$res2[$k][num]);
		array_push($arraycip2,$res2[$k][cip]);
	}
/*************************************************************/
//创建画布
$graph = new PieGraph(320,246);
$graph->SetShadow();
//设置标题名称
$graph->title->Set("统计分析全部区域的[ 亲情类 ] 许愿比率");
$graph->title->SetFont(FF_SIMSUN,FS_BOLD);
$graph->legend->SetFont(FF_SIMSUN,FS_NORMAL);
$size=0.3;

/***********************统计亲情许愿比率*************************/
//创建饼形图对象
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
