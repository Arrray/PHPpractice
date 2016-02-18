<?php
session_start();
include_once("config.php");
include_once("conn/conn.class.php");
if(!empty($_SESSION["admin"]) and !empty($_SESSION["m_id"])){
echo "<meta http-equiv=\"refresh\" content=\"0; url=main.php\" />";
}else{
$smarty->display("index.tpl");
}
?>
