<?php
include("global.php");
include ("jpgraph/jpgraph.php");
include ("jpgraph/jpgraph_pie.php");
include_once ("jpgraph/jpgraph_pie3d.php");					//引用3D饼图PiePlot3D对象所在的类文件

/***********************统计爱情类别*************************/
	$sql1="select distinct(count(cip)) as num,cip from tb_wishes where wishsort='爱情' group by cip ";
	$DB->query($sql1); 
	$res1=$DB->get_rows_array($sql1);			//生成二维数组
	$rows_count1=count($res1);
	//声明数组
	$arraynum1=array();
	$arraycip1=array();
	//解析数组
	for($j=0;$j<$rows_count1;$j++){
		array_push($arraynum1,$res1[$j][num]);
		array_push($arraycip1,$res1[$j][cip]);
	}
/*************************************************************/
//创建画布
$graph = new PieGraph(320,246);
$graph->SetShadow();
//设置标题名称
$graph->title->Set("统计分析全部区域的[ 爱情类 ] 许愿比率");
$graph->title->SetFont(FF_SIMSUN,FS_BOLD);
$graph->legend->SetFont(FF_SIMSUN,FS_NORMAL);
$size=0.3;

/***********************统计爱情许愿比率*************************/
//创建饼形图对象
$p= new PiePlot3D($arraynum1);
$p->SetLegends($arraycip1);
$p->SetSize($size);
$p->SetCenter(0.45,0.55);
$p->value->SetFont(FF_FONT0);
$p->title->SetFont(FF_SIMSUN,FS_BOLD);
/*************************************************************/
$graph->Add($p);
$graph->Stroke();
?>
