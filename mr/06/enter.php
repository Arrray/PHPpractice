<?php include_once("sessionstart.php");
include("conn/conn.php"); 

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>�ޱ����ĵ�</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.STYLE1 {
	font-size: 12px;
	color: #FFFFFF;
	font-weight: bold;
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
.STYLE2 {
	color: #FFFF00;
	font-weight: bold;
	font-size: 12px;
}
body,td,th {
	font-size: 12px;
}

-->
</style></head>
<body>
<table width="1003" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><img src="images/index_2.jpg" width="1003" height="80"></td>
  </tr>
</table>
<?php	if(empty($_SESSION["tb_forum_user"])){	?>
<table width="1003" height="30" border="0" align="center" cellpadding="0" cellspacing="0" background="images/index_4.jpg">
<script language="JavaScript" type="text/javascript">
function check_user(form){
	if(form.tb_user.value==""){
    	alert("�������Ա��");
		form.tb_user.select();
		return(false);
	}
	if(form.tb_pass.value==""){
    	alert("�������¼���룡");
		form.tb_pass.select();
		return(false);
    }
	if(form.tb_validate.value==""){
    	alert("��������֤�룡");
		form.tb_validate.select();
		return(false);
    }
   	return(true);	 
 }
</script>
<script language="JavaScript" type="text/javascript">
function getback_pass(){
	window.open("getback_pass.php","newframe","left=200,top=200,width=240,height=140,menubar=no,toolbar=no,location=no,scrollbars=no,location=no");}
</script>
<form action="enter_ok.php" method="post" name="form1" id="form1" onSubmit="return check_user(this)">
	<tr>
    	<td width="84" align="center"><span class="STYLE1">�û�����</span></td>
    	<td width="140"><input type="text" name="tb_user" size="18"  /></td>
    	<td width="62" align="center" class="STYLE1">���룺</td>
   	  <td width="140"><input type="password" name="tb_pass" size="18" /></td>
    	<td width="61" align="center" class="STYLE1">��֤�룺</td>
    	<td width="78"><input type="text" name="tb_validate" size="10" /></td>
    	<td width="62" align="center"><img src="tb_validate.php"></td>
    	<td width="73"><input type="image" name="imageField" src="images/index_1.jpg" value="��¼"></td>
    	<td width="141" align="center">
			<a href="register.php" target="_blank">ע��</a>|
			<a href="javascript:getback_pass()">�һ�����</a>		</td>
    	<td width="132" class="STYLE1">�����ǣ�<?php echo date("Y-m-d");?></td>
    	<td width="30">&nbsp;</td>
  	</tr>
</form>
</table>
<?php
}else{
	$sqlu=mysql_query("select * from tb_forum_user where tb_forum_user='".$_SESSION["tb_forum_user"]."'",$conn);
	$infou=mysql_fetch_array($sqlu);
	
?>

<script type="text/javascript" src="js/xmlHttpRequest.js"></script>
<script language="javascript">
function show_counts(sender){ 
url='show_counts.php?sender='+sender;
xmlHttp.open("get",url, true);
	xmlHttp.onreadystatechange = function(){
		if(xmlHttp.readyState == 4){
			tet = xmlHttp.responseText;
			show_counts11.innerHTML=tet;
		}
}
xmlHttp.send(null);
}
</script>
<script language="javascript">
setInterval("show_counts('<?php echo $_SESSION["tb_forum_user"];?>')",1000); 
</script>

<table align="center" width="1003" height="35" border="0" cellpadding="0" cellspacing="0" background="images/index_4.jpg">
  <tr>
    <td width="130" align="center"><span class="STYLE1">�û��ǳƣ�</span><span class="STYLE2"><?php echo $infou["tb_forum_user"];?></span></td>
    <td width="80" align="center"><a href="rework.php" target="_blank" class="STYLE2">������Ϣ</a>&nbsp;</td>
    <td width="150"><span class="STYLE1">�����ǣ�<?php echo date("Y-m-d");?></span></td>
    <td width="85"><a href="my_forum_enlist.php?my_forum_user=<?php echo $infou["tb_forum_user"];?>" target="_blank">�Ҳ��������</a></td>
<td width="85"><a href="my_forum.php?my_forum_user=<?php echo $infou["tb_forum_user"];?>" target="_blank">�ҵ�����</a></td>
    <td width="85"><a href="my_forum_collection.php?collection_user=<?php echo $infou["tb_forum_user"];?>" target="_blank">�ҵ��ղ�</a></td>
    <td width="80"><a href="browse_friend.php?my=<?php echo $infou["tb_forum_user"];?>" target="_blank">�ҵĺ���</a></td>
    <td width="70" align="right"><a href="send_mail.php?sender=<?php echo $_SESSION["tb_forum_user"];?>" target="_blank">�ҵ�����
        </a><span class="STYLE2">��</span></td>
    <td width="15" align="center" class="STYLE2"><div id="show_counts11"></div></td>
    <td width="30" class="STYLE2">��</td>
    <td width="85"><a href="index.php">������ҳ</a></td>
    <td width="85"><a href="exit.php" class="a4"><img src="images/index_3.jpg" width="56" height="35" border="0"></a></td>
    <td width="13">&nbsp;</td>
  </tr>
</table>
<?php	}	?>
</body>
</html>
