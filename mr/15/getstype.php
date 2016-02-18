<?php 
require_once 'lzh.inc.php';
$smalltypes = $adminDB->executeSQL("select id, typename from tb_smalltype where bigtypeid='".$_GET['stid']."'", $connID);
$data = "";
for($i = 0; $i < count($smalltypes); $i++)
{
    $data .= "<option value=\"".$smalltypes[$i]['id']."\">".iconv('gbk', 'utf-8', $smalltypes[$i]['typename'])."</option>";
}
echo $data;