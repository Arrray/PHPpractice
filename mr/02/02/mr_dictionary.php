<table width="800" align="center">
<?php
$query="select * from tb_mr_bccd";//��д��ѯ��䣬Ӧ��countͳ���ܵļ�¼��
$result=$conn->query($query);		//ִ�в�ѯ���
$res=$result->fetchAll(PDO::FETCH_ASSOC);
$message_count=count($res);
if($message_count<=0){			        //�ж�ֵ�Ƿ�Ϊ��
?>
	<tr>
    	<td colspan="2">û�����ݣ�</td>
  	</tr>
<?php 
}else{
	$number=0;				//�������
  	if($page){
    	$page_size=2;		//ÿҳ��ʾ��������
     	$page_count=ceil($message_count/$page_size);	//������ܹ��м�ҳ
    	$offset=($page-1)*$page_size;	//�����һҳ�����ļ�¼��
		$query_2=$conn->query("select * from tb_mr_bccd limit $offset, $page_size");
		foreach($query_2 as $myrow_2){
			if(($number % 2) == 0){ 
?>
	<tr> 
		<?php 
			}
		?>
        <td colspan="2" align="center">
<!--������ݿ�������-->
<table width="400" height="350" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#D0D0D0">
  <tr>
    <td width="165" bgcolor="#FFFFFF"><img src="image_1.php?recid=<?php echo $myrow_2['tb_bccd_id'];?>"  width="150" height="150" border="0"></td>
    <td width="235" valign="top" bgcolor="#FFFFFF"><table width="235" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="25" align="center">���ƣ�</td>
        <td><?php echo $myrow_2['tb_bccd_name'];?></td>
      </tr>
      <tr>
        <td width="60" height="25" align="center">���</td>
        <td width="175"><?php echo $myrow_2['tb_bccd_sort'];?></td>
      </tr>
      <tr>
        <td height="25" align="center">�汾��</td>
        <td><?php echo $myrow_2['tb_bccd_edition'];?></td>
      </tr>
      <tr>
        <td height="75" align="center">�۸�</td>
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
        <td width="87" height="22" align="center" bgcolor="#FFFFFF"><span class="STYLE2">�ʵ䣺<?php echo $message_count;?>��&nbsp; </span></td>
        <td width="205" align="center" bgcolor="#FFFFFF">��һ����<a href="index.php?lmbs=���ձ�̴ʵ�&page=<?php
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
$result3=$conn->prepare($query_3);			//׼����ѯ���
$result3->execute();					//ִ�в�ѯ��䣬�����ؽ����
$res3=$result3->fetch(PDO::FETCH_ASSOC);
echo $res3['tb_bccd_name'];
?></a></td>
   		<td width="238" align="center" bgcolor="#FFFFFF">��һ����<a href="index.php?lmbs=���ձ�̴ʵ�&page=<?php if($page=="" or $page<=1){echo 2;}else if($page>=$page_count){echo $page_count;}else{echo ceil(($page*2+1)/2);}?>">
<?php 
$page_4=($page)*2;
if($page_4<=0){
	$page_4=2;
}
if($page_4==$page_count*2){
	$page_4=$page_count*2-1;
}
$query_4="select * from tb_mr_bccd limit $page_4,1";
$result4=$conn->prepare($query_4);			//׼����ѯ���
$result4->execute();					//ִ�в�ѯ��䣬�����ؽ����
$res4=$result4->fetch(PDO::FETCH_ASSOC);
echo $res4['tb_bccd_name'];
?></a></td>
  		<td align="center" bgcolor="#FFFFFF"><span class="STYLE2"> ��ҳ��
<?php
$next=$link_type*10;
$n=$link_type-1;
$m=$link_type+1;	
$prev_page=$page-10;
$mm="";						
if ($link_type==0){
	echo "<img src=\"images/02.jpg\" width=\"8\" height=\"9\" border=\"0\" title=\"��ҳ\">";					
}else{
	echo "<a href='index.php?lmbs=���ձ�̴ʵ�&vv=0&link_type=0&page=1'><img src=\"images/02.jpg\" width=\"8\" border=\"0\" height=\"9\" border=\"0\" title=\"��ҳ\"></a>&nbsp;";
	$ccc=$vv-10;
    echo "<a href='index.php?lmbs=���ձ�̴ʵ�&vv=$ccc&link_type=$n&page=$prev_page'><img src=\"images/01.jpg\" width=\"8\" height=\"9\" border=\"0\" title=\"��ʮҳ\"></a>";
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
echo "<a href='index.php?lmbs=���ձ�̴ʵ�&vv=$vv&link_type=$link_type&page=$pnext'> $pnext </a>";											
$mm=$mm+1;						
}
?>
        </span>
		<span class="STYLE2">
          <?php
				$vv=$vv+$mm;
				       if ($page_count-$vv<=0){
	                       echo "<img src=\"images/03.jpg\" width=\"8\" height=\"9\" border=\"0\" title=\"βҳ\">";					
					   }else{
	                       echo "<a href='index.php?lmbs=���ձ�̴ʵ�&vv=$vv&link_type=$m&page=$pnext'><img src=\"images/03.jpg\" width=\"8\" height=\"9\" border=\"0\" title=\"��ʮҳ\"></a>";														
					   }
                if ($message_count==0){
					     echo "û�м�¼!";

				}
				}
?>
        </span>		&nbsp;&nbsp;</td>
      </tr>
</table>
