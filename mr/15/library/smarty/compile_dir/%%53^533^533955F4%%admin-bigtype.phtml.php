<?php /* Smarty version 2.6.19, created on 2009-06-08 03:34:38
         compiled from admin-bigtype.phtml */ ?>
    <div style="width:98%; height:25px; text-align:left"><input type="button" value="添加图书大类信息"  onclick="window.location.href='<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/admin-bigtype.php'" />&nbsp;&nbsp;<input type="button" value="浏览图书大类信息" onclick="window.location.href='<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/admin-listbigtype.php'"/></div>    
    <div style="width:98%;  border:1px solid #006D84">
        <div style="width:100%; height:25px; border:1px solid #FFFFFF; background-color:#4995A8; text-align:left; padding-top:5px; padding-left:20px; color:#FFFFFF">
            <li style="display:inline; float:left"><strong>添加图书大类信息</strong></li>
        </div>
        
        <div style="width:100%; text-align:left; padding-top:5px; padding-left:20px; padding-left:70px">
         
          <form name="form_addbigtype" method="post" action="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/admin-bigtype.php" onsubmit="return chkInputBigtype(this)">
            <div style="width:100%; text-align:left; padding-top:5px; padding-left:50px">
                  大类名称：<input type="text" name="typename" size="30" class="input"/><br /><br /> 
                <input type="submit" value="添加" />&nbsp;&nbsp;<input type="reset" value="重置" />
            </div> 
            </form>  
        
    
        </div>    
    </div>