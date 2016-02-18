<?php 
session_start();
if(isset($_COOKIE["videoid"]) || isset($_COOKIE["videoid1"]) || isset($_COOKIE["videoid2"]) || isset($_COOKIE["videoid3"])){
$video1=$_COOKIE["videoid"];           //»ñÈ¡cookieÖµ
$video2=$_COOKIE["videoid1"];
$video3=$_COOKIE["videoid2"];
$video4=$_COOKIE["videoid3"];
}else{
$video1="";
$video2="";
$video3="";
$video4="";
}

include_once("conn/conn.class.php");
include_once("config.php");
include_once("top.php");
$ll_sqlstr="select * from tb_video where tb_video_id='".$video1."'";
$array=$result->getRows($ll_sqlstr,$conn);

$ll_sqlstr1="select * from tb_video where tb_video_id='".$video2."'";
$array1=$result->getRows($ll_sqlstr1,$conn);

$ll_sqlstr2="select * from tb_video where tb_video_id='".$video3."'";
$array2=$result->getRows($ll_sqlstr2,$conn);

$ll_sqlstr3="select * from tb_video where tb_video_id='".$video4."'";
$array3=$result->getRows($ll_sqlstr3,$conn);

$smarty->assign("video",$array);
$smarty->assign("video1",$array1);
$smarty->assign("video2",$array2);
$smarty->assign("video3",$array3);

if(empty($video1))
$smarty->assign("relook","F");
else
$smarty->assign("relook","T");

if(empty($video2))
$smarty->assign("relook1","F");
else
$smarty->assign("relook1","T");

if(empty($video3))
$smarty->assign("relook2","F");
else
$smarty->assign("relook2","T");

if(empty($video4))
$smarty->assign("relook3","F");
else
$smarty->assign("relook3","T");

$smarty->display("historylook.tpl");	
?>
