<?php
require_once 'lzh.inc.php';
@$adminDB->executeSQL("delete from tb_order where orderno='".$_SESSION['recuserinfo']['orderNo']."'", $connID);
unset($_SESSION['recuserinfo']);
unset($_SESSION['idStr']);
unset($_SESSION['numStr']);
header('location:index.html');