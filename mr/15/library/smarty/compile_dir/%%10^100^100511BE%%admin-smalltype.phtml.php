<?php /* Smarty version 2.6.19, created on 2009-06-08 03:53:20
         compiled from admin-smalltype.phtml */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'admin-smalltype.phtml', 14, false),)), $this); ?>
    <div style="width:98%; height:25px; text-align:left"><input type="button" value="���ͼ��С����Ϣ"  onclick="window.location.href='<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/admin-smalltype.php'" />&nbsp;&nbsp;<input type="button" value="���ͼ��С����Ϣ" onclick="window.location.href='<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/admin-listsmalltype.php'"/></div>    
    <div style="width:98%;  border:1px solid #006D84">
        <div style="width:100%; height:25px; border:1px solid #FFFFFF; background-color:#4995A8; text-align:left; padding-top:5px; padding-left:20px; color:#FFFFFF">
            <li style="display:inline; float:left"><strong>���ͼ��С����Ϣ</strong></li>
        </div>
        
        <div style="width:100%; text-align:left; padding-top:5px; padding-left:20px; padding-left:70px">
         
          <form name="form_addsmalltype" method="post" action="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/admin-smalltype.php" onsubmit="return chkInputSmalltype(this)">
            <div style="width:100%; text-align:left; padding-top:5px; padding-left:50px">
                  С�����ƣ�<input type="text" name="typename" size="30" class="input"/><br /><br /> 
                  �������ࣺ<select name="bigtypeid">
                     <option value="">-��ѡ��-</option>
                     <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['arrayBtypeOption']), $this);?>

                  </select><br /><br /> 
                <input type="submit" value="���" />&nbsp;&nbsp;<input type="reset" value="����" />
            </div> 
            </form>  
        
    
        </div>    
    </div>