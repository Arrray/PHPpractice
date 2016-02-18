<?php 
include_once("conn/conn.class.php");
$sqlstrv="select lyric from tb_video where address='".$_GET[id]."'";
$myrow=$result->singleRow($sqlstrv,$conn);
//$sql=mysql_query("select lyric from tb_video where address='".$_GET[id]."'");
//$myrow=mysql_fetch_array($sql);
if(count($myrow)>0){
$lyric=file_get_contents("upfiles/lyric/$myrow[lyric].lrc");
echo $lyric;
}

?>
