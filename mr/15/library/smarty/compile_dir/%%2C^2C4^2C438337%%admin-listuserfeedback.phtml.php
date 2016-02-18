<?php /* Smarty version 2.6.19, created on 2009-06-09 03:35:37
         compiled from admin-listuserfeedback.phtml */ ?>
    
    <div style="width:98%;  border:1px solid #006D84">
        <div style="width:100%; height:25px; border:1px solid #FFFFFF; background-color:#4995A8; text-align:left; padding-top:5px; padding-left:20px; color:#FFFFFF">
            <li style="display:inline; float:left"><strong>浏览用户反馈信息</strong></li>
        </div>
        
        <div style="width:100%; background-color:#CCCCCC">
            <div style="width:50%; height:16px; float:left; padding-top:3px; border-right:1px solid #FFFFFF">
              主题
            </div> 
                       
             <div style="width:20%; height:16px; float:left; padding-top:3px; border-right:1px solid #FFFFFF">
               用户
            </div> 
            
             <div style="width:20%; height:16px; float:left; padding-top:3px; border-right:1px solid #FFFFFF">
               发表时间
            </div>  
                         
             <div style="width:10%; height:16px; float:left; padding-top:3px">
               操作
            </div>       
        </div>  
        <?php unset($this->_sections['fID']);
$this->_sections['fID']['name'] = 'fID';
$this->_sections['fID']['loop'] = is_array($_loop=$this->_tpl_vars['feedbacks']['data']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['fID']['show'] = true;
$this->_sections['fID']['max'] = $this->_sections['fID']['loop'];
$this->_sections['fID']['step'] = 1;
$this->_sections['fID']['start'] = $this->_sections['fID']['step'] > 0 ? 0 : $this->_sections['fID']['loop']-1;
if ($this->_sections['fID']['show']) {
    $this->_sections['fID']['total'] = $this->_sections['fID']['loop'];
    if ($this->_sections['fID']['total'] == 0)
        $this->_sections['fID']['show'] = false;
} else
    $this->_sections['fID']['total'] = 0;
if ($this->_sections['fID']['show']):

            for ($this->_sections['fID']['index'] = $this->_sections['fID']['start'], $this->_sections['fID']['iteration'] = 1;
                 $this->_sections['fID']['iteration'] <= $this->_sections['fID']['total'];
                 $this->_sections['fID']['index'] += $this->_sections['fID']['step'], $this->_sections['fID']['iteration']++):
$this->_sections['fID']['rownum'] = $this->_sections['fID']['iteration'];
$this->_sections['fID']['index_prev'] = $this->_sections['fID']['index'] - $this->_sections['fID']['step'];
$this->_sections['fID']['index_next'] = $this->_sections['fID']['index'] + $this->_sections['fID']['step'];
$this->_sections['fID']['first']      = ($this->_sections['fID']['iteration'] == 1);
$this->_sections['fID']['last']       = ($this->_sections['fID']['iteration'] == $this->_sections['fID']['total']);
?>
        <div style="width:100%; border-top:1px solid #006D84">
             <div style="width:50%; height:20px; float:left; padding-top:4px; border-right:1px solid #006D84; text-align:left; padding-left:10px">
               <?php echo $this->_reg_objects['util'][0]->unHtml($this->_tpl_vars['feedbacks']['data'][$this->_sections['fID']['index']]['title']);?>

            </div> 
                       
            <div style="width:20%; height:20px; float:left; padding-top:4px; border-right:1px solid #006D84">
               <?php echo $this->_reg_objects['util'][0]->unHtml($this->_tpl_vars['feedbacks']['data'][$this->_sections['fID']['index']]['usernc']);?>

            </div>            

            <div style="width:20%; height:20px; float:left; padding-top:4px; border-right:1px solid #006D84">
               <?php echo $this->_tpl_vars['feedbacks']['data'][$this->_sections['fID']['index']]['addtime']; ?>

            </div>  
                         
            <div style="width:10%; height:20px; float:left; padding-top:2px">
                <a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/admin-listuserfeedback.php?f=edit&id=<?php echo $this->_tpl_vars['feedbacks']['data'][$this->_sections['fID']['index']]['id']; ?>
"><img src="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/edit.gif" border="0"/></a>&nbsp;<a href="javascript:if(window.confirm('确定删除？')==true){window.location.href='<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/admin-listuserfeedback.php?f=del&id=<?php echo $this->_tpl_vars['feedbacks']['data'][$this->_sections['fID']['index']]['id']; ?>
';}"><img src="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/del.gif" border="0"/></a>
            </div>       
        </div>          
        <?php endfor; endif; ?>
    </div>
    <br />
    <div style="width:98%; height:25px; border-top:1px dotted #CCCCCC; padding-top:5px; text-align:left; padding-left:20px; background-color:#FFFBE5">
          <?php if ($this->_tpl_vars['feedbacks']['countRs'] > 0): ?>   
          <li style="display:inline; padding-left:20px"><?php echo $this->_tpl_vars['nowtype']; ?>
共&nbsp;<?php echo $this->_tpl_vars['feedbacks']['countRs']; ?>
&nbsp;条&nbsp;&nbsp;每页显示&nbsp;<?php echo $this->_tpl_vars['feedbacks']['pageSize']; ?>
&nbsp;条&nbsp;&nbsp;第&nbsp;<?php echo $this->_tpl_vars['feedbacks']['page']; ?>
&nbsp;页/共&nbsp;<?php echo $this->_tpl_vars['feedbacks']['countPage']; ?>
&nbsp;页&nbsp;&nbsp;&nbsp;&nbsp;
              <a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/admin-listuserfeedback.php?page=<?php echo $this->_tpl_vars['feedbacks']['first']; ?>
" class="a1">首页</a>&nbsp;
              <a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/admin-listuserfeedback.php?page=<?php echo $this->_tpl_vars['feedbacks']['previous']; ?>
" class="a1">上一页</a>&nbsp;
              <a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/admin-listuserfeedback.php?page=<?php echo $this->_tpl_vars['feedbacks']['next']; ?>
" class="a1">下一页</a>&nbsp;
              <a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/admin-listuserfeedback.php?page=<?php echo $this->_tpl_vars['feedbacks']['last']; ?>
" class="a1">尾页</a>
          </li>           
          <?php endif; ?>
    </div>  
    
    
    
    <?php if ($this->_tpl_vars['isShow'] == 'T'): ?>
    <br />
    <div style="width:98%;  border:1px solid #006D84">
        <div style="width:100%; height:25px; border:1px solid #FFFFFF; background-color:#4995A8; text-align:left; padding-top:5px; padding-left:20px; color:#FFFFFF">
            <li style="display:inline; float:left"><strong>查看用户反馈详细信息</strong></li>
        </div>
        
        <div style="width:100%; text-align:left; padding-top:5px; font-size:13px">
            <li style="display:inline; width:49%; float:left; text-align:left; height:22px; padding-left:10px"> 用户昵称：<?php echo $this->_tpl_vars['userfeed'][0]['usernc']; ?>
</li>
            <li style="display:inline; width:49%; float:left; text-align:left; height:22px; padding-left:10px"> 发表时间：<?php echo $this->_tpl_vars['userfeed'][0]['addtime']; ?>
</li>
            <li style="display:inline; width:100%; float:left; text-align:left; height:22px; padding-left:10px"> 发表时间：<?php echo $this->_reg_objects['util'][0]->unHtml($this->_tpl_vars['userfeed'][0]['title']);?>
</li>
            <li style="display:inline; width:100%; float:left; text-align:left; height:100px; padding-left:10px"> <?php echo $this->_reg_objects['util'][0]->unHtml($this->_tpl_vars['userfeed'][0]['content']);?>
</li>
        
    
        </div>    
    </div>
    <?php endif; ?>
    <br />
    