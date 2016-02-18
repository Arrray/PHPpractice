<?php /* Smarty version 2.6.19, created on 2009-06-06 07:23:36
         compiled from admin-default.phtml */ ?>
    
    <div style="width:98%;  border:1px solid #006D84">
        <div style="width:100%; height:25px; border:1px solid #FFFFFF; background-color:#4995A8; text-align:left; padding-top:5px; padding-left:20px; color:#FFFFFF">
            <li style="display:inline; float:left"><strong>系统信息设置</strong></li>
        </div>
        <form name="form_systeminfo" method="post" action="admin-default.php" onsubmit="return chkinputsysteminfo(this)">
        <div style="width:100%; height:120px; text-align:left; padding-top:5px; padding-left:20px; padding-left:70px">
        <br />
            商城ID：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="merid" size="60" class="input" value="<?php echo $this->_tpl_vars['system'][0]['merid']; ?>
"/><br /><br />
           企业账号：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="meracct" size="60" class="input" value="<?php echo $this->_tpl_vars['system'][0]['meracct']; ?>
"/><br /><br />
           版权：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="bq" size="60" class="input" value="<?php echo $this->_tpl_vars['system'][0]['bq']; ?>
"/><br /><br />      
           详细地址：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="address" size="60" class="input" value="<?php echo $this->_tpl_vars['system'][0]['address']; ?>
"/><br /><br /> 
           联系电话：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="tel" size="60" class="input" value="<?php echo $this->_tpl_vars['system'][0]['tel']; ?>
"/><br /><br /> 
           传真号码：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="cz" size="60" class="input" value="<?php echo $this->_tpl_vars['system'][0]['cz']; ?>
"/><br /><br />        
    E-mail：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="email" size="60" class="input" value="<?php echo $this->_tpl_vars['system'][0]['email']; ?>
"/><br /><br />  
    QQ号码：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="qq" size="60" class="input" value="<?php echo $this->_tpl_vars['system'][0]['qq']; ?>
"/><br /><br />    
    ICP备案：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="icp" size="60" class="input" value="<?php echo $this->_tpl_vars['system'][0]['icp']; ?>
"/><br /><br />
    图书封面地址：&nbsp;<input type="text" name="bookimgurl" size="60" class="input" value="<?php echo $this->_tpl_vars['system'][0]['bookimgurl']; ?>
"/><br /><br />   
    广告地址：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="ggurl" size="60" class="input" value="<?php echo $this->_tpl_vars['system'][0]['ggurl']; ?>
"/><br /><br />
    试读下载地址：&nbsp;<input type="text" name="readurl" size="60" class="input" value="<?php echo $this->_tpl_vars['system'][0]['readurl']; ?>
"/><br /><br />         
    <input type="submit" value="设置" />&nbsp;&nbsp;<input type="reset" value="重置" />
    <br />  <br />  
        </div>
        </form>        
    </div>