<?php	session_start(); include("../conn/conn.php");
if($_SESSION["admin_user"]==""){
  echo "<script>alert('禁止非法登录!');window.location.href='enter_manage.php';</script>";
  exit;
 }else{
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>后台管理</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<style type="text/css">
<!--
.STYLE1 {font-size: 12px}
.STYLE3 {font-size: 12px; font-weight: bold; }
-->
</style>
</head>
	  <script language="javascript">
	     function check_type(form){
		   if(form.tb_big_type_content.value==""){
		     alert("请选择所属专区！");
		     form.tb_big_type_content.focus();
			 return(false);
		   }
		   
		   if(form.tb_small_type_content.value==""){
		     alert("请输入类别！");
		     form.tb_small_type_content.focus();
			 return(false);
		   }
		 return(true);
		 
		 
		 }
	  
	  
	  </script>

<body topmargin="0" leftmargin="0" bottommargin="0" class="scrollbar">
<form name="form1" method="post" action="append_small_type_ok.php" onSubmit="javscript: return check_type(this)">
  <table width="95%" height="90" border="0" cellpadding="0" cellspacing="0">
    
    <tr>
      <td width="141" height="35" align="right"><span class="STYLE3">所属专区:</span></td>
      <td width="804"><select name="tb_big_type_content" id="tb_big_type_content">
<option selected="selected">请选择专区</option>
<?php  $query=mysql_query("select * from tb_forum_big_type");
while($result=mysql_fetch_array($query)){
?>        
<option value="<?php echo $result[tb_big_type_content];?>"><?php echo $result[tb_big_type_content];?></option>
<?php }?>
      </select>      </td>
    </tr>
    <tr>
      <td height="35" align="right"><span class="STYLE3">所属类别:</span></td>
      <td><input name="tb_small_type_content" type="text" size="65"></td>
    </tr>
    <tr>
      <td height="25">&nbsp;</td>
      <td><input type="submit" name="Submit" value="提交">
      <input type="reset" name="Submit2" value="重置"></td>
    </tr>
  </table>
</form>
<table width="95%" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="223" height="25" align="center" class="STYLE3">所属专区</td>
      <td width="353" align="center" class="STYLE3">所属类别</td>
      <td width="221" align="center" class="STYLE3">创建时间</td>
      <td width="148" align="center" class="STYLE3">操作</td>
    </tr>
<?php 
  if(empty($_GET["page"]))
   $page=1;
   else
   $page=$_GET["page"];
   if($page){
    $page_size=1;          //每页显示2条记录
    $query="select count(*) as total from tb_forum_small_type where tb_small_type_id";  //从数据库中读取数据
	$result=mysql_query($query);
    $message_count=mysql_result($result,0,"total");  //获取总的记录数
    $page_count=ceil($message_count/$page_size);	 //获取总的页数
    $offset=($page-1)*$page_size;			 
	$query=mysql_query("select * from tb_forum_small_type where tb_small_type_id order by tb_small_type_id desc limit $offset, $page_size");
	while($result=mysql_fetch_array($query)){
?>
    <tr>
      <td height="25" align="center" class="STYLE1"><?php echo $result[tb_big_type_content];?></td>
      <td align="center" class="STYLE1"><?php echo $result[tb_small_type_content];?></td>
      <td align="center" class="STYLE1"><?php echo $result[tb_small_type_date];?></td>
      <td align="center" class="STYLE1"><a href="delete_small_type.php?delete_id=<?php echo $result[tb_small_type_id];?>">删除</a></td>
    </tr>
<?php } }?>
</table><table width="95%" border="0" cellpadding="0" cellspacing="0">
  <tr> 
   <td width="45%" height="30" align="center"><span class="STYLE1">&nbsp;&nbsp;页次：<?php echo $page;?>
      / <?php echo $page_count;?> 页 记录：<?php echo $message_count;?> 条&nbsp; </span></td>
   <td width="55%" height="22" align="center"><span class="STYLE1"> 分页： 
      <?php
				  if($page!=1)
				   {
				     echo  "<a href=index.php?title=帖子类别管理&&page=1>首页</a>&nbsp;";
					 echo "<a href=index.php?title=帖子类别管理&&page=".($page-1).">上一页</a>&nbsp;";
				   }
				  if($page<$page_count)
				   {
				        echo "<a href=index.php?title=帖子类别管理&&page=".($page+1).">下一页</a>&nbsp;";
				        echo  "<a href=index.php?title=帖子类别管理&&page=".$page_count.">尾页</a>";
				   }
				 
				?>	  
    </span></td>
  </tr>
</table>
</body>
</html>
<?php }?>