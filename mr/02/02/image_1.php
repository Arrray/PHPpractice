<?php         
    $id=mysql_connect('localhost','root','111');
    mysql_select_db('db_pagination',$id);
    $query="select * from tb_mr_bccd where tb_bccd_id=".$_GET['recid'];
    $result=mysql_query($query);
    if(!$result) die("error: mysql query"); 
    $num=mysql_num_rows($result); 
    if($num<1) die("error: no this recorder");     
    $data = mysql_result($result,0,"tb_bccd_picture"); 
    mysql_close($id); 
    echo $data;
?> 



