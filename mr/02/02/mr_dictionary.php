<table width="800" align="center">
<?php
$query="select * from tb_mr_bccd";//编写查询语句，应用count统计总的记录数
$result=$conn->query($query);		//执行查询语句
$res=$result->fetchAll(PDO::FETCH_ASSOC);
$message_count=count($res);
if($message_count<=0){			        //判断值是否为空
?>
	<tr>
    	<td colspan="2">没有数据！</td>
  	</tr>
<?php 
}else{
	$number=0;				//定义变量
  	if($page){
    	$page_size=2;		//每页显示两条数据
     	$page_count=ceil($message_count/$page_size);	//计算出总共有几页
    	$offset=($page-1)*$page_size;	//输出上一页结束的记录数
		$query_2=$conn->query("select * from tb_mr_bccd limit $offset, $page_size");
		foreach($query_2 as $myrow_2){
			if(($number % 2) == 0){ 
?>
	<tr> 
		<?php 
			}
		?>
        <td colspan="2" align="center">
<!--输出数据库中数据-->
<table width="400" height="350" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#D0D0D0">
  <tr>
    <td width="165" bgcolor="#FFFFFF"><img src="image_1.php?recid=<?php echo $myrow_2['tb_bccd_id'];?>"  width="150" height="150" border="0"></td>
    <td width="235" valign="top" bgcolor="#FFFFFF"><table width="235" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="25" align="center">名称：</td>
        <td><?php echo $myrow_2['tb_bccd_name'];?></td>
      </tr>
      <tr>
        <td width="60" height="25" align="center">类别：</td>
        <td width="175"><?php echo $myrow_2['tb_bccd_sort'];?></td>
      </tr>
      <tr>
        <td height="25" align="center">版本：</td>
        <td><?php echo $myrow_2['tb_bccd_edition'];?></td>
      </tr>
      <tr>
        <td height="75" align="center">价格：</td>
        <td><?php echo $myrow_2['tb_bccd_price'];?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="200" colspan="2" align="center" valign="top" bgcolor="#FFFFFF"><table width="380">
      <tr>
        <td height="5"></td>
      </tr>
      <tr><td><?php echo $myrow_2['tb_bccd_synopsis'];?></td></tr>
      <tr>
        <td height="10"></td>
      </tr>
    </table></td>
  </tr>
</table>
</td>
	<?php 
		if(($number %2) != 0){
?>
	</tr>
<?php 
		} 
 		$number++;
	}

}
?>
</table>




<table width="800" height="30" border="1" align="center" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#D0D0D0">
      <tr>
        <td width="87" height="22" align="center" bgcolor="#FFFFFF"><span class="STYLE2">词典：<?php echo $message_count;?>部&nbsp; </span></td>
        <td width="205" align="center" bgcolor="#FFFFFF">上一部：<a href="index.php?lmbs=明日编程词典&page=<?php
if($page=="" or $page<=1){
	echo 1;
}else{
	echo ceil(($page*2-2)/2);
}
?>">
<?php
$page_3=($page-2)*2+1;
if($page_3<=0){
	$page_3=0;
}
$query_3="select * from tb_mr_bccd limit $page_3,1";
$result3=$conn->prepare($query_3);			//准备查询语句
$result3->execute();					//执行查询语句，并返回结果集
$res3=$result3->fetch(PDO::FETCH_ASSOC);
echo $res3['tb_bccd_name'];
?></a></td>
   		<td width="238" align="center" bgcolor="#FFFFFF">下一部：<a href="index.php?lmbs=明日编程词典&page=<?php if($page=="" or $page<=1){echo 2;}else if($page>=$page_count){echo $page_count;}else{echo ceil(($page*2+1)/2);}?>">
<?php 
$page_4=($page)*2;
if($page_4<=0){
	$page_4=2;
}
if($page_4==$page_count*2){
	$page_4=$page_count*2-1;
}
$query_4="select * from tb_mr_bccd limit $page_4,1";
$result4=$conn->prepare($query_4);			//准备查询语句
$result4->execute();					//执行查询语句，并返回结果集
$res4=$result4->fetch(PDO::FETCH_ASSOC);
echo $res4['tb_bccd_name'];
?></a></td>
  		<td align="center" bgcolor="#FFFFFF"><span class="STYLE2"> 分页：
<?php
$next=$link_type*10;
$n=$link_type-1;
$m=$link_type+1;	
$prev_page=$page-10;
$mm="";						
if ($link_type==0){
	echo "<img src=\"images/02.jpg\" width=\"8\" height=\"9\" border=\"0\" title=\"首页\">";					
}else{
	echo "<a href='index.php?lmbs=明日编程词典&vv=0&link_type=0&page=1'><img src=\"images/02.jpg\" width=\"8\" border=\"0\" height=\"9\" border=\"0\" title=\"首页\"></a>&nbsp;";
	$ccc=$vv-10;
    echo "<a href='index.php?lmbs=明日编程词典&vv=$ccc&link_type=$n&page=$prev_page'><img src=\"images/01.jpg\" width=\"8\" height=\"9\" border=\"0\" title=\"上十页\"></a>";
}
?>
<?php	
for ($j=1;$j<=$page_count;$j++) {
	$pnext=$next+$j;
	if ($mm==10){
		break;
	}
	if ($mm>$page_count){
		break;
	}
	if ($page_count-$vv<10){
		if ($mm>=$page_count-$vv){
			break;
		}									
	}
?>
<?php
echo "<a href='index.php?lmbs=明日编程词典&vv=$vv&link_type=$link_type&page=$pnext'> $pnext </a>";											
$mm=$mm+1;						
}
?>
        </span>
		<span class="STYLE2">
          <?php
				$vv=$vv+$mm;
				       if ($page_count-$vv<=0){
	                       echo "<img src=\"images/03.jpg\" width=\"8\" height=\"9\" border=\"0\" title=\"尾页\">";					
					   }else{
	                       echo "<a href='index.php?lmbs=明日编程词典&vv=$vv&link_type=$m&page=$pnext'><img src=\"images/03.jpg\" width=\"8\" height=\"9\" border=\"0\" title=\"下十页\"></a>";														
					   }
                if ($message_count==0){
					     echo "没有记录!";

				}
				}
?>
        </span>		&nbsp;&nbsp;</td>
      </tr>
</table>
