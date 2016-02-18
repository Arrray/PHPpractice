<?php
require_once 'header.php';


//
$pubs = $adminDB->executeSQL("select id, pubname from tb_pub order by addtime", $connID);
for($i=0; $i<count($pubs); $i++)
{
    $arrayPubOption[$pubs[$i]['id']] = $pubs[$i]['pubname'];
}
$smarty->assign('arrayPubOption', $arrayPubOption);
//

$btypes = $adminDB->executeSQL("select id, typename from tb_bigtype order by addtime", $connID);
for($i=0; $i<count($btypes); $i++)
{
    $arrayBtypeOption[$btypes[$i]['id']] = $btypes[$i]['typename'];
}
$smarty->assign('arrayBtypeOption', $arrayBtypeOption);
//

for($i=1990; $i<=2050; $i++)
{
    $arrayYear[$i] = $i;
}
$smarty->assign('arrayYear', $arrayYear);

for($i=1; $i<=12; $i++)
{
    $arrayMonth[$i] = $i;
}
$smarty->assign('arrayMonth', $arrayMonth);


$smarty->display('advancedsearch.phtml');
require_once 'footer.php';