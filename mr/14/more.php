<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>图书信息管理系统</title>
<style type="text/css">
<!--
body,td,th {
	font-size: 12px;
}
.STYLE2 {color: #FFFFFF}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
.STYLE3 {color: #FF781F}
.STYLE4 {color: #FF0000}
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
$select=mysql_query("select * from tb_book",$conn);								//查询所有图书信息，供搜索使用
$array=mysql_fetch_array($select);												//获取所有图书信息
if(isset($_GET['sort1'])){
	$sort=$_GET['sort1'];
}else{
	$sort='';
}
?>
<table width="1000" height="648" border="0" align="center" cellpadding="0" cellspacing="0" id="__01">
  <tr>
    <td rowspan="5"><img src="images/book_01.gif" width="100" height="648" alt="" /></td>
    <td width="800" height="119" valign="baseline" background="images/book_02.gif"></td>
    <td rowspan="5"><img src="images/book_03.gif" width="100" height="648" alt="" /></td>
  </tr>
  <tr>
    <td width="800" height="29" valign="bottom" background="images/book_04.gif"><table width="790" align="center">
      <tr>
        <td width="89"><div align="center"><a href="index.php">首页</a></div></td>
        <td width="155"><div align="center"><a href="insert.php">文章添加</a><a href="update.php"></a></div></td>
        <td width="94"><div align="center"><a href="update.php">文章管理</a></div></td>
        <?php
if(isset($_SESSION['user'])){
?>
        <td width="283" align="right"><span class="STYLE4">欢迎您：<?php echo $_SESSION['user'];?></span></td>
        <td width="43" align="right"><a href="stop.php">退出</a></td>
        <?php
}else{
?>
        <td width="98" align="right"><a href="enter.php">登录</a> </td>
        <?php
}
?>
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
    <td width="800" height="430" align="center" valign="top" background="images/book_08.gif"><table width="672" height="124" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="49" colspan="2" align="right" valign="bottom"><span class="STYLE3"><?php echo $sort;?>&nbsp;</span></td>
        <td width="125">&nbsp;</td>
        <td width="269">&nbsp;</td>
      </tr>
      <tr>
        <td width="157" height="15">&nbsp;</td>
        <td width="121">&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="36" colspan="3"><div align="center">文章名称</div></td>
        <td><div align="center">发布日期</div></td>
      </tr>
	  <?php 

			$select1=mysql_query("select * from tb_book where sort='".$sort."'",$conn);
	 		while($array1=mysql_fetch_array($select1)){
	  ?>
      <tr>
        <td height="24" colspan="3"><a href="define.php?id=<?php echo $array1['id'];?>"><?php echo $array1['books'];?></a></td>
        <td><?php echo $array1['date'];?></td>
      </tr>
	  <?php
	  }
	
	  ?>
    </table></td>
  </tr>
  <tr>
    <td><img src="images/book_07.gif" width="800" height="40" alt="" /></td>
  </tr>
</table>
</body>
</html>