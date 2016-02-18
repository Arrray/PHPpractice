<?php
	session_start();
	include_once 'conn/conn.php';
	include_once 'inc/admin.php';
	$typearr = $conne->getRowsArray("select id,typename from tb_type where membername = '".$_SESSION['name']."'");
	$conne->close_rst();
?>
<script language="javascript">
function $(id){
	return document.getElementById(id);
}
function chkupfile(){
	if($('picname').value == ''){
		alert('请填写文件名称');
		$('picname').focus();
		return false;
	}
	if($('uppath').value == ''){
		alert('请选择上传文件路径');
		return false;
	}
}
</script>
<div style=" width:809px; height:80px; background-image:url(../images/uppics.gif); background-position: center; vertical-align:middle; background-repeat:no-repeat;"></div>
<table border="1" align="center" cellpadding="0" cellspacing="1">
<form id="upfm" name="upfm" method="post" action="upfile_chk.php" enctype="multipart/form-data">
<tr>
	<td height="25" align="center" colspan="2" valign="middle">上传图片<font color="#FF0000">(该版本只支持jpg和gif两种格式的上传文件)</font></td>
</tr>
<tr>
	<td width="100" height="25" align="right" valign="middle">图片名称：</td>
	<td height="25" align="left" valign="middle">&nbsp;
	  <input type="text" id="picname" name="picname" /></td>
</tr>
<tr>
	<td width="100" height="25" align="right" valign="middle">图片类别：</td>
	<td height="25" align="left" valign="middle">&nbsp;
	<select id="pictype" name="pictype">
	<?php
		foreach($typearr as $typevalue){
	?>
		<option value="<?php echo $typevalue['id']; ?>"><?php echo $typevalue['typename']; ?></option>
	<?php	
		}
	?>
	</select>
	</td>
</tr>
<tr>
	<td width="100" height="25" align="right" valign="middle">上传图片：</td>
	<td height="25" align="left" valign="middle">&nbsp;
	  <input id="uppath" name="uppath" type="file" class="txt" />&nbsp;<font color="#ff0000">图片大小限制：200K</font></td>
</tr>
<tr>
	<td align="right" valign="middle">图片说明：</td>
	<td align="left" valign="middle">&nbsp;<textarea id="picmess" name="picmess" rows="5" cols="50">暂无说明</textarea></td>
</tr>
<tr>
	<td height="25" colspan="2" align="center" valign="middle"><input type="submit" id="upbtn" name="upbtn" class="btn" value="" onClick="return chkupfile()" style=" background-image:url(../images/finishbtn.gif); background-position:center; background-repeat:no-repeat; width:50px; height:20px;" /></td>
</tr>
</form> 
</table>
	
