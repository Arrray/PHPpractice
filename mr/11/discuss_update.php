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
	echo "<div align=center>暂无评论</div>";
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

<tr><td colspan="3" align="center">没有数据</td></tr>
<?php 
}else{
?>
<tr>
  <td colspan="3" align="center"><img src="images/视频_9.jpg" width="665" height="36"></td>
</tr>
<tr>
    <td colspan="3">
<table width="100%" height="25" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#EFEFF7">
            <tr>
              <td width="531"><div align="left">&nbsp;&nbsp;评论&nbsp;<?php echo $total1;?>&nbsp;条&nbsp;每页显示&nbsp;<?php echo $pagesize1;?>&nbsp;个&nbsp;第&nbsp;<?php echo $page1;?>&nbsp;页/共&nbsp;<?php echo $pagecount1?>&nbsp;页</div></td>
              <td width="317">
<div align="right">
<a href="#"
onclick='return artpagination("discuss_update.php?video_id=<?php echo $_GET['video_id'];?>&&page1=1")'>首页</a>&nbsp;<a href="#" onclick='return artpagination("discuss_update.php?video_id=<?php echo $_GET['video_id'];?>&&pages=<?php 
		 if($page1>1) 
		  
		   echo $page1-1;
		  else
		   echo 1;  
		   ?>")'>上一页</a>&nbsp;<a href="#" onclick='return artpagination("discuss_update.php?video_id=<?php echo $_GET['video_id'];?>&&pages=<?php 
		 if($page1<$pagecount1) 
		  
		   echo $page1+1;
		  else
		   echo $pagecount1;  
		   ?>")'>下一页</a>&nbsp;<a href="#" onclick='return artpagination("discuss_update.php?video_id=<?php echo $_GET['video_id'];?>&&pages=<?php echo $pagecount1;?>")'>尾页</a>&nbsp;&nbsp;</div></td>            </tr>
</table>	</td>
  </tr>

<?php
//while(!$d_rst -> EOF){
echo count($d_rsti);

for($i=0;$i<count($d_rsti);$i++){
?>
  <tr>
    <td width="137" align="right">评论人：</td>
    <td width="273">&nbsp;<?php echo $d_rsti[$i][tb_discuss_user];?></td>
    <td width="478">评论时间：<?php echo $d_rsti[$i][tb_discuss_date];?></td>
  </tr>

  <tr>
    <td height="35" colspan="3">&nbsp;<?php echo $d_rsti[$i][tb_discuss_content];?></td>
  </tr>
 
<?php
	//$d_rst -> movenext();										//指针下移
} 
}
?>
</table>
