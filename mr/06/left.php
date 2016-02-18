<?php include("conn/conn.php");?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>无标题文档</title>
<style type="text/css">
<!--
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
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
body,td,th {
	font-size: 12px;
}
-->
</style></head>
<script language="javascript">

  function open_close(x){

      if(x.style.display==""){
         x.style.display="none";
      }else if(x.style.display=="none"){
        x.style.display=""; 
      }

 }
</script>
<body>
<table width="180" border="0" align="right" cellpadding="0" cellspacing="0">
        <tr> 
          <td width="170" align="center" valign="top">
           <?php 
				$query=mysql_query("select * from tb_forum_big_type");
				while($myrow=mysql_fetch_array($query)){  
					$querys=mysql_query("select * from tb_forum_small_type where tb_big_type_content='$myrow[tb_big_type_content]' ");
					$myrows=mysql_fetch_array($querys);
			?>
              <table width="170" border="0" cellspacing="0" cellpadding="0">
                <tr> 
                  <td width="84%" height="24" background="images/index_5.jpg" onClick="javascript:open_close(id_a<?php echo $myrow["tb_big_type_id"];?>);" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="content.php?content=<?php echo $myrow["tb_big_type_content"];?>&&content_1=<?php echo $myrows["tb_small_type_content"];?>" target="contentFrame"><?php echo $myrow["tb_big_type_content"];?></a></td>
                </tr>
            </table>
<table width="170" border="0" cellpadding="0" cellspacing="0" bgcolor="#8394BF" id="id_a<?php echo $myrow["tb_big_type_id"];?>" style="display:none">
	<?php 
		$query_1=mysql_query("select * from tb_forum_small_type where tb_big_type_content='$myrow[tb_big_type_content]' ");
		while($myrow_1=mysql_fetch_array($query_1)){
	?>
    <tr>
    	<td align="right">&nbsp;</td>
        <td height="23">&nbsp;&nbsp;
			<a href="content.php?content=<?php echo $myrow["tb_big_type_content"];?>&&content_1=<?php echo $myrow_1["tb_small_type_content"];?>" target="contentFrame">
				<?php echo $myrow_1["tb_small_type_content"];?></a></td>
    </tr>             
	<?php }?>
    <tr><td height="2" colspan="2" align="right"></td></tr>
</table>
<?php }?>
</td></tr></table>

<div align="right"></div>
</body>
</html>
