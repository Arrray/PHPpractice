<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>修改</title>
<style type="text/css">
<!--
body,td,th {
	font-size: 12px;
}
.STYLE2 {color: #FFFFFF}
.STYLE3 {color: #FF0000}
-->
</style></head>
<script>
function fetch(){
	if(form1.key.value==""){
		alert("请输入搜索关键字！");
		form1.value.select();
		return false;
	}
		return true;
}
</script>
<script language="javascript">
function press(opt){
//opt表示现有可选项的数目
	form1.select2.options[opt]=new Option(ok=(form1.select2.options[opt])?
	form1.select2.options[opt].innerText+String.fromCharCode(event.keyCode):
	String.fromCharCode(event.keyCode),ok)
	form1.select2.selectedIndex=opt;
}
</script>
<script language="javascript">
function up(opt){
//opt表示现有可选项的数目
	if(form1.select2.options[opt]){
		if(event.keyCode==8){
			var str=form1.select2.options[opt].innerText;
			var len=str.length;
			form1.select2.options[opt].innerText=str.substring(0,len-1);
			if(form1.select2.options[opt].innerText==" ")select2.remove(2);
		}
		if(event.keyCode==32){
			form1.select2.options[opt].innerText+=" ";
		}
	}
}
</script>
<body>
<?php
include("conn/conn.php");
if(isset($_SESSION['user']) and $_SESSION['user']!=null){			//判断session是否存在
?>
<table width="1000" height="648" border="0" align="center" cellpadding="0" cellspacing="0" id="__01">
  <tr>
    <td rowspan="5"><img src="images/book_01.gif" width="100" height="648" alt="" /></td>
    <td width="800" height="119" valign="baseline" background="images/book_02.gif"><div align="right" class="STYLE1">
      <blockquote>
        <blockquote>
          <p class="STYLE2">&nbsp;</p>
        </blockquote>
      </blockquote>
    </div></td>
    <td rowspan="5"><img src="images/book_03.gif" width="100" height="648" alt="" /></td>
  </tr>
  <tr>
    <td width="800" height="29" valign="bottom" background="images/book_04.gif"><table width="800">
      <tr>
        <td width="47"><div align="center"><a href="index.php">首页</a></div></td>
        <td width="87"> <div align="center"><a href="insert.php">文章添加</a><a href="update.php"></a></div></td>
        <td width="84"><div align="center"><a href="update.php">文章管理</a></div></td>
		<td width="512"><div align="right"><span class="STYLE3">欢迎您：<?php echo $_SESSION['user'];?></span></div></td>
		<td width="46"><div align="right"><a href="stop.php">退出</a></div></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td width="800" height="30" align="center" bgcolor="#485C97"><table width="758" height="23" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="206"><div align="right" class="STYLE2">文章搜索：</div></td>
        <td width="159"><table>
            <form id="list" name="list" method="post">
              <tr>
                <td width="125" align="left" valign="middle"><select name="select" onchange="javascript:list.submit()">
                    <option value="" selected="selected">请选择</option>
                    <option value="Famous_Id">类别</option>
                    <option value="Famous_Ids">语言</option>
                    <option value="boo_name">文章名称</option>
                    <option value="jianjie">简介</option>
                    <option value="mulu">目录</option>
                </select></td>
              </tr>
            </form>
        </table></td>
        <td width="295"><table width="254" height="29" border="0" cellspacing="0" cellpadding="0">
            <form id="form1" name="form1" method="post" action="select.php" onkeypress="press(3)" onkeyup="up(3)">
              <tr>
                <td width="110"><select name="select2">
                    <option selected="selected">请选择</option>
                    <?php
		if(isset($_POST['select'])){
			$select=$_POST['select'];
			if($select=="Famous_Id"){
				$sel=mysql_query("select * from tb_sort",$conn);			//查询图书类别
		  		while($arr=mysql_fetch_array($sel)){
		  ?>
                    <option value="<?php echo $arr['sort'];?>"><?php echo $arr['sort'];?></option>
                    <?php 
				}
		    }else if($select=="Famous_Ids"){
			  	$sel1=mysql_query("select * from tb_program",$conn);			//查询图书语言
		  		while($arr1=mysql_fetch_array($sel1)){
		  ?>
                    <option value="<?php echo $arr1['talk'];?>" selected="selected"><?php echo $arr1['talk'];?></option>
                    <?php
				}
			}else{
			?>
                    <option value="<?php echo $arr1['talk'];?>" selected="selected"><?php echo $arr1['talk'];?></option>
                    <?php 
			  }
		}
			  ?>
                  </select>
                </td>
                <td width="144"><input type="image" name="imageField" src="images/book_05_02.gif" onclick="return fetch();" /></td>
              </tr>
            </form>
        </table></td>
        <td width="98">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td width="800" height="430" align="center" valign="top" background="images/book_10.gif"><form action="insert_ok.php" method="post" enctype="multipart/form-data" name="form2" id="form2">
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <table width="531" height="94" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="417" height="36"><div align="center">文章名称</div></td>
          <td width="89"><div align="center">操作</div></td>
        </tr>
<?php 
	if (isset($_GET['page'])){
		$page=$_GET['page'];	
	}else{
		$page=1;
	}
?>
<?php 
   if($page){
    $page_size=10;         							//每页显示4条记录
    $query="select * from tb_book"; 						//定义查询语句
	$result=mysql_query($query);						//执行查询操作
	$message_count=mysql_num_rows($result);			//获取查询总数
    $page_count=ceil($message_count/$page_size);		//获取总的页数
    $offset=($page-1)*$page_size;						//计算每页的起始行数
    $query="select * from tb_book where id order by id desc limit $offset, $page_size";	//定义SQL语句，查询当前页显示的记录
	$result=mysql_query($query);						//执行查询操作
	}							
?>
		<?php
		while($array=mysql_fetch_array($result)){
		?>
        <tr>
          <td height="21" align="left"><a href="define.php?id=<?php echo $array['id'];?>"><?php echo $array['books'];?></a></td>
          <td><div align="center"><a href="update_ok.php?id=<?php echo $array['id'];?>">修改</a><a href="delete.php?id=<?php echo $array['id'];?>">/删除</a></div></td>
        </tr>
		<?php
		}
		?>
		
        <tr>
          <td height="37" colspan="2"><div align="right">共<?php echo $message_count;?>条记录 共<?php echo $page_count;?>页 当前第<?php echo $page;?>页 
	       <?php
			if($page!=1){
				echo "<a href=update.php?page=1>首页</a>";
				echo "<a href=update.php?page=".($page-1).">上一页</a>";
			}
			if($page<$page_count){
				echo " <a href=update.php?page=".($page+1).">下一页</a>";
				echo " <a href=update.php?page=$page_count>尾页</a>";
			}
			?>

          </tr>
      </table>
      </form>    </td>
  </tr>
  <tr>
    <td><img src="images/book_07.gif" width="800" height="40" alt="" /></td>
  </tr>
</table>
<?php
}else{
	echo "<script>alert('请先登录！');window.location.href='index.php'</script>";
}
?>
</body>
</html>

