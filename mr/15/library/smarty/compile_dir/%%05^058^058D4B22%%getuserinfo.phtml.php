<?php /* Smarty version 2.6.19, created on 2010-05-05 05:46:17
         compiled from getuserinfo.phtml */ ?>

<div style="width:950px; background-color:#FFFFFF">
    <div style="width:930px; height:20px; background:url(<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/title4.gif); border-top:1px solid #CCCCCC; padding-top:3px; padding-left:20px; font-size:13px; text-align:left">
               您当前的位置：明日网上书店&nbsp;>>&nbsp;填写用户注册信息
    </div>
    

      <table width="88%" height="520" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="68%">
          <form name="form_reg" method="post" action="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/getuserinfo.php" onSubmit="return chkreginfo(form_reg,'all')">
          <table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
            <br /><br />
			<tr>
              <td width="22%" height="30"><div align="right">用户昵称：</div></td>
              <td colspan="3">&nbsp;<input type="text" name="usernc" size="20" class="input" onBlur="chkreginfo(form_reg,0, '', '<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
')"></td>
              <td width="25%"><div id="chkusernc" style="color:#FF0000"></div></td>
            </tr>
            <tr>
              <td height="30"><div align="right">登录密码：</div></td>
              <td height="30" colspan="3">&nbsp;<input type="password" name="userpwd1" size="25" class="input" onBlur="chkreginfo(form_reg,1)" ></td>
              <td height="30"><div id="chkuserpwd1" style="color:#FF0000"></div></td>
            </tr>
            <tr>
              <td height="30"><div align="right">确认密码：</div></td>
              <td height="30" colspan="3">&nbsp;<input type="password" name="userpwd2" size="25" class="input" onBlur="chkreginfo(form_reg,2)"></td>
              <td height="30"><div id="chkuserpwd2" style="color:#FF0000"></div></td>
            </tr>
            <tr>
              <td height="30"><div align="right">真实姓名：</div></td>
              <td height="0" colspan="3">&nbsp;<input type="text" name="truename" size="20" class="input" onBlur="chkreginfo(form_reg,3)"></td>
              <td height="0"><div id="chktruename" style="color:#FF0000"></div></td>
            </tr>
			 <tr>
              <td height="30"><div align="right">性别：</div></td>
              <td height="0" colspan="3">&nbsp;<select name="sex" onBlur="chkreginfo(form_reg,4)" onChange="additem(form_reg, '<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
')" >
                <option value="">-请选择-</option>
                <option value="男">男</option>
                <option value="女">女</option>
              </select>              </td>
              <td height="0"><div id="chksex" style="color:#FF0000"></div></td>
			 </tr>
			 
			 <tr>
              <td height="65"><div align="right">头像：</div></td>
              <td>&nbsp;<select name="photo" onChange="selectitem(form_reg, '<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
')">
                  <option value="0.gif">0.gif</option>
                </select>
                </td>
              <td><img id="img" src="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/face/0.gif" width="60" height="60"></td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
			 </tr>
			 
			 
            <tr>
              <td height="30"><div align="right">联系电话：</div></td>
              <td height="0" colspan="3">&nbsp;<input type="text" name="tel" size="30" class="input" onBlur="chkreginfo(form_reg,5)"></td>
              <td height="0"><div id="chktel" style="color:#FF0000"></div></td>
            </tr>
            <tr>
              <td height="30"><div align="right">E-mail地址：</div></td>
              <td height="0" colspan="3">&nbsp;<input type="text" name="email" size="30" class="input" onBlur="chkreginfo(form_reg,6)"></td>
              <td height="0"><div id="chkemail" style="color:#FF0000"></div></td>
            </tr>
            <tr>
              <td height="30"><div align="right">QQ号码：</div></td>
              <td height="0" colspan="3">&nbsp;<input type="text" name="qq" size="25" class="input" onBlur="chkreginfo(form_reg,7)"></td>
              <td height="0"><div id="chkqq" style="color:#FF0000"></div></td>
            </tr>
            <tr>
              <td height="30"><div align="right">邮政编码：</div></td>
              <td height="0" colspan="3">&nbsp;<input type="text" name="yb" size="25" class="input" onBlur="chkreginfo(form_reg,8)"></td>
              <td height="0"><div id="chkyb" style="color:#FF0000"></div></td>
            </tr>
           
            <tr>
              <td height="30"><div align="right">联系地址：</div></td>
              <td height="0" colspan="3">&nbsp;<input type="text" name="address" size="32" class="input" onBlur="chkreginfo(form_reg,9)"></td>
              <td height="0"><div id="chkaddress" style="color:#FF0000"></div></td>
            </tr>
            <tr>
              <td height="30"><div align="right">密码找回问题：</div></td>
              <td height="0" colspan="3">&nbsp;<input type="text" name="question" size="32" class="input" onBlur="chkreginfo(form_reg,10)"></td>
              <td height="0"><div id="chkquestion" style="color:#FF0000"></div></td>
            </tr>
            <tr>
              <td height="30"><div align="right">密码找会答案：</div></td>
               <td height="0" colspan="3">&nbsp;<input type="text" name="answer" size="32" class="input" onBlur="chkreginfo(form_reg,11)"></td>
              <td height="0"><div id="chkanswer" style="color:#FF0000"></div></td>
            </tr>
            <tr>
              <td height="30"><div align="right">验证码：</div></td>
              <td width="17%" height="0">&nbsp;<input type="text" name="xym" size="8" class="input" onBlur="chkreginfo(form_reg,12)"/><input type="hidden" value="" name="xym1"></td>
              <td width="12%"><script language="javascript">
						    var num1=Math.round(Math.random()*10000000);
						    var num=num1.toString().substr(0,4);
					        document.write("<img name=codeimg4 src='<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/xym.php?num="+num.substr(0,1)+"&baseUrl=<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
'>");
							document.write("<img name=codeimg5 src='<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/xym.php?num="+num.substr(1,1)+"&baseUrl=<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
'>");
						    document.write("<img name=codeimg6 src='<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/xym.php?num="+num.substr(2,1)+"&baseUrl=<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
'>");
							document.write("<img name=codeimg7 src='<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/xym.php?num="+num.substr(3,1)+"&baseUrl=<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
'>");
						    form_reg.xym1.value=num;
						  
						  function code_1(){
						    var num1=Math.round(Math.random()*10000000);
						    var num=num1.toString().substr(0,4);
						    document.codeimg4.src="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/xym.php?num="+num.substr(0,1)+"&baseUrl=<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
";
							document.codeimg5.src="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/xym.php?num="+num.substr(1,1)+"&baseUrl=<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
";
							document.codeimg6.src="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/xym.php?num="+num.substr(2,1)+"&baseUrl=<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
";
							document.codeimg7.src="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/xym.php?num="+num.substr(3,1)+"&baseUrl=<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
";
							form_reg.xym1.value=num;
						  }
						</script></td>
              <td width="24%"><a href="javascript:code_1()" class="a1">看不清</a></td>
              <td height="0"><div id="chkxym" style="color:#FF0000"></div></td>
            </tr>
            <tr>
              <td height="40" colspan="5"><div align="center"><input type="submit" value="立即注册" class="btn_grey">&nbsp;&nbsp;<input type="reset" value="重置" class="btn_grey"></div></td>
              </tr>
			  
          </table>
          </form>
          </td>
     <td width="32%">
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="2" style="padding:5; line-height:2">
    <div style="width:220; height:400; border:dotted #000000 1px; background-color:#E9EBEB; padding-left:10px; padding-right:10px; padding-bottom:7px; padding-top:3px">
    <font color="##003399">
          <div style="width:95%">
           <div style="width:25%; height:30px; float:left; padding-top:5px"><img src="img/biao12.gif"></div>
           <div style="width:73%; height:30px; float:right; padding-top:20px; text-align:left; font-size:13px; color:#003399"><strong>注册向导</strong></div>
        </div>  用户昵称：</font><br>&nbsp;&nbsp;&nbsp;&nbsp;<font color="#000000">区分不同的注册用户，必须填写并要求不同</font><br><font color="#003399">密码/确认密码：</font><br>&nbsp;&nbsp;&nbsp;&nbsp;<font color="#000000">为了提高安全性，密码应大于6位并尽量复杂</font><br><font color="#003399">密码找会问题/答案：</font><br>&nbsp;&nbsp;&nbsp;&nbsp;<font color="#000000">密码丢失或忘记后可通过该信息找会密码</font><br><font color="#003399">其他注册信息：</font><br>&nbsp;&nbsp;&nbsp;&nbsp;<font color="#000000">注册用户应该正确填写其他信息，以便勾通联系</font><br><font color="#003399">验证码：</font><br>&nbsp;&nbsp;&nbsp;&nbsp;<font color="#000000">请将随机生成的验证码内容填写在验证码文本框中</font><br><font color="#FF0000">声明：</font><br>&nbsp;&nbsp;&nbsp;&nbsp;<font color="#000000">注册用户请按注册协议进行本站活动</font>
  </div>
    </td>
  </tr>
  </table>
</table>  
</div>

       