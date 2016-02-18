<?php
	session_start();
	header("Content-Type:text/html;charset=gb2312");
	include_once 'inc/func.php';
	include_once 'inc/admin.php';
	$picpath = $_GET['picpath'];
	$smallact = $_GET['smallact'];
?>
<img id = "bigimg" src="<?php echo $picpath; ?>" width="<?php echo getWidth($picpath,640,480); ?>" height="<?php echo getHeight($picpath,640,480); ?>" style="cursor:hand;" onclick="lookpic()" />
<div align="center" style=" line-height:25px;">图片格式：<?php echo getWidth($picpath); ?> * <?php echo getHeight($picpath); ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo '<a href=mod.php?smallact='.$smallact.'&picpath='.$picpath.' target=_blank>修改</a> | <a onclick="javascript:if(!confirm(\'是否删除?\')){}else{ location=\'del.php?smallact='.$smallact.'&picpath='.$picpath.'\';}" style=" cursor: hand;">删除</a>'; ?>&nbsp;&nbsp;<a style="cursor:hand;" onclick="setindexpic(<?php echo $smallact; ?>)">设为封面</a></div>