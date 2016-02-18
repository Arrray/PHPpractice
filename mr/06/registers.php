<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>会员注册</title>
</head>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-color: #F7EFF7;
}
.STYLE11 {
	font-size: 12px;
	color: #656766;
}
.STYLE12 {
	font-size: 12px;
	color: #FF0000;
}
-->
</style>
<body>
<table width="1003" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><img src="images/index_2.jpg" width="1003" height="80"></td>
  </tr>
</table>
<table width="780" border="0" align="center" cellpadding="0" cellspacing="0">
<script>
function check_email(tb_forum_email){
	var str=tb_forum_email;
	var Expression=/\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/; 
	var objExp=new RegExp(Expression);
	if(objExp.test(str)==true){
		return true;
	}else{
		return false;
	}
}
</script>
<script language="JavaScript" type="text/javascript">
function check_input(form){		    
	if(form.tb_forum_user.value==""){
		alert("请填写会员名称！");
		form.tb_forum_user.select();
		return(false);
	}
	if(form.tb_forum_pass.value==""){
		alert("请输入密码！");
		form.tb_forum_pass.focus();
		return(false);
	}
	if(form.tb_forum_email.value==""){
	    alert("请输入E-mail地址!");
	    form.tb_forum_email.select();
	    return(false);
	}
	if(!check_email(form.tb_forum_email.value)){
	    alert("您输入的E-mail地址的格式不正确!");
	    form.tb_forum_email.focus();
	    return(false);
	}
	if(form.tb_forum_qq.value==""){		
		alert("请填写您的QQ号码！");
		form.tb_forum_qq.select();
		return(false);			
	}
	if(isNaN(form.tb_forum_qq.value)==true){			
		alert("QQ号只能由数字组成！");
		form.tb_forum_qq.select();
		return(false);
	}		   
	if(form.tb_forum_pass_problem.value==""){			
		alert("请选择找回密码问题！");
		form.tb_forum_pass_problem.focus();
		return(false);
	}
	if(form.tb_forum_pass_result.value==""){			
		alert("请填写找会密码答案！");
		form.tb_forum_pass_result.select();
		return(false);
	}
	if(form.tb_forum_validate.value==""){
		alert("请填写验证码！");
		form.tb_forum_validate.select();
		return(false);			
	}
	if(form.num.value!=form.tb_forum_validate.value){
		alert("您输入的验证码不正确！");
		form.num.select();
		return(false);			
	}		    
	return(true);
}
</script>
                                <form action="registers_ok.php" method="post" name="form1" id="form1" onSubmit="return check_input(form1)">
                                  <tr>
                                    <td height="30" colspan="3">&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td width="106" height="30" align="right" class="STYLE11">会员名：</td>
                                    <td height="30" colspan="2">&nbsp;
                                        <input name="tb_forum_user" type="text" class="inputcss" id="tb_forum_user" size="55" />
                                        &nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td height="30" align="right" class="STYLE11">密码：</td>
                                    <td height="30" colspan="2">&nbsp;
                                    <input name="tb_forum_pass" type="password" id="tb_forum_pass" size="55"></td>
                                  </tr>
                                  <tr>
                                    <td height="30" align="right" class="STYLE11">邮箱地址：</td>
                                    <td height="30" colspan="2">&nbsp;
                                        <input name="tb_forum_email" type="text" id="tb_forum_email" size="55" />
                                      &nbsp;<span class="STYLE12">(请填写正确的E-mail地址！)</span></td>
                                  </tr>
                                  <tr>
                                    <td height="30" align="right" class="STYLE11">QQ号码：</td>
                                    <td height="30" colspan="2">&nbsp;
                                        <input name="tb_forum_qq" type="text" id="tb_forum_qq" size="55" />
                                      &nbsp;<span class="STYLE12">(QQ号只能由数字组成!)</span></td>
                                  </tr>
								  
								  
								  
								  <tr>
          <td align="right" class="STYLE11" >头像选择： </td>
          <td width="81"  height="30">&nbsp;
            <select name="tb_forum_picture" id="tb_forum_picture" onChange="javascript:tb_user_face.src=this.value">
                      <?php
					  for($i=0;$i<=11;$i++){
					  ?>
					   <option value="<?php echo "images/face/".$i.".gif"?>"><?php echo $i.".gif"?></option>
					  <?php
					  }
					  ?>
            </select></td>
     
          <td width="593"><img id=tb_user_face src="images/face/0.gif" width="60" height="60"></td>
								  </tr>
								  
								  
								  
								  
								  
								  
                                  <tr>

                                    <td height="30" align="right" class="STYLE11">密码保护问题：</td>
                                    <td height="30" colspan="2">&nbsp;
                                      <select name="tb_forum_pass_problem" id="tb_forum_pass_problem">
                                        <option value="" selected="selected">请选择一个问题</option>
                                        <option value="我就读的第一所学校的名称？">我就读的第一所学校的名称？</option>
                                        <option  value="我最喜欢的休闲运动是什么？">我最喜欢的休闲运动是什么？</option>
                                        <option value="我最喜欢的运动员是谁？">我最喜欢的运动员是谁？</option>
                                        <option value="我最喜欢的物品的名称？">我最喜欢的物品的名称？</option>
                                        <option value="我最喜欢的歌曲？">我最喜欢的歌曲？</option>
                                        <option value="我最喜欢的食物？">我最喜欢的食物？</option>
                                        <option value="我最爱的人的名字？">我最爱的人的名字？</option>
                                        <option value="我最爱的电影？">我最爱的电影？</option>
                                        <option value="我妈妈的生日？">我妈妈的生日？</option>
                                        <option value="我的初恋日期？">我的初恋日期？</option>
                                      </select></td>
                                  </tr>
                                  <tr>
                                    <td height="30" align="right" class="STYLE11">您的答案：</td>
                                    <td height="30" colspan="2">&nbsp;
                                        <input name="tb_forum_pass_result" type="text" id="tb_forum_pass_result" size="55" />
                                        <span class="STYLE12">&nbsp;(为了能够找回丢失的密码，请记住该答案！)</span></td>
                                  </tr>
 <tr>
                                    <td height="30" class="STYLE11"><div align="right">添加个人特长：</div></td>
                                    <td height="30" colspan="2">&nbsp; <textarea name="tb_forum_speciality" cols="70" rows="10" id="tb_forum_speciality"></textarea></td>
                                  </tr>
                                  <tr height="50">
                                    <td height="50" align="right" class="STYLE11">效验码：</td>
                                    <td height="50" colspan="2"><table width="400" height="30" border="0" align="left" cellpadding="0" cellspacing="0">
                                        <tr>
                                          <td width="251" height="35" align="left" valign="bottom">&nbsp; <input name="tb_forum_validate" type="text" id="tb_forum_validate" size="30" /></td>
                                          <td width="149" rowspan="2"><?php
							   $num=intval(mt_rand(1000,9999));
							   
							   for($i=0;$i<4;$i++)
							   {
							    echo "<img src=images/code/".substr(strval($num),$i,1).".gif>";
							   }
							?>
                                          <input type="hidden" value="<?php echo $num;?>" name="num" />                                          </td>
                                        </tr>
                                        <tr>
                                          <td align="left">&nbsp;</td>
                                        </tr>
                                    </table></td>
                                  </tr>
                                  <tr>
                                    <td height="50" colspan="3"><div align="center">
                                        
                                                                       <input type="submit" name="submit"  value="提交注册信息" />
                                      &nbsp;&nbsp;
                                      <input name="reset" type="reset"  value="重新填写注册信息" />
                                    </div></td>
                                  </tr>
                                </form>
</table>
    

<table width="1003" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="667" bgcolor="#F7EFF7">&nbsp;</td>
    <td width="283" bgcolor="#F7EFF7"><img src="images/index_8 (2).jpg" width="218" height="75"></td>
  </tr>
</table>
</body>

</body>
</html>
