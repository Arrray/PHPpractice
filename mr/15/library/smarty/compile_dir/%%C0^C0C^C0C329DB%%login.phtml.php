<?php /* Smarty version 2.6.19, created on 2009-05-30 06:19:39
         compiled from login.phtml */ ?>

<div style="width:950px; background-color:#FFFFFF">
    <div style="width:930px; height:20px; background:url(<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/title4.gif); border-top:1px solid #CCCCCC; padding-top:3px; padding-left:20px; font-size:13px; text-align:left">
               您当前的位置：明日网上书店&nbsp;>>&nbsp;用户登录
    </div>
    <div style="width:930px; height:100px">
<div style="width:100%">
    <div style="width:60%; height:180px; float:left; text-align:left; padding-left:150px; padding-top:15px; line-height:22px">
    <div id="chkusernc" style="width:70%; color:#FF0000; display:none"></div>
    <div id="chkuserpwd" style="width:70%;color:#FF0000; display:none"></div>
    <div id="chkxym" style="width:70%; color:#FF0000; display:none"></div>
    <div style="width:70%; color:#FF0000 <?php if ($this->_tpl_vars['errorMsg'] == ''): ?> ;display:none<?php endif; ?>">·<?php echo $this->_tpl_vars['errorMsg']; ?>
</div>
    <script language="JavaScript" type="text/javascript">
	function openfindpwd()
	{
	  window.open("openfindpwd.php","newframe","left=200,top=200,width=200,height=100,menubar=no,toolbar=no,location=no,scrollbars=no,location=no");}
</script>
    
    <form name="form_login" onsubmit="return chklogininfo(form_login, 'all')" method="post" action="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/login.php">
    用户昵称：<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="usernc" size="25" class="input" onBlur="chklogininfo(form_login, 0)"  <?php if ($this->_tpl_vars['isunc'] == 'T'): ?>value="<?php echo $this->_tpl_vars['unc'][0]['usernc']; ?>
"<?php endif; ?>><br>
    密&nbsp;&nbsp;码：<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="userpwd" size="25" class="input"  onBlur="chklogininfo(form_login, 1)" <?php if ($this->_tpl_vars['isunc'] == 'T'): ?>value="<?php echo $this->_tpl_vars['unc'][0]['truepwd']; ?>
"<?php endif; ?>>&nbsp;<a href="javascript:openfindpwd()" class="a1">[找会密码]</a><br>
       
    验证码：<br>
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
    
    <a href="javascript:code_1()" class="a1">看不清</a><br><br>
    
    <input type="submit" value="登录"> &nbsp;&nbsp;<input type="reset" value="重置">&nbsp;&nbsp;<a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/register.php" class="a1">注册为新会员</a><br> 
    
    
    </form>
   

    
    </div>
    <div style="width:39%; height:180px; float:right; padding-right:50px">
      <br/>
      <div style="width:220px; height:220px; border:1px dotted #333333; background-color:#E9EBEB">
        <div style="width:95%">
           <div style="width:25%; height:40px; float:left; padding-top:5px"><img src="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/biao12.gif"></div>
           <div style="width:73%; height:40px; float:right; padding-top:20px; text-align:left; font-size:13px; color:#003399"><strong>登录向导</strong></div>
        </div>
        <div style="width:95%; text-align:left; padding:10px; line-height:22px">
          <font color="#003399">用户昵称和密码</font><br>
          &nbsp;&nbsp;&nbsp;&nbsp;请在用户名文本框中输入您在本站注册的用户名和密码，如果您还没有注册，请先<a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/register.php" class="a1">注册</a>为本站会员<br>
          <font color="#003399">验证码</font><br>&nbsp;&nbsp;&nbsp;&nbsp;请将登录表单中的图片数字添加到验证码文本框中
        </div>        
      </div>
      <br/>
    </div>
  </div>     
     
     
     
              
    </div>
       
</div>
       