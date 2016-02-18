<?php session_start(); include("conn/conn.php"); 	//初始化session变量，连接数据库
if(empty($pages)){ $page=1; }						//判断变量的值是否为空，用于分页显示
if(empty($pages)){ $pages=1; } 			//判断变量的值是否为空，用于分页显示
if(empty($link_type)){ $link_type=0; }
if(empty($link_types)){ $link_types=0; }
$tb_send_subject_content=$_POST["tb_send_subject_content"];
$content=$_GET["content"];				//获取帖子的类型
$content_1=$_GET["content_1"];			//获取帖子的类别
//从发布的帖子中查询
$query_6=mysql_query("select * from tb_forum_send where tb_send_subject like '%$tb_send_subject_content%' or tb_send_content like '%$tb_send_subject_content%'");
//从回复的帖子中搜索
$query_7=mysql_query("select * from tb_forum_restore where tb_restore_subject like '%$tb_send_subject_content%' or tb_restore_content like '%$tb_send_subject_content%'");
//统计查询的结果
if(mysql_num_rows($query_6)>0 or mysql_num_rows($query_7)>0 ){
	if($page){			//定义分页的变量
    	$page_size=10;	//定义每页显示的数量
    	$query="select count(*) as total from tb_forum_send where tb_send_subject like '%$tb_send_subject_content%' or tb_send_content like '%$tb_send_subject_content%'";
		$result=mysql_query($query);
    	$message_count=mysql_result($result,0,"total");
    	$page_count=ceil($message_count/$page_size);	
    	$offset=($page-1)*$page_size;	
		$query_2=mysql_query("select * from tb_forum_send where tb_send_subject like '%$tb_send_subject_content%' or tb_send_content like '%$tb_send_subject_content%' limit $offset, $page_size");
?>

<style type="text/css">
<!--
.STYLE1 {font-size: 12px}
.STYLE3 {font-size: 12px; font-weight: bold; }
-->
</style>
<script language="javascript">
function check_submit(){
	if(form1.tb_send_subject_content.value==""){
		alert("查询条件不允许为空！");form1.tb_send_subject_content.focus();return false;
	}
	form1.submit();
}
</script>
<table border="0" cellpadding="0" cellspacing="0">
  <form name="form1" method="post" action="search.php?class=搜索引擎&&content=<?php echo $_GET["content"];?>&&content_1=<?php echo $_GET["content_1"];?>">
    <tr>
      <td width="210" height="40" rowspan="2" align="left"><strong class="STYLE3">查询条件：</strong><span class="STYLE1">&nbsp;<?php echo $tb_send_subject_content;?></span></td>
      <td height="33" colspan="2" valign="bottom"><input name="tb_send_subject_content" type="text" size="20" /></td>
      <td width="139" rowspan="2">&nbsp;<input type="submit" name="Submit" value="搜索引擎" onclick="return check_submit();" /></td>
      <td width="84" rowspan="2">&nbsp;</td>
    </tr>
  </form>
  <tr>
    <td height="7" colspan="2"></td>
  </tr>
</table>
<table width="100%" height="110" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="30" colspan="2" align="left"><span class="STYLE3">发布的帖子——标题</span></td>
    <td width="265"><span class="STYLE3">创建时间</span></td>
    <td width="93"><span class="STYLE3">创建人</span></td>
    <td width="83"><span class="STYLE3">回复次数</span></td>
  </tr>
  <?php while($myrow_2=mysql_fetch_array($query_2)){	?>
  <tr>
    <td width="61" height="30" align="center"><img src="<?php echo $myrow_2["tb_send_picture"];?>" /></td>
    <td width="473"><a href="send_forum_content.php?send_big_type=<?php echo $_GET["content"];?>&&send_small_type=<?php echo $myrow_2["tb_send_small_type"];?>&&send_id=<?php echo $myrow_2["tb_send_id"];?>" target="_blank"><?php echo $myrow_2["tb_send_subject"];?></a> </td>
    <td><?php echo $myrow_2["tb_send_date"];?></td>
    <td><?php echo $myrow_2["tb_send_user"];?></td>
    <td><?php  $query_s=mysql_query("select * from tb_forum_restore where tb_send_id='$myrow_2[tb_send_id]'");
echo mysql_num_rows($query_s);
?></td>
  </tr>
  <?php }?>
</table>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
	<tr> 
    	<td width="27%" height="22" align="center"><span class="STYLE1">帖子统计：<?php echo $message_count;?> 条&nbsp; </span></td>
        <td width="57%" align="center"><span class="STYLE1"> 分页： 
        <?php
			$next=$link_type*10;
			$n=$link_type-1;
			$m=$link_type+1;	
            $prev_page=$page-10;						
			if($link_type==0){
            	echo "<img src=\"images/02.jpg\" width=\"8\" height=\"9\" border=\"0\" title=\"首页\">";					
			}else{
                echo "<a href='search.php?vv=0&link_type=0&page=1&tb_send_subject_content=$tb_send_subject_content&&content=$content&&content_1=$content_1'><img src=\"images/02.jpg\" width=\"8\" border=\"0\" height=\"9\" border=\"0\" title=\"首页\"></a>&nbsp;";
				$ccc=$vv-10;
                echo "<a href='search.php?vv=$ccc&link_type=$n&page=$prev_page&tb_send_subject_content=$tb_send_subject_content&&content=$content&&content_1=$content_1'><img src=\"images/01.jpg\" width=\"8\" height=\"9\" border=\"0\" title=\"上十页\"></a>";
			}
		?>
        <?php	
 			for($j=1;$j<=$page_count;$j++){
				$pnext=$next+$j;
				if($mm==10){
					break;
				}
				if($mm>$page_count){
					break;
				}
				if($page_count-$vv<10){
	  				if($mm>=$page_count-$vv){
						break;
					}									
				}
		?>
        <?php
        		echo "<a href='search.php?vv=$vv&link_type=$link_type&page=$pnext&tb_send_subject_content=$tb_send_subject_content&&content=$content&&content_1=$content_1'> $pnext </a>";											
            	$mm=$mm+1;						
	     	}
		?></span></td>
		<td width="16%" align="center"><span class="STYLE1">
        <?php
				$vv=$vv+$mm;
				if($page_count-$vv<=0){
	            	echo "<img src=\"images/03.jpg\" width=\"8\" height=\"9\" border=\"0\" title=\"尾页\">";					
				}else{
	            	echo "<a href='search.php?vv=$vv&link_type=$m&page=$pnext&tb_send_subject_content=$tb_send_subject_content&&content=$content&&content_1=$content_1'><img src=\"images/03.jpg\" width=\"8\" height=\"9\" border=\"0\" title=\"下十页\"></a>";														
				}
                if($message_count==0){
					echo "没有记录!";
				}
		?></span> </td>
	</tr>
</table>
<?php 
	}
if($pages){
    	$page_sizes=10;
    	$querys="select count(*) as total from tb_forum_restore where tb_restore_subject like '%$tb_send_subject_content%' or tb_restore_content like '%$tb_send_subject_content%'";
		$results=mysql_query($querys);
    	$message_counts=mysql_result($results,0,"total");
    	$page_counts=ceil($message_counts/$page_sizes);	
    	$offsets=($pages-1)*$page_sizes;	
		$query_8=mysql_query("select * from tb_forum_restore where tb_restore_subject like '%$tb_send_subject_content%' or tb_restore_content like '%$tb_send_subject_content%' limit $offsets, $page_sizes");
?>



<table width="100%" height="110" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="538" height="30"><span class="STYLE3">回复的帖子——标题</span></td>
    <td width="263"><span class="STYLE3">回复时间</span></td>
    <td width="96"><span class="STYLE3">回复人</span></td>
    <td width="78"><span class="STYLE3">回复次数</span></td>
  </tr>
  <?php while($myrow_8=mysql_fetch_array($query_8)){	?>
  <tr>
  <?php $num=$myrow_8['tb_send_id']; 
  $query_9=mysql_query("select * from tb_forum_send where tb_send_id =$num");
  $myrow_9=mysql_fetch_array($query_9);
  $smalltype=$myrow_9["tb_send_small_type"];
   
  ?>
    <td height="30"><a href="send_forum_content.php?send_big_type=<?php echo $_GET["content"];?>&&send_small_type=<?php echo $smalltype;?>&&send_id=<?php echo $myrow_8["tb_send_id"];?>" target="_blank"><?php echo $myrow_8["tb_restore_subject"];?></a> </td>
    <td><?php echo $myrow_8["tb_restore_date"];?></td>
    <td><?php echo $myrow_8["tb_restore_user"];?></td>
    <td><?php echo $myrow_8["tb_forum_counts"];?></td>
  </tr>
  <?php }?>
</table>

<table width="100%" border="0" cellpadding="0" cellspacing="0">
	<tr> 
    	<td width="27%" height="22" align="center"><span class="STYLE1">帖子统计：<?php echo $message_counts;?> 条&nbsp; </span></td>
        <td width="57%" align="center"><span class="STYLE1"> 分页： 
        <?php
			$nexts=$link_types*10;
			$ns=$link_types-1;
			$ms=$link_types+1;	
            $prev_pages=$pages-10;						
			if($link_types==0){
            	echo "<img src=\"images/02.jpg\" width=\"8\" height=\"9\" border=\"0\" title=\"首页\">";					
			}else{
                echo "<a href='search.php?vvs=0&link_types=0&pages=1&tb_send_subject_content=$tb_send_subject_content&content=$content&content_1=$content_1'><img src=\"images/02.jpg\" width=\"8\" border=\"0\" height=\"9\" border=\"0\" title=\"首页\"></a>&nbsp;";
				$cccs=$vvs-10;
                echo "<a href='search.php?vvs=$cccs&link_types=$ns&pages=$prev_pages&tb_send_subject_content=$tb_send_subject_content&content=$content&content_1=$content_1'><img src=\"images/01.jpg\" width=\"8\" height=\"9\" border=\"0\" title=\"上十页\"></a>";
			}
		?>
        <?php	
 			for($js=1;$js<=$page_counts;$js++){
				$pnexts=$nexts+$js;
				if($mms==10){
					break;
				}
				if($mms>$page_counts){
					break;
				}
				if($page_counts-$vvs<10){
	  				if($mms>=$page_counts-$vvs){
						break;
					}									
				}
		?>
        <?php
        		echo "<a href='search.php?vvs=$vvs&link_types=$link_types&pages=$pnexts&tb_send_subject_content=$tb_send_subject_content&&content=$content&&content_1=$content_1'> $pnexts </a>";											
            	$mms=$mms+1;						
	     	}
		?></span></td>
		<td width="16%" align="center"><span class="STYLE1">
        <?php
				$vvs=$vvs+$mms;
				if($page_counts-$vvs<=0){
	            	echo "<img src=\"images/03.jpg\" width=\"8\" height=\"9\" border=\"0\" title=\"尾页\">";					
				}else{
	            	echo "<a href='search.php?vvs=$vvs&link_types=$ms&pages=$pnexts&tb_send_subject_content=$tb_send_subject_content&&content=$content&content_1=$content_1'><img src=\"images/03.jpg\" width=\"8\" height=\"9\" border=\"0\" title=\"下十页\"></a>";														
				}
                if($message_counts==0){
					echo "没有记录!";
				}
		?></span> </td>
	</tr>
</table>
<?php 
	}
?>



<?php



}else{
   echo "<script>alert('没有找到符合条件的数据！!');history.back();</script>";
exit;
}
?>
