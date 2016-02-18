<?php
	session_start();
	include "inc/chec.php";
	include "conn/conn.class.php";
?>
<link href="css/style.css" rel="stylesheet"/>
<script src="js/admin_js.js" language="javascript"></script>
<script type="text/JavaScript">
<!--
function MM_popupMsg(msg) { //v1.0
  if(confirm(msg))
     return true;
   else
     return false;
}
//-->
</script>
<table width="1004" height="98" border="0" cellpadding="0" cellspacing="0">
<tr>
	<td height="196" colspan="4" background="images/113_1.jpg">&nbsp;</td>	
	</tr>
  <tr>
	<td width="150" height="12" background="images/113_2.jpg">&nbsp;</td>	<td width="180" align="center" valign="top"><?php
	include "left.php";
?></td>	
	<td width="511">
<table width="100%" border="0" cellpadding="0" cellspacing="0">
		<tr>
			<td height="34" align="right" valign="middle"> <a href="logout.php" onclick="return MM_popupMsg('是否要退出登录');">退出登录</a></td>
		</tr>
		<tr>
			<td height="350" align="center" valign="top">
<?php
	if(isset($_GET[action])){
		switch ($_GET[action]){

			case "videoList":
				include "v_list.php";
				break;
		
			case "video":
				include "video.php";
				break;
			case "internet":
				include "internet_video.php";
				break;
			case "member";
				include "member.php";
				break;
			case "manager";
				include "manager.php";
				break;
			}
	}
?>			</td>
		</tr>
	</table>


</td>
	<td width="163" height="12" background="images/113_4.jpg">&nbsp;</td>
</tr>
<tr>
	<td height="144" colspan="4" background="images/113_5.jpg">&nbsp;</td>	
	</tr>
</table>