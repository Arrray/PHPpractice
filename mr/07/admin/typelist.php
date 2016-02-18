<?php
	session_start();
	include_once 'conn/conn.php';
	include_once 'inc/func.php';
	include_once 'inc/admin.php';
?>
<table width="805px" border="0" cellpadding="10" cellspacing="0" align="center">
	<tr>
		<td colspan="10" style=" background-image:url(../images/centertop.gif); background-position:center; background-repeat:no-repeat; height:60px;">&nbsp;</td>
<?php

	$typesql = "select id,typename,level,indexpic from tb_type where membername = '".$photoadminname."'";
	$typearr = $conne->getRowsArray($typesql);
	$conne->close_rst();
	foreach($typearr as $key => $typevalue){
		$numsql = "select id from tb_photo where typename = ".$typevalue['id'];
		$num = $conne->getRowsNum($numsql);
		if($key % 5 == 0){
?>
</tr><tr>
<?php		
		}else{
?>
<?php
			
	}
?>
<td>
<table border="1" cellpadding="0" cellspacing="0" align="center">
	<tr>
		<td width="155" height="115" align="center" valign="middle" bgcolor="#f0f0f0">
<?php
	if($num != 0){
?>
		<a href="pics.php?smallact=<?php echo $typevalue['id']; ?>" target="showpic">
<?php
	}
?>
		<img id = "indexpic<?php echo $key; ?>" src="<?php echo ($typevalue['level'] == 0?'../uppics/'.$typevalue['indexpic']:'../images/mimi.jpg'); ?> " width="<?php echo getWidth(($typevalue['level'] == 0?'../uppics/'.$typevalue['indexpic']:'../images/mimi.jpg'),150,100); ?>" height="<?php echo getHeight(($typevalue['level'] == 0?'../uppics/'.$typevalue['indexpic']:'../images/mimi.jpg'),150,100); ?>" border="0"/>
<?php
	if($num != 0){
?>	
		</a>
<?php
	}
?>
		</td>
	</tr>
	<tr>
		<td height="25" align="center" valign="middle">名称：<?php echo $typevalue['typename']; ?><p /><?php echo $num; ?>&nbsp;张&nbsp;状态：<?php echo ($typevalue['level'] == 0?'<font color=green>公开</font>':'<font color=red>私藏</font>'); ?></td>
	</tr>
</table>
</td>
<?php
	}
?>
	</tr>
</table>