<?php /* Smarty version 2.6.19, created on 2009-06-09 06:19:10
         compiled from admin-listorder.phtml */ ?>
 <div style="width:98%;  border:1px solid #006D84">
        <div style="width:100%; height:25px; border:1px solid #FFFFFF; background-color:#4995A8; text-align:left; padding-top:5px; padding-left:20px; color:#FFFFFF">
            <li style="display:inline; float:left"><strong>���������Ϣ</strong></li>
        </div>
        
        <div style="width:100%; background-color:#CCCCCC">
            <div style="width:15%; height:16px; float:left; padding-top:3px; border-right:1px solid #FFFFFF">
             ������
            </div>            
 
             <div style="width:10%; height:16px; float:left; padding-top:3px; border-right:1px solid #FFFFFF">
              ������
            </div>  
            <div style="width:15%; height:16px; float:left; padding-top:3px; border-right:1px solid #FFFFFF">
               ��ϵ�绰
            </div>             
            <div style="width:8%; height:16px; float:left; padding-top:3px; border-right:1px solid #FFFFFF">
      ͼ�����        
            </div>
            <div style="width:8%; height:16px; float:left; padding-top:3px; border-right:1px solid #FFFFFF">
         �˷�    
            </div>
            <div style="width:8%; height:16px; float:left; padding-top:3px; border-right:1px solid #FFFFFF">
      �ܷ���        
            </div>
            <div style="width:26%; height:16px; float:left; padding-top:3px; border-right:1px solid #FFFFFF">
      ״̬    
            </div>                                                                                        
             <div style="width:9%; height:16px; float:left; padding-top:3px">
               ����
            </div>       
        </div>  
        <?php unset($this->_sections['oID']);
$this->_sections['oID']['name'] = 'oID';
$this->_sections['oID']['loop'] = is_array($_loop=$this->_tpl_vars['orders']['data']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['oID']['show'] = true;
$this->_sections['oID']['max'] = $this->_sections['oID']['loop'];
$this->_sections['oID']['step'] = 1;
$this->_sections['oID']['start'] = $this->_sections['oID']['step'] > 0 ? 0 : $this->_sections['oID']['loop']-1;
if ($this->_sections['oID']['show']) {
    $this->_sections['oID']['total'] = $this->_sections['oID']['loop'];
    if ($this->_sections['oID']['total'] == 0)
        $this->_sections['oID']['show'] = false;
} else
    $this->_sections['oID']['total'] = 0;
if ($this->_sections['oID']['show']):

            for ($this->_sections['oID']['index'] = $this->_sections['oID']['start'], $this->_sections['oID']['iteration'] = 1;
                 $this->_sections['oID']['iteration'] <= $this->_sections['oID']['total'];
                 $this->_sections['oID']['index'] += $this->_sections['oID']['step'], $this->_sections['oID']['iteration']++):
$this->_sections['oID']['rownum'] = $this->_sections['oID']['iteration'];
$this->_sections['oID']['index_prev'] = $this->_sections['oID']['index'] - $this->_sections['oID']['step'];
$this->_sections['oID']['index_next'] = $this->_sections['oID']['index'] + $this->_sections['oID']['step'];
$this->_sections['oID']['first']      = ($this->_sections['oID']['iteration'] == 1);
$this->_sections['oID']['last']       = ($this->_sections['oID']['iteration'] == $this->_sections['oID']['total']);
?>
        <div style="width:100%; border-top:1px solid #006D84">
            <div style="width:15%; height:20px; float:left; padding-top:4px; border-right:1px solid #006D84; text-align:left; padding-left:5px">
              <?php echo $this->_tpl_vars['orders']['data'][$this->_sections['oID']['index']]['orderno']; ?>

            </div> 
                       
            <div style="width:10%; height:20px; float:left; padding-top:4px; border-right:1px solid #006D84">
               <?php echo $this->_tpl_vars['orders']['data'][$this->_sections['oID']['index']]['username']; ?>

            </div> 
 
            <div style="width:15%; height:20px; float:left; padding-top:4px; border-right:1px solid #006D84">
               <?php echo $this->_tpl_vars['orders']['data'][$this->_sections['oID']['index']]['tel']; ?>

            </div>             

            <div style="width:8%; height:20px; float:left; padding-top:4px; border-right:1px solid #006D84">
             <?php echo $this->_reg_objects['util'][0]->moneyFormat($this->_tpl_vars['orders']['data'][$this->_sections['oID']['index']]['goodsprice']);?>

            </div>             

            <div style="width:8%; height:20px; float:left; padding-top:4px; border-right:1px solid #006D84">
             <?php echo $this->_reg_objects['util'][0]->moneyFormat($this->_tpl_vars['orders']['data'][$this->_sections['oID']['index']]['yjprice']);?>

            </div> 
                                   
             <div style="width:8%; height:20px; float:left; padding-top:4px; border-right:1px solid #006D84">
               <?php echo $this->_reg_objects['util'][0]->moneyFormat($this->_tpl_vars['orders']['data'][$this->_sections['oID']['index']]['totalprice']);?>

            </div> 
             <div style="width:26%; height:20px; float:left;  border-right:1px solid #006D84;<?php if ($this->_tpl_vars['orders']['data'][$this->_sections['oID']['index']]['isqx'] == 1): ?>padding-top:4px<?php endif; ?>">
              <?php if ($this->_tpl_vars['orders']['data'][$this->_sections['oID']['index']]['isqx'] == 1): ?>--��ȡ��--<?php else: ?>���<input type="checkbox" name="isfk" <?php if ($this->_tpl_vars['orders']['data'][$this->_sections['oID']['index']]['isfk'] == 1): ?>checked<?php endif; ?> onclick="window.location.href='admin-listorder.php?c=isfk&id=<?php echo $this->_tpl_vars['orders']['data'][$this->_sections['oID']['index']]['id']; ?>
'" />&nbsp;&nbsp;������<input type="checkbox" name="isfh" <?php if ($this->_tpl_vars['orders']['data'][$this->_sections['oID']['index']]['isfh'] == 1): ?>checked<?php endif; ?> onclick="window.location.href='admin-listorder.php?c=isfh&id=<?php echo $this->_tpl_vars['orders']['data'][$this->_sections['oID']['index']]['id']; ?>
'">&nbsp;&nbsp;�ջ���<input type="checkbox" name="issh" <?php if ($this->_tpl_vars['orders']['data'][$this->_sections['oID']['index']]['issh'] == 1): ?>checked<?php endif; ?> onclick="window.location.href='admin-listorder.php?c=issh&id=<?php echo $this->_tpl_vars['orders']['data'][$this->_sections['oID']['index']]['id']; ?>
'"><?php endif; ?>
            </div>                                     
            <div style="width:9%; height:20px; float:left; padding-top:2px">
                <a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/admin-listorder.php?f=edit&id=<?php echo $this->_tpl_vars['orders']['data'][$this->_sections['oID']['index']]['id']; ?>
"><img src="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/edit.gif" border="0"/></a>&nbsp;<a href="javascript:if(window.confirm('ȷ��ɾ����')==true){window.location.href='<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/admin-listorder.php?f=del&id=<?php echo $this->_tpl_vars['orders']['data'][$this->_sections['oID']['index']]['id']; ?>
';}"><img src="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/del.gif" border="0"/></a>
            </div>       
        </div>          
        <?php endfor; endif; ?>
    </div>
    <br />
    <div style="width:98%; height:25px; border-top:1px dotted #CCCCCC; padding-top:5px; text-align:left; padding-left:20px; background-color:#FFFBE5">
          <?php if ($this->_tpl_vars['orders']['countRs'] > 0): ?>   
          <li style="display:inline; padding-left:20px"><?php echo $this->_tpl_vars['nowtype']; ?>
���ж���&nbsp;<?php echo $this->_tpl_vars['orders']['countRs']; ?>
&nbsp;��&nbsp;&nbsp;ÿҳ��ʾ&nbsp;<?php echo $this->_tpl_vars['orders']['pageSize']; ?>
&nbsp;��&nbsp;&nbsp;��&nbsp;<?php echo $this->_tpl_vars['orders']['page']; ?>
&nbsp;ҳ/��&nbsp;<?php echo $this->_tpl_vars['orders']['countPage']; ?>
&nbsp;ҳ&nbsp;&nbsp;&nbsp;&nbsp;
              <a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/admin-listorder.php?page=<?php echo $this->_tpl_vars['orders']['first']; ?>
" class="a1">��ҳ</a>&nbsp;
              <a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/admin-listorder.php?page=<?php echo $this->_tpl_vars['orders']['previous']; ?>
" class="a1">��һҳ</a>&nbsp;
              <a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/admin-listorder.php?page=<?php echo $this->_tpl_vars['orders']['next']; ?>
" class="a1">��һҳ</a>&nbsp;
              <a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/admin-listorder.php?page=<?php echo $this->_tpl_vars['orders']['last']; ?>
" class="a1">βҳ</a>
          </li>           
          <?php endif; ?>
    </div> 
    
    <br>
   <?php if ($this->_tpl_vars['isShow'] == 'T'): ?>         

    <div style="width:780px; border-top:1px dotted #CCCCCC; border-bottom:1px dotted #CCCCCC; padding:15px">
        <div style="width:750px; height:22px; text-align:left; padding-top:5px">
            <li style="display:inline; width:200px; height:22px; background-color:#006D84; padding-top:5px; padding-left:10px; color:#FFFFFF; float:left"> <strong>�����ţ�<?php echo $this->_tpl_vars['order'][0]['orderno']; ?>
</strong></li>
            <li style="display:inline; width:200px; height:22px; padding-top:5px; float:right">����ʱ�䣺<?php echo $this->_tpl_vars['order'][0]['addtime']; ?>
</li>
        </div>
        <div style="width:50px; height:2px; font-size:0px"></div>        
        <div style="width:750px; border:1px solid #006D84;padding-top:10px">
            <div>
                <li style="display:inline; width:50%; height:25px; float:left; text-align:left; padding-left:20px">�ջ���������<?php echo $this->_reg_objects['util'][0]->unHtml($this->_tpl_vars['order'][0]['username']);?>
</li>
                <li style="display:inline; width:50%; height:25px; float:left; text-align:left;">��&nbsp;&nbsp;��&nbsp;&nbsp;<?php echo $this->_tpl_vars['order'][0]['sex']; ?>
</li>
                <li style="display:inline; width:50%; height:25px; float:left; text-align:left; padding-left:20px">��&nbsp;&nbsp;�ࣺ&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['order'][0]['yb']; ?>
</li>
                <li style="display:inline; width:50%; height:25px; float:left; text-align:left;">��ϵ�绰��<?php echo $this->_tpl_vars['order'][0]['tel']; ?>
</li>
                <li style="display:inline; width:50%; height:25px; float:left; text-align:left; padding-left:20px">�ջ���ʽ��&nbsp;&nbsp;<?php echo $this->_tpl_vars['order'][0]['rectype']; ?>
</li>
                <li style="display:inline; width:50%; height:25px; float:left; text-align:left">֧����ʽ��<?php echo $this->_tpl_vars['order'][0]['paytype']; ?>
</li>
                 <li style="display:inline; width:100%; height:25px; float:left; text-align:left; padding-left:20px">�ջ���ַ��&nbsp;&nbsp;<?php echo $this->_reg_objects['util'][0]->unHtml($this->_tpl_vars['order'][0]['address']);?>
</li>
            </div>
           <br />
            <div style="width:88%; height:22px">
                <div style="width: 30%; height:22px; float:left; text-align:left">ͼ������</div>  
                <div style="width: 15%; height:22px; float:left; text-align:center">�г��ۣ�Ԫ��</div> 
                <div style="width: 15%; height:22px; float:left; text-align:center">��Ա�ۣ�Ԫ��</div> 
                <div style="width: 15%; height:22px; float:left; text-align:center">��������������</div>   
                <div style="width: 20%; height:22px; float:left; text-align:center">�۸�С�ƣ�Ԫ��</div>    
            </div>  
            <div style="width:90%;  border-top:1px solid #333333; border-bottom:1px solid #333333; padding-top:10px ">                 
                <?php unset($this->_sections['cbID']);
$this->_sections['cbID']['name'] = 'cbID';
$this->_sections['cbID']['loop'] = is_array($_loop=$this->_tpl_vars['arrayCarInfos']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['cbID']['show'] = true;
$this->_sections['cbID']['max'] = $this->_sections['cbID']['loop'];
$this->_sections['cbID']['step'] = 1;
$this->_sections['cbID']['start'] = $this->_sections['cbID']['step'] > 0 ? 0 : $this->_sections['cbID']['loop']-1;
if ($this->_sections['cbID']['show']) {
    $this->_sections['cbID']['total'] = $this->_sections['cbID']['loop'];
    if ($this->_sections['cbID']['total'] == 0)
        $this->_sections['cbID']['show'] = false;
} else
    $this->_sections['cbID']['total'] = 0;
if ($this->_sections['cbID']['show']):

            for ($this->_sections['cbID']['index'] = $this->_sections['cbID']['start'], $this->_sections['cbID']['iteration'] = 1;
                 $this->_sections['cbID']['iteration'] <= $this->_sections['cbID']['total'];
                 $this->_sections['cbID']['index'] += $this->_sections['cbID']['step'], $this->_sections['cbID']['iteration']++):
$this->_sections['cbID']['rownum'] = $this->_sections['cbID']['iteration'];
$this->_sections['cbID']['index_prev'] = $this->_sections['cbID']['index'] - $this->_sections['cbID']['step'];
$this->_sections['cbID']['index_next'] = $this->_sections['cbID']['index'] + $this->_sections['cbID']['step'];
$this->_sections['cbID']['first']      = ($this->_sections['cbID']['iteration'] == 1);
$this->_sections['cbID']['last']       = ($this->_sections['cbID']['iteration'] == $this->_sections['cbID']['total']);
?>
                <div style="width:95%; height:22px">
                    <div style="width: 30%; height:22px; float:left; text-align:left"><strong><a href="bookinfo-<?php echo $this->_tpl_vars['arrayCarInfos'][$this->_sections['cbID']['index']]['id']; ?>
.html" class="a7"><?php echo $this->_reg_objects['util'][0]->unHtml($this->_tpl_vars['arrayCarInfos'][$this->_sections['cbID']['index']]['bookname']);?>
</a></strong></div>  
                    <div style="width: 15%; height:22px; float:left; text-align:center"><strong><s><?php echo $this->_reg_objects['util'][0]->moneyFormat($this->_tpl_vars['arrayCarInfos'][$this->_sections['cbID']['index']]['oldprice']);?>
</s></strong></div> 
                    <div style="width: 15%; height:22px; float:left; text-align:center"><strong><?php echo $this->_reg_objects['util'][0]->moneyFormat($this->_tpl_vars['arrayCarInfos'][$this->_sections['cbID']['index']]['newprice']);?>
</strong></div> 
                    <div style="width: 15%; height:22px; float:left; text-align:center"><strong><?php echo $this->_tpl_vars['arrayCarInfos'][$this->_sections['cbID']['index']]['num']; ?>
</strong></div>   
                    <div style="width: 20%; height:22px; float:left; text-align:center"><strong><?php echo $this->_reg_objects['util'][0]->moneyFormat($this->_tpl_vars['arrayCarInfos'][$this->_sections['cbID']['index']]['smallTotalPrice']);?>
</strong></div>    
               </div>    
               <?php endfor; endif; ?>
            </div> 
    <div style="width:88%; height:25px">
        <div style="width:200px; float:right; padding-top:5px; text-align:right">ͼ��۸��ܼƣ�&nbsp;<strong><?php echo $this->_reg_objects['util'][0]->moneyFormat($this->_tpl_vars['order'][0]['goodsprice']);?>
</strong>&nbsp;Ԫ</div>
    </div>
    <div style="width:88%; height:25px">
        <div style="width:200px; float:right; padding-top:5px; text-align:right">�˷ѣ�&nbsp;<strong><?php echo $this->_reg_objects['util'][0]->moneyFormat($this->_tpl_vars['order'][0]['yjprice']);?>
</strong>&nbsp;Ԫ</div>
    </div>    
    <div style="width:88%; height:25px">
        <div style="width:200px; float:right; padding-top:5px; text-align:right; border-top:1px solid #333333">��Ӧ��֧�������˷ѣ�&nbsp;<strong><?php echo $this->_reg_objects['util'][0]->moneyFormat($this->_tpl_vars['order'][0]['totalprice']);?>
</strong>&nbsp;Ԫ</div>
    </div>             
            <br />
         
        </div>
        
        
    </div> 

  <?php endif; ?>
            
    
    