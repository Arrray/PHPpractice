<?php
require_once 'library/ConnDB.php';
require_once 'library/AdminDB.php';

$arrayIni = parse_ini_file('config/lzhConfig.ini');

$connDB = new ConnDB($arrayIni['dbType'] ,$arrayIni['host'] ,$arrayIni['userName'] ,$arrayIni['password'] ,$arrayIni['dbName'] ,$arrayIni['isDebug']);

$connID = $connDB->getConnID();

$adminDB = new AdminDB();

$id = date('YmdHis') . mt_rand(1000, 9999);



if ($adminDB->executeSQL("insert into tb_bbs(id, content, addtime) values('$id', '".$_POST['content']."', '".date('Y-m-d H:i:s')."')", $connID)){  
    header('location:showbbs.php?id=' . $id);
}