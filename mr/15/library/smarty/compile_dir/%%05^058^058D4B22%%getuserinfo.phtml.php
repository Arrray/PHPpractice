<?php /* Smarty version 2.6.19, created on 2010-05-05 05:46:17
         compiled from getuserinfo.phtml */ ?>

<div style="width:950px; background-color:#FFFFFF">
    <div style="width:930px; height:20px; background:url(<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/title4.gif); border-top:1px solid #CCCCCC; padding-top:3px; padding-left:20px; font-size:13px; text-align:left">
               ����ǰ��λ�ã������������&nbsp;>>&nbsp;��д�û�ע����Ϣ
    </div>
    

      <table width="88%" height="520" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="68%">
          <form name="form_reg" method="post" action="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/getuserinfo.php" onSubmit="return chkreginfo(form_reg,'all')">
          <table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
            <br /><br />
			<tr>
              <td width="22%" height="30"><div align="right">�û��ǳƣ�</div></td>
              <td colspan="3">&nbsp;<input type="text" name="usernc" size="20" class="input" onBlur="chkreginfo(form_reg,0, '', '<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
')"></td>
              <td width="25%"><div id="chkusernc" style="color:#FF0000"></div></td>
            </tr>
            <tr>
              <td height="30"><div align="right">��¼���룺</div></td>
              <td height="30" colspan="3">&nbsp;<input type="password" name="userpwd1" size="25" class="input" onBlur="chkreginfo(form_reg,1)" ></td>
              <td height="30"><div id="chkuserpwd1" style="color:#FF0000"></div></td>
            </tr>
            <tr>
              <td height="30"><div align="right">ȷ�����룺</div></td>
              <td height="30" colspan="3">&nbsp;<input type="password" name="userpwd2" size="25" class="input" onBlur="chkreginfo(form_reg,2)"></td>
              <td height="30"><div id="chkuserpwd2" style="color:#FF0000"></div></td>
            </tr>
            <tr>
              <td height="30"><div align="right">��ʵ������</div></td>
              <td height="0" colspan="3">&nbsp;<input type="text" name="truename" size="20" class="input" onBlur="chkreginfo(form_reg,3)"></td>
              <td height="0"><div id="chktruename" style="color:#FF0000"></div></td>
            </tr>
			 <tr>
              <td height="30"><div align="right">�Ա�</div></td>
              <td height="0" colspan="3">&nbsp;<select name="sex" onBlur="chkreginfo(form_reg,4)" onChange="additem(form_reg, '<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
')" >
                <option value="">-��ѡ��-</option>
                <option value="��">��</option>
                <option value="Ů">Ů</option>
              </select>              </td>
              <td height="0"><div id="chksex" style="color:#FF0000"></div></td>
			 </tr>
			 
			 <tr>
              <td height="65"><div align="right">ͷ��</div></td>
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
              <td height="30"><div align="right">��ϵ�绰��</div></td>
              <td height="0" colspan="3">&nbsp;<input type="text" name="tel" size="30" class="input" onBlur="chkreginfo(form_reg,5)"></td>
              <td height="0"><div id="chktel" style="color:#FF0000"></div></td>
            </tr>
            <tr>
              <td height="30"><div align="right">E-mail��ַ��</div></td>
              <td height="0" colspan="3">&nbsp;<input type="text" name="email" size="30" class="input" onBlur="chkreginfo(form_reg,6)"></td>
              <td height="0"><div id="chkemail" style="color:#FF0000"></div></td>
            </tr>
            <tr>
              <td height="30"><div align="right">QQ���룺</div></td>
              <td height="0" colspan="3">&nbsp;<input type="text" name="qq" size="25" class="input" onBlur="chkreginfo(form_reg,7)"></td>
              <td height="0"><div id="chkqq" style="color:#FF0000"></div></td>
            </tr>
            <tr>
              <td height="30"><div align="right">�������룺</div></td>
              <td height="0" colspan="3">&nbsp;<input type="text" name="yb" size="25" class="input" onBlur="chkreginfo(form_reg,8)"></td>
              <td height="0"><div id="chkyb" style="color:#FF0000"></div></td>
            </tr>
           
            <tr>
              <td height="30"><div align="right">��ϵ��ַ��</div></td>
              <td height="0" colspan="3">&nbsp;<input type="text" name="address" size="32" class="input" onBlur="chkreginfo(form_reg,9)"></td>
              <td height="0"><div id="chkaddress" style="color:#FF0000"></div></td>
            </tr>
            <tr>
              <td height="30"><div align="right">�����һ����⣺</div></td>
              <td height="0" colspan="3">&nbsp;<input type="text" name="question" size="32" class="input" onBlur="chkreginfo(form_reg,10)"></td>
              <td height="0"><div id="chkquestion" style="color:#FF0000"></div></td>
            </tr>
            <tr>
              <td height="30"><div align="right">�����һ�𰸣�</div></td>
               <td height="0" colspan="3">&nbsp;<input type="text" name="answer" size="32" class="input" onBlur="chkreginfo(form_reg,11)"></td>
              <td height="0"><div id="chkanswer" style="color:#FF0000"></div></td>
            </tr>
            <tr>
              <td height="30"><div align="right">��֤�룺</div></td>
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
              <td width="24%"><a href="javascript:code_1()" class="a1">������</a></td>
              <td height="0"><div id="chkxym" style="color:#FF0000"></div></td>
            </tr>
            <tr>
              <td height="40" colspan="5"><div align="center"><input type="submit" value="����ע��" class="btn_grey">&nbsp;&nbsp;<input type="reset" value="����" class="btn_grey"></div></td>
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
           <div style="width:73%; height:30px; float:right; padding-top:20px; text-align:left; font-size:13px; color:#003399"><strong>ע����</strong></div>
        </div>  �û��ǳƣ�</font><br>&nbsp;&nbsp;&nbsp;&nbsp;<font color="#000000">���ֲ�ͬ��ע���û���������д��Ҫ��ͬ</font><br><font color="#003399">����/ȷ�����룺</font><br>&nbsp;&nbsp;&nbsp;&nbsp;<font color="#000000">Ϊ����߰�ȫ�ԣ�����Ӧ����6λ����������</font><br><font color="#003399">�����һ�����/�𰸣�</font><br>&nbsp;&nbsp;&nbsp;&nbsp;<font color="#000000">���붪ʧ�����Ǻ��ͨ������Ϣ�һ�����</font><br><font color="#003399">����ע����Ϣ��</font><br>&nbsp;&nbsp;&nbsp;&nbsp;<font color="#000000">ע���û�Ӧ����ȷ��д������Ϣ���Ա㹴ͨ��ϵ</font><br><font color="#003399">��֤�룺</font><br>&nbsp;&nbsp;&nbsp;&nbsp;<font color="#000000">�뽫������ɵ���֤��������д����֤���ı�����</font><br><font color="#FF0000">������</font><br>&nbsp;&nbsp;&nbsp;&nbsp;<font color="#000000">ע���û��밴ע��Э����б�վ�</font>
  </div>
    </td>
  </tr>
  </table>
</table>  
</div>

       