<?php 
require_once 'lzh.inc.php';
$books = $adminDB->executeSQL("select id, bookname from tb_bookinfo where smalltypeid='".$_GET['bid']."'", $connID);
$data = "";
for($i = 0; $i < count($books); $i++)
{
    $data .= "<option value=\"".$books[$i]['id']."\">".iconv('gbk', 'utf-8', $books[$i]['bookname'])."</option>";
}
echo $data;