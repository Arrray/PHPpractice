<?php include("conn/conn.php");
if($_SESSION["admin_user"]==""){
  echo "<script>alert('禁止非法登录!');window.location.href='enter_manage.php';</script>";
  exit;
 }else{
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>无标题文档</title>

</head>

<body>

<table width="95%" height="90" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="323" height="35" align="center"><span class="STYLE3">帖子主题：</span></td>
    <td width="92" align="center"><span class="STYLE3">发布人：</span></td>
    <td width="152" align="center"><span class="STYLE3">发布时间：</span></td>
    <td width="94" align="center"><span class="STYLE3">所属类型：</span></td>
    <td width="265" align="center"><span class="STYLE3">操作</span></td>
  </tr>
<?php 
   if(empty($_GET["page"]))
   $page=1;
   else
   $page=$_GET["page"];
   if($page){
    $page_size=5;          //每页显示2条记录
    $query="select count(*) as total from tb_forum_send where tb_send_type=1";  //从数据库中读取数据
	$result=mysql_query($query);
    $message_count=mysql_result($result,0,"total");  //获取总的记录数
    $page_count=ceil($message_count/$page_size);	 //获取总的页数
    $offset=($page-1)*$page_size;			 
	$query=mysql_query("select * from tb_forum_send where tb_send_type=1 order by tb_send_id desc limit $offset, $page_size");
while($myrow=mysql_fetch_array($query)){
?>
  <tr>
    <td height="25" align="left">&nbsp;&nbsp;<span class="STYLE1"><?php echo $myrow[tb_send_subject];?></span></td>
    <td align="center"><span class="STYLE1"><?php echo $myrow[tb_send_user];?></span></td>
    <td align="center"><span class="STYLE1"><?php echo $myrow[tb_send_date];?></span></td>
    <td align="center"><span class="STYLE1"><?php echo $myrow[tb_send_type];?></span></td>
    <td align="center">
<form action="update_permute.php?update_id=<?php echo $myrow[tb_send_id];?>" method="post" name="form1" class="STYLE1">
	<select name="tb_send_type" id="tb_send_type">
  		<option value="1">置顶</option>
  		<option value="0">取消</option>
	</select>
	<input type="submit" name="Submit" value="执行">
</form></td>
  </tr>
<?php }}?>

  <tr>
    <td height="30" colspan="5" align="center"><table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr> 
   <td width="45%" align="center" class="STYLE1">&nbsp;&nbsp;页次：<?php echo $page;?>
      / <?php echo $page_count;?> 页 记录：<?php echo $message_count;?> 条&nbsp; </td>
   <td width="55%" height="22" align="center" class="STYLE1"> 分页： 
      <?php
				  if($page!=1)
				   {
				     echo  "<a href=index.php?title=顶帖管理&&page=1>首页</a>&nbsp;";
					 echo "<a href=index.php?title=顶帖管理&&page=".($page-1).">上一页</a>&nbsp;";
				   }
				  if($page<$page_count)
				   {
				        echo "<a href=index.php?title=顶帖管理&&page=".($page+1).">下一页</a>&nbsp;";
				        echo  "<a href=index.php?title=顶帖管理&&page=".$page_count.">尾页</a>";
				   }
				 
				?>    </td>
  </tr>
</table></td>
  </tr>
</table>
</body>
</html>
<?php }?>