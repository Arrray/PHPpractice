<?php session_start();
include_once("conn/conn.class.php");
include_once("config.php");
$smarty->assign("video_author",$_SESSION["name"]);


	$sql="select * from tb_video_type ";
	$rst = $result->getRows($sql,$conn);
	$array_id=array();
	$array_name=array();
  
	for($i=0;$i<count($rst);$i++){
	array_push($array_id,$rst[$i]['tb_type_id']);
	array_push($array_name,$rst[$i]['tb_type_name']);
	}
	
	/*while(!$rst->EOF){ 
		array_push($array_id,$rst->fields[0]);
		array_push($array_name,$rst->fields[1]);
	$rst->movenext();
	}
	*/
$smarty->assign('type_id',$array_id);
$smarty->assign('type_name',$array_name);
$smarty->display('trans.tpl');

?>
