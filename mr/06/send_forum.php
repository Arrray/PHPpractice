<?php session_start(); include("conn/conn.php");
if(!empty($_SESSION["tb_forum_user"])){
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>发布帖子</title>
<style type="text/css">
<!--
body {
	background-color: #8394BF;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.STYLE11 {
	font-size: 12px;
	color: #656766;
}
body,td,th {
	font-size: 12px;
}
-->
</style>
</head>
<script type="text/javascript" src="js/editor.js"></script> 
<body>
<?php include_once("enter.php");?>	 
 <table width="950" align="center" border="0" cellpadding="0" cellspacing="0" bgcolor="#F7F7FF">
 <form action="send_forum_ok.php" method="post" enctype="multipart/form-data"  name="myform"  onSubmit="return CheckForm(this)">
 <tr>
    <td width="183" height="35"><?php //if(empty($_GET["content"])) ;else echo $_GET["content"];?></td>
    <td width="110">&nbsp;</td>
    <td width="657">&nbsp;</td>
    </tr>
  <tr>
    <td rowspan="4" align="center" valign="top">&nbsp;
<?php $query_1=mysql_query("select * from tb_forum_user where tb_forum_user='$_SESSION[tb_forum_user]'",$conn);
$myrow_1=mysql_fetch_array($query_1);
echo "<img src='$myrow_1[tb_forum_picture]'>";
echo "<br>";
echo "<br>";
echo "当前用户:";
echo "<br>";
echo "<br>";
echo $myrow_1["tb_forum_user"];
echo "<br>";
echo "<br>";
echo "注册时间:";
echo "<br>";
echo "<br>";
echo $myrow_1["tb_forum_date"];
echo "<br>";
echo "<br>";
echo "积分:";
echo $myrow_1["tb_forum_grade"];
?>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="35" colspan="2" align="center">&nbsp;</td>
      </tr>
      <tr>
        <td height="35" colspan="2" align="center">积分排行榜</td>
      </tr>
<?php 
$sql=mysql_query("select tb_forum_user,tb_forum_grade from tb_forum_user order by tb_forum_grade desc limit 10");
while($myrow=mysql_fetch_array($sql)){
?>
      <tr>
        <td width="45%" height="19" align="right">
<a href="person_data.php?person_id=<?php echo $myrow["tb_forum_user"];?>"><?php echo $myrow["tb_forum_user"];?></a>
&nbsp;</td>
        <td width="55%" align="left">——&nbsp;<?php echo $myrow["tb_forum_grade"];?></td>
      </tr>
<?php }?>
    </table>
</td>
    <td align="right" class="STYLE11">帖子类别：</td>
    <td><select name="send_sort" id="send_sort">
      <option selected="selected">请选择帖子的类别</option>
      <?php 
$query_2=mysql_query("select * from tb_forum_small_type");
while($myrow_2=mysql_fetch_array($query_2)){
?>
      <option value="<?php echo $myrow_2["tb_small_type_content"];?>"><?php echo $myrow_2["tb_small_type_content"];?></option>
      <?php }?>
    </select></td>
  </tr>
  <tr>

    <td align="right" class="STYLE11">帖子主题：</td>
    <td><input name="send_subject" type="text" id="send_subject" size="60"></td>
  </tr>
  <tr>
    <td align="right" class="STYLE11">表情图：</td>
    <td><table>
	<tr>
    	<td height="80" colspan="2"><div align="center">
        	<table height="30" border="0" align="center" cellpadding="0" cellspacing="0">
            	<tr>
                	<?php 		  
						for($i=1;$i<=24;$i++){ 	//根据文件夹中表情图的个数创建循环语句						  
							if($i%6==0){		//判断变量的值是否等于0
					?>
                	<td width="40" height="30"><div align="center">
						<!--输出表情图-->	
						<img src=<?php echo("images/inchoative/face".($i-1).".gif");?> width="20" height="20"></div></td>
                    <td width="40" height="30"><div align="center">
                    	<!--创建单选按钮-->
						<input type="radio" name="face" value="<?php echo("images/inchoative/face".($i-1).".gif");?>">
            		</div></td>
                </tr>
                	<?php  }else{	?>
                    <td width="40" height="30"><div align="center">
						<img src=<?php echo("images/inchoative/face".($i-1).".gif");?> width="20" height="20"></div></td>
                	<td width="40" height="30"><div align="center">
                    	<input type="radio" name="face" value="<?php echo("images/inchoative/face".($i-1).".gif");?>" <?php if($i==1) { echo "checked";}?>>
                	</div></td>
                    <?php	 }  }	?>
            </table>
      	</div></td>
    </tr>
</table></td>
  </tr>
  <tr>
    <td colspan="2">
<table>
                      <tr>
                        <td align="right" class="STYLE11">附件：</td>
                        <td><input name="send_accessories" type="file" id="send_accessories" size="35">
                          上传文件小于2M</td>
                      </tr>
                      <tr>
                        <td width="107" align="right" class="STYLE11">文章内容：</td>
                        <td width="569">
<textarea name="menu" cols="1" rows="1" id="menu" style="position:absolute;left:0;visibility:hidden;"></textarea>
<script type="text/javascript">
var editor = new FtEditor("editor");
editor.hiddenName = "menu";
editor.editorWidth = "100%";
editor.editorHeight = "300px";
editor.show();

</script> 					
				        <input type="hidden" name="tb_forum_user" value="<?php echo $_SESSION["tb_forum_user"];?>"></td>
                      </tr>
                      <tr align="center">
                        <td colspan="2"><input name="submit" type="submit" id="submit" value="提交">                          &nbsp;
                          <input name="reset" type="reset" id="reset" value="重写"></td>
</tr></table></td>
  </tr></form>
</table>
<table width="950" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="667" bgcolor="#F7F7FF">&nbsp;</td>
    <td width="283" bgcolor="#F7F7FF"><img src="images/index_8 (2).jpg" width="218" height="75"></td>
  </tr>
  <tr>
    <td bgcolor="#8496BD">&nbsp;</td>
    <td bgcolor="#8496BD">&nbsp;</td>
  </tr>
</table>
<?php include("bottom.php");?>
</body>
</html>
<?php }else{
	echo "<script>alert('请先注册为本站会员!');window.location.href='register.php';</script>";

}?>