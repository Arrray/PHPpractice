<?php /* Smarty version 2.6.19, created on 2009-05-30 06:19:39
         compiled from login.phtml */ ?>

<div style="width:950px; background-color:#FFFFFF">
    <div style="width:930px; height:20px; background:url(<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/title4.gif); border-top:1px solid #CCCCCC; padding-top:3px; padding-left:20px; font-size:13px; text-align:left">
               ����ǰ��λ�ã������������&nbsp;>>&nbsp;�û���¼
    </div>
    <div style="width:930px; height:100px">
<div style="width:100%">
    <div style="width:60%; height:180px; float:left; text-align:left; padding-left:150px; padding-top:15px; line-height:22px">
    <div id="chkusernc" style="width:70%; color:#FF0000; display:none"></div>
    <div id="chkuserpwd" style="width:70%;color:#FF0000; display:none"></div>
    <div id="chkxym" style="width:70%; color:#FF0000; display:none"></div>
    <div style="width:70%; color:#FF0000 <?php if ($this->_tpl_vars['errorMsg'] == ''): ?> ;display:none<?php endif; ?>">��<?php echo $this->_tpl_vars['errorMsg']; ?>
</div>
    <script language="JavaScript" type="text/javascript">
	function openfindpwd()
	{
	  window.open("openfindpwd.php","newframe","left=200,top=200,width=200,height=100,menubar=no,toolbar=no,location=no,scrollbars=no,location=no");}
</script>
    
    <form name="form_login" onsubmit="return chklogininfo(form_login, 'all')" method="post" action="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/login.php">
    �û��ǳƣ�<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="usernc" size="25" class="input" onBlur="chklogininfo(form_login, 0)"  <?php if ($this->_tpl_vars['isunc'] == 'T'): ?>value="<?php echo $this->_tpl_vars['unc'][0]['usernc']; ?>
"<?php endif; ?>><br>
    ��&nbsp;&nbsp;�룺<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="userpwd" size="25" class="input"  onBlur="chklogininfo(form_login, 1)" <?php if ($this->_tpl_vars['isunc'] == 'T'): ?>value="<?php echo $this->_tpl_vars['unc'][0]['truepwd']; ?>
"<?php endif; ?>>&nbsp;<a href="javascript:openfindpwd()" class="a1">[�һ�����]</a><br>
       
    ��֤�룺<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="xym" size="7" class="input" onBlur="chklogininfo(form_login, 7)"/><input type="hidden" value="" name="xym1">&nbsp;
    <script language="javascript">
      var num1=Math.round(Math.random()*10000000);
      var num=num1.toString().substr(0,4);
      document.write("<img name=codeimg4 src='xym.php?num="+num.substr(0,1)+"'>");
      document.write("<img name=codeimg5 src='xym.php?num="+num.substr(1,1)+"'>");
      document.write("<img name=codeimg6 src='xym.php?num="+num.substr(2,1)+"'>");
      document.write("<img name=codeimg7 src='xym.php?num="+num.substr(3,1)+"'>");
      form_login.xym1.value=num;
	  function code_1(){
	       var num1=Math.round(Math.random()*10000000);
	       var num=num1.toString().substr(0,4);
	       document.codeimg4.src="xym.php?num="+num.substr(0,1);
	       document.codeimg5.src="xym.php?num="+num.substr(1,1);
	       document.codeimg6.src="xym.php?num="+num.substr(2,1);
	       document.codeimg7.src="xym.php?num="+num.substr(3,1);
	       form_login.xym1.value=num;
       }
    </script>
    
    <a href="javascript:code_1()" class="a1">������</a><br><br>
    
    <input type="submit" value="��¼"> &nbsp;&nbsp;<input type="reset" value="����">&nbsp;&nbsp;<a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/register.php" class="a1">ע��Ϊ�»�Ա</a><br> 
    
    
    </form>
   

    
    </div>
    <div style="width:39%; height:180px; float:right; padding-right:50px">
      <br/>
      <div style="width:220px; height:220px; border:1px dotted #333333; background-color:#E9EBEB">
        <div style="width:95%">
           <div style="width:25%; height:40px; float:left; padding-top:5px"><img src="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/biao12.gif"></div>
           <div style="width:73%; height:40px; float:right; padding-top:20px; text-align:left; font-size:13px; color:#003399"><strong>��¼��</strong></div>
        </div>
        <div style="width:95%; text-align:left; padding:10px; line-height:22px">
          <font color="#003399">�û��ǳƺ�����</font><br>
          &nbsp;&nbsp;&nbsp;&nbsp;�����û����ı������������ڱ�վע����û��������룬�������û��ע�ᣬ����<a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/register.php" class="a1">ע��</a>Ϊ��վ��Ա<br>
          <font color="#003399">��֤��</font><br>&nbsp;&nbsp;&nbsp;&nbsp;�뽫��¼���е�ͼƬ������ӵ���֤���ı�����
        </div>        
      </div>
      <br/>
    </div>
  </div>     
     
     
     
              
    </div>
       
</div>
       