<?php /* Smarty version 2.6.19, created on 2009-06-08 04:54:41
         compiled from admin-listsmalltype.phtml */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'admin-listsmalltype.phtml', 17, false),)), $this); ?>
    <div style="width:98%; height:25px; text-align:left"><input type="button" value="添加图书小类信息"  onclick="window.location.href='<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/admin-smalltype.php'" />&nbsp;&nbsp;<input type="button" value="浏览图书小类信息" onclick="window.location.href='<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/admin-listsmalltype.php'"/></div>    
     <br />
    <?php if ($this->_tpl_vars['isShow'] == 'T'): ?>
    <div style="width:98%;  border:1px solid #006D84">
        <div style="width:100%; height:25px; border:1px solid #FFFFFF; background-color:#4995A8; text-align:left; padding-top:5px; padding-left:20px; color:#FFFFFF">
            <li style="display:inline; float:left"><strong>更改图书小类信息</strong></li>
        </div>
        
        <div style="width:100%; text-align:left; padding-top:5px; padding-left:20px; padding-left:70px">
         
          <form name="form_editsmalltype" method="post" action="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/admin-listsmalltype.php" onsubmit="return chkInputSmalltype(this)">
            <div style="width:100%; text-align:left; padding-top:5px; padding-left:50px">
                  小类名称：<input type="text" name="typename" size="30" class="input" value="<?php echo $this->_tpl_vars['smalltype'][0]['typename']; ?>
"/><br /><br />
                  <input type="hidden" name="f" value="edit" /> 
                         所属大类：<select name="bigtypeid">
                     <option value="">-请选择-</option>
                     <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['arrayBtypeOption'],'selected' => $this->_tpl_vars['smalltype'][0]['bigtypeid']), $this);?>

                  </select><br /><br />            
                  <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['smalltype'][0]['id']; ?>
" />
                   
                <input type="submit" value="更改" />&nbsp;&nbsp;<input type="reset" value="重置" />
            </div> 
            </form>  
        
    
        </div>    
    </div>
    <br />
    <?php endif; ?>  
   
   
    <div style="width:98%;  border:1px solid #006D84">
        <div style="width:100%; height:25px; border:1px solid #FFFFFF; background-color:#4995A8; text-align:left; padding-top:5px; padding-left:20px; color:#FFFFFF">
            <li style="display:inline; float:left"><strong>浏览图书小类信息</strong></li>
        </div>
        
        <div style="width:100%; background-color:#CCCCCC">
            <div style="width:50%; height:16px; float:left; padding-top:3px; border-right:1px solid #FFFFFF">
               类别名称
            </div>  
                      
             <div style="width:20%; height:16px; float:left; padding-top:3px; border-right:1px solid #FFFFFF">
               所属大类
            </div>
             
             <div style="width:20%; height:16px; float:left; padding-top:3px; border-right:1px solid #FFFFFF">
               添加时间
            </div>  
                         
             <div style="width:10%; height:16px; float:left; padding-top:3px">
               操作
            </div>       
        </div>  
        <?php unset($this->_sections['tID']);
$this->_sections['tID']['name'] = 'tID';
$this->_sections['tID']['loop'] = is_array($_loop=$this->_tpl_vars['smalltypes']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['tID']['show'] = true;
$this->_sections['tID']['max'] = $this->_sections['tID']['loop'];
$this->_sections['tID']['step'] = 1;
$this->_sections['tID']['start'] = $this->_sections['tID']['step'] > 0 ? 0 : $this->_sections['tID']['loop']-1;
if ($this->_sections['tID']['show']) {
    $this->_sections['tID']['total'] = $this->_sections['tID']['loop'];
    if ($this->_sections['tID']['total'] == 0)
        $this->_sections['tID']['show'] = false;
} else
    $this->_sections['tID']['total'] = 0;
if ($this->_sections['tID']['show']):

            for ($this->_sections['tID']['index'] = $this->_sections['tID']['start'], $this->_sections['tID']['iteration'] = 1;
                 $this->_sections['tID']['iteration'] <= $this->_sections['tID']['total'];
                 $this->_sections['tID']['index'] += $this->_sections['tID']['step'], $this->_sections['tID']['iteration']++):
$this->_sections['tID']['rownum'] = $this->_sections['tID']['iteration'];
$this->_sections['tID']['index_prev'] = $this->_sections['tID']['index'] - $this->_sections['tID']['step'];
$this->_sections['tID']['index_next'] = $this->_sections['tID']['index'] + $this->_sections['tID']['step'];
$this->_sections['tID']['first']      = ($this->_sections['tID']['iteration'] == 1);
$this->_sections['tID']['last']       = ($this->_sections['tID']['iteration'] == $this->_sections['tID']['total']);
?>
        <div style="width:100%; border-top:1px solid #006D84">
            <div style="width:50%; height:20px; float:left; padding-top:4px; border-right:1px solid #006D84; text-align:left; padding-left:20px">
               <?php echo $this->_reg_objects['util'][0]->unHtml($this->_tpl_vars['smalltypes'][$this->_sections['tID']['index']]['stypename']);?>

            </div> 
                       
            <div style="width:20%; height:20px; float:left; padding-top:4px; border-right:1px solid #006D84; padding-left:10px; text-align:left">
               <?php echo $this->_reg_objects['util'][0]->unHtml($this->_tpl_vars['smalltypes'][$this->_sections['tID']['index']]['btypename']);?>

            </div> 
            
            <div style="width:20%; height:20px; float:left; padding-top:4px; border-right:1px solid #006D84">
               <?php echo $this->_reg_objects['util'][0]->unHtml($this->_tpl_vars['smalltypes'][$this->_sections['tID']['index']]['addtime']);?>

            </div>  
                         
            <div style="width:10%; height:20px; float:left; padding-top:2px">
                <a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/admin-listsmalltype.php?f=edit&id=<?php echo $this->_tpl_vars['smalltypes'][$this->_sections['tID']['index']]['id']; ?>
"><img src="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/edit.gif" border="0"/></a>&nbsp;<a href="javascript:if(window.confirm('确定删除？')==true){window.location.href='<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/admin-listsmalltype.php?f=del&id=<?php echo $this->_tpl_vars['smalltypes'][$this->_sections['tID']['index']]['id']; ?>
';}"><img src="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/del.gif" border="0"/></a>
            </div>       
        </div>          
        <?php endfor; endif; ?>
    </div>

    <br />
    