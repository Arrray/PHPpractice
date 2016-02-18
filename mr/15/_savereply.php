<?php
require_once 'library/ConnDB.php';
require_once 'library/AdminDB.php';

$arrayIni = parse_ini_file('config/lzhConfig.ini');

$connDB = new ConnDB($arrayIni['dbType'] ,$arrayIni['host'] ,$arrayIni['userName'] ,$arrayIni['password'] ,$arrayIni['dbName'] ,$arrayIni['isDebug']);

$connID = $connDB->getConnID();

$adminDB = new AdminDB();

$bbsId = $_POST['bbsId'];

$id = date('YmdHis') . mt_rand(1000, 9999);

@unlink('pages/showbbs-' . $bbsId .'.html');

if ($adminDB->executeSQL("insert into tb_reply(id, content, addtime, bbs_id) values('$id', '".$_POST['content']."', '".date('Y-m-d H:i:s')."', '$bbsId')", $connID)){  
    header('location:showbbs.php?id=' . $bbsId);
}