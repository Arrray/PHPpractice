<?php 
header('Content-Type: text/html; charset=gb2312' );
include_once("conn/conn.class.php");
	$p_sqlstr="select * from tb_video_discuss where tb_video_id=".$_GET['video_id']."";
	$arrays=$result->getRows($p_sqlstr,$conn);
	$total1=count($arrays);

if(empty($_GET['pages'])==true || is_numeric($_GET['pages'])==false){
	$page1=1;
}else{
	$page1=intval($_GET['pages']);
}
if($total1==0){
	echo "<div align=center>��������</div>";
}else{ 
	$pagesize1=5;
	if($total1<$pagesize1){
		$pagecount1=1;
	}else{
		if($total1%$pagesize1==0){
			$pagecount1=intval($total1/$pagesize1);
		}else{
			$pagecount1=intval($total1/$pagesize1)+1;
		} 
	}
}
?>
<table width="100%" border="1" cellpadding="1" cellspacing="1" bordercolor="#EFEFF7" bgcolor="#FFFFFF">
  
<?php 
	$d_sqlstr="select * from tb_video_discuss where tb_video_id=".$_GET['video_id']." order by tb_discuss_id desc";
	$d_rst = $result->SelectLimit($d_sqlstr,$pagesize1,($page1-1)*$pagesize1,$conn);
    $d_rsti=$result->getRows($d_rst,$conn);
   
//if($d_rst->EOF){ 
  if(count($d_rsti)==0){
?>

<tr><td colspan="3" align="center">û������</td></tr>
<?php 
}else{
?>
<tr>
  <td colspan="3" align="center"><img src="images/��Ƶ_9.jpg" width="665" height="36"></td>
</tr>
<tr>
    <td colspan="3">
<table width="100%" height="25" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#EFEFF7">
            <tr>
              <td width="531"><div align="left">&nbsp;&nbsp;����&nbsp;<?php echo $total1;?>&nbsp;��&nbsp;ÿҳ��ʾ&nbsp;<?php echo $pagesize1;?>&nbsp;��&nbsp;��&nbsp;<?php echo $page1;?>&nbsp;ҳ/��&nbsp;<?php echo $pagecount1?>&nbsp;ҳ</div></td>
              <td width="317">
<div align="right">
<a href="#"
onclick='return artpagination("discuss_update.php?video_id=<?php echo $_GET['video_id'];?>&&page1=1")'>��ҳ</a>&nbsp;<a href="#" onclick='return artpagination("discuss_update.php?video_id=<?php echo $_GET['video_id'];?>&&pages=<?php 
		 if($page1>1) 
		  
		   echo $page1-1;
		  else
		   echo 1;  
		   ?>")'>��һҳ</a>&nbsp;<a href="#" onclick='return artpagination("discuss_update.php?video_id=<?php echo $_GET['video_id'];?>&&pages=<?php 
		 if($page1<$pagecount1) 
		  
		   echo $page1+1;
		  else
		   echo $pagecount1;  
		   ?>")'>��һҳ</a>&nbsp;<a href="#" onclick='return artpagination("discuss_update.php?video_id=<?php echo $_GET['video_id'];?>&&pages=<?php echo $pagecount1;?>")'>βҳ</a>&nbsp;&nbsp;</div></td>            </tr>
</table>	</td>
  </tr>

<?php
//while(!$d_rst -> EOF){
echo count($d_rsti);

for($i=0;$i<count($d_rsti);$i++){
?>
  <tr>
    <td width="137" align="right">�����ˣ�</td>
    <td width="273">&nbsp;<?php echo $d_rsti[$i][tb_discuss_user];?></td>
    <td width="478">����ʱ�䣺<?php echo $d_rsti[$i][tb_discuss_date];?></td>
  </tr>

  <tr>
    <td height="35" colspan="3">&nbsp;<?php echo $d_rsti[$i][tb_discuss_content];?></td>
  </tr>
 
<?php
	//$d_rst -> movenext();										//ָ������
} 
}
?>
</table>
