<?php /* Smarty version 2.6.19, created on 2009-06-09 03:07:37
         compiled from admin-listuser.phtml */ ?>
 <div style="width:98%;  border:1px solid #006D84">
        <div style="width:100%; height:25px; border:1px solid #FFFFFF; background-color:#4995A8; text-align:left; padding-top:5px; padding-left:20px; color:#FFFFFF">
            <li style="display:inline; float:left"><strong>����û���Ϣ</strong></li>
        </div>
        
        <div style="width:100%; background-color:#CCCCCC">
            <div style="width:15%; height:16px; float:left; padding-top:3px; border-right:1px solid #FFFFFF">
               �û��ǳ�
            </div>            
 
             <div style="width:15%; height:16px; float:left; padding-top:3px; border-right:1px solid #FFFFFF">
              ��ʵ����
            </div>  
            <div style="width:15%; height:16px; float:left; padding-top:3px; border-right:1px solid #FFFFFF">
              �Ա�
            </div>             
            <div style="width:15%; height:16px; float:left; padding-top:3px; border-right:1px solid #FFFFFF">
               ��ϵ�绰
            </div>
            <div style="width:15%; height:16px; float:left; padding-top:3px; border-right:1px solid #FFFFFF">
              ����¼ʱ��
            </div>
            <div style="width:15%; height:16px; float:left; padding-top:3px; border-right:1px solid #FFFFFF">
              ��¼����
            </div>                                                                          
             <div style="width:10%; height:16px; float:left; padding-top:3px">
               ����
            </div>       
        </div>  
        <?php unset($this->_sections['uID']);
$this->_sections['uID']['name'] = 'uID';
$this->_sections['uID']['loop'] = is_array($_loop=$this->_tpl_vars['users']['data']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['uID']['show'] = true;
$this->_sections['uID']['max'] = $this->_sections['uID']['loop'];
$this->_sections['uID']['step'] = 1;
$this->_sections['uID']['start'] = $this->_sections['uID']['step'] > 0 ? 0 : $this->_sections['uID']['loop']-1;
if ($this->_sections['uID']['show']) {
    $this->_sections['uID']['total'] = $this->_sections['uID']['loop'];
    if ($this->_sections['uID']['total'] == 0)
        $this->_sections['uID']['show'] = false;
} else
    $this->_sections['uID']['total'] = 0;
if ($this->_sections['uID']['show']):

            for ($this->_sections['uID']['index'] = $this->_sections['uID']['start'], $this->_sections['uID']['iteration'] = 1;
                 $this->_sections['uID']['iteration'] <= $this->_sections['uID']['total'];
                 $this->_sections['uID']['index'] += $this->_sections['uID']['step'], $this->_sections['uID']['iteration']++):
$this->_sections['uID']['rownum'] = $this->_sections['uID']['iteration'];
$this->_sections['uID']['index_prev'] = $this->_sections['uID']['index'] - $this->_sections['uID']['step'];
$this->_sections['uID']['index_next'] = $this->_sections['uID']['index'] + $this->_sections['uID']['step'];
$this->_sections['uID']['first']      = ($this->_sections['uID']['iteration'] == 1);
$this->_sections['uID']['last']       = ($this->_sections['uID']['iteration'] == $this->_sections['uID']['total']);
?>
        <div style="width:100%; border-top:1px solid #006D84">
            <div style="width:15%; height:20px; float:left; padding-top:4px; border-right:1px solid #006D84; text-align:left; padding-left:5px">
              <?php if ($this->_tpl_vars['users']['data'][$this->_sections['uID']['index']]['usertype'] == 1): ?><font color="blue"><?php echo $this->_reg_objects['util'][0]->unHtml($this->_tpl_vars['users']['data'][$this->_sections['uID']['index']]['usernc']);?>
</font><?php else: ?> <?php echo $this->_reg_objects['util'][0]->unHtml($this->_tpl_vars['users']['data'][$this->_sections['uID']['index']]['usernc']);?>
<?php endif; ?>
            </div> 
                       
            <div style="width:15%; height:20px; float:left; padding-top:4px; border-right:1px solid #006D84">
               <?php echo $this->_reg_objects['util'][0]->unHtml($this->_tpl_vars['users']['data'][$this->_sections['uID']['index']]['truename']);?>

            </div> 
 
            <div style="width:15%; height:20px; float:left; padding-top:4px; border-right:1px solid #006D84">
               <?php echo $this->_reg_objects['util'][0]->unHtml($this->_tpl_vars['users']['data'][$this->_sections['uID']['index']]['sex']);?>

            </div>             

            <div style="width:15%; height:20px; float:left; padding-top:4px; border-right:1px solid #006D84">
               <?php echo $this->_tpl_vars['users']['data'][$this->_sections['uID']['index']]['tel']; ?>

            </div>             

            <div style="width:15%; height:20px; float:left; padding-top:4px; border-right:1px solid #006D84">
               <?php echo $this->_tpl_vars['users']['data'][$this->_sections['uID']['index']]['lastlogintime']; ?>

            </div> 
                                   
             <div style="width:15%; height:20px; float:left; padding-top:4px; border-right:1px solid #006D84">
               <?php echo $this->_tpl_vars['users']['data'][$this->_sections['uID']['index']]['logintimes']; ?>

            </div> 
                                    
            <div style="width:9%; height:20px; float:left; padding-top:2px">
                <a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/admin-listuser.php?f=edit&id=<?php echo $this->_tpl_vars['users']['data'][$this->_sections['uID']['index']]['id']; ?>
"><img src="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/edit.gif" border="0"/></a>&nbsp;<a href="javascript:if(window.confirm('ȷ��ɾ����')==true){window.location.href='<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/admin-listuser.php?f=del&id=<?php echo $this->_tpl_vars['users']['data'][$this->_sections['uID']['index']]['id']; ?>
';}"><img src="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/del.gif" border="0"/></a>
            </div>       
        </div>          
        <?php endfor; endif; ?>
    </div>
    <br />
    <div style="width:98%; height:25px; border-top:1px dotted #CCCCCC; padding-top:5px; text-align:left; padding-left:20px; background-color:#FFFBE5">
          <?php if ($this->_tpl_vars['users']['countRs'] > 0): ?>   
          <li style="display:inline; padding-left:20px"><?php echo $this->_tpl_vars['nowtype']; ?>
��&nbsp;<?php echo $this->_tpl_vars['users']['countRs']; ?>
&nbsp;��&nbsp;&nbsp;ÿҳ��ʾ&nbsp;<?php echo $this->_tpl_vars['users']['pageSize']; ?>
&nbsp;��&nbsp;&nbsp;��&nbsp;<?php echo $this->_tpl_vars['users']['page']; ?>
&nbsp;ҳ/��&nbsp;<?php echo $this->_tpl_vars['users']['countPage']; ?>
&nbsp;ҳ&nbsp;&nbsp;&nbsp;&nbsp;
              <a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/admin-listuser.php?page=<?php echo $this->_tpl_vars['users']['first']; ?>
" class="a1">��ҳ</a>&nbsp;
              <a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/admin-listuser.php?page=<?php echo $this->_tpl_vars['users']['previous']; ?>
" class="a1">��һҳ</a>&nbsp;
              <a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/admin-listuser.php?page=<?php echo $this->_tpl_vars['users']['next']; ?>
" class="a1">��һҳ</a>&nbsp;
              <a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/admin-listuser.php?page=<?php echo $this->_tpl_vars['users']['last']; ?>
" class="a1">βҳ</a>
          </li>           
          <?php endif; ?>
    </div> 
    
    <br>
    <?php if ($this->_tpl_vars['isShow'] == 'T'): ?>
    <div style="width:98%;  border:1px solid #006D84">
        <div style="width:100%; height:25px; border:1px solid #FFFFFF; background-color:#4995A8; text-align:left; padding-top:5px; padding-left:20px; color:#FFFFFF">
            <li style="display:inline; float:left"><strong>�û���ϸ��Ϣ</strong></li>
        </div>
        <div style="width:100%; padding-top:15px">
           <li style="display:inline; width:49%; float:left; text-align:left; height:22px; padding-left:10px"> �û��ǳƣ�<?php echo $this->_tpl_vars['user'][0]['usernc']; ?>
</li>
           <li style="display:inline; width:49%; float:left; text-align:left; height:22px; padding-left:10px">��ʵ������<?php echo $this->_tpl_vars['user'][0]['truename']; ?>
</li>
           <li style="display:inline; width:49%; float:left; text-align:left; height:22px; padding-left:10px">�Ա�<?php echo $this->_tpl_vars['user'][0]['sex']; ?>
</li>
           <li style="display:inline; width:49%; float:left; text-align:left; height:22px; padding-left:10px">��ϵ�绰�� <?php echo $this->_tpl_vars['user'][0]['tel']; ?>
</li>
           <li style="display:inline; width:49%; float:left; text-align:left; height:22px; padding-left:10px">����¼ʱ�� ��<?php echo $this->_tpl_vars['user'][0]['lastlogintime']; ?>
</li>
           <li style="display:inline; width:49%; float:left; text-align:left; height:22px; padding-left:10px">��¼���� ��<?php echo $this->_tpl_vars['user'][0]['logintimes']; ?>
</li>
           <li style="display:inline; width:49%; float:left; text-align:left; height:22px; padding-left:10px">E-mail ��<?php echo $this->_tpl_vars['user'][0]['email']; ?>
</li>
           <li style="display:inline; width:49%; float:left; text-align:left; height:22px; padding-left:10px">QQ ��<?php echo $this->_tpl_vars['user'][0]['qq']; ?>
</li>
           <li style="display:inline; width:49%; float:left; text-align:left; height:22px; padding-left:10px">ע��ʱ�� ��<?php echo $this->_tpl_vars['user'][0]['regtime']; ?>
</li>
           <li style="display:inline; width:49%; float:left; text-align:left; height:22px; padding-left:10px">����¼IP ��<?php echo $this->_tpl_vars['user'][0]['ip']; ?>
</li>
           <li style="display:inline; width:49%; float:left; text-align:left; height:22px; padding-left:10px">�ʱࣺ<?php echo $this->_tpl_vars['user'][0]['yb']; ?>
</li>
           <li style="display:inline; width:49%; float:left; text-align:left; height:22px; padding-left:10px">�û����� ��<?php if ($this->_tpl_vars['user'][0]['usertype'] == 1): ?>����Ա<?php else: ?>��ͨ�û�<?php endif; ?></li>
           <li style="display:inline; width:100%; float:left; text-align:left; height:22px; padding-left:10px">��ϵ��ַ��<?php echo $this->_tpl_vars['user'][0]['address']; ?>
</li>
       
        
        </div>
    
    
    </div>    
    <?php endif; ?>
            
    
    