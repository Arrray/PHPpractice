<?php include_once("sessionstart.php"); include("conn/conn.php"); include("function.php");
if(empty($_SERVER['HTTP_REFERER']))
$uself="";
else
$self=$_SERVER['HTTP_REFERER'];		//��ȡ���ӵ���ǰҳ���ǰһҳ��� URL ��ַ
$u=$_SERVER['HTTP_HOST'];			//��ȡ��ǰ�����Hostͷ��Ϣ������
$r=$_SERVER['PHP_SELF'];			//��ȡ��ǰ����ִ�нű����ļ���
$l=$_SERVER['QUERY_STRING'];		//��ȡ��ѯ��query�����ַ�����URL �е�һ���ʺ� ? ֮������ݣ�
$url="http://"."$u"."$r"."?"."$l";	//����ȡ�ı������һ���ַ�������������·��

$tb_send_id_num=$_GET["send_id"];
$query_0=mysql_query("select * from tb_forum_send where tb_send_id='$_GET[send_id]'");
$myrow_0=mysql_fetch_array($query_0);
$totalnum=$myrow_0["tb_send_count"]+1;
$query_k=mysql_query("update tb_forum_send set tb_forum_send.tb_send_count = $totalnum where tb_send_id=$_GET[send_id]");
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>���ձ����֮��</title>
</head>
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
.buildmid{height:170px;}
.buildtop{border-bottom:1px solid #CCCCCC; line-height:20px;width:100%; text-indent:12px;}
.buildbottom{border-top:1px solid #CCCCCC; line-height:14px;}
.bottominclude{margin:5px 0 0 0; text-align:right;}
.buildmidinclude{margin:5px;}
.reply{border:1px dashed #00CCFF; width:300px; margin:2px;}
-->
</style>
<script src="js/UBBCode.js"></script>
<script src="js/text.js"></script>
<script language="javascript">
function check(){
	if(myform.tag.value==1){
		alert("�����Ѿ�������");myform.restore_subject.focus();return false;
	}
	if(myform.restore_subject.value==""){
		alert("���ӱ��ⲻ����Ϊ�գ�");myform.restore_subject.focus();return false;
	}

	if(myform.file.value==""){
		alert("�������ݲ�����Ϊ�գ�");myform.file.focus();return false;
	}

//	myform.submit();
}
function rewrite(){
myform.file.value="";

}
</script>
<body>
<?php include_once("enter.php");?>	 
<table width="950" height="62" border="4" align="center" cellpadding="4" cellspacing="4" bordercolor="#C8C8C8" bgcolor="#FFFFFF">
  <tr>
    <td height="40" colspan="2">&nbsp;<?php echo $_GET["send_big_type"];?>>>><?php echo $_GET["send_small_type"];?></td>
  </tr>
  <tr>
    <td height="22">&nbsp;<?php 
$query_3=mysql_query("select * from tb_forum_send where tb_send_id='$_GET[send_id]'");
$myrow_3=mysql_fetch_array($query_3);
echo $myrow_3["tb_send_subject"];
?>    </td>
<?php if( !empty($_SESSION["tb_forum_user"])){	?>
<form name="form1" method="post" action="my_collection.php?forum_subject=<?php echo 
$myrow_3["tb_send_subject"];?>&&collection_user=<?php echo $_SESSION["tb_forum_user"];?>">
    <td width="173" height="22" align="center" valign="bottom">
   
	<input type="hidden" name="my_collection" value="<?php echo $url;?>">
    <input type="submit" name="Submit" value=" ��ӵ��ҵ��ղؼ� ">
</td>
</form>
<?php }	?>
  </tr>
</table>
<table width="950" height="180" border="4" align="center" cellpadding="4" cellspacing="4" bordercolor="#C8C8C8" bgcolor="#FFFFFF">
  <tr>
    <td width="200" align="center" bgcolor="#FDF8CE"><span class="STYLE11">
<!--�����ݿ��ж�ȡ��ָ�����ӵķ����˵���Ϣ-->
<?php 
$query_1=mysql_query("select * from tb_forum_send where tb_send_id='$_GET[send_id]'",$conn);
$myrow_1=mysql_fetch_array($query_1);
$query_2=mysql_query("select * from tb_forum_user where tb_forum_user='$myrow_1[tb_send_user]'",$conn);
$myrow_2=mysql_fetch_array($query_2);
echo "<img src='$myrow_2[tb_forum_picture]'>"."<br>";
echo "������:";
echo $myrow_2["tb_forum_user"]."<br>";
echo "ע��ʱ��:"."<br>";
echo $myrow_2["tb_forum_date"]."<br>";
echo "����:";
echo $myrow_2["tb_forum_grade"]."<br>";
if(!empty($_SESSION["tb_forum_user"])){
echo "<a href='send_mail.php?receiving_person=$myrow_2[tb_forum_user]&&sender=$_SESSION[tb_forum_user]' target='_blank'><img src='images/index_8.jpg' width='76' height='24' border='0'></a>"."<br>";
echo "<a href='my_friend.php?friend=$myrow_2[tb_forum_user]&&my=$_SESSION[tb_forum_user]' target='_blank'><img src='images/index_8 (1).jpg' width='82' height='24' border='0'></a>";
}
?></span></td>
    <td width="780" bgcolor="#FFFFFF"><div class="buildtop">����ʱ��:<?php echo $myrow_3["tb_send_date"]; ?>   ¥��  
<?php 
if($myrow_1["tb_forum_end"]!=1){
?>
<a href="end_forum.php?send_id=<?php echo $_GET["send_id"];?>&send_user=<?php echo $myrow_3["tb_send_user"];?>">����</a>
<?php 
}else{
echo "�ѽ���";
} 
?></div>      <div class="buildmid">
<div class="buildmidinclude">
        <?php 
echo $myrow_3["tb_send_content"];
 /*   $length=strlen($myrow_3[tb_send_content]);
    $page_count=ceil($length/80);
	if($length<80){
		echo $myrow_3[tb_send_content];
	}else{
		for($i=1; $i<$page_count;$i++){
     		$c=msubstr($myrow_3[tb_send_content],0,($i-1)*80);
     		$c1=msubstr($myrow_3[tb_send_content],0,$i*80);
			echo unhtml(substr($c1,strlen($c),strlen($c1)-strlen($c))); 
			echo "\n";
		}
	}*/
?></div>
    </div>
<div class="buildbottom"><div class="bottominclude"><?php if($myrow_3["tb_send_accessories"]==true){echo "<a href='download.php?accessories=$myrow_3[tb_send_accessories]'>����</a>";}?>&nbsp;&nbsp;&nbsp;&nbsp;<a href="permute_send.php?permute_id=<?php echo $myrow_3["tb_send_id"];?>">�ö�</a>��<a href="recompose_send.php?recompose_id=<?php echo $myrow_3["tb_send_id"];?>&&recompose_user=<?php echo $myrow_3["tb_send_user"];?>">�޸�</a>��<a href="delete_send.php?delete_id=<?php echo $myrow_3["tb_send_id"];?>&&delete_send_forum=<?php echo $myrow_3["tb_send_user"];?>">ɾ��</a>��<a href="send_forum_content.php?send_big_type=<?php echo $_GET["send_big_type"];?>&&send_small_type=<?php echo $_GET["send_small_type"];?>&&send_id=<?php echo $_GET["send_id"];?>#bottom">�ظ�</a></div></div></td>
  </tr>  
</table>

<table width="950" height="180" border="4" align="center" cellpadding="4" cellspacing="4" bordercolor="#CCCCCC" bgcolor="#FFFFFF">
<?php 
$i=0;
$query_4=mysql_query("select * from tb_forum_restore where tb_send_id='$_GET[send_id]'");
while($myrow_4=mysql_fetch_array($query_4)){
$i++;
?> 
 <tr>
    <td width="200" align="center" bgcolor="#FDF8CE"><span class="STYLE11">
<?php $query_5=mysql_query("select * from tb_forum_user where tb_forum_user='$myrow_4[tb_restore_user]'");
$myrow_5=mysql_fetch_array($query_5);
echo "<img src='$myrow_5[tb_forum_picture]'>"."<br>";
echo "������:";
echo $myrow_5["tb_forum_user"]."<br>";
echo "ע��ʱ��:"."<br>";
echo $myrow_5["tb_forum_date"]."<br>";
echo "����:";
echo $myrow_5["tb_forum_grade"]."<br>";
//if($_SESSION["tb_forum_user"]==true)
if(!empty($_SESSION["tb_forum_user"]))
{
echo "<a href='send_mail.php?receiving_person=$myrow_5[tb_forum_user]&&sender=$_SESSION[tb_forum_user]' target='_blank'><img src='images/index_8.jpg' width='76' height='24' border='0'></a>"."<br>";
echo "<a href='my_friend.php?friend=$myrow_5[tb_forum_user]&&my=$_SESSION[tb_forum_user]' target='_blank'><img src='images/index_8 (1).jpg' width='82' height='24' border='0'></a>";
}
?></span></td>
    <td width="780" bgcolor="#FFFFFF"><div class="buildtop">�ظ�����:<?php echo $myrow_4["tb_restore_subject"];?> &nbsp;&nbsp;&nbsp;�ظ�ʱ��:&nbsp;<?php echo $myrow_4["tb_restore_date"]?>&nbsp;&nbsp;&nbsp;&nbsp;
	<?php 
	if($i==1)
	echo "ɳ��";
	else if($i==2)
	echo "���";
	else 
	echo $i."¥";
	?></div>
      <div class="buildmid"><div class="buildmidinclude"><?php 
if($myrow_4["tb_restore_tag"]==1){
echo "�����ѱ�����Ա���Σ�";}else{
echo $myrow_4["tb_restore_content"];}
?>
    </div></div>      <div class="buildbottom"><div class="bottominclude"><?php 
if($myrow_4["tb_restore_tag"]==1){
echo "";}else{
if($myrow_4["tb_restore_accessories"]==true){echo "<a href='download.php?accessories=$myrow_4[tb_restore_accessories]'>����</a>";}?>&nbsp;&nbsp;&nbsp;&nbsp;<a href="send_forum_content.php?send_big_type=<?php echo $_GET["send_big_type"];?>&&send_small_type=<?php echo $_GET["send_small_type"];?>&&send_id=<?php echo $_GET["send_id"];?>&&cite=<?php echo $myrow_4["tb_restore_id"];?>#bottom">����</a>��<a href="recompose_restore.php?recompose_id=<?php echo $myrow_4["tb_restore_id"];?>&&recompose_user=<?php echo $myrow_4["tb_restore_user"];?>">�޸�</a>��<a href="delete_restore.php?delete_id=<?php echo $myrow_4["tb_restore_id"];?>&&delete_restore_user=<?php echo $myrow_4["tb_restore_user"];?>">ɾ��</a>
  <?php }?>
    </div></div></td>
  </tr>
 

<?php }?>
</table>
<table width="950" border="4" align="center" cellpadding="4" cellspacing="4" bordercolor="#C8C8C8" bgcolor="#FFFFFF">
  <tr>
    <td width="200" align="center" valign="top" bgcolor="#FDF8CE"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="35" colspan="2" align="center">�������а�</td>
      </tr>

<?php 
$sql=mysql_query("select tb_forum_user,tb_forum_grade from tb_forum_user order by tb_forum_grade desc limit 10");
while($myrow=mysql_fetch_array($sql)){
?>
      <tr>
        <td width="45%" height="19" align="right">
<a href="person_data.php?person_id=<?php echo $myrow["tb_forum_user"];?>"><?php echo $myrow["tb_forum_user"];?></a>
&nbsp;</td>
        <td width="55%" align="left">����<?php echo $myrow["tb_forum_grade"];?></td>
      </tr>
<?php }?>
    </table></td>
    <td align="left" bgcolor="#F4F5F9"><table width="700" height="268" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#F4F5F9">
      <form action="send_forum_content_ok.php" method="post" enctype="multipart/form-data" id="myform"  name="myform">
        <tr><a name="bottom" id="bottom"></a><!--��������ê��-->
            <td width="103" height="30" align="right">�ظ����⣺</td>
          <td width="617"><input name="restore_subject" type="text" id="restore_subject" size="60" value="

<?php 
//if($_GET["cite"]==true){
	$query=mysql_query("select * from tb_forum_send where tb_send_id='$_GET[send_id]'");
	$result=mysql_fetch_array($query);
echo "ժ�ԣ�".$result["tb_send_user"]."����".$result["tb_send_subject"];
//}
?>


"><input type="hidden" name="tag" value="<?php echo $myrow_1["tb_forum_end"];?>" ></td>
        </tr>
        <tr>
          <td height="30" align="right">������</td>
          <td><input name="restore_accessories" type="file" size="45"></td>
        </tr>
        <tr>
          <td height="30" align="right">���ֱ������</td>
          <td width="617"><img src="images/UBB/B.gif" width="21" height="20" onClick="bold()">&nbsp;<img src="images/UBB/I.gif" width="21" height="20" onClick="italicize()">&nbsp;<img src="images/UBB/U.gif" width="21" height="20" onClick="underline()">&nbsp;<img src="images/UBB/img.gif" width="21" height="20" onClick="img()"> ����
            <select name="font" class="wenbenkuang" id="font" onChange="showfont(this.options[this.selectedIndex].value)">
                <option value="����" selected>����</option>
                <option value="����">����</option>
                <option value="����">����</option>
                <option value="����">����</option>
              </select>
            �ֺ�<span class="pt9">
              <select 
      name=size class="wenbenkuang" onChange="showsize(this.options[this.selectedIndex].value)">
                <option value=1>1</option>
                <option value=2>2</option>
                <option 
        value=3 selected>3</option>
                <option value=4>4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
              </select>
              ��ɫ
              <select onChange="showcolor(this.options[this.selectedIndex].value)" name="color" size="1" class="wenbenkuang" id="select">
                <option selected>Ĭ����ɫ</option>
                <option style="color:#FF0000" value="#FF0000">��ɫ����</option>
                <option style="color:#0000FF" value="#0000ff">��ɫ����</option>
                <option style="color:#ff00ff" value="#ff00ff">��ɫ����</option>
                <option style="color:#009900" value="#009900">��ɫ�ഺ</option>
                <option style="color:#009999" value="#009999">��ɫ��ˬ</option>
              </select>
            </span></td>
        </tr>
        <tr>
          <td align="right">�������ݣ�</td>
          <td width="617">
          <textarea name="file" cols="70" rows="10" id="file" onKeyDown="countstrbyte(this.form.file,this.form.total,this.form.used,this.form.remain);" onKeyUp="countstrbyte(this.form.file,this.form.total,this.form.used,this.form.remain);"><?php 
if($_GET["cite"]==true){
	$query=mysql_query("select * from tb_forum_restore  where tb_restore_id='$_GET[cite]'");
	$result=mysql_fetch_array($query);
    echo "<div class=\"reply\">".$result["tb_restore_content"]."</div>";
}
?></textarea>
              <input type="hidden" name="tb_send_id" value="<?php echo $_GET["send_id"];?>">
            <input type="hidden" name="tb_restore_user" value="<?php echo $_SESSION["tb_forum_user"];?>"></td>
			<input type="hidden" name="cite" value="<?php 
			if($_GET["cite"]==true)                 
			echo $_GET["cite"];
			else
			echo "";
			?>">
        </tr>
        <tr>
          <td height="25" colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input name="submit" type="submit" id="submit" value="�ύ" onClick="return check();">
            &nbsp;&nbsp;����ֽ�����
            <input type="text" name="total" disabled="disabled" class="textbox" id="total" value="500" size="5">
            &nbsp;&nbsp;���룺
            <input type="text" name="used" disabled="disabled" class="textbox"  id="used" value="0" size="5">
            �ֽ� &nbsp;&nbsp;ʣ�ࣺ
            <input type="text" name="remain" disabled="disabled" class="textbox"  id="remain" value="500" size="5">
            �ֽ�&nbsp;&nbsp;
            <input name="reset" onClick="rewrite();" type="button" id="reset" value="��д"></td>
        </tr>
        <tr>
          <td height="35" colspan="2">&nbsp;                          &nbsp;</td>
        </tr>
      </form>
    </table></td>
  </tr>
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
</body>
</html>
