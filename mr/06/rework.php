<?php  
    include_once("sessionstart.php");
    include("conn/conn.php");
	$tb_forum_user=$_SESSION["tb_forum_user"];
	if($tb_forum_user==""){
		echo "<script>window.location.href='register.php';</script>";
		exit;
	}
    $sql=mysql_query("select * from tb_forum_user where tb_forum_user='".$tb_forum_user."'",$conn);
    $info=mysql_fetch_array($sql);
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>修改个人信息</title>
<style type="text/css">
<!--
.STYLE12 {
	font-size: 12px;
	color: #FF0000;
}
-->
</style>
</head>
<style type="text/css">
<!--
body {
	background-color: #8394BF;
}
.STYLE11 {
	font-size: 12px;
	color: #656766;
}
-->
</style>
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
	
             if(form.tb_forum_pass.value==""){
			    alert("请输入密码！");
			    form.tb_forum_pass.focus();
			    return(false);
			  }
		     if(form.tb_forum_email.value=="")
	          {
	             alert("请输入E-mail地址!");
	             form.tb_forum_email.select();
	             return(false);
	            }

		     if(!check_email(form.tb_forum_email.value))
	          {
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
		   
		   /* if(form.tb_forum_pass_problem.value==""){
			
			   alert("请选择找回密码问题！");
			   form.tb_forum_pass_problem.focus();
			   return(false);
			}
			if(form.tb_forum_pass_result.value==""){
			
			   alert("请填写找会密码答案！");
			   form.tb_forum_pass_result.select();
			   return(false);
			}*/
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
			if(form.tb_forum_picture.value==""){
			   alert("请选择要上传的头像图片！！");
			   return(false);
			}
		    
		    return(true);
		   }
		 
		 </script>
<body>
<?php include_once("enter.php");?>
<table width="950" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#F7F7FF">
<form action="rework_ok.php" method="post" enctype="multipart/form-data" name="form1" id="form1" onSubmit="return check_input(form1)">

                                  <tr>
                                    <td height="30" colspan="3">&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td width="182" height="30" class="STYLE11"><div align="right">会员名：</div></td>
                                    <td width="768" height="35" colspan="2" class="STYLE11">&nbsp;
                                        <?php echo $_SESSION["tb_forum_user"];?>
                                        &nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td height="30" class="STYLE11"><div align="right">密码：</div></td>
                                    <td height="30" colspan="2">&nbsp;
                                    <input name="tb_forum_pass" type="text" id="tb_forum_pass" size="70" value="<?php echo $info["tb_forum_truepass"];?>"></td>
                                  </tr>
                                  <tr>
                                    <td height="30" class="STYLE11"><div align="right">邮箱地址：</div></td>
                                    <td height="30" colspan="2">&nbsp;
                                        <input name="tb_forum_email" type="text" id="tb_forum_email" size="70" value="<?php echo $info["tb_forum_email"];?>" />
                                      &nbsp;<span class="STYLE12">(请填写正确的E-mail地址！)</span></td>
                                  </tr>
                                  <tr>
                                    <td height="30" class="STYLE11"><div align="right">QQ号码：</div></td>
                                    <td height="30" colspan="2" class="STYLE12">&nbsp;
                                        <input name="tb_forum_qq" type="text" id="tb_forum_qq" size="70" value="<?php echo $info["tb_forum_qq"];?>" />
                                    &nbsp;(QQ号只能由数字组成!)</td>
                                  </tr>
                                  <tr>
                                    <td height="30" class="STYLE11"><div align="right">更换头像：</div></td>
                                    <td height="30" colspan="2">&nbsp; <input name="tb_forum_picture" type="file" id="tb_forum_picture" size="70"></td>
                                  </tr>
                                  <tr>
                                    <td height="30" class="STYLE11"><div align="right">添加个人特长：</div></td>
                                    <td height="30" colspan="2">&nbsp; <textarea name="tb_forum_speciality" cols="70" rows="10" id="tb_forum_speciality"><?php echo $info["tb_forum_speciality"];?></textarea></td>
                                  </tr>
                                  <tr>
                                    <td height="30" class="STYLE11"><div align="right">效验码：</div></td>
                                    <td height="30" colspan="2"><table width="400" height="50" border="0" align="left" cellpadding="0" cellspacing="0">
                                        <tr>
                                          <td width="270" height="35" align="left" valign="bottom">&nbsp; <input name="tb_forum_validate" type="text" id="tb_forum_validate" size="35" /></td>
                                          <td width="130" rowspan="2">&nbsp;&nbsp;<?php
							   $num=intval(mt_rand(1000,9999));
							   
							   for($i=0;$i<4;$i++)
							   {
							    echo "<img src=images/code/".substr(strval($num),$i,1).".gif>";
							   }
							?><input type="hidden" value="<?php echo $num;?>" name="num" />                                          </td>
                                        </tr>
                                        <tr>
                                          <td align="left"></td>
                                        </tr>
                                    </table></td>
                                  </tr>
                                  <tr>
                                    <td height="50" colspan="3">
                                      
                                      <div align="center">
                                        <input type="submit" name="submit"  value="修改注册信息" />
                                        &nbsp;&nbsp;
                                        <input name="reset" type="reset"  value="重新填写注册信息" />
                                                                         </div></td></tr>
  </form>
</table> 
<table width="950" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="667" bgcolor="#F7F7FF">&nbsp;</td>
    <td width="283" bgcolor="#F7F7FF"><img src="images/index_8 (2).jpg" width="218" height="75"></td>
  </tr>
  <tr>
    <td bgcolor="#8496BD">&nbsp;</td>
    <td bgcolor="#8496BD">&nbsp;</td>
  </tr>
</table>
</body>
</html>
