<?php /* Smarty version 2.6.19, created on 2009-06-09 05:13:27
         compiled from admin-listbook.phtml */ ?>
<div style="width:98%; height:25px; text-align:left"><input type="button" value="���ͼ����Ϣ"  onclick="window.location.href='<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/admin-book.php'" />&nbsp;&nbsp;<input type="button" value="���ͼ����Ϣ" onclick="window.location.href='<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/admin-listbook.php'"/>&nbsp;&nbsp;<input type="button" value="��ѯͼ����Ϣ" onclick="window.location.href='<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/admin-searchbook.php'"/></div>       
    <div style="width:98%;  border:1px solid #006D84">
        <div style="width:100%; height:25px; border:1px solid #FFFFFF; background-color:#4995A8; text-align:left; padding-top:5px; padding-left:20px; color:#FFFFFF">
            <li style="display:inline; float:left"><strong>���ͼ����Ϣ</strong></li>
        </div>
        
        <div style="width:100%; background-color:#CCCCCC">
            <div style="width:30%; height:16px; float:left; padding-top:3px; border-right:1px solid #FFFFFF">
               ͼ������
            </div>            
 
             <div style="width:15%; height:16px; float:left; padding-top:3px; border-right:1px solid #FFFFFF">
              ������
            </div>  
            <div style="width:15%; height:16px; float:left; padding-top:3px; border-right:1px solid #FFFFFF">
              ����
            </div>             
            <div style="width:15%; height:16px; float:left; padding-top:3px; border-right:1px solid #FFFFFF">
              �г��ۣ�Ԫ��
            </div>
            <div style="width:15%; height:16px; float:left; padding-top:3px; border-right:1px solid #FFFFFF">
              ��Ա�ۣ�Ԫ��
            </div>                                                              
             <div style="width:8%; height:16px; float:left; padding-top:3px">
               ����
            </div>       
        </div>  
        <?php unset($this->_sections['bID']);
$this->_sections['bID']['name'] = 'bID';
$this->_sections['bID']['loop'] = is_array($_loop=$this->_tpl_vars['bookinfos']['data']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['bID']['show'] = true;
$this->_sections['bID']['max'] = $this->_sections['bID']['loop'];
$this->_sections['bID']['step'] = 1;
$this->_sections['bID']['start'] = $this->_sections['bID']['step'] > 0 ? 0 : $this->_sections['bID']['loop']-1;
if ($this->_sections['bID']['show']) {
    $this->_sections['bID']['total'] = $this->_sections['bID']['loop'];
    if ($this->_sections['bID']['total'] == 0)
        $this->_sections['bID']['show'] = false;
} else
    $this->_sections['bID']['total'] = 0;
if ($this->_sections['bID']['show']):

            for ($this->_sections['bID']['index'] = $this->_sections['bID']['start'], $this->_sections['bID']['iteration'] = 1;
                 $this->_sections['bID']['iteration'] <= $this->_sections['bID']['total'];
                 $this->_sections['bID']['index'] += $this->_sections['bID']['step'], $this->_sections['bID']['iteration']++):
$this->_sections['bID']['rownum'] = $this->_sections['bID']['iteration'];
$this->_sections['bID']['index_prev'] = $this->_sections['bID']['index'] - $this->_sections['bID']['step'];
$this->_sections['bID']['index_next'] = $this->_sections['bID']['index'] + $this->_sections['bID']['step'];
$this->_sections['bID']['first']      = ($this->_sections['bID']['iteration'] == 1);
$this->_sections['bID']['last']       = ($this->_sections['bID']['iteration'] == $this->_sections['bID']['total']);
?>
        <div style="width:100%; border-top:1px solid #006D84">
            <div style="width:30%; height:20px; float:left; padding-top:4px; border-right:1px solid #006D84; text-align:left; padding-left:5px">
               <?php echo $this->_reg_objects['util'][0]->unHtml($this->_tpl_vars['bookinfos']['data'][$this->_sections['bID']['index']]['bookname']);?>

            </div> 
                       
            <div style="width:15%; height:20px; float:left; padding-top:4px; border-right:1px solid #006D84">
               <?php echo $this->_reg_objects['util'][0]->unHtml($this->_tpl_vars['bookinfos']['data'][$this->_sections['bID']['index']]['pubname']);?>

            </div> 
 
            <div style="width:15%; height:20px; float:left; padding-top:4px; border-right:1px solid #006D84">
               <?php echo $this->_reg_objects['util'][0]->unHtml($this->_tpl_vars['bookinfos']['data'][$this->_sections['bID']['index']]['writer']);?>

            </div>             

            <div style="width:15%; height:20px; float:left; padding-top:4px; border-right:1px solid #006D84">
               <?php echo $this->_reg_objects['util'][0]->moneyFormat($this->_tpl_vars['bookinfos']['data'][$this->_sections['bID']['index']]['oldprice']);?>

            </div>             

            <div style="width:15%; height:20px; float:left; padding-top:4px; border-right:1px solid #006D84">
               <?php echo $this->_reg_objects['util'][0]->moneyFormat($this->_tpl_vars['bookinfos']['data'][$this->_sections['bID']['index']]['newprice']);?>

            </div> 
                                   
                         
            <div style="width:9%; height:20px; float:left; padding-top:2px">
                <a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/admin-book.php?f=edit&id=<?php echo $this->_tpl_vars['bookinfos']['data'][$this->_sections['bID']['index']]['id']; ?>
"><img src="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/edit.gif" border="0"/></a>&nbsp;<a href="javascript:if(window.confirm('ȷ��ɾ����')==true){window.location.href='<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/admin-listbook.php?f=del&id=<?php echo $this->_tpl_vars['bookinfos']['data'][$this->_sections['bID']['index']]['id']; ?>
';}"><img src="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/del.gif" border="0"/></a>
            </div>       
        </div>          
        <?php endfor; endif; ?>
    </div>
    <br />
    <div style="width:98%; height:25px; border-top:1px dotted #CCCCCC; padding-top:5px; text-align:left; padding-left:20px; background-color:#FFFBE5">
          <?php if ($this->_tpl_vars['bookinfos']['countRs'] > 0): ?>   
          <li style="display:inline; padding-left:20px"><?php echo $this->_tpl_vars['nowtype']; ?>
��&nbsp;<?php echo $this->_tpl_vars['bookinfos']['countRs']; ?>
&nbsp;��&nbsp;&nbsp;ÿҳ��ʾ&nbsp;<?php echo $this->_tpl_vars['bookinfos']['pageSize']; ?>
&nbsp;��&nbsp;&nbsp;��&nbsp;<?php echo $this->_tpl_vars['bookinfos']['page']; ?>
&nbsp;ҳ/��&nbsp;<?php echo $this->_tpl_vars['bookinfos']['countPage']; ?>
&nbsp;ҳ&nbsp;&nbsp;&nbsp;&nbsp;
              <a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/admin-listbook.php?page=<?php echo $this->_tpl_vars['bookinfos']['first']; ?>
" class="a1">��ҳ</a>&nbsp;
              <a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/admin-listbook.php?page=<?php echo $this->_tpl_vars['bookinfos']['previous']; ?>
" class="a1">��һҳ</a>&nbsp;
              <a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/admin-listbook.php?page=<?php echo $this->_tpl_vars['bookinfos']['next']; ?>
" class="a1">��һҳ</a>&nbsp;
              <a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/admin-listbook.php?page=<?php echo $this->_tpl_vars['bookinfos']['last']; ?>
" class="a1">βҳ</a>
          </li>           
          <?php endif; ?>
    </div>     
    
    