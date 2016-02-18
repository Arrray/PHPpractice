<?php /* Smarty version 2.6.19, created on 2009-06-09 08:14:49
         compiled from usercenter.phtml */ ?>

<div style="width:950px; background-color:#FFFFFF">
    <div style="width:930px; height:20px; background:url(<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/title4.gif); border-top:1px solid #CCCCCC; padding-top:3px; padding-left:20px; font-size:13px; text-align:left">
               您当前的位置：明日网上书店&nbsp;>>&nbsp;会员中心
    </div>
    <br />
    <div style="width:930px; height:100px">
        
        <div style="width:200px; height:100%; float:left; border-right:1px dotted #333333; background-color:#FDFBED; padding-top:5px">
            <div style="width:95%; height:25px; padding-top:5px; border:1px solid #0C92AB; text-align:left; padding-left:50px; background:url(<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/button_ucenter.gif)">·&nbsp;<a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/usercenter.html" class="a1">修改个人信息</a></div>
            <div style="width:50px; height:5px; font-size:0px"></div>
            <div style="width:95%; height:25px; padding-top:5px; border:1px solid #0C92AB; text-align:left; padding-left:50px; background:url(<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/button_ucenter.gif)">·&nbsp;<a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/usercenterchangepwd.html" class="a1">修改登录密码</a></div>
            <div style="width:50px; height:5px; font-size:0px"></div>            
            <div style="width:95%; height:25px; padding-top:5px; border:1px solid #0C92AB; text-align:left; padding-left:50px; background:url(<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/button_ucenter.gif)">·&nbsp;<a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/usercenterorder.html" class="a1">我的订单</a></div>
            <div style="width:50px; height:5px; font-size:0px"></div>  
            <div style="width:95%; height:25px; padding-top:5px; border:1px solid #0C92AB; text-align:left; padding-left:50px; background:url(<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/button_ucenter.gif)">·&nbsp;<a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/userfeedback.html" class="a1">意见反馈</a></div>
            <div style="width:50px; height:5px; font-size:0px"></div>  
            <div style="width:95%; height:25px; padding-top:5px; border:1px solid #0C92AB; text-align:left; padding-left:50px; background:url(<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/button_ucenter.gif)">·&nbsp;<a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/qq.html" class="a1">QQ在线咨询</a></div>
            <div style="width:50px; height:5px; font-size:0px"></div> 
            <div style="width:95%; height:25px; padding-top:5px; border:1px solid #0C92AB; text-align:left; padding-left:50px; background:url(<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/button_ucenter.gif)">·&nbsp;<a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/tel.html" class="a1">服务热线</a></div>                                               
        </div>
        
        <div style="width:720px; height:100%; float:right">
            <div style="width:100%; height:22px; background-color:#FFC976; border-top:1px solid #FF7300; text-align:left; padding-top:4px; padding-left:20px">
                修改个人信息
            </div>
            <form name="form_userinfo" method="post" action="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/usercenter.html" onsubmit="return chkChangeUserinfo(this)">
            <div style="width:100%; height:300px; text-align:left; padding-top:5px; padding-left:50px">
                  
                                     真实姓名：<input type="text" name="truename" size="50" class="input" value="<?php echo $this->_tpl_vars['user'][0]['truename']; ?>
"/><br /><br />
                                     性别：&nbsp;&nbsp;&nbsp;&nbsp;<select name="sex">
                                    <option value="男" <?php if ($this->_tpl_vars['user'][0]['sex'] == "男"): ?> selected <?php endif; ?>>男</option>     
                                    <option value="女" <?php if ($this->_tpl_vars['user'][0]['sex'] == "女"): ?> selected <?php endif; ?>>女</option>
                                </select>     
                                     <br /><br />
                                     联系电话：<input type="text" name="tel" size="50" class="input" value="<?php echo $this->_tpl_vars['user'][0]['tel']; ?>
"/><br /><br />
               E-mail：&nbsp;&nbsp;<input type="text" name="email" size="50" class="input" value="<?php echo $this->_tpl_vars['user'][0]['email']; ?>
"/><br /><br />
               QQ号码：&nbsp;&nbsp;<input type="text" name="qq" size="50" class="input" value="<?php echo $this->_tpl_vars['user'][0]['qq']; ?>
"/><br /><br />
                                   邮编：&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="yb" size="50" class="input" value="<?php echo $this->_tpl_vars['user'][0]['yb']; ?>
"/><br /><br />
                                 联系地址：<input type="text" name="address" size="50" class="input" value="<?php echo $this->_tpl_vars['user'][0]['address']; ?>
"/><br /><br />

                  <input type="submit" value="更改" />&nbsp;&nbsp;<input type="reset" value="重置" />
            </div> 
            </form>       
        </div>            
    
    </div>
    <br />   
</div>
       