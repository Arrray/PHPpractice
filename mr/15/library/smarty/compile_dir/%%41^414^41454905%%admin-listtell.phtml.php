<?php /* Smarty version 2.6.19, created on 2009-06-09 07:43:01
         compiled from admin-listtell.phtml */ ?>
     <div style="width:98%; height:25px; text-align:left"><input type="button" value="添加新闻公告信息"  onclick="window.location.href='<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/admin-tell.php'" />&nbsp;&nbsp;<input type="button" value="浏览新闻公告信息" onclick="window.location.href='<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/admin-listtell.php'"/></div>    
    <div style="width:98%;  border:1px solid #006D84">
        <div style="width:100%; height:25px; border:1px solid #FFFFFF; background-color:#4995A8; text-align:left; padding-top:5px; padding-left:20px; color:#FFFFFF">
            <li style="display:inline; float:left"><strong>浏览新闻公告信息</strong></li>
        </div>
        
        <div style="width:100%; background-color:#CCCCCC">
            <div style="width:70%; height:16px; float:left; padding-top:3px; border-right:1px solid #FFFFFF">
               主题
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
$this->_sections['tID']['loop'] = is_array($_loop=$this->_tpl_vars['tells']['data']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
            <div style="width:70%; height:20px; float:left; padding-top:4px; border-right:1px solid #006D84; text-align:left; padding-left:20px">
               <?php echo $this->_reg_objects['util'][0]->unHtml($this->_tpl_vars['tells']['data'][$this->_sections['tID']['index']]['title']);?>

            </div>            

            <div style="width:20%; height:20px; float:left; padding-top:4px; border-right:1px solid #006D84">
               <?php echo $this->_tpl_vars['tells']['data'][$this->_sections['tID']['index']]['addtime']; ?>

            </div>  
                         
            <div style="width:10%; height:20px; float:left; padding-top:2px">
                <a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/admin-tell.php?f=edit&id=<?php echo $this->_tpl_vars['tells']['data'][$this->_sections['tID']['index']]['id']; ?>
"><img src="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/edit.gif" border="0"/></a>&nbsp;<a href="javascript:if(window.confirm('确定删除？')==true){window.location.href='<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/admin-listtell.php?f=del&id=<?php echo $this->_tpl_vars['tells']['data'][$this->_sections['tID']['index']]['id']; ?>
';}"><img src="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/del.gif" border="0"/></a>
            </div>       
        </div>          
        <?php endfor; endif; ?>
    </div>
    
    
    <br />
    <div style="width:98%; height:25px; border-top:1px dotted #CCCCCC; padding-top:5px; text-align:left; padding-left:20px; background-color:#FFFBE5">
          <?php if ($this->_tpl_vars['tells']['countRs'] > 0): ?>   
          <li style="display:inline; padding-left:20px"><?php echo $this->_tpl_vars['nowtype']; ?>
共&nbsp;<?php echo $this->_tpl_vars['tells']['countRs']; ?>
&nbsp;条&nbsp;&nbsp;每页显示&nbsp;<?php echo $this->_tpl_vars['tells']['pageSize']; ?>
&nbsp;条&nbsp;&nbsp;第&nbsp;<?php echo $this->_tpl_vars['tells']['page']; ?>
&nbsp;页/共&nbsp;<?php echo $this->_tpl_vars['tells']['countPage']; ?>
&nbsp;页&nbsp;&nbsp;&nbsp;&nbsp;
              <a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/admin-listtell.php?page=<?php echo $this->_tpl_vars['tells']['first']; ?>
" class="a1">首页</a>&nbsp;
              <a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/admin-listtell.php?page=<?php echo $this->_tpl_vars['tells']['previous']; ?>
" class="a1">上一页</a>&nbsp;
              <a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/admin-listtell.php?page=<?php echo $this->_tpl_vars['tells']['next']; ?>
" class="a1">下一页</a>&nbsp;
              <a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/admin-listtell.php?page=<?php echo $this->_tpl_vars['tells']['last']; ?>
" class="a1">尾页</a>
          </li>           
          <?php endif; ?>
    </div>   

    