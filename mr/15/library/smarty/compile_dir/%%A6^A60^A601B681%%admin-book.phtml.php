<?php /* Smarty version 2.6.19, created on 2009-06-08 11:54:26
         compiled from admin-book.phtml */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'admin-book.phtml', 14, false),)), $this); ?>
    <div style="width:98%; height:25px; text-align:left"><input type="button" value="���ͼ����Ϣ"  onclick="window.location.href='<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/admin-book.php'" />&nbsp;&nbsp;<input type="button" value="���ͼ����Ϣ" onclick="window.location.href='<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/admin-listbook.php'"/>&nbsp;&nbsp;<input type="button" value="��ѯͼ����Ϣ" onclick="window.location.href='<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/admin-searchbook.php'"/></div>    
    <div style="width:98%;  border:1px solid #006D84">
        <div style="width:100%; height:25px; border:1px solid #FFFFFF; background-color:#4995A8; text-align:left; padding-top:5px; padding-left:20px; color:#FFFFFF">
            <li style="display:inline; float:left"><strong><?php if ($this->_tpl_vars['isEdit'] == 'T'): ?>����ͼ����Ϣ<?php else: ?>���ͼ����Ϣ<?php endif; ?></strong></li>
        </div>
        
        <div style="width:100%; text-align:left; padding-top:5px; padding-left:20px; padding-left:70px">
         
          <form name="form_addbook" method="post" action="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/admin-book.php" onsubmit="return chkInputBook(this)" enctype="multipart/form-data">
            <div style="width:100%; text-align:left; padding-top:5px; padding-left:10px">
                  ͼ�����ƣ�<input type="text" name="bookname" size="78" class="input" value="<?php echo $this->_tpl_vars['book'][0]['bookname']; ?>
"/><br /><br /> 
                  ����С�ࣺ<select name="smalltypeid">
                     <option value="">-��ѡ��-</option>
                     <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['arrayStypeOption'],'selected' => $this->_tpl_vars['book'][0]['smalltypeid']), $this);?>

                  </select>&nbsp;&nbsp;&nbsp;&nbsp;
      ������ ��<select name="pubid">
                     <option value="">-��ѡ��-</option>
                     <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['arrayPubOption'],'selected' => $this->_tpl_vars['book'][0]['pubid']), $this);?>

                  </select>  <br /><br />        
ҳ���� &nbsp;&nbsp;&nbsp;<input type="text" name="page" size="30" class="input" value="<?php echo $this->_tpl_vars['book'][0]['page']; ?>
"/>��ҳ��&nbsp;&nbsp; 
������ &nbsp;&nbsp;&nbsp;<input type="text" name="zs" size="30" class="input" value="<?php echo $this->_tpl_vars['book'][0]['zs']; ?>
"/>��ǧ�֣�<br /><br />          
ISBN��&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="isbn" size="30" class="input" value="<?php echo $this->_tpl_vars['book'][0]['isbn']; ?>
"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
 ��Σ� &nbsp;&nbsp;&nbsp;<input type="text" name="bc" size="30" class="input" value="<?php echo $this->_tpl_vars['book'][0]['bc']; ?>
"/><br /><br />                
 ���ߣ� &nbsp;&nbsp;&nbsp;<input type="text" name="writer" size="30" class="input" value="<?php echo $this->_tpl_vars['book'][0]['writer']; ?>
"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 

����ʱ�䣺<select name="pyear">
             <option value='' selected>-��ѡ��-</option> 
             <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['arrayYear'],'selected' => $this->_tpl_vars['pyear']), $this);?>

       </select>&nbsp;��        
       <select name="pmonth">
             <option value='' selected>-��ѡ��-</option>
             <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['arrayMonth'],'selected' => $this->_tpl_vars['pmonth']), $this);?>
 
       </select>&nbsp;��&nbsp;<br /><br />                
ԭ�ۣ�&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="oldprice" size="30" class="input" value="<?php echo $this->_tpl_vars['book'][0]['oldprice']; ?>
"/>��Ԫ��&nbsp;&nbsp;
 ��Ա�ۣ� &nbsp;<input type="text" name="newprice" size="30" class="input" value="<?php echo $this->_tpl_vars['book'][0]['newprice']; ?>
"/>��Ԫ��<br /><br />                
ͼ���Σ�<select name="bookcc">
             <option value='' selected>-��ѡ��-</option>
             <option value='0' <?php if ($this->_tpl_vars['book'][0]['bookcc'] == 0 && $this->_tpl_vars['book'][0]['bookcc'] != ''): ?>selected<?php endif; ?> >��������</option>
             <option value='1' <?php if ($this->_tpl_vars['book'][0]['bookcc'] == 1): ?>selected<?php endif; ?>>��߱ر�</option>
             <option value='2' <?php if ($this->_tpl_vars['book'][0]['bookcc'] == 2): ?>selected<?php endif; ?>>�߼�����</option>
       </select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
���ͼ��ID�ţ�&nbsp;&nbsp;<input type="text" name="bookids" size="10" class="input" value="<?php echo $this->_tpl_vars['book'][0]['bookids']; ?>
"/>�����ID����@�ָ�磺1@2@��<br /><br />                    
ͼ����棺<input type="file" name="bookimg" size="70" class="input"/><br /><br />                 
ͼ��Ŀ¼��<textarea name="directory" cols="80" rows="6" class="input" ><?php echo $this->_tpl_vars['book'][0]['directory']; ?>
</textarea>   <br /><br />             
���ݼ�飺<textarea name="about" cols="80" rows="6" class="input"><?php echo $this->_tpl_vars['book'][0]['about']; ?>
</textarea>   <br /><br />                             
���� ��<input type="checkbox" name="isnew" value="1" <?php if ($this->_tpl_vars['book'][0]['isnew'] == 1): ?>checked<?php endif; ?>/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;�ؼ� ��<input type="checkbox" name="issepprice" value="1" <?php if ($this->_tpl_vars['book'][0]['issepprice'] == 1): ?>checked<?php endif; ?>/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;���� ��<input type="checkbox" name="ishotsell" value="1" <?php if ($this->_tpl_vars['book'][0]['ishotsell'] == 1): ?>checked<?php endif; ?>/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;���飺<input type="checkbox" name="isterm" value="1" <?php if ($this->_tpl_vars['book'][0]['isterm'] == 1): ?>checked<?php endif; ?>/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;����ͼ���Ƽ���<input type="checkbox" name="ismrbooktj" value="1" <?php if ($this->_tpl_vars['book'][0]['ismrbooktj'] == 1): ?>checked<?php endif; ?>/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;�л���<input type="checkbox" name="ishave" value="1" <?php if ($this->_tpl_vars['book'][0]['ishave'] == 1): ?>checked<?php endif; ?>/>                           
               <input type="hidden" name="change" value="<?php if ($this->_tpl_vars['isEdit'] == 'T'): ?>T<?php else: ?>F<?php endif; ?>"/>
               <?php if ($this->_tpl_vars['isEdit'] == 'T'): ?>
               <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['book'][0]['id']; ?>
">
               <?php endif; ?>
               <br /><br />
                <input type="submit" value="<?php if ($this->_tpl_vars['isEdit'] == 'T'): ?>����<?php else: ?>���<?php endif; ?>" />&nbsp;&nbsp;<input type="reset" value="����" />
            </div>
            
             
            </form>  
        
    
        </div>    
    </div>