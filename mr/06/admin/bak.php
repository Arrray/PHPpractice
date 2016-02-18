<?php
	session_start();
	include_once 'conn/conn.php';	//连接数据库
	include_once 'config.php';		//定义文件夹的名称，数据库的名称\密码
	include_once 'func.php';		//读取指定根目录下的文件
?>
<script language="javascript" src="../js/bak.js"></script>
<table width="505" height="174" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="135">&nbsp;</td>
    <td width="217">&nbsp;</td>
    <td width="153">&nbsp;</td>
  </tr>
  <tr>
    <td align="right" class="STYLE3">清空备份文件夹：</td>
    <td class="STYLE3"><a href="del_bak.php" onClick="return del_chk()">删除旧备份</a></td>
    <td>&nbsp;</td>
  </tr>
<form name="bak" id="bak" method="post" action="bak_chk.php">
  <tr>
    <td align="right" class="STYLE3">数据备份：</td>
    <td><input type="text" name="b_name" value="<?php echo date("YmdHis"); ?>.sql" readonly="readonly" size="25" /></td>
    <td><input name="submit" type="submit" id="submit" value="备份数据" /></td>
  </tr>
</form>
<form name="rebak" id="rebak" method="post" action="rebak_chk.php">&nbsp;
  <tr>
    <td align="right" class="STYLE3">数据恢复：</td>
    <td><select name="r_name" style="width:190;">
		<?php
			$filename = show_file(PATH.ROOT.ADMIN.BAK);
			for($num = 2;$num<count($filename);$num++){
		?>
			<option value="<?php echo $filename[$num]; ?>"><?php echo $filename[$num]; ?></option>
		<?php
			}
		?>
		</select> </td>
    <td><input name="submit2" type="submit" id="butt" onclick="return re_bak();" value="恢复备份"/></td>
  </tr>
</form>
</table>
