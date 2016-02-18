<?php
require_once 'lzh.inc.php';
$arrayunc=$adminDB->executeSQL("select id,usernc from tb_user where usernc='".$_GET["unc"]."'",$connID);
if($arrayunc)
	echo 0;
else
	echo 1;
?>