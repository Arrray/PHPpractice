<?php /* Smarty version 2.6.19, created on 2009-06-09 08:15:23
         compiled from usercenterorder.phtml */ ?>

<div style="width:950px; background-color:#FFFFFF">
    <div style="width:930px; height:20px; background:url(<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/title4.gif); border-top:1px solid #CCCCCC; padding-top:3px; padding-left:20px; font-size:13px; text-align:left">
               ����ǰ��λ�ã������������&nbsp;>>&nbsp;��Ա����
    </div>
    <br />
    <div style="width:930px; height:100px">
        
        <div style="width:200px; height:100%; float:left; border-right:1px dotted #333333; background-color:#FDFBED; padding-top:5px">
            <div style="width:95%; height:25px; padding-top:5px; border:1px solid #0C92AB; text-align:left; padding-left:50px; background:url(<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/button_ucenter.gif)">��&nbsp;<a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/usercenter.html" class="a1">�޸ĸ�����Ϣ</a></div>
            <div style="width:50px; height:5px; font-size:0px"></div>
            <div style="width:95%; height:25px; padding-top:5px; border:1px solid #0C92AB; text-align:left; padding-left:50px; background:url(<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/button_ucenter.gif)">��&nbsp;<a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/usercenterchangepwd.html" class="a1">�޸ĵ�¼����</a></div>
            <div style="width:50px; height:5px; font-size:0px"></div>            
            <div style="width:95%; height:25px; padding-top:5px; border:1px solid #0C92AB; text-align:left; padding-left:50px; background:url(<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/button_ucenter.gif)">��&nbsp;<a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/usercenterorder.html" class="a1">�ҵĶ���</a></div>
            <div style="width:50px; height:5px; font-size:0px"></div>  
            <div style="width:95%; height:25px; padding-top:5px; border:1px solid #0C92AB; text-align:left; padding-left:50px; background:url(<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/button_ucenter.gif)">��&nbsp;<a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/userfeedback.html" class="a1">�������</a></div>
            <div style="width:50px; height:5px; font-size:0px"></div>  
            <div style="width:95%; height:25px; padding-top:5px; border:1px solid #0C92AB; text-align:left; padding-left:50px; background:url(<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/button_ucenter.gif)">��&nbsp;<a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/qq.html" class="a1">QQ������ѯ</a></div>
            <div style="width:50px; height:5px; font-size:0px"></div> 
            <div style="width:95%; height:25px; padding-top:5px; border:1px solid #0C92AB; text-align:left; padding-left:50px; background:url(<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/button_ucenter.gif)">��&nbsp;<a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/tel.html" class="a1">��������</a></div>                                               
        </div>
        
        <div style="width:720px; height:100%; float:right">
            <div style="width:100%; height:22px; background-color:#FFC976; border-top:1px solid #FF7300; text-align:left; padding-top:4px; padding-left:20px">
                �ҵĶ���
            </div>
            <br /> 
            <div style="width:90%; height:20px; border:1px solid #0C92AB; padding-top:3px; background-color:#FDFBED">
                <li style="display:inline; width:24%; float:left">������</li>
                <li style="display:inline; width:22%; float:left">�ջ���</li>
                <li style="display:inline; width:22%; float:left">Ӧ֧���ܽ�Ԫ��</li>
                <li style="display:inline; width:22%; float:left">����ʱ��</li>
                <li style="display:inline; width:2%; float:left"></li>                
            </div>
            <?php unset($this->_sections['oID']);
$this->_sections['oID']['name'] = 'oID';
$this->_sections['oID']['loop'] = is_array($_loop=$this->_tpl_vars['orders']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
            <div style="width:90%; height:20px; border-bottom:1px solid #0C92AB; border-left:1px solid #0C92AB; border-right:1px solid #0C92AB; padding-top:3px">
                <li style="display:inline; width:26%; float:left; border-right:1px solid #0C92AB"><?php echo $this->_tpl_vars['orders'][$this->_sections['oID']['index']]['orderno']; ?>
</li>
                <li style="display:inline; width:22%; float:left; border-right:1px solid #0C92AB"><?php echo $this->_tpl_vars['orders'][$this->_sections['oID']['index']]['username']; ?>
</li>
                <li style="display:inline; width:22%; float:left; border-right:1px solid #0C92AB"><?php echo $this->_reg_objects['util'][0]->moneyFormat($this->_tpl_vars['orders'][$this->_sections['oID']['index']]['totalprice']);?>
</li>
                <li style="display:inline; width:22%; float:left; border-right:1px solid #0C92AB"><?php echo $this->_tpl_vars['orders'][$this->_sections['oID']['index']]['addtime']; ?>
</li>
                <li style="display:inline; width:8%; float:left"><a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/usercenterorder-<?php echo $this->_tpl_vars['orders'][$this->_sections['oID']['index']]['orderno']; ?>
.html" class="a1">�鿴</a></li>
            </div> 
            <?php endfor; endif; ?>    
            
            
   <?php if ($this->_tpl_vars['isShow'] == 'T'): ?>         
    <br /> 
    <div style="width:680px; border-top:1px dotted #CCCCCC; border-bottom:1px dotted #CCCCCC; padding:15px">
        <div style="width:630px; height:22px; text-align:left; padding-top:5px">
            <li style="display:inline; width:200px; height:22px; background-color:#006D84; padding-top:5px; padding-left:10px; color:#FFFFFF; float:left"> <strong>�����ţ�<?php echo $this->_tpl_vars['order'][0]['orderno']; ?>
</strong></li>
            <li style="display:inline; width:200px; height:22px; padding-top:5px; float:right">����ʱ�䣺<?php echo $this->_tpl_vars['order'][0]['addtime']; ?>
</li>
        </div>
        <div style="width:50px; height:2px; font-size:0px"></div>        
        <div style="width:630px; border:1px solid #006D84;padding-top:10px">
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
    <div style="width:680px; height:30px; padding-top:3px; text-align:left">
        <strong> ����״̬</strong>&nbsp;&nbsp;&nbsp;[&nbsp;���տ<input type="checkbox" disabled <?php if ($this->_tpl_vars['order'][0]['isfk'] == 1): ?>checked<?php endif; ?> />&nbsp;&nbsp; �ѷ�����<input type="checkbox" disabled <?php if ($this->_tpl_vars['order'][0]['isfh'] == 1): ?>checked<?php endif; ?>/> ���ջ���<input type="checkbox" disabled <?php if ($this->_tpl_vars['order'][0]['issh'] == 1): ?>checked<?php endif; ?>/>&nbsp;]
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" value="ȡ������" <?php if ($this->_tpl_vars['order'][0]['issh'] == 1 || $this->_tpl_vars['order'][0]['isfk'] == 1 || $this->_tpl_vars['order'][0]['isfh'] == 1): ?>disabled<?php endif; ?>  onclick="javascript:if(window.confirm('��ȷ��ȡ���ö���ô��')==true){window.location.href='usercenterorder-<?php echo $this->_tpl_vars['order'][0]['orderno']; ?>
-qx.html';}"/> &nbsp;&nbsp;
        <input type="button" value="ȷ���ջ�" onclick="javascript:if(window.confirm('��ȷ���Ѿ��ջ���ô��')==true){window.location.href='usercenterorder-<?php echo $this->_tpl_vars['order'][0]['orderno']; ?>
-y.html';}" <?php if ($this->_tpl_vars['order'][0]['issh'] == 1): ?>disabled<?php endif; ?>/>
    </div>
  <?php endif; ?>
            
            
            
            
                         
        </div>            
    
    </div>
    <br />   
</div>
       