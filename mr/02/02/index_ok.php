<?php 
include_once("conn/conn.php");
if(isset($_GET['send_id'])){
	$send_id=$_GET['send_id'];
}else{
	$send_id="";
}
if(isset($_GET['send_big_type'])){
	$send_big_type=$_GET['send_big_type'];
}else{
	$send_big_type="";
}
if(isset($_GET['send_small_type'])){
	$send_small_type=$_GET['send_small_type'];
}else{
	$send_small_type="";
}

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>分页模块设计</title>
<style type="text/css">
<!--
body,td,th {
	font-size: 12px;
}
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
-->
</style><body>
<table width="1002" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><img src="images/sy_1.jpg" width="1002" height="154"></td>
  </tr>
  <tr>
    <td><img src="images/sy_3.jpg" width="1002" height="65" border="0" usemap="#Map"></td>
  </tr>
</table>
<table width="1002" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="89">&nbsp;</td>
    <td width="825" align="center"><table width="825" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#D0D0D0">
      <tr>
        <td align="center" bgcolor="#FFFFFF"><table width="810" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td height="25" valign="bottom" background="images/sy_8.jpg"><table width="100%" height="22" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="15%">&nbsp;</td>
                <td width="85%" valign="middle">
				<?php 
					if(isset($_GET['lmbs'])){
						$lmbs=$_GET['lmbs'];
						echo $lmbs;
					}else{
						$lmbs="明日简介";
						echo "明日简介";
					}
				?>
				</td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td align="center">
          

<?php 
$sql_3="select * from tb_forum_send where tb_send_id='".$send_id."'";
$ret_3=$conn->query($sql_3);
$array_3=$ret_3->fetch(PDO::FETCH_ASSOC);
//print_r($array_3);
//echo $array_3[0][1];
//$query_3=mysql_query("select * from tb_forum_send where tb_send_id='$_GET[send_id]'");
//$array_3=mysql_fetch_array($query_3);
?>  
<table width="800" height="198" border="4" align="center" cellpadding="4" cellspacing="4" bordercolor="#FFFFFF" bgcolor="#F4F5F9">
  <tr>
    <td width="160" rowspan="4" align="center" bgcolor="#FDF8CE"><span class="STYLE11">
<?php 

$sql_1="select * from tb_forum_send where tb_send_id='".$send_id."'";
$ret_1=$conn->query($sql_1);
$array_1=$ret_1->fetch(PDO::FETCH_ASSOC);
//print_r($array_1);
//$query_1=mysql_query("",$conn);
//$array_1=mysql_fetch_array($query_1);

$sql_2="select * from tb_forum_user where tb_forum_user='".$array_1['tb_send_user']."'";
$ret_2=$conn->query($sql_2);
$vales=$ret_2->fetch(PDO::FETCH_ASSOC);
//print_r($vales);
	echo "发帖人:";
	echo $vales['tb_forum_user']."<br>";
	echo "注册时间:"."<br>";
	echo $vales['tb_forum_date']."<br>";
	echo "积分:";
	echo $vales['tb_forum_grade']."<br>";
//$query_2=mysql_query("",$conn);
//$array_2=mysql_fetch_array($query_2);


?></span></td>
    <td width="600" height="21" bgcolor="#FFFFFF"><?php echo $array_3['tb_send_user']; ?>   楼主</td>
  </tr>  
<tr><td>
<div id="sd"><table width="600">
<tr>
    <td height="21"><?php 
  echo $array_3['tb_send_subject'];
  ?></td>
  </tr>
</table>
</div>
</td>
</tr>
  <tr>
    <td align="right"><a href="#">置顶</a>、<a href="#">修改</a>、<a href="#">删除</a>、<a href="#">回复</a></td>
  </tr>
</table>
<p>帖子回复内容：</p>
<table width="800" height="91" border="4" align="center" cellpadding="4" cellspacing="4" bordercolor="#FFFFFF" bgcolor="#F4F5F9">
<?php 
$i=0;

$query_4=$conn->query("select * from tb_forum_restore where tb_send_id='".$send_id."'");
foreach($query_4 as $value){
$i++;
?> 
 <tr>
    <td width="160" rowspan="3" align="center" bgcolor="#FDF8CE"><span class="STYLE11">
<?php 
$query_5=$conn->query("select * from tb_forum_user where tb_forum_user='".$value['tb_restore_user']."'");
foreach($query_5 as $array_5);
echo "发帖人:";
echo $array_5['tb_forum_user']."<br>";
echo "注册时间:"."<br>";
echo $array_5['tb_forum_date']."<br>";
echo "积分:";
echo $array_5['tb_forum_grade']."<br>";
?></span></td>
    <td width="586" bgcolor="#FFFFFF"><?php echo $value['tb_restore_subject']; echo $value['tb_restore_date']?>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $i;?>楼</td>
  </tr>
  <tr>
    <td>
<?php 
echo $value['tb_restore_content'];
?>
</td>
<td width="0"></td>
  </tr>
  <tr>
    <td height="37" align="right"><a href="#">引用</a>、<a href="#">修改</a>、<a href="#">删除</a></td>
  </tr>
<?php }?>
</table>



</td>
          </tr>
        </table></td>
      </tr>
    </table>    </td>
    <td width="88">&nbsp;</td>
  </tr>
</table>

<map name="Map">
  <area shape="rect" coords="134,19,245,48" href="index.php?lmbs=明日编程词典">
  <area shape="rect" coords="455,17,566,52" href="index.php?lmbs=明日论坛"><area shape="rect" coords="297,19,397,53" href="index.php?lmbs=明日图书">
<area shape="rect" coords="611,12,724,50" href="index.php?lmbs=明日版权声明">
<area shape="rect" coords="774,21,881,44" href="index.php?lmbs=明日简介">
</map>
<img src="images/sy_21.jpg" width="1003" height="45">
</body>
</html>
