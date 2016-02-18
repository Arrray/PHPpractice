<?php include("conn/conn.php");
if(empty($_SESSION["admin_user"])){
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
    <td width="109" height="35" align="center"><span class="STYLE3">会员昵称：</span></td>
    <td width="109" align="center"><span class="STYLE3">会员密码：</span></td>
    <td width="109" align="center"><span class="STYLE3">注册时间：</span></td>
    <td width="109" align="center"><span class="STYLE3">所属类型：</span></td>
    <td width="87" align="center"><span class="STYLE3">操作</span></td>
    <td width="252" align="center">&nbsp;</td>
  </tr>
<?php 
   if(empty($_GET["page"]))
   $page=1;
   else
   $page=$_GET["page"];
   if($page){
    $page_size=2;          //每页显示2条记录
    $query="select count(*) as total from tb_forum_user where tb_forum_id";  //从数据库中读取数据
	$result=mysql_query($query);
    $message_count=mysql_result($result,0,"total");  //获取总的记录数
    $page_count=ceil($message_count/$page_size);	 //获取总的页数
    $offset=($page-1)*$page_size;			 
	$query=mysql_query("select * from tb_forum_user where tb_forum_id order by tb_forum_id desc limit $offset, $page_size");
while($myrow=mysql_fetch_array($query)){
?>
  <tr>
    <td height="25" align="center"><span class="STYLE1"><?php echo $myrow[tb_forum_user];?></span></td>
    <td align="center"><span class="STYLE1"><?php echo $myrow[tb_forum_truepass];?></span></td>
    <td align="center"><span class="STYLE1"><?php echo $myrow[tb_forum_date];?></span></td>
    <td align="center"><span class="STYLE1"><?php echo $myrow[tb_forum_type];?></span></td>
    <td align="center"><a href="delete_leaguer.php?delete_id=<?php echo $myrow[tb_forum_id];?>&&delete_user=<?php echo $myrow[tb_forum_user];?>" class="STYLE1">删除会员</a></td>
    <td align="center">
<form name="form1" method="post" action="update_leaguer.php?update_id=<?php echo $myrow[tb_forum_id];?>">
	<select name="tb_forum_type" id="tb_forum_type">
  		<option value="2">版主</option>
  		<option value="1">会员</option>
	</select>
	<input type="submit" name="Submit" value="权限设置">
</form></td>
  </tr>
<?php }}?>

  <tr>
    <td height="30" colspan="6"><table width="95%" cellpadding="0" cellspacing="0">
  <tr> 
   <td width="45%" align="center"><span class="STYLE1">&nbsp;&nbsp;页次：<?php echo $page;?>
      / <?php echo $page_count;?> 页 记录：<?php echo $message_count;?> 条&nbsp; </span></td>
   <td width="55%" height="22" align="center"><span class="STYLE1"> 分页： 
      <?php
				  if($page!=1)
				   {
				     echo  "<a href=index.php?title=会员管理&&page=1>首页</a>&nbsp;";
					 echo "<a href=index.php?title=会员管理&&page=".($page-1).">上一页</a>&nbsp;";
				   }
				  if($page<$page_count)
				   {
				        echo "<a href=index.php?title=会员管理&&page=".($page+1).">下一页</a>&nbsp;";
				        echo  "<a href=index.php?title=会员管理&&page=".$page_count.">尾页</a>";
				   }
				 
				?>	  
    </span></td>
  </tr>
</table></td>
  </tr>
</table>
</body>
</html>
<?php }?>