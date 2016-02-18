<?php session_start(); include("conn/conn.php"); if (empty($page)) {$page=1;}?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>我的收藏</title>
<style type="text/css">
<!--
body {
	background-color: #8496BD;
}
-->
</style></head>

<body>
<table width="950" height="123" border="0" align="center" cellpadding="0" cellspacing="0">
 <form name="form1" method="post" action="delete_collection.php">
  <tr>
    <td height="37" colspan="2"><img src="images/我的收藏.jpg" width="137" height="34"></td>
    <td width="195">&nbsp;</td>
    <td width="165">&nbsp;</td>
    <td width="171">&nbsp;</td>
  </tr>
  <tr>
    <td width="137" align="center" bgcolor="#F7F7FF">ID</td>
    <td width="282" bgcolor="#F7F7FF">标题</td>
    <td bgcolor="#F7F7FF">标签</td>
    <td bgcolor="#F7F7FF">时间</td>
    <td bgcolor="#F7F7FF">操作</td>
  </tr>
<?php 
$collection_user=$_GET["collection_user"];
  if(empty($_GET["page"]))
   $page=1;
   else
   $page=$_GET["page"];

  if($page){
    $page_size=2;          //每页显示2条记录
    $query="select count(*) as total from tb_my_collection where tb_collection_user='$_GET[collection_user]' ";  //从数据库中读取数据
	$result=mysql_query($query);
    $message_count=mysql_result($result,0,"total");  //获取总的记录数
    $page_count=ceil($message_count/$page_size);	 //获取总的页数
    $offset=($page-1)*$page_size;			 
$query=mysql_query("select * from tb_my_collection where tb_collection_user='$_GET[collection_user]' limit $offset, $page_size");
while($myrow=mysql_fetch_array($query)){
?>
  <tr>
    <td height="24" align="center" bgcolor="#F7F7FF"><?php echo $myrow["tb_collection_id"];?></td>
    <td bgcolor="#F7F7FF"><a href="<?php echo $myrow["tb_collection_address"];?>"><?php echo $myrow["tb_collection_subject"];?></a></td>
    <td bgcolor="#F7F7FF"><?php echo $myrow["tb_collection_label"];?></td>
    <td bgcolor="#F7F7FF"><?php echo $myrow["tb_collection_date"];?></td>
    <td bgcolor="#F7F7FF"><input name="<?php echo $myrow["tb_collection_id"];?>" type="checkbox" value="<?php echo $myrow["tb_collection_id"];?>">    </td>
  </tr>
<?php }}?>
  <tr>
    <td height="28" bgcolor="#F7F7FF">&nbsp;</td>
    <td bgcolor="#F7F7FF">&nbsp;</td>
    <td bgcolor="#F7F7FF">&nbsp;</td>
    <td bgcolor="#F7F7FF">&nbsp;</td>
    <td bgcolor="#F7F7FF"><input type="submit" name="Submit" value=" 删除标签 "></td>
  </tr>
     </form>
</table>
<table width="950" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#F7FBFF">
  <tr> 
   <td width="45%" align="center" bgcolor="#F7F7FF"><span class="STYLE1">&nbsp;&nbsp;页次：<?php echo $page;?>
      / <?php echo $page_count;?> 页 记录：<?php echo $message_count;?> 条&nbsp; </span></td>
   <td width="55%" height="22" align="center" bgcolor="#F7F7FF"><span class="STYLE1"> 分页： 
      <?php
				  if($page!=1)
				   {   
				     echo  "<a href=my_forum_collection.php?collection_user=$collection_user&&page=1>首页</a>&nbsp;";
					 echo "<a href=my_forum_collection.php?collection_user=$collection_user&&page=".($page-1).">上一页</a>&nbsp;";
				   }
				  if($page<$page_count)
				   {
				        echo "<a href=my_forum_collection.php?collection_user=$collection_user&&page=".($page+1).">下一页</a>&nbsp;";
				        echo  "<a href=my_forum_collection.php?collection_user=$collection_user&&page=".$page_count.">尾页</a>";
				   }
				 
				?>	  
    </span></td>
  </tr>
</table>
<table width="950" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="661" bgcolor="#F7F7FF">&nbsp;</td>
    <td width="289" bgcolor="#F7F7FF"><img src="images/index_8 (2).jpg" width="218" height="75"></td>
  </tr>
</table>
</body>
</html>
