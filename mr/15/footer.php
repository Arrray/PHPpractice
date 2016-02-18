<?php
$systemBottom = $adminDB->executeSQL("select bq, icp from tb_system where mark = 1", $connID);
$smarty->assign('systemBottom', $systemBottom);

$smarty->display('footer.phtml');
$connDB->closeConnID();
//$makeStaticPage->pageEnd();
