<?php /* Smarty version 2.6.19, created on 2009-06-08 11:54:26
         compiled from admin-book.phtml */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'admin-book.phtml', 14, false),)), $this); ?>
    <div style="width:98%; height:25px; text-align:left"><input type="button" value="添加图书信息"  onclick="window.location.href='<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/admin-book.php'" />&nbsp;&nbsp;<input type="button" value="浏览图书信息" onclick="window.location.href='<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/admin-listbook.php'"/>&nbsp;&nbsp;<input type="button" value="查询图书信息" onclick="window.location.href='<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/admin-searchbook.php'"/></div>    
    <div style="width:98%;  border:1px solid #006D84">
        <div style="width:100%; height:25px; border:1px solid #FFFFFF; background-color:#4995A8; text-align:left; padding-top:5px; padding-left:20px; color:#FFFFFF">
            <li style="display:inline; float:left"><strong><?php if ($this->_tpl_vars['isEdit'] == 'T'): ?>更改图书信息<?php else: ?>添加图书信息<?php endif; ?></strong></li>
        </div>
        
        <div style="width:100%; text-align:left; padding-top:5px; padding-left:20px; padding-left:70px">
         
          <form name="form_addbook" method="post" action="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/admin-book.php" onsubmit="return chkInputBook(this)" enctype="multipart/form-data">
            <div style="width:100%; text-align:left; padding-top:5px; padding-left:10px">
                  图书名称：<input type="text" name="bookname" size="78" class="input" value="<?php echo $this->_tpl_vars['book'][0]['bookname']; ?>
"/><br /><br /> 
                  所属小类：<select name="smalltypeid">
                     <option value="">-请选择-</option>
                     <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['arrayStypeOption'],'selected' => $this->_tpl_vars['book'][0]['smalltypeid']), $this);?>

                  </select>&nbsp;&nbsp;&nbsp;&nbsp;
      出版社 ：<select name="pubid">
                     <option value="">-请选择-</option>
                     <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['arrayPubOption'],'selected' => $this->_tpl_vars['book'][0]['pubid']), $this);?>

                  </select>  <br /><br />        
页数： &nbsp;&nbsp;&nbsp;<input type="text" name="page" size="30" class="input" value="<?php echo $this->_tpl_vars['book'][0]['page']; ?>
"/>（页）&nbsp;&nbsp; 
字数： &nbsp;&nbsp;&nbsp;<input type="text" name="zs" size="30" class="input" value="<?php echo $this->_tpl_vars['book'][0]['zs']; ?>
"/>（千字）<br /><br />          
ISBN：&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="isbn" size="30" class="input" value="<?php echo $this->_tpl_vars['book'][0]['isbn']; ?>
"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
 版次： &nbsp;&nbsp;&nbsp;<input type="text" name="bc" size="30" class="input" value="<?php echo $this->_tpl_vars['book'][0]['bc']; ?>
"/><br /><br />                
 作者： &nbsp;&nbsp;&nbsp;<input type="text" name="writer" size="30" class="input" value="<?php echo $this->_tpl_vars['book'][0]['writer']; ?>
"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 

出版时间：<select name="pyear">
             <option value='' selected>-请选择-</option> 
             <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['arrayYear'],'selected' => $this->_tpl_vars['pyear']), $this);?>

       </select>&nbsp;年        
       <select name="pmonth">
             <option value='' selected>-请选择-</option>
             <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['arrayMonth'],'selected' => $this->_tpl_vars['pmonth']), $this);?>
 
       </select>&nbsp;月&nbsp;<br /><br />                
原价：&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="oldprice" size="30" class="input" value="<?php echo $this->_tpl_vars['book'][0]['oldprice']; ?>
"/>（元）&nbsp;&nbsp;
 会员价： &nbsp;<input type="text" name="newprice" size="30" class="input" value="<?php echo $this->_tpl_vars['book'][0]['newprice']; ?>
"/>（元）<br /><br />                
图书层次：<select name="bookcc">
             <option value='' selected>-请选择-</option>
             <option value='0' <?php if ($this->_tpl_vars['book'][0]['bookcc'] == 0 && $this->_tpl_vars['book'][0]['bookcc'] != ''): ?>selected<?php endif; ?> >初级入门</option>
             <option value='1' <?php if ($this->_tpl_vars['book'][0]['bookcc'] == 1): ?>selected<?php endif; ?>>提高必备</option>
             <option value='2' <?php if ($this->_tpl_vars['book'][0]['bookcc'] == 2): ?>selected<?php endif; ?>>高级导向</option>
       </select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
组合图书ID号：&nbsp;&nbsp;<input type="text" name="bookids" size="10" class="input" value="<?php echo $this->_tpl_vars['book'][0]['bookids']; ?>
"/>（多个ID号用@分割，如：1@2@）<br /><br />                    
图书封面：<input type="file" name="bookimg" size="70" class="input"/><br /><br />                 
图书目录：<textarea name="directory" cols="80" rows="6" class="input" ><?php echo $this->_tpl_vars['book'][0]['directory']; ?>
</textarea>   <br /><br />             
内容简介：<textarea name="about" cols="80" rows="6" class="input"><?php echo $this->_tpl_vars['book'][0]['about']; ?>
</textarea>   <br /><br />                             
新书 ：<input type="checkbox" name="isnew" value="1" <?php if ($this->_tpl_vars['book'][0]['isnew'] == 1): ?>checked<?php endif; ?>/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;特价 ：<input type="checkbox" name="issepprice" value="1" <?php if ($this->_tpl_vars['book'][0]['issepprice'] == 1): ?>checked<?php endif; ?>/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;热卖 ：<input type="checkbox" name="ishotsell" value="1" <?php if ($this->_tpl_vars['book'][0]['ishotsell'] == 1): ?>checked<?php endif; ?>/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;期书：<input type="checkbox" name="isterm" value="1" <?php if ($this->_tpl_vars['book'][0]['isterm'] == 1): ?>checked<?php endif; ?>/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;明日图书推荐：<input type="checkbox" name="ismrbooktj" value="1" <?php if ($this->_tpl_vars['book'][0]['ismrbooktj'] == 1): ?>checked<?php endif; ?>/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;有货：<input type="checkbox" name="ishave" value="1" <?php if ($this->_tpl_vars['book'][0]['ishave'] == 1): ?>checked<?php endif; ?>/>                           
               <input type="hidden" name="change" value="<?php if ($this->_tpl_vars['isEdit'] == 'T'): ?>T<?php else: ?>F<?php endif; ?>"/>
               <?php if ($this->_tpl_vars['isEdit'] == 'T'): ?>
               <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['book'][0]['id']; ?>
">
               <?php endif; ?>
               <br /><br />
                <input type="submit" value="<?php if ($this->_tpl_vars['isEdit'] == 'T'): ?>更改<?php else: ?>添加<?php endif; ?>" />&nbsp;&nbsp;<input type="reset" value="重置" />
            </div>
            
             
            </form>  
        
    
        </div>    
    </div>