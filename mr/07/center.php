<?php
	include_once 'conn/conn.php';
	include_once 'admin/inc/func.php';
?>
<table border="0" cellpadding="10" cellspacing="0" align="center">
	<tr>
		<td colspan="5" style="background-image:url(images/centertop.gif); background-position: top; background-repeat:no-repeat; width: 551px; height: 42px;">&nbsp;</td>
<?php
	$typesql = "select id,typename,membername,level,indexpic from tb_type where level = 0 order by id desc";
	$typearr = $conne->getRowsArray($typesql);
	$conne->close_rst();
	foreach($typearr as $key => $typevalue){
		$numsql = "select id from tb_photo where typename = ".$typevalue['id'];
		$num = $conne->getRowsNum($numsql);
		if($key % 2 == 0){
?>
</tr><tr>
<?php		
		}else{
?>
<?php
			
	}
?>
<td>
<table border="0" cellpadding="0" cellspacing="0" align="center">
	<tr>
		<td width="245" height="115" align="center" valign="middle" >
<?php
	if($num != 0){
?>
		<a href="pics.php?smallact=<?php echo $typevalue['id']; ?>" target="showpic">
<?php
	}
?>
		<img id = "indexpic<?php echo $key; ?>" src="<?php echo ($num != 0?'uppics/'.$typevalue['indexpic']:'images/null.jpg'); ?> " width="<?php echo getWidth(($num != 0?'uppics/'.$typevalue['indexpic']:'images/null.jpg'),130,100); ?>" height="<?php echo getHeight(($num != 0?'uppics/'.$typevalue['indexpic']:'images/null.jpg'),130,100); ?>" border="0"/>
<?php
	if($num != 0){
?>	
		</a>
<?php
	}
?>		</td>
	</tr>
	<tr>
		<td height="25" align="center" valign="middle">名称：<?php echo $typevalue['typename']; ?><br /><?php echo $num; ?>&nbsp;张&nbsp;状态：<?php echo ($typevalue['level'] == 0?'<font color=green>公开</font>':'<font color=red>私藏</font>'); ?><br />
		拥有者：<a href="<?php echo $typevalue['membername'];  ?>/" target="_blank"><?php echo $typevalue['membername'] ?></a></td>
	</tr>
</table>
</td>

<?php
	}
?>
	</tr>
</table>