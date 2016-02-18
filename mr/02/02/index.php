<?php 
 include_once("conn/conn.php");
if(isset($_POST['page'])){
	$page=$_POST['page'];
}else if(isset($_GET['page'])){
	$page=$_GET['page'];
}else{
	$page=1;
}
if (isset($_GET['link_type'])) {
	$link_type=$_GET['link_type'];
}else{
	$link_type=0;
}
if (isset($_GET['vv'])) {
	$vv=$_GET['vv'];
}else{
	$vv=0;
}
include("function.php");
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>分页模块设计</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style></head>
<style type="text/css">
<!--
body,td,th {
	font-size: 14px;
	color: #000000;
}
-->
</style>
<style type="text/css">
<!--
.STYLE4 {color: #FF0000; font-weight: bold; }
-->
</style>
<body>
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
				?></td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td align="center">
          <?php 
switch($lmbs){
	case "明日简介":
		include("mr_synopsis.php");
	break;

	case "明日论坛":
		include("mr_forum.php");
	break;
	case "明日图书":
		include("mr_book.php");
	break;

	case "明日编程词典":
		include("mr_dictionary.php");
	break;

	case "明日版权声明":
		include("mr_copyright.php");
	break;

	case "":
		include("mr_synopsis.php");
	break;


}

?></td>
          </tr>
        </table></td>
      </tr>
    </table>    </td>
    <td width="88">&nbsp;</td>
  </tr>
</table>

<map name="Map">
  <area shape="rect" coords="141,16,238,46" href="index.php?lmbs=明日编程词典">
  <area shape="rect" coords="450,15,572,45" href="index.php?lmbs=明日论坛">
<area shape="rect" coords="613,15,733,49" href="index.php?lmbs=明日版权声明">
<area shape="rect" coords="780,13,881,53" href="index.php?lmbs=明日简介">
<area shape="rect" coords="292,17,395,51" href="index.php?lmbs=明日图书">
</map>
<img src="images/sy_21.jpg" width="1003" height="45">
</body>
</html>
