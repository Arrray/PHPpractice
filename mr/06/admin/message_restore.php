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
<script language="javascript" src="js/checkbox.js"></script>
<body>

<table width="95%" height="110" border="0" cellpadding="0" cellspacing="0">
<form name="form1" method="post" action="message_restore_ok.php">
  <tr>
    <td width="51" height="35" align="center"><span class="STYLE3">选项    </span></td>
    <td width="291" align="center"><span class="STYLE3">帖子主题</span></td>
    <td width="281" align="center"><span class="STYLE3">回复内容</span></td>
    <td width="235" align="center"><span class="STYLE3">原帖</span></td>
    <td width="68" align="center"><span class="STYLE3">标记</span></td>
    </tr>
<?php 
     if(empty($_GET["page"]))
   $page=1;
   else
   $page=$_GET["page"];
   if($page){
    $page_size=10;          //每页显示2条记录
    $query="select count(*) as total from tb_forum_restore where tb_send_id ";  //从数据库中读取数据
	$result=mysql_query($query);
    $message_count=mysql_result($result,0,"total");  //获取总的记录数
    $page_count=ceil($message_count/$page_size);	 //获取总的页数
    $offset=($page-1)*$page_size;			 
	$query=mysql_query("select * from tb_forum_restore where tb_send_id order by tb_send_id desc limit $offset, $page_size");
while($myrow=mysql_fetch_array($query)){
?>
  <tr>
    <td height="25" align="center" class="STYLE1"><input name="<?php echo $myrow[tb_restore_id];?>" type="checkbox" value="<?php echo $myrow[tb_restore_id];?>"></td>
    <td align="center" class="STYLE1"><?php echo $myrow[tb_restore_subject];?></td>
    <td align="center" class="STYLE1"><?php echo $myrow[tb_restore_content];?></td>
    <td align="center" class="STYLE1"><?php 
$sql=mysql_query("select * from tb_forum_send where tb_send_id='".$myrow[tb_send_id]."'");
$myrows=mysql_fetch_array($sql);
echo $myrows[tb_send_subject];
?></td>
    <td align="center" class="STYLE1"><?php if($myrow[tb_restore_tag]==1){echo "已屏蔽";}else{echo "未屏蔽";}?></td>
    </tr>
     
<?php }}?>

  <tr>
    <td height="25" align="center">&nbsp;</td>
    <td align="center"><input name="button" type=button class="buttoncss" onClick="checkAll(form1,status)" value="全选">
<input type=button value="反选" class="buttoncss" onClick="switchAll(form1,status)">
<input type=button value="不选" class="buttoncss" onClick="uncheckAll(form1,status)"></td>
    <td colspan="2" align="center"><span class="STYLE1">
      <input type="submit" name="Submit" value="屏蔽">
/
<input type="submit" name="Submit2" value="取消">
    </span></td>
    <td align="center">&nbsp;</td>
    </tr>
 </form>
  <tr>
    <td height="30" colspan="5"><table width="95%" border="0" cellpadding="0" cellspacing="0">
  <tr> 
   <td width="45%" align="center"><span class="STYLE1">&nbsp;&nbsp;页次：<?php echo $page;?>
      / <?php echo $page_count;?> 页 记录：<?php echo $message_count;?> 条&nbsp; </span></td>
   <td width="55%" height="22" align="center"><span class="STYLE1"> 分页： 
      <?php
				  if($page!=1)
				   {
				     echo  "<a href=index.php?title=回帖管理&&page=1>首页</a>&nbsp;";
					 echo "<a href=index.php?title=回帖管理&&page=".($page-1).">上一页</a>&nbsp;";
				   }
				  if($page<$page_count)
				   {
				        echo "<a href=index.php?title=回帖管理&&page=".($page+1).">下一页</a>&nbsp;";
				        echo  "<a href=index.php?title=回帖管理&&page=".$page_count.">尾页</a>";
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