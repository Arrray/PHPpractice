<?php /* Smarty version 2.6.19, created on 2009-06-09 03:07:37
         compiled from admin-listuser.phtml */ ?>
 <div style="width:98%;  border:1px solid #006D84">
        <div style="width:100%; height:25px; border:1px solid #FFFFFF; background-color:#4995A8; text-align:left; padding-top:5px; padding-left:20px; color:#FFFFFF">
            <li style="display:inline; float:left"><strong>浏览用户信息</strong></li>
        </div>
        
        <div style="width:100%; background-color:#CCCCCC">
            <div style="width:15%; height:16px; float:left; padding-top:3px; border-right:1px solid #FFFFFF">
               用户昵称
            </div>            
 
             <div style="width:15%; height:16px; float:left; padding-top:3px; border-right:1px solid #FFFFFF">
              真实姓名
            </div>  
            <div style="width:15%; height:16px; float:left; padding-top:3px; border-right:1px solid #FFFFFF">
              性别
            </div>             
            <div style="width:15%; height:16px; float:left; padding-top:3px; border-right:1px solid #FFFFFF">
               联系电话
            </div>
            <div style="width:15%; height:16px; float:left; padding-top:3px; border-right:1px solid #FFFFFF">
              最后登录时间
            </div>
            <div style="width:15%; height:16px; float:left; padding-top:3px; border-right:1px solid #FFFFFF">
              登录次数
            </div>                                                                          
             <div style="width:10%; height:16px; float:left; padding-top:3px">
               操作
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
/img/edit.gif" border="0"/></a>&nbsp;<a href="javascript:if(window.confirm('确定删除？')==true){window.location.href='<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
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
共&nbsp;<?php echo $this->_tpl_vars['users']['countRs']; ?>
&nbsp;人&nbsp;&nbsp;每页显示&nbsp;<?php echo $this->_tpl_vars['users']['pageSize']; ?>
&nbsp;人&nbsp;&nbsp;第&nbsp;<?php echo $this->_tpl_vars['users']['page']; ?>
&nbsp;页/共&nbsp;<?php echo $this->_tpl_vars['users']['countPage']; ?>
&nbsp;页&nbsp;&nbsp;&nbsp;&nbsp;
              <a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/admin-listuser.php?page=<?php echo $this->_tpl_vars['users']['first']; ?>
" class="a1">首页</a>&nbsp;
              <a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/admin-listuser.php?page=<?php echo $this->_tpl_vars['users']['previous']; ?>
" class="a1">上一页</a>&nbsp;
              <a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/admin-listuser.php?page=<?php echo $this->_tpl_vars['users']['next']; ?>
" class="a1">下一页</a>&nbsp;
              <a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/admin-listuser.php?page=<?php echo $this->_tpl_vars['users']['last']; ?>
" class="a1">尾页</a>
          </li>           
          <?php endif; ?>
    </div> 
    
    <br>
    <?php if ($this->_tpl_vars['isShow'] == 'T'): ?>
    <div style="width:98%;  border:1px solid #006D84">
        <div style="width:100%; height:25px; border:1px solid #FFFFFF; background-color:#4995A8; text-align:left; padding-top:5px; padding-left:20px; color:#FFFFFF">
            <li style="display:inline; float:left"><strong>用户详细信息</strong></li>
        </div>
        <div style="width:100%; padding-top:15px">
           <li style="display:inline; width:49%; float:left; text-align:left; height:22px; padding-left:10px"> 用户昵称：<?php echo $this->_tpl_vars['user'][0]['usernc']; ?>
</li>
           <li style="display:inline; width:49%; float:left; text-align:left; height:22px; padding-left:10px">真实姓名：<?php echo $this->_tpl_vars['user'][0]['truename']; ?>
</li>
           <li style="display:inline; width:49%; float:left; text-align:left; height:22px; padding-left:10px">性别：<?php echo $this->_tpl_vars['user'][0]['sex']; ?>
</li>
           <li style="display:inline; width:49%; float:left; text-align:left; height:22px; padding-left:10px">联系电话： <?php echo $this->_tpl_vars['user'][0]['tel']; ?>
</li>
           <li style="display:inline; width:49%; float:left; text-align:left; height:22px; padding-left:10px">最后登录时间 ：<?php echo $this->_tpl_vars['user'][0]['lastlogintime']; ?>
</li>
           <li style="display:inline; width:49%; float:left; text-align:left; height:22px; padding-left:10px">登录次数 ：<?php echo $this->_tpl_vars['user'][0]['logintimes']; ?>
</li>
           <li style="display:inline; width:49%; float:left; text-align:left; height:22px; padding-left:10px">E-mail ：<?php echo $this->_tpl_vars['user'][0]['email']; ?>
</li>
           <li style="display:inline; width:49%; float:left; text-align:left; height:22px; padding-left:10px">QQ ：<?php echo $this->_tpl_vars['user'][0]['qq']; ?>
</li>
           <li style="display:inline; width:49%; float:left; text-align:left; height:22px; padding-left:10px">注册时间 ：<?php echo $this->_tpl_vars['user'][0]['regtime']; ?>
</li>
           <li style="display:inline; width:49%; float:left; text-align:left; height:22px; padding-left:10px">最后登录IP ：<?php echo $this->_tpl_vars['user'][0]['ip']; ?>
</li>
           <li style="display:inline; width:49%; float:left; text-align:left; height:22px; padding-left:10px">邮编：<?php echo $this->_tpl_vars['user'][0]['yb']; ?>
</li>
           <li style="display:inline; width:49%; float:left; text-align:left; height:22px; padding-left:10px">用户类型 ：<?php if ($this->_tpl_vars['user'][0]['usertype'] == 1): ?>管理员<?php else: ?>普通用户<?php endif; ?></li>
           <li style="display:inline; width:100%; float:left; text-align:left; height:22px; padding-left:10px">联系地址：<?php echo $this->_tpl_vars['user'][0]['address']; ?>
</li>
       
        
        </div>
    
    
    </div>    
    <?php endif; ?>
            
    
    