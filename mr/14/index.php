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
.STYLE6 {color: #FF781F; font-weight: bold; }
.STYLE7 {color: #FF0000}
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
<script>
function open(){
   window.showModalDialog('gonggao.php','','dialogWidth=300px;dialogHeight=200px; scrollbars=no;status=no');
 }
</script>
<body>
<?php
include("conn/conn.php");
$select=mysql_query("select * from tb_book",$conn);								//查询所有图书信息，供搜索使用
$array=mysql_fetch_array($select);												//获取所有图书信息
?>
<table width="1000" height="648" border="0" align="center" cellpadding="0" cellspacing="0" id="__01">
  <tr>
    <td rowspan="5"><img src="images/book_01.gif" width="100" height="648" alt="" /></td>
    <td width="800" height="119" align="right" valign="baseline" background="images/book_02.gif">&nbsp;</td>
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
        <td width="283" align="right"><span class="STYLE7">欢迎您：<?php echo $_SESSION['user'];?></span></td>
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
        </table>
        </td>
        <td width="295">
		<table width="254" height="29" border="0" cellspacing="0" cellpadding="0">
				    <form id="form1" name="form1" method="post" action="select.php" onKeyPress="press(3)" onKeyUp="up(3)">

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
        </table>
		</td>
        <td width="98">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td width="800" height="430" valign="top" background="images/book_06.gif"><table width="760" height="408" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="154" height="54">&nbsp;</td>
        <td width="14">&nbsp;</td>
        <td width="369">&nbsp;</td>
        <td width="14">&nbsp;</td>
        <td width="209">&nbsp;</td>
      </tr>
      <tr>
        <td rowspan="3" align="center" valign="top"><table width="117" height="26" border="0" cellpadding="0" cellspacing="0">
		<?php
			$sel=mysql_query("select * from tb_sort",$conn);			//查询图书类别
		  		while($arr=mysql_fetch_array($sel)){
		?>
          <tr>
            <td height="26" align="left"><a href="more.php?sort1=<?php echo urlencode($arr['sort']);?>"><?php echo $arr['sort'];?></a></td>
            </tr>
			
			<?php }?>

        </table></td>
        <td height="151">&nbsp;</td>
        <td rowspan="3" align="center" valign="top"><table width="353" height="54" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="243" height="30" align="center"><span class="STYLE6">文章名称</span></td>
            <td width="110" align="center"><span class="STYLE6">发表日期</span></td>
          </tr>
		  <?php 
			$select=mysql_query("select * from tb_book order by id DESC limit 12",$conn);							
		  while($book=mysql_fetch_array($select)){
		  ?>
          <tr>
            <td height="24" align="left"><a href="define.php?id=<?php echo $book['id'];?>">&nbsp;&nbsp;&nbsp;<?php echo $book['books'];?></a></td>
            <td><?php echo $book['date'];?></td>
          </tr>
		  <?php
		  }
		  ?>

        </table>
          <p align="right"><a target="_blank" href="more1.php">更多&gt;&gt;</a>&nbsp;&nbsp;</p></td>
        <td>&nbsp;</td>
        <td valign="top"><table width="177" border="0" align="center" cellpadding="0" cellspacing="0">
		<marquee scrollamount="1" scrolldelay="40" direction="up" width="220" height="120" onMouseOver="this.stop()" onMouseOut="this.start()">
		<?php
		$board=mysql_query("select * from tb_board",$conn);
		while($board_array=mysql_fetch_array($board)){
		?>
        <div class="divList">  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a target="_blank" href="gonggao.php?id=<?php echo urlencode($board_array['id']);?>" class="hui12"><?php echo $board_array['title'];?></a></div>
		<?php
		}
		?>
     </MARQUEE>   </table></td>
      </tr>
      <tr>
        <td height="41">&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="162">&nbsp;</td>
        <td>&nbsp;</td>
        <td valign="top">
		<?php
			$i=0;
			$row=mysql_query("select * from tb_book order by row DESC limit 5",$conn);							
			while($rows=mysql_fetch_array($row)){
			$i++;
		?>
		<table width="195" height="27" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="37" height="27" align="center" valign="middle"><span class="STYLE7"><?php echo $i;?></span></td>
            <td width="158" valign="middle"><a href="define.php?id=<?php echo $rows['id'];?>">&nbsp;<?php echo $rows['books'];?></a></td>
          </tr>
        </table>
		  <?php
		  }
		  ?>
		</td>
      </tr>
    </table></td>   
	
  </tr>
  <tr>
    <td><img src="images/book_07.gif" width="800" height="40" alt="" /></td>
  </tr>
</table>
</body>
</html>
