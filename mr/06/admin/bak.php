<?php
	session_start();
	include_once 'conn/conn.php';	//�������ݿ�
	include_once 'config.php';		//�����ļ��е����ƣ����ݿ������\����
	include_once 'func.php';		//��ȡָ����Ŀ¼�µ��ļ�
?>
<script language="javascript" src="../js/bak.js"></script>
<table width="505" height="174" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="135">&nbsp;</td>
    <td width="217">&nbsp;</td>
    <td width="153">&nbsp;</td>
  </tr>
  <tr>
    <td align="right" class="STYLE3">��ձ����ļ��У�</td>
    <td class="STYLE3"><a href="del_bak.php" onClick="return del_chk()">ɾ���ɱ���</a></td>
    <td>&nbsp;</td>
  </tr>
<form name="bak" id="bak" method="post" action="bak_chk.php">
  <tr>
    <td align="right" class="STYLE3">���ݱ��ݣ�</td>
    <td><input type="text" name="b_name" value="<?php echo date("YmdHis"); ?>.sql" readonly="readonly" size="25" /></td>
    <td><input name="submit" type="submit" id="submit" value="��������" /></td>
  </tr>
</form>
<form name="rebak" id="rebak" method="post" action="rebak_chk.php">&nbsp;
  <tr>
    <td align="right" class="STYLE3">���ݻָ���</td>
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
    <td><input name="submit2" type="submit" id="butt" onclick="return re_bak();" value="�ָ�����"/></td>
  </tr>
</form>
</table>
