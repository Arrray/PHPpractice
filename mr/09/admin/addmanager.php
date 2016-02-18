<?php 
session_start();
include_once("config.php");
include_once("conn/conn.class.php");
$smarty->display("addmanager.tpl");
?>