<?php /* Smarty version 2.6.19, created on 2009-06-10 08:25:13
         compiled from help.phtml */ ?>
<div style="width:950px;  background-color:#FFFFFF">
    <div style="width:930px">
        <div style="width:200px; height:300px; float:left">
            <div style="width:200px; height:30px">
                <div style="width:6px; height:30px; background:url(<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/dg_left.gif); float:left"></div>
                <div style="width:188px; height:30px; background:url(<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/dg_center.gif); float:left; padding-top:5px">
                    <div style="width:45px; height:25px; float:left; padding-top:5px; <?php if ($this->_tpl_vars['cctype'] == 1): ?>background:url(<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/dg_button_bg.gif)<?php endif; ?>"><a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/help-1.html" class="<?php if ($this->_tpl_vars['cctype'] == 1): ?>a2<?php else: ?>a1<?php endif; ?>"><strong>ȫ��</strong></a></div>
                    
                    <div style="width:45px; height:25px;  float:left; padding-top:5px; <?php if ($this->_tpl_vars['cctype'] == 2): ?>background:url(<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/dg_button_bg.gif)<?php endif; ?>"><a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/help-2.html" class="<?php if ($this->_tpl_vars['cctype'] == 2): ?>a2<?php else: ?>a1<?php endif; ?>"><strong>����</strong></a></div>
                
                    <div style="width:45px; height:25px;  float:left; padding-top:5px; <?php if ($this->_tpl_vars['cctype'] == 3): ?>background:url(<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/dg_button_bg.gif)<?php endif; ?>"><a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/help-3.html" class="<?php if ($this->_tpl_vars['cctype'] == 3): ?>a2<?php else: ?>a1<?php endif; ?>"><strong>�м�</strong></a></div>
                    
                    <div style="width:45px; height:25px;  float:left; padding-top:5px; <?php if ($this->_tpl_vars['cctype'] == 4): ?>background:url(<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/dg_button_bg.gif)<?php endif; ?>"><a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/help-4.html" class="<?php if ($this->_tpl_vars['cctype'] == 4): ?>a2<?php else: ?>a1<?php endif; ?>"><strong>�߼�</strong></a></div>
                </div>    
                <div style="width:6px; height:30px; background:url(<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/dg_right.gif); float:right"></div>        
            </div>
            <div style="width:200px; background-color:#FDFBED; border-left:1px solid #FF6700; border-right:1px solid #FF6700; border-bottom:1px solid #FF6700">
                <div style="width:100%; height:22px; border-bottom:1px dotted #CCCCCC; background-color:#F7F7F7; padding-top:5px; text-align:left; padding-left:15px">
                                                     ��ǰ������
                    <?php if ($this->_tpl_vars['cctype'] == '1'): ?>
                                                                ȫ��ͼ�鵼��
                    <?php elseif ($this->_tpl_vars['cctype'] == '2'): ?>
                                                                  ����������ͼ��
                    <?php elseif ($this->_tpl_vars['cctype'] == '3'): ?>
                                                                  ��߱ر���ͼ��
                    <?php elseif ($this->_tpl_vars['cctype'] == '4'): ?>
                                                                  �߼�������ͼ��
                    <?php endif; ?>
                </div>
                <div style="width:50px; height:10px; font-size:0px"></div>
                <?php unset($this->_sections['bID']);
$this->_sections['bID']['name'] = 'bID';
$this->_sections['bID']['loop'] = is_array($_loop=$this->_tpl_vars['bigtypes']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                <div style="width:195px">
                    <div style="width:100%; height:25px; text-align:left; padding-left:6px; padding-top:5px; color:#990000">
                        ��&nbsp;<?php echo $this->_reg_objects['util'][0]->unHtml($this->_tpl_vars['bigtypes'][$this->_sections['bID']['index']]['typename']);?>

                    </div>
                
                    <div style="width:100%">
                        <?php unset($this->_sections['sID']);
$this->_sections['sID']['name'] = 'sID';
$this->_sections['sID']['loop'] = is_array($_loop=$this->_tpl_vars['smalltypes']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['sID']['show'] = true;
$this->_sections['sID']['max'] = $this->_sections['sID']['loop'];
$this->_sections['sID']['step'] = 1;
$this->_sections['sID']['start'] = $this->_sections['sID']['step'] > 0 ? 0 : $this->_sections['sID']['loop']-1;
if ($this->_sections['sID']['show']) {
    $this->_sections['sID']['total'] = $this->_sections['sID']['loop'];
    if ($this->_sections['sID']['total'] == 0)
        $this->_sections['sID']['show'] = false;
} else
    $this->_sections['sID']['total'] = 0;
if ($this->_sections['sID']['show']):

            for ($this->_sections['sID']['index'] = $this->_sections['sID']['start'], $this->_sections['sID']['iteration'] = 1;
                 $this->_sections['sID']['iteration'] <= $this->_sections['sID']['total'];
                 $this->_sections['sID']['index'] += $this->_sections['sID']['step'], $this->_sections['sID']['iteration']++):
$this->_sections['sID']['rownum'] = $this->_sections['sID']['iteration'];
$this->_sections['sID']['index_prev'] = $this->_sections['sID']['index'] - $this->_sections['sID']['step'];
$this->_sections['sID']['index_next'] = $this->_sections['sID']['index'] + $this->_sections['sID']['step'];
$this->_sections['sID']['first']      = ($this->_sections['sID']['iteration'] == 1);
$this->_sections['sID']['last']       = ($this->_sections['sID']['iteration'] == $this->_sections['sID']['total']);
?>
                        <?php if ($this->_tpl_vars['bigtypes'][$this->_sections['bID']['index']]['id'] == $this->_tpl_vars['smalltypes'][$this->_sections['sID']['index']]['bigtypeid']): ?>
                        <div style="width:49%; height:18px; float:left; text-align:left; padding-left:12px">
                            ��&nbsp;<a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/listbook-<?php echo $this->_tpl_vars['smalltypes'][$this->_sections['sID']['index']]['id']; ?>
-<?php if ($this->_tpl_vars['cctype'] == 1): ?>1<?php elseif ($this->_tpl_vars['cctype'] == 2): ?>2<?php elseif ($this->_tpl_vars['cctype'] == 3): ?>3<?php elseif ($this->_tpl_vars['cctype'] == 4): ?>4<?php endif; ?>.html" class="a4"><?php echo $this->_reg_objects['util'][0]->unHtml($this->_tpl_vars['smalltypes'][$this->_sections['sID']['index']]['typename']);?>
</a>
                        </div>
                        <?php endif; ?>    
                        <?php endfor; endif; ?>   
                    </div>
                
                </div>
                <?php endfor; endif; ?>
                <div style="width:50px; height:10px; font-size:0px"></div>
            </div>
            
            <div style="width:50px; height:7px; font-size:0px"></div>        
      
        </div>
        <!-- �м� -->
        
        <div style="width:700px; height:100%; float:right">
            <div style="width: 100%; height:30px; text-align:left; padding-top:5px; border-bottom:1px solid #CCCCCC">
                                         ��ǰλ�ã������������&nbsp;>>&nbsp;����ָ��
            </div> 
            <br /> 
            <a name="1" id="1">
            <div style="width: 660px; height:22px; border-bottom:1px dotted #AED1EF">
                <div style="width: 120px; height:22px; float:left; background-color:#E7F0F8; text-align:center; padding-top:4px">QQ������ѯ</div>
            </div>
            
            <div style="width: 660px; text-align:left; line-height:20px; padding-top:10px; padding-bottom:10px; font-size:13px; padding-left:30px">
                ��ҵQQ��100310063                  
            </div>
              <a name="2" id="2">  
            <div style="width: 660px; height:22px; border-bottom:1px dotted #AED1EF">
                <div style="width: 120px; height:22px; float:left; background-color:#E7F0F8; text-align:center; padding-top:4px">��ѯ����</div>
            </div>
            
            <div style="width: 660px; text-align:left; line-height:20px; padding-top:10px; padding-bottom:10px; font-size:13px; padding-left:30px">
             400�绰��400-657-1066&nbsp;&nbsp;&nbsp;&nbsp;  ��ѯ�绰��0431-84978981&nbsp;&nbsp;84978982                 
            </div>
            
            <a name="3" id="3">
            <div style="width: 660px; height:22px; border-bottom:1px dotted #AED1EF">
                <div style="width: 120px; height:22px; float:left; background-color:#E7F0F8; text-align:center; padding-top:4px">���л��</div>
            </div>
            <div style="width: 660px; height:100px; text-align:left; line-height:20px; padding-top:10px; padding-bottom:10px; font-size:13px; padding-left:30px">
            ��1����ҵ�˺ţ�221000661018010002495<br />
�������У����г������������֧��
���տ��ˣ�����ʡ���տƼ����޹�˾<br />
���տ��ַ������ʡ�����ж�������̩�㳡C��2205��<br /><br />
            ��2���й���������<br />
��������622202  4200003577105
���տ��ˣ��ߴ���<br />
���տ��ַ������ʡ�����ж�������̩�㳡C��2205��<br /><br />

           ��3���й���������<br />
��һ��ͨ��4367 4209 4212 0763 689
���տ��ˣ��ߴ���<br />
���տ��ַ������ʡ�����ж�������̩�㳡C��2205��<br /><br />
    ��4���й���ͨ����<br />
��һ��ͨ��622260  0340002607958
���տ��ˣ��ߴ���<br />
���տ��ַ������ʡ�����ж�������̩�㳡C��2205��<br /><br />
  ��5���й�ũҵ����<br />
��������622848  0530181373917
���տ��ˣ��ߴ���<br />
���տ��ַ������ʡ�����ж�������̩�㳡C��2205��<br />




                                  
            </div>              
            <a name="4" id="4">
            <div style="width: 660px; height:22px; border-bottom:1px dotted #AED1EF">
                <div style="width: 120px; height:22px; float:left; background-color:#E7F0F8; text-align:center; padding-top:4px">�ʾ��ʵ�</div>
            </div>
            <div style="width: 660px; text-align:left; line-height:20px; padding-top:10px; padding-bottom:10px; font-size:13px; padding-left:30px">
�տ��ַ������ʡ�����ж�������ʢ���89����̩�㳡C��2205��<br />
���������룺130031<br />
���տ��ˣ�����ʡ���տƼ����޹�˾<br />
��ע�⣺�뽫��������д�ڸ�������<br />
                                  
            </div>                              
 
 <a name="5" id="5">
            <div style="width: 660px; height:22px; border-bottom:1px dotted #AED1EF">
                <div style="width: 120px; height:22px; float:left; background-color:#E7F0F8; text-align:center; padding-top:4px">��������֧��</div>
            </div>
            <div style="width: 660px; text-align:left; line-height:20px; padding-top:10px; padding-bottom:10px; font-size:13px; padding-left:30px">
             ͨ�������ṩ������֧���ӿڽ�������֧��<br />
��ע�⣺�û���Ҫ�����ع��а�����������ҵ��
                                  
            </div>  
 <a name="6" id="6">
            <div style="width: 660px; height:22px; border-bottom:1px dotted #AED1EF">
                <div style="width: 120px; height:22px; float:left; background-color:#E7F0F8; text-align:center; padding-top:4px">֧��������֧��</div>
            </div>
             <div style="width: 660px; text-align:left; line-height:20px; padding-top:10px; padding-bottom:10px; font-size:13px; padding-left:30px">
                 ͨ��֧������������֧��<br />
��ע�⣺�û���Ҫ���������а�����������ҵ��
                                  
            </div>  
 <a name="7" id="7">
            <div style="width: 660px; height:22px; border-bottom:1px dotted #AED1EF">
                <div style="width: 120px; height:22px; float:left; background-color:#E7F0F8; text-align:center; padding-top:4px">ʡ�������ʼ� </div>
            </div>
             <div style="width: 660px; text-align:left; line-height:20px; padding-top:10px; padding-bottom:10px; font-size:13px; padding-left:30px">
                  ƽ�� ������8Ԫ��֧�ֹ��ڰ����� <br />
  ��ͨ��� ������20Ԫ������ʱ��ԼΪ2-4�죬֧�ֹ���һ�������У�  <br />
  EMS��� ������30Ԫ��֧�ֹ��ڣ�                   
            </div>          
 <a name="8" id="8">
             <div style="width: 660px; height:22px; border-bottom:1px dotted #AED1EF">
                <div style="width: 120px; height:22px; float:left; background-color:#E7F0F8; text-align:center; padding-top:4px">����ȡ�� </div>
            </div>
            <div style="width: 660px; text-align:left; line-height:20px; padding-top:10px; padding-bottom:10px; font-size:13px; padding-left:30px">
                 �û��ɵ����յ����̳�����ȡ��                 
            </div>        
        <a name="9" id="9">
             <div style="width: 660px; height:22px; border-bottom:1px dotted #AED1EF">
                <div style="width: 120px; height:22px; float:left; background-color:#E7F0F8; text-align:center; padding-top:4px">�����ͻ�����  </div>
            </div>
            <div style="width: 660px; text-align:left; line-height:20px; padding-top:10px; padding-bottom:10px; font-size:13px; padding-left:30px">
                  �ҹ�˾����Ϊ���������ڹ���ͼ����û����������ͻ�                
            </div>  
            <a name="10" id="10">
             <div style="width: 660px; height:22px; border-bottom:1px dotted #AED1EF">
                <div style="width: 120px; height:22px; float:left; background-color:#E7F0F8; text-align:center; padding-top:4px">��������   </div>
            </div>
            <div style="width: 660px; text-align:left; line-height:20px; padding-top:10px; padding-bottom:10px; font-size:13px; padding-left:30px">
                �û���¼->ѡ��ͼ��->���빺�ﳵ->��д�ջ�����Ϣ->ȷ�϶���->ѡȡ���ʽ->ȷ��֧����ʽ����ѡ���֧����ʽ����                 
            </div> 
            <a name="11" id="11">
             <div style="width: 660px; height:22px; border-bottom:1px dotted #AED1EF">
                <div style="width: 120px; height:22px; float:left; background-color:#E7F0F8; text-align:center; padding-top:4px">ȡ������  </div>
            </div>
            <div style="width: 660px; text-align:left; line-height:20px; padding-top:10px; padding-bottom:10px; font-size:13px; padding-left:30px">
            �û���¼->�û�����->�ҵĶ���->�鿴Ҫȡ���Ķ���->��������·���ȡ��������ť                      
            </div>                        
            
            
            
                        
            
            </div>             
        </div>
</div>