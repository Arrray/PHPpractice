<?php
header("Content-type:text/html;charset=gb2312");
	include_once("conn/conn.class.php");
?>
<script>
	function found_chk(){
		if(document.getElementById("username").value == ""){
			alert("帐号不允许为空");
			document.getElementById("username").focus();
			return false;
		}
		if(document.getElementById("question").value == ""){
			alert("密码提示问题不允许为空");
			document.getElementById("question").focus();
			return false;
		}
		if(document.getElementById("answer").value == ""){
			alert("密码提示答案不允许为空");
			document.getElementById("answer").focus();
			return false;
		}
	}
	function chk_pwd(){
		if(document.getElementById("password").value == ""){
			alert("密码不允许为空");
			document.getElementById("password").focus();
			return false;
		}
		if(document.getElementById("password").value != document.getElementById("two_pwd").value){
			alert("两次密码不一致");
			document.getElementById("password").focus();
			return false;
		}
	}
</script>
<style type="text/css">
<!--
.submit {
	border: 1px solid #000000;
}
-->
</style>
<?php


	if(isset($_POST["action"]) and $_POST["action"] == "chk"){
		if(($_POST["username"] != "") and ($_POST["question"] != "") and ($_POST["answer"] != "")){
			$f_sql = "select * from tb_video_user where tb_video_question = '$_POST[question]' and tb_video_answer = '$_POST[answer]' and tb_video_user='$_POST[username]'";
			$f_rst=$result->login($f_sql,$conn);
			$f_rsti=$result->getRows($f_sql,$conn);
			if($f_rst==true){	
?>
	<table width="400" border="0" cellspacing="0" cellpadding="0">
<form name="form1" method="post" action="#">
<tr>
	<td width="100" height="30" align="right" valign="middle" scope="col">用户名：</td>
	<td width="294" height="30" align="left" valign="middle" scope="col"><input name="username" id="username" type="text" size="25" readonly="readonly" value="<?php echo $f_rsti[0]["tb_video_user"];  ?>" onmouseover="this.style.backgroundColor='#deebef'" onmouseout="this.style.backgroundColor=''">
	<input type="hidden" name="id" value="<?php echo $f_rsti[0]["tb_user_id"]; ?>">
	</td>
</tr>
<tr>
	<td height="30" align="right" valign="middle" scope="col">请输入密码：</td>
	<td height="30" align="left" valign="middle" scope="col"><input name="password" type="password" size="25" id="password" onmouseover="this.style.backgroundColor='#deebef'" onmouseout="this.style.backgroundColor=''"></td>
</tr>
<tr>
	<td width="100" height="30" align="right" valign="middle">确认密码：</td>
	<td width="294" height="30" align="left" valign="middle"><input name="two_pwd" id="two_pwd" type="password" size="25" onmouseover="this.style.backgroundColor='#deebef'" onmouseout="this.style.backgroundColor=''"></td>
</tr>
<tr>
	<td height="30">&nbsp;</td>
	<td height="30">
		<input type="hidden" name="action" value="mod">
  		<input type="submit" name="Submit" value="提交" class="submit" onClick="return chk_pwd();">&nbsp;
  		<input type="reset" name="Submit2" value="重置" class="submit">    
	</td>
</tr>
</form>
</table>
<?php	
			}
			else{
				echo "<script>alert('密码提示问题或答案不正确，请重新输入');history.back();</script>";
				exit();
			}
		}
	}
	else if(isset($_POST["action"]) and $_POST["action"] == "mod"){
		if($_POST["password"] == $_POST["two_pwd"]){
		    
			$m_sql = "update tb_video_user set tb_video_pass = '".$_POST[password]."' where tb_user_id = ".$_POST[id]."";
			$m_rst=$result->indeup($m_sql,$conn);
			    echo "<script>alert('密码修改成功，请登录');top.window.close();</script>";

				//if($m_rst = $conn->execute($m_sql) != false)
		}
		else{
			echo "<script>alert('密码修改失败，请稍后再试');top.window.close();</script>";
			exit();
		}
	}
	else{
?>
<table width="400" border="0" cellspacing="0" cellpadding="0">
<form name="form1" method="post" action="#">
<tr>
<td width="100" height="30" align="right" valign="middle" scope="col">用户名：</td>
<td width="294" height="30" align="left" valign="middle" scope="col"><input name="username" id="username" type="text" size="25" onmouseover="this.style.backgroundColor='#deebef'" onmouseout="this.style.backgroundColor=''"></td>
</tr>
<tr>
<td height="30" align="right" valign="middle" scope="col">密码提示问题：</td>
<td height="30" align="left" valign="middle" scope="col"><input name="question" type="text" size="25" id="question" onmouseover="this.style.backgroundColor='#deebef'" onmouseout="this.style.backgroundColor=''"></td>
</tr>
<tr>
<td width="100" height="30" align="right" valign="middle">密码提示答案：</td>
<td width="294" height="30" align="left" valign="middle"><input name="answer" id="answer" type="text" size="25" onmouseover="this.style.backgroundColor='#deebef'" onmouseout="this.style.backgroundColor=''"></td>
</tr>
<tr>
<td height="30">&nbsp;</td>
<td height="30">
	<input type="hidden" name="action" value="chk">
	<input type="submit" name="Submit" value="提交" class="submit" onClick="return found_chk();">&nbsp;
	<input type="reset" name="Submit2" value="重置" class="submit">    
</td>
</tr>
</form>
</table>
<?php
}
?>
