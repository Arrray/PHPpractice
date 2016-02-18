<?php
	session_start();
	include_once("inc/chec.php");
	include_once("conn/conn.class.php");
?>
<script language="javascript">
function checks(){
		var types=list.grade.value;
		if(types=="2"){
			list.father.disabled=false;
		}
		else{
			list.father.disabled=true;
		}	
	}
</script>
<script src="js/admin_js.js" language="javascript"></script>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<table width="450" border="0" align="center" cellpadding="0" cellspacing="0">
 <form name="list" method="post" action="videolist_chk.php">
             <tr>
                <td height="15" colspan="2" align="center"><font style="font-size:13px; ">音 频 目 录 名 称 添 加</font></td>
    </tr>
              <tr>
                <td width="150" height="40" align="right" valign="middle">目 录 名 称：</td>
                <td width="250" height="40" align="left" valign="middle"><input name="names" type="text" id="names"></td>
              </tr>
              <tr>
                <td height="40" align="right" valign="middle">目 录 级 别：</td>
                <td height="40" align="left" valign="middle"><select name="grade" OnChange="checks()">
                  <option value="1" selected>一级目录</option>
                  <option value="2">二级目录</option>
                </select></td>
              </tr>
              <tr>
                <td height="40" align="right" valign="middle">父 级 名 称：</td>
                <td height="40" align="left" valign="middle">
				<select name="father" disabled>
				<?php
					$l_sqlstr = "select * from tb_videolist where grade = '1'";
					$l_rst = $result->getRows($l_sqlstr,$conn);
					print_r($l_rst);
					for($i=0;$i<count($l_rst);$i++){
				?>	
				<option value="<?php echo $l_rst[$i][father]; ?>"><?php echo $l_rst[$i][father]; ?></option>
				<?php
						
					}
				?>
                </select></td>
              </tr>
              <tr>
                <td height="30" colspan="2" align="center" valign="middle">
                    <input name="Submit" type="submit" class="submit" value="添  加" onclick="return n_chk();">
                    <input name="Submit2" type="button" class="submit" value="返  回" onClick="javascript:top.window.close()"></td>
    </tr>
 </form>
</table>