<?php /* Smarty version 2.6.19, created on 2009-06-08 05:39:37
         compiled from admin-listpub.phtml */ ?>
    <div style="width:98%; height:25px; text-align:left"><input type="button" value="添加出版社类别信息"  onclick="window.location.href='<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/admin-pub.php'" />&nbsp;&nbsp;<input type="button" value="浏览出版社类别信息" onclick="window.location.href='<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/admin-listpub.php'"/></div>    
    <div style="width:98%;  border:1px solid #006D84">
        <div style="width:100%; height:25px; border:1px solid #FFFFFF; background-color:#4995A8; text-align:left; padding-top:5px; padding-left:20px; color:#FFFFFF">
            <li style="display:inline; float:left"><strong>浏览出版社类别信息</strong></li>
        </div>
        
        <div style="width:100%; background-color:#CCCCCC">
            <div style="width:20%; height:16px; float:left; padding-top:3px; border-right:1px solid #FFFFFF">
               出版社logo图片
            </div> 
                       
             <div style="width:50%; height:16px; float:left; padding-top:3px; border-right:1px solid #FFFFFF">
               出版社名称
            </div> 
            
             <div style="width:20%; height:16px; float:left; padding-top:3px; border-right:1px solid #FFFFFF">
               添加时间
            </div>  
                         
             <div style="width:10%; height:16px; float:left; padding-top:3px">
               操作
            </div>       
        </div>  
        <?php unset($this->_sections['pID']);
$this->_sections['pID']['name'] = 'pID';
$this->_sections['pID']['loop'] = is_array($_loop=$this->_tpl_vars['pubs']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['pID']['show'] = true;
$this->_sections['pID']['max'] = $this->_sections['pID']['loop'];
$this->_sections['pID']['step'] = 1;
$this->_sections['pID']['start'] = $this->_sections['pID']['step'] > 0 ? 0 : $this->_sections['pID']['loop']-1;
if ($this->_sections['pID']['show']) {
    $this->_sections['pID']['total'] = $this->_sections['pID']['loop'];
    if ($this->_sections['pID']['total'] == 0)
        $this->_sections['pID']['show'] = false;
} else
    $this->_sections['pID']['total'] = 0;
if ($this->_sections['pID']['show']):

            for ($this->_sections['pID']['index'] = $this->_sections['pID']['start'], $this->_sections['pID']['iteration'] = 1;
                 $this->_sections['pID']['iteration'] <= $this->_sections['pID']['total'];
                 $this->_sections['pID']['index'] += $this->_sections['pID']['step'], $this->_sections['pID']['iteration']++):
$this->_sections['pID']['rownum'] = $this->_sections['pID']['iteration'];
$this->_sections['pID']['index_prev'] = $this->_sections['pID']['index'] - $this->_sections['pID']['step'];
$this->_sections['pID']['index_next'] = $this->_sections['pID']['index'] + $this->_sections['pID']['step'];
$this->_sections['pID']['first']      = ($this->_sections['pID']['iteration'] == 1);
$this->_sections['pID']['last']       = ($this->_sections['pID']['iteration'] == $this->_sections['pID']['total']);
?>
        <div style="width:100%; border-top:1px solid #006D84">
             <div style="width:20%; height:20px; float:left; padding-top:4px; border-right:1px solid #006D84">
               <img src="<?php echo $this->_tpl_vars['system'][0]['bookimgurl']; ?>
/<?php echo $this->_reg_objects['util'][0]->unHtml($this->_tpl_vars['pubs'][$this->_sections['pID']['index']]['pubimg']);?>
"  width="22" height="22"/>
            </div> 
                       
            <div style="width:50%; height:20px; float:left; padding-top:4px; border-right:1px solid #006D84; text-align:left; padding-left:20px">
               <?php echo $this->_reg_objects['util'][0]->unHtml($this->_tpl_vars['pubs'][$this->_sections['pID']['index']]['pubname']);?>

            </div>            

            <div style="width:20%; height:20px; float:left; padding-top:4px; border-right:1px solid #006D84">
               <?php echo $this->_reg_objects['util'][0]->unHtml($this->_tpl_vars['pubs'][$this->_sections['pID']['index']]['addtime']);?>

            </div>  
                         
            <div style="width:10%; height:20px; float:left; padding-top:2px">
                <a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/admin-listpub.php?f=edit&id=<?php echo $this->_tpl_vars['pubs'][$this->_sections['pID']['index']]['id']; ?>
"><img src="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/edit.gif" border="0"/></a>&nbsp;<a href="javascript:if(window.confirm('确定删除？')==true){window.location.href='<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/admin-listpub.php?f=del&id=<?php echo $this->_tpl_vars['pubs'][$this->_sections['pID']['index']]['id']; ?>
';}"><img src="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/del.gif" border="0"/></a>
            </div>       
        </div>          
        <?php endfor; endif; ?>
    </div>
    <br />
    <?php if ($this->_tpl_vars['isShow'] == 'T'): ?>
    <div style="width:98%;  border:1px solid #006D84">
        <div style="width:100%; height:25px; border:1px solid #FFFFFF; background-color:#4995A8; text-align:left; padding-top:5px; padding-left:20px; color:#FFFFFF">
            <li style="display:inline; float:left"><strong>更改出版社类别信息</strong></li>
        </div>
        
        <div style="width:100%; text-align:left; padding-top:5px; padding-left:20px; padding-left:70px">
         
          <form name="form_pub" method="post" action="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/admin-listpub.php" onsubmit="return chkInputPub(this)" enctype="multipart/form-data">
            <div style="width:100%; text-align:left; padding-top:5px; padding-left:50px">
                  出版社名称：&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="pubname" size="30" class="input" value="<?php echo $this->_tpl_vars['pub'][0]['pubname']; ?>
"/><br /><br /> 
       出版社logo图片：<input type="file" name="pubimg" size="30" class="input" /> <br /><br />     
                  <input type="hidden" name="f" value="edit" /> 
                  <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['pub'][0]['id']; ?>
" />       
                <input type="submit" value="更改" />&nbsp;&nbsp;<input type="reset" value="重置" />
            </div> 
            </form>  
        
    
        </div>    
    </div>
    <?php endif; ?>
    <br />
    