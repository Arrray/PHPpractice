<?php
	session_start();
	include_once 'conn/conn.php';
	include_once 'inc/admin.php';
	$seltypesql = "select id,typename,level from tb_type where membername = '".$photoadminname."' order by id desc";
	$pictypearr = $conne->getRowsArray($seltypesql);
	$conne->close_rst();
?>
<div style="background-image:url(../images/centertop.gif); background-position: top; background-repeat:no-repeat; width: 551px; height: 42px; margin:15px;">&nbsp;</div>
<div style=" width:805px; border:1px #000000 solid;">
<table id="addtypefm" width="300px" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="244" height="25" align="center" valign="middle">相册类别管理</td>
	<td width="50" align="center" valign="middle"><button id="addtypebtn" class="btn" onclick="addtype()" style=" background-image: url(../images/addbtn.gif); background-position:center; background-repeat:no-repeat; width:50px; height:21px;"></button></td>
  </tr>
</table>
<hr style=" width:80%;"  />
<table width="400" border="1" cellspacing="0" cellpadding="0" bgcolor="#f7f3e8">
<?php
	if(count($pictypearr) > 0){
		foreach($pictypearr as $typevalue){
?>
  <tr>
    <td width="210" height="25" align="center" valign="middle">&nbsp;<?php echo (($typevalue['level'] == 0)?'&nbsp;':'<font color=red>*</font>&nbsp;').$typevalue['typename']; ?></td>
    <td height="25" align="center" valign="middle" width="134">
    <button id="delpictype" onclick="return deltype(<?php echo $typevalue['id']; ?>)" class="btn" style=" background-image:url(../images/delbtn.gif); background-position:center; background-repeat:no-repeat; width: 50px; height:20px;">&nbsp;</button>
    &nbsp;<button id="modtypebtn" onclick="return modtype(<?php echo $typevalue['id']; ?>,'<?php echo $typevalue['typename']; ?>')" class="btn" style="background-image:url(../images/modbtn.gif); background-position:center; background-repeat: no-repeat; width:50px; height:20px;">&nbsp;</button></td>
  </tr>
<?php
		}
	}
?>
</table>
<p>&nbsp;</p>
<div id="addtypediv" style="display:none;">
<div style=" text-align:center; height: 25px;">添加类别</div><hr style=" width:80%;" />
<table id="addtypefm" width="300" border="1" cellspacing="0" cellpadding="0" bgcolor="#f7f3e8">
<form id="addtypefm" name="addtypefm" method="post" action="pictype_chk.php?act=addtype" onsubmit="return chktypename();">
  <tr>
  	<td width="126" height="25" align="right" valign="middle">类别名称：</td>
  	<td width="168" height="25" align="left" valign="middle"><input id="addpictype" name="addpictype" type="text" class="txt" /></td>
  </tr>
  <tr>
  	<td height="25" align="right">是否公开：</td>
	<td><select id="ispub" name="ispub" onchange="pubtype()"><option value="0">公开</option><option value="1">不公开</option></select><input id="typepwd" name="typepwd" type="password" disabled="disabled" /></td>
  </tr>
  <tr>
  	<td height="25" align="center" valign="middle" colspan="2"><input id="addtypebtn" name="addtypebtn" type="submit" value="" class="btn" style=" background-image:url(../images/addbtn.gif); background-position:center; background-repeat:no-repeat; width:50px; height:20px;" /></td>
  </tr>
</form>
</table>
</div>

<div id="modtypediv" style="display:none;">

<div id="modtitle" style=" text-align:center; height: 25px;">修改类别<br /><hr style=" width:80%;"  /></div>
<table width="400" border="1" cellspacing="0" cellpadding="0" bgcolor="#f7f3e8">
<form id="modtypefm" name="modtypefm" method="post" action="pictype_chk.php?act=modtype">
  <tr>
  	<td width="126" height="25" align="right" valign="middle">类别名称：</td>
  	<td width="168" height="25" align="left" valign="middle"><input id="modpictype" name="modpictype" type="text" class="txt" /></td>
  </tr>
  <tr>
  	<td height="25" align="right">是否公开：</td>
	<td><select id="ispub1" name="ispub1" onchange="pubtype1()"><option value="0">公开</option><option value="1">不公开</option></select><input id="typepwd1" name="typepwd1" type="password" disabled="disabled" /></td>
  </tr>
  <tr>
  	<td height="25" align="center" valign="middle" colspan="2"><input id="hiddenid" name="hiddenid" type="hidden" /><input id="modtypebtn" name="modtypebtn" type="submit" value="" onclick="return chktypename1()" class="btn" style=" background-image:url(../images/addbtn.gif); background-position:center; background-repeat:no-repeat; width:50px; height:20px;" /></td>
  </tr>
</form>
</table>
</div></div>