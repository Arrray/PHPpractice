<?php /* Smarty version 2.6.19, created on 2009-06-10 06:00:47
         compiled from cart.phtml */ ?>

<div style="width:950px; background-color:#FFFFFF">
    <div style="width:930px; height:20px; background:url(<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/title4.gif); border-top:1px solid #CCCCCC; padding-top:3px; padding-left:20px; font-size:13px; text-align:left">
               ����ǰ��λ�ã������������&nbsp;>>&nbsp;���ﳵ
    </div>
    <br />
    <div>
        <img src="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/gulc1.gif" />
    </div>
   <br />
    <div style="width:850px; height:12px">
        <div style="width: 30%; height:12px; float:left; text-align:center; font-size:13px; color:#003399">ͼ������</div>  
        <div style="width: 12%; height:12px; float:left; text-align:center; font-size:13px; color:#003399">�г��ۣ�Ԫ��</div> 
        <div style="width: 12%; height:12px; float:left; text-align:center; font-size:13px; color:#003399">��Ա�ۣ�Ԫ��</div> 
        <div style="width: 12%; height:12px; float:left; text-align:center; font-size:13px; color:#003399">����������</div>   
        <div style="width: 20%; height:12px; float:left; text-align:center; font-size:13px; color:#003399">�۸�С�ƣ�Ԫ��</div>    
        <div style="width: 12%; height:12px; float:left; text-align:center; font-size:13px; color:#003399">����</div>    
    </div>
    <hr style="width:850px; border-bottom:1px dotted #003399; height:1px" /> 
    <?php if ($this->_tpl_vars['arrayCarInfos'] == false || $this->_tpl_vars['arrayCarInfos'] == ''): ?>
    <br />
    ���Ĺ��ﳵ������ͼ����Ϣ����<strong><a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/index.html" class="a1">ѡ��ͼ��</a>��</strong>
    <br />
    <?php else: ?>
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
    <div style="width:850px; height:22px">
        <div style="width: 30%; height:22px; float:left; text-align:left"><strong><a href="bookinfo-<?php echo $this->_tpl_vars['arrayCarInfos'][$this->_sections['cbID']['index']]['id']; ?>
.html" class="a7" target="_blank"><?php echo $this->_reg_objects['util'][0]->unHtml($this->_tpl_vars['arrayCarInfos'][$this->_sections['cbID']['index']]['bookname']);?>
</a></strong></div>  
        <div style="width: 12%; height:22px; float:left; text-align:center"><strong><s><?php echo $this->_reg_objects['util'][0]->moneyFormat($this->_tpl_vars['arrayCarInfos'][$this->_sections['cbID']['index']]['oldprice']);?>
</s></strong></div> 
        <div style="width: 12%; height:22px; float:left; text-align:center"><strong><?php echo $this->_reg_objects['util'][0]->moneyFormat($this->_tpl_vars['arrayCarInfos'][$this->_sections['cbID']['index']]['newprice']);?>
</strong></div> 
        <div style="width: 12%; height:22px; float:left; text-align:center"><input name="num_<?php echo $this->_tpl_vars['arrayCarInfos'][$this->_sections['cbID']['index']]['id']; ?>
" type="text" value="<?php echo $this->_tpl_vars['arrayCarInfos'][$this->_sections['cbID']['index']]['num']; ?>
" class="input" size="5"/></div>   
        <div style="width: 20%; height:22px; float:left; text-align:center"><strong><?php echo $this->_reg_objects['util'][0]->moneyFormat($this->_tpl_vars['arrayCarInfos'][$this->_sections['cbID']['index']]['smallTotalPrice']);?>
</strong></div>    
        <div style="width: 12%; height:22px; float:left; text-align:center"><a href="javascript:window.location.href='<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/cart-<?php echo $this->_tpl_vars['arrayCarInfos'][$this->_sections['cbID']['index']]['id']; ?>
-'+num_<?php echo $this->_tpl_vars['arrayCarInfos'][$this->_sections['cbID']['index']]['id']; ?>
.value+'-update.html';" class="a1">����</a>|<a href="javascript:if(window.confirm('ȷ���ӹ��ﳵ���Ƴ���ͼ�飿')==true){window.location.href='<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/cart-<?php echo $this->_tpl_vars['arrayCarInfos'][$this->_sections['cbID']['index']]['id']; ?>
-remove.html';}" class="a1">�Ƴ�</a></div>    
    </div>    
    <?php endfor; endif; ?>
    <?php endif; ?>
    <hr style="width:850px; border-bottom:1px dotted #003399; height:1px" /> 
     <div style="width:850px; height:22px">
         <div style="width:200px; text-align:left; float:left"><a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/index.html" class="a1">��������</a>&nbsp;|&nbsp;<a href="javascript:if(window.confirm('ȷ����չ��ﳵ��')==true){window.location.href='<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/cart-clearAll.html';}" class="a1">��չ��ﳵ</a></div>
         <div style="width:200px; text-align:right; float:right; padding-right:20px">�۸��ܼƣ�&nbsp;<strong><?php echo $this->_reg_objects['util'][0]->moneyFormat($this->_tpl_vars['totalPrice']);?>
</strong>&nbsp;Ԫ</div>
     </div>
     <div style="width:850px; height:40px">
         <div style="width:200px; text-align:right; float:right; padding-top:10px; padding-right:10px"><a href="<?php if ($this->_tpl_vars['arrayCarInfos'] == false || $this->_tpl_vars['arrayCarInfos'] == ''): ?>javascript:alert('��ѡ��ͼ�飬Ȼ���ύ������'); <?php else: ?><?php if ($this->_tpl_vars['isLogin'] == 'T'): ?><?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/getbuyuserinfo.html<?php else: ?> <?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/telllogin.html<?php endif; ?><?php endif; ?>"><img src="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/button_gosyt.gif"  border="0"/></a></div>
     </div>
     <div style="width:850px; height:40px; text-align:left; font-size:13px; line-height:20px; color:#0088C2">
           <strong><font color="#FF0000">��ܰ��ʾ��</font></strong><br />
         ���ڱ�վ����ʱ,��<font color="#FF0000">��Ҫ�����������cookie֧��</font>�������޷�����Ʒ��ӵ����ﳵ<br />
         ������ͼ������У�����<font color="#FF0000">��Ҫʹ��������������еġ�ǰ�����͡����ˡ���ť</font>������ʹ�ñ�վҳ���ڲ��еĵ������ӣ��������Է�ֹ�������������ɹ��ﳵ����Ʒ��Ϣ����
     </div>
    <br>
           
</div>
       