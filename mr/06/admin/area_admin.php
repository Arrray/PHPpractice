<?php session_start();
if($_SESSION["admin_user"]==""){
  echo "<script>alert('禁止非法登录!');window.location.href='enter_manage.php';</script>";
  exit;
 }else{
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>专区管理</title>
</head>
<body>
<form name="form1" method="post" action="area_admin_ok.php">
  <table width="95%" height="57" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="133" align="right" class="STYLE3">专区内容：</td>
    <td width="793"><input name="tb_big_type_content" type="text" id="tb_big_type_content" size="25">
      <input type="submit" name="Submit" value="提交">
      <input type="reset" name="Submit2" value="重置"></td>
  </tr>
</table>
</form>

<table width="95%" height="95" border="0" cellpadding="0" cellspacing="0">
 <?php 
   if(empty($_GET["page"]))
   $page=1;
   else
   $page=$_GET["page"];
   if($page){
    $page_size=2;          //每页显示2条记录
    $query="select count(*) as total from tb_forum_big_type where tb_big_type_id";  //从数据库中读取数据
	$result=mysql_query($query);
    $message_count=mysql_result($result,0,"total");  //获取总的记录数
    $page_count=ceil($message_count/$page_size);	 //获取总的页数
    $offset=($page-1)*$page_size;			 
	$query=mysql_query("select * from tb_forum_big_type where tb_big_type_id order by tb_big_type_id desc limit $offset, $page_size");
while($myrow=mysql_fetch_array($query)){
?>
  <tr>
    <td width="132" align="right" class="STYLE3">专区内容：</td>
    <td width="452"><span class="STYLE1"><?php echo $myrow[tb_big_type_content];?></span></td>
    <td width="83"><span class="STYLE3">发布时间：</span></td>
    <td width="133" class="STYLE1"><?php echo $myrow[tb_big_type_date];?></td>
    <td width="126"><a href="delete_area.php?delete_id=<?php echo $myrow[tb_big_type_id];?>">删除</a></td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr><?php }}?>
</table>
<table width="95%" border="0" cellpadding="0" cellspacing="0">
  <tr> 
   <td width="45%" align="center" class="STYLE1"><span class="STYLE1">&nbsp;&nbsp;页次：<?php echo $page;?>
      / <?php echo $page_count;?> 页 记录：<?php echo $message_count;?> 条&nbsp; </span></td>
   <td width="55%" height="22" align="center" class="STYLE1"><span class="STYLE1"> 分页： 
      <?php
				  if($page!=1)
				   {
				     echo  "<a href=index.php?title=专区管理&&page=1>首页</a>&nbsp;";
					 echo "<a href=index.php?title=专区管理&&page=".($page-1).">上一页</a>&nbsp;";
				   }
				  if($page<$page_count)
				   {
				        echo "<a href=index.php?title=专区管理&&page=".($page+1).">下一页</a>&nbsp;";
				        echo  "<a href=index.php?title=专区管理&&page=".$page_count.">尾页</a>";
				   }
				 
				?>	  
    </span></td>
  </tr>
</table>
</body>
</html>
<?php }?>