<?php
session_start();
include_once("config.php");
include_once("conn/conn.class.php");
//print_r($_SESSION["music_list"]);
$array=explode("@",$_SESSION["music_list"]);

			 $markid=0;
			 for($j=0;$j<count($array);$j++){
			  if($array[$j]!=""){               //去掉session中的空值
			     $markid++;      
			   }
			  }
 if($markid!=0){
 $smarty->assign("listnum","Y");
 }
 $sqlstr="select * from tb_video where id = -1";
 for($i=0;$i<count($array);$i++){
  if($array[$i]!=0){
     $sqlstr=$sqlstr." or id= ".$array[$i];
   }
 }
 $array=$result->getRows($sqlstr,$conn);
 $smarty->assign("playlist",$array);
 
$smarty->display("music_list.tpl");

?>