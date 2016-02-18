<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>无标题文档</title>
<style type="text/css">
<!--
.STYLE1 {color: #FF0000}
-->
</style>
</head>
<script language="javascript">
  function chk(){
    if(form1.page.value<=0 || parseInt(form1.page.value)>parseInt(form1.pages.value)){
	  alert("您输入的页码无效!!");
	  form1.page.focus();
	  return(false);
	}
	return(true);
  }
</script>
<body>
<table width="800" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#3E5D96">
 <tr>
    <td height="24" align="center" bgcolor="#d6e7f7">标题</td>
    <td width="244" align="center" bgcolor="#d6e7f7">创建时间</td>
    <td width="187" align="center" bgcolor="#d6e7f7">创建人</td>
    <td width="249" align="center" bgcolor="#d6e7f7">回复次数</td>
  </tr>
<?php 
if($page){							//判断当前页变量的值是否存在
	$page_size=5;						//定义每页输出的记录数
    $query="select * from tb_forum_send "; 	//编写查询语句，应用count统计总的记录数
	$result=$conn->query($query);		//执行查询语句
	$res=$result->fetchAll(PDO::FETCH_ASSOC);
	$message_count=count($res);
    $page_count=ceil($message_count/$page_size);	//计算出总共有几页
    $offset=($page-1)*$page_size;	//输出上一页结束的记录数
	$query_2=$conn->query("select * from tb_forum_send limit $offset, $page_size");
	foreach($query_2 as $value){		
?>
  <tr>
    <td width="35%" align="center" bgcolor="#FFFFFF">
		<a href="index_ok.php?send_id=<?php echo $value['tb_send_id'];?>" target="_blank"><?php echo $value['tb_send_subject'];?></a>
	</td>
    <td width="25%" align="center" bgcolor="#FFFFFF"><?php echo $value['tb_send_date'];?></td>
    <td width="25%" align="center" bgcolor="#FFFFFF"><?php echo $value['tb_send_user'];?></td>
	<td width="10%" align="center" bgcolor="#FFFFFF">
    	<?php  
			$query_s=$conn->query("select * from tb_forum_restore ");
			echo count($query_s);
		?>
	</td>
  </tr>
<?php 
  	}
}
?>
</table>
<form name="form1" method="post" action="index.php?lmbs=明日论坛" onSubmit="return chk()">
<table width="800" height="30" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#D0D0D0">
      <tr>
        <td height="22" align="center" bgcolor="#FFFFFF"><span class="STYLE2">帖子统计：<?php echo $message_count;?> 条&nbsp; </span></td>
        <td align="center" bgcolor="#FFFFFF">每页显示：<?php echo $page_size; ?>条</td>
        <td align="center" bgcolor="#FFFFFF">共有：<?php echo $page_count;?>页</td>
        <td align="center" bgcolor="#FFFFFF">      <input type="submit" name="Submit" value="跳转">&nbsp;
<input name="page" type="text" size="3">
      <input type="hidden" name="pages" value="<?php echo $page_count;?>">
    页</td>
<td align="center" bgcolor="#FFFFFF"><span class="STYLE2"> 分页：
<?php
$next=$link_type*10;		//以10页为一个单位
$n=$link_type-1;			//上一个10页的值
$m=$link_type+1;			//下一个10页的值
$prev_page=$page-10;		//当前页的上10页的值
$mm="";				
if($link_type==0){			//判断变量的值是否等于0，如果等于0则输出首页图标，无超级连接
	echo "<img src=\"images/02.jpg\" width=\"8\" height=\"9\" border=\"0\" title=\"首页\">";					
}else{		//否则，为首页图标设置超级连接，连接到首页，并为上10页的图标设置超级连接
	echo "<a href='index.php?lmbs=明日论坛&vv=0&link_type=0&page=1'><img src=\"images/02.jpg\" width=\"8\" border=\"0\" height=\"9\" border=\"0\" title=\"首页\"></a>&nbsp;";
	$ccc=$vv-10;			//定义变量，变量$vv是当10页的起始位置，$ccc是上一个10页的起始位置
    echo "<a href='index.php?lmbs=明日论坛&vv=$ccc&link_type=$n&page=$prev_page'><img src=\"images/01.jpg\" width=\"8\" height=\"9\" border=\"0\" title=\"上十页\"></a>";
}
?>
<?php		
//通过for循环语句，输出当前页中的10个超级连接
for($j=1;$j<=$page_count;$j++) {		//根据统计的总的记录数循环输出
	$pnext=$next+$j;			//定义当前页中输出的页码值
	if($mm==10){				//判断当$mm的值等于10时跳出循环
		break;
	}
	if($mm>$page_count){		//判断当$mm的值大于总记录时跳出循环
		break;
	}
	if($page_count-$vv<10){	
	  	if($mm>=$page_count-$vv){	//判断当$mm的值大于等于总记录减去当前10页的起始值时跳出循环
			break;
		}									
	}
	echo "<a href='index.php?lmbs=明日论坛&vv=$vv&link_type=$link_type&page=$pnext'>"; 
	if($page==$pnext){		//为当前点击的页码描红
		echo "<span class='STYLE1'> $pnext </span>";
	}else{
		echo " $pnext ";				//输出当前10页超级连接中的数据
	} 
	echo "</a>";											
    $mm=$mm+1;						
}
?>
</span><span class="STYLE2">
<?php
$vv=$vv+$mm;					//定义变量的值，定义下10页的起始位置
if($page_count-$vv<=0){		//判断当总记录数小于等于下10页的起始位置时，输出尾页的图标
	echo "<img src=\"images/03.jpg\" width=\"8\" height=\"9\" border=\"0\" title=\"尾页\">";					
}else{							//否则输出下10页的超级连接
	echo "<a href='index.php?lmbs=明日论坛&vv=$vv&link_type=$m&page=$pnext'><img src=\"images/03.jpg\" width=\"8\" height=\"9\" border=\"0\" title=\"下十页\"></a>";														
}
if($message_count==0){			//判断当总记录数等于0时，输出没有记录
	echo "没有记录!";
}
?>
        </span>		&nbsp;&nbsp;</td>
</tr>
</table>
</form>
</body>
</html>
