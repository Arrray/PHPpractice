<?php /* Smarty version 2.6.19, created on 2010-05-13 02:37:19
         compiled from listbook.phtml */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'listbook.phtml', 65, false),)), $this); ?>
<div style="width:950px; height:200px; background-color:#FFFFFF">
    <div style="width:930px; height:30px; text-align:left; padding-top:5px; font-size:13px">
        <?php echo $this->_reg_objects['util'][0]->unHtml($this->_tpl_vars['bigtype'][0]['typename']);?>
��ͼ���������ർ����
        <?php unset($this->_sections['stID']);
$this->_sections['stID']['name'] = 'stID';
$this->_sections['stID']['loop'] = is_array($_loop=$this->_tpl_vars['smalltypes']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['stID']['show'] = true;
$this->_sections['stID']['max'] = $this->_sections['stID']['loop'];
$this->_sections['stID']['step'] = 1;
$this->_sections['stID']['start'] = $this->_sections['stID']['step'] > 0 ? 0 : $this->_sections['stID']['loop']-1;
if ($this->_sections['stID']['show']) {
    $this->_sections['stID']['total'] = $this->_sections['stID']['loop'];
    if ($this->_sections['stID']['total'] == 0)
        $this->_sections['stID']['show'] = false;
} else
    $this->_sections['stID']['total'] = 0;
if ($this->_sections['stID']['show']):

            for ($this->_sections['stID']['index'] = $this->_sections['stID']['start'], $this->_sections['stID']['iteration'] = 1;
                 $this->_sections['stID']['iteration'] <= $this->_sections['stID']['total'];
                 $this->_sections['stID']['index'] += $this->_sections['stID']['step'], $this->_sections['stID']['iteration']++):
$this->_sections['stID']['rownum'] = $this->_sections['stID']['iteration'];
$this->_sections['stID']['index_prev'] = $this->_sections['stID']['index'] - $this->_sections['stID']['step'];
$this->_sections['stID']['index_next'] = $this->_sections['stID']['index'] + $this->_sections['stID']['step'];
$this->_sections['stID']['first']      = ($this->_sections['stID']['iteration'] == 1);
$this->_sections['stID']['last']       = ($this->_sections['stID']['iteration'] == $this->_sections['stID']['total']);
?>     
            <li style="display:inline"><a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/listbook-<?php echo $this->_tpl_vars['smalltypes'][$this->_sections['stID']['index']]['id']; ?>
-1.html" class="<?php if ($this->_tpl_vars['stid'] == $this->_tpl_vars['smalltypes'][$this->_sections['stID']['index']]['id']): ?>a31<?php else: ?>a3<?php endif; ?>">��<?php echo $this->_reg_objects['util'][0]->unHtml($this->_tpl_vars['smalltypes'][$this->_sections['stID']['index']]['typename']);?>
</a>&nbsp;</li>
        <?php endfor; endif; ?>
    </div>    
    <div style="width:930px; height:21px; background:url(<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/title4.gif); border-top:1px solid #CCCCCC; padding-top:5px; text-align:left; padding-left:20px; font-size:13px">
                      ����ǰ��λ�ã������������&nbsp;>>&nbsp;<?php echo $this->_reg_objects['util'][0]->unHtml($this->_tpl_vars['bigtype'][0]['typename']);?>
��ͼ��ר��&nbsp;>>&nbsp;<?php echo $this->_reg_objects['util'][0]->unHtml($this->_tpl_vars['smalltype'][0]['typename']);?>
��ͼ��         
    </div>    
    <div style="width:930px; height:60px; text-align:left; padding-top:5px; background-color:#F7F7F7; line-height:22px; padding-left:30px">
        <font color="#990000">������ʽ��</font><br>&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/listbook-<?php echo $this->_tpl_vars['page']; ?>
-1-<?php echo $this->_tpl_vars['cctype']; ?>
-<?php echo $this->_tpl_vars['stid']; ?>
.html" class="<?php if ($this->_tpl_vars['pltype'] == '1'): ?>a31<?php else: ?>a3<?php endif; ?>">�ϼ�ʱ��</a>&nbsp;|&nbsp;<a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/listbook-<?php echo $this->_tpl_vars['page']; ?>
-2-<?php echo $this->_tpl_vars['cctype']; ?>
-<?php echo $this->_tpl_vars['stid']; ?>
.html" class="<?php if ($this->_tpl_vars['pltype'] == '2'): ?>a31<?php else: ?>a3<?php endif; ?>">����ʱ��</a>&nbsp;|&nbsp;<a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/listbook-<?php echo $this->_tpl_vars['page']; ?>
-3-<?php echo $this->_tpl_vars['cctype']; ?>
-<?php echo $this->_tpl_vars['stid']; ?>
.html" class="<?php if ($this->_tpl_vars['pltype'] == '3'): ?>a31<?php else: ?>a3<?php endif; ?>">�۸��ɵ͵���</a>&nbsp;|&nbsp;<a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/listbook-<?php echo $this->_tpl_vars['page']; ?>
-4-<?php echo $this->_tpl_vars['cctype']; ?>
-<?php echo $this->_tpl_vars['stid']; ?>
.html" class="<?php if ($this->_tpl_vars['pltype'] == '4'): ?>a31<?php else: ?>a3<?php endif; ?>">��������ɶൽ��</a>&nbsp;    
                       <br>
        <font color="#990000">��ͼ���Σ�</font><br>&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/listbook-<?php echo $this->_tpl_vars['page']; ?>
-<?php echo $this->_tpl_vars['pltype']; ?>
-1-<?php echo $this->_tpl_vars['stid']; ?>
.html" class="<?php if ($this->_tpl_vars['cctype'] == '1'): ?>a31<?php else: ?>a3<?php endif; ?>">ȫ��</a>&nbsp;|&nbsp; <a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/listbook-<?php echo $this->_tpl_vars['page']; ?>
-<?php echo $this->_tpl_vars['pltype']; ?>
-2-<?php echo $this->_tpl_vars['stid']; ?>
.html" class="<?php if ($this->_tpl_vars['cctype'] == '2'): ?>a31<?php else: ?>a3<?php endif; ?>">��������</a>&nbsp;|&nbsp;<a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/listbook-<?php echo $this->_tpl_vars['page']; ?>
-<?php echo $this->_tpl_vars['pltype']; ?>
-3-<?php echo $this->_tpl_vars['stid']; ?>
.html" class="<?php if ($this->_tpl_vars['cctype'] == '3'): ?>a31<?php else: ?>a3<?php endif; ?>">��߱ر�</a>&nbsp;|&nbsp;<a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/listbook-<?php echo $this->_tpl_vars['page']; ?>
-<?php echo $this->_tpl_vars['pltype']; ?>
-4-<?php echo $this->_tpl_vars['stid']; ?>
.html" class="<?php if ($this->_tpl_vars['cctype'] == '4'): ?>a31<?php else: ?>a3<?php endif; ?>">�߼����� </a>                                       
    </div>  
    <div style="width:930px; height:25px; border-top:1px dotted #CCCCCC; padding-top:5px; text-align:left; padding-left:20px; background-color:#FFFBE5">
        <li style="display:inline"> ��ǰ���з�ʽ��</li>
        <li style="background-color:#EAEDEE; display:inline; width:120px; height:16px; text-align:center; padding-top:2px">
             <?php if ($this->_tpl_vars['pltype'] == '1'): ?>
                                                 �ϼ�ʱ��
             <?php elseif ($this->_tpl_vars['pltype'] == '2'): ?>
                                                   ����ʱ��
             <?php elseif ($this->_tpl_vars['pltype'] == '3'): ?>
                                                    �۸��ɵ͵���  
             <?php elseif ($this->_tpl_vars['pltype'] == '4'): ?>
                                                      ��������ɶൽ��               
             <?php endif; ?>
         </li>    
         <li style="display:inline; padding-left:20px">��ǰͼ���Σ� </li>
         <li style="background-color:#EAEDEE; display:inline; width:90px; height:16px; text-align:center; padding-top:2px">
              <?php if ($this->_tpl_vars['cctype'] == '1'): ?>
                                                      ȫ��
              <?php elseif ($this->_tpl_vars['cctype'] == '2'): ?>
                                                       ��������
              <?php elseif ($this->_tpl_vars['cctype'] == '3'): ?>
                                                       ��߱ر� 
              <?php elseif ($this->_tpl_vars['cctype'] == '4'): ?>
                                                       �߼�����               
              <?php endif; ?>
          </li>
          <?php if ($this->_tpl_vars['bookinfos']['countRs'] > 0): ?>     
          <li style="display:inline; padding-left:20px">����ͼ�鹲&nbsp;<?php echo $this->_tpl_vars['bookinfos']['countRs']; ?>
&nbsp;��&nbsp;&nbsp;ÿҳ��ʾ&nbsp;<?php echo $this->_tpl_vars['bookinfos']['pageSize']; ?>
&nbsp;��&nbsp;&nbsp;��&nbsp;<?php echo $this->_tpl_vars['bookinfos']['page']; ?>
&nbsp;ҳ/��&nbsp;<?php echo $this->_tpl_vars['bookinfos']['countPage']; ?>
&nbsp;ҳ&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/listbook-<?php echo $this->_tpl_vars['bookinfos']['first']; ?>
-<?php echo $this->_tpl_vars['pltype']; ?>
-<?php echo $this->_tpl_vars['cctype']; ?>
-<?php echo $this->_tpl_vars['stid']; ?>
.html" class="a1">��ҳ</a>&nbsp;
              <a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/listbook-<?php echo $this->_tpl_vars['bookinfos']['previous']; ?>
-<?php echo $this->_tpl_vars['pltype']; ?>
-<?php echo $this->_tpl_vars['cctype']; ?>
-<?php echo $this->_tpl_vars['stid']; ?>
.html" class="a1">��һҳ</a>&nbsp;
              <a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/listbook-<?php echo $this->_tpl_vars['bookinfos']['next']; ?>
-<?php echo $this->_tpl_vars['pltype']; ?>
-<?php echo $this->_tpl_vars['cctype']; ?>
-<?php echo $this->_tpl_vars['stid']; ?>
.html" class="a1">��һҳ</a>&nbsp;
              <a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/listbook-<?php echo $this->_tpl_vars['bookinfos']['last']; ?>
-<?php echo $this->_tpl_vars['pltype']; ?>
-<?php echo $this->_tpl_vars['cctype']; ?>
-<?php echo $this->_tpl_vars['stid']; ?>
.html" class="a1">βҳ</a>
          </li>            
          <?php endif; ?>
    </div> 
<?php if ($this->_tpl_vars['bookinfos']['countRs'] > 0): ?> 
<?php unset($this->_sections['pbID']);
$this->_sections['pbID']['name'] = 'pbID';
$this->_sections['pbID']['loop'] = is_array($_loop=$this->_tpl_vars['bookinfos']['data']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['pbID']['show'] = true;
$this->_sections['pbID']['max'] = $this->_sections['pbID']['loop'];
$this->_sections['pbID']['step'] = 1;
$this->_sections['pbID']['start'] = $this->_sections['pbID']['step'] > 0 ? 0 : $this->_sections['pbID']['loop']-1;
if ($this->_sections['pbID']['show']) {
    $this->_sections['pbID']['total'] = $this->_sections['pbID']['loop'];
    if ($this->_sections['pbID']['total'] == 0)
        $this->_sections['pbID']['show'] = false;
} else
    $this->_sections['pbID']['total'] = 0;
if ($this->_sections['pbID']['show']):

            for ($this->_sections['pbID']['index'] = $this->_sections['pbID']['start'], $this->_sections['pbID']['iteration'] = 1;
                 $this->_sections['pbID']['iteration'] <= $this->_sections['pbID']['total'];
                 $this->_sections['pbID']['index'] += $this->_sections['pbID']['step'], $this->_sections['pbID']['iteration']++):
$this->_sections['pbID']['rownum'] = $this->_sections['pbID']['iteration'];
$this->_sections['pbID']['index_prev'] = $this->_sections['pbID']['index'] - $this->_sections['pbID']['step'];
$this->_sections['pbID']['index_next'] = $this->_sections['pbID']['index'] + $this->_sections['pbID']['step'];
$this->_sections['pbID']['first']      = ($this->_sections['pbID']['iteration'] == 1);
$this->_sections['pbID']['last']       = ($this->_sections['pbID']['iteration'] == $this->_sections['pbID']['total']);
?>
<div style="width:930px">
    <br>
    <div style="width:100%; height:180px">
        <div style="width:20%; height:100%; float:left">
            <a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/bookinfo-<?php echo $this->_tpl_vars['bookinfos']['data'][$this->_sections['pbID']['index']]['id']; ?>
.html"><img src="<?php echo $this->_tpl_vars['system'][0]['bookimgurl']; ?>
/<?php echo $this->_tpl_vars['bookinfos']['data'][$this->_sections['pbID']['index']]['bookimg']; ?>
" width="110" height="150" style="border:1px solid #123456" /></a>
        </div>
        
        <div style="width:78%; height:100%; float:right; text-align:left; font-size:13px">
            <li style="display:inline"><a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/bookinfo-<?php echo $this->_tpl_vars['bookinfos']['data'][$this->_sections['pbID']['index']]['id']; ?>
.html" class="a5"><strong><?php echo $this->_tpl_vars['bookinfos']['data'][$this->_sections['pbID']['index']]['bookname']; ?>
</strong></a></li>
            <br><br>
            <li style="display:inline">�����磺<?php echo $this->_tpl_vars['bookinfos']['data'][$this->_sections['pbID']['index']]['pubname']; ?>
</li>
            <br><br>
            <li style="display:inline">���ߣ�<?php echo $this->_tpl_vars['bookinfos']['data'][$this->_sections['pbID']['index']]['writer']; ?>
</li>
            <br><br>
            <li style="display:inline">�ϼ�ʱ�䣺<?php echo ((is_array($_tmp=$this->_tpl_vars['bookinfos']['data'][$this->_sections['pbID']['index']]['addtime'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 10, "") : smarty_modifier_truncate($_tmp, 10, "")); ?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;����ʱ�䣺<?php echo ((is_array($_tmp=$this->_tpl_vars['bookinfos']['data'][$this->_sections['pbID']['index']]['pubtime'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 10, "") : smarty_modifier_truncate($_tmp, 10, "")); ?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;���������<?php echo $this->_tpl_vars['bookinfos']['data'][$this->_sections['pbID']['index']]['browsertime']; ?>
&nbsp;��</li>
            <br><br>
            <li style="display:inline">�г��ۣ�<img src="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/mark_green.gif" />&nbsp;<s><?php echo $this->_reg_objects['util'][0]->moneyFormat($this->_tpl_vars['bookinfos']['data'][$this->_sections['pbID']['index']]['oldprice']);?>
</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <font color="#FF0000">��Ա�ۣ�<img src="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/mark_red.gif" />&nbsp;<?php echo $this->_reg_objects['util'][0]->moneyFormat($this->_tpl_vars['bookinfos']['data'][$this->_sections['pbID']['index']]['newprice']);?>
</font>          
             </li> 
             <br><br> 
             <li style="display:inline"><a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/cart-<?php echo $this->_tpl_vars['bookinfos']['data'][$this->_sections['pbID']['index']]['id']; ?>
-add.html"><img src="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/button_order.gif" border="0"/></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/bookinfo-<?php echo $this->_tpl_vars['bookinfos']['data'][$this->_sections['pbID']['index']]['id']; ?>
.html"><img src="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/button_info.gif" border="0"/></a></li>                            
        </div>
        
    </div>
    <div style="width:95%; height:50px; border:1px solid #CCCCCC; text-align:left; line-height:18px; color:#990000; padding:5px">
    <?php echo $this->_reg_objects['util'][0]->unHtml(((is_array($_tmp=$this->_tpl_vars['bookinfos']['data'][$this->_sections['pbID']['index']]['about'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 420, "...", false) : smarty_modifier_truncate($_tmp, 420, "...", false)));?>

    </div>
</div>
<?php endfor; endif; ?>   
<?php else: ?>
<div style="width:500px; height:80px; font-size:14px; color:#FF0000">
    <img src="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/mark_telllogin.gif"><br />
                <strong>�Բ������޸���ͼ�飡</strong>
</div>
<?php endif; ?>
    
    <div style="width:50px; height:10px; font-size:0px"></div>
    <div style="width:930px; height:25px; border-top:1px dotted #CCCCCC; padding-top:5px; text-align:left; padding-left:20px; background-color:#FFFBE5">
        <li style="display:inline"> ��ǰ���з�ʽ��</li>
        <li style="background-color:#EAEDEE; display:inline; width:110px; height:16px; text-align:center; padding-top:2px">
             <?php if ($this->_tpl_vars['pltype'] == '1'): ?>
                                                 �ϼ�ʱ��
             <?php elseif ($this->_tpl_vars['pltype'] == '2'): ?>
                                                   ����ʱ��
             <?php elseif ($this->_tpl_vars['pltype'] == '3'): ?>
                                                    �۸��ɵ͵���  
             <?php elseif ($this->_tpl_vars['pltype'] == '4'): ?>
                                                      ��������ɶൽ��               
             <?php endif; ?>
         </li>    
         <li style="display:inline; padding-left:20px">��ǰͼ���Σ� </li>
         <li style="background-color:#EAEDEE; display:inline; width:80px; height:16px; text-align:center; padding-top:2px">
              <?php if ($this->_tpl_vars['cctype'] == '1'): ?>
                                                      ȫ��
              <?php elseif ($this->_tpl_vars['cctype'] == '2'): ?>
                                                       ��������
              <?php elseif ($this->_tpl_vars['cctype'] == '3'): ?>
                                                       ��߱ر� 
              <?php elseif ($this->_tpl_vars['cctype'] == '4'): ?>
                                                       �߼�����               
              <?php endif; ?>
          </li>  
          <?php if ($this->_tpl_vars['bookinfos']['countRs'] > 0): ?>   
          <li style="display:inline; padding-left:20px">����ͼ�鹲&nbsp;<?php echo $this->_tpl_vars['bookinfos']['countRs']; ?>
&nbsp;��&nbsp;&nbsp;ÿҳ��ʾ&nbsp;<?php echo $this->_tpl_vars['bookinfos']['pageSize']; ?>
&nbsp;��&nbsp;&nbsp;��&nbsp;<?php echo $this->_tpl_vars['bookinfos']['page']; ?>
&nbsp;ҳ/��&nbsp;<?php echo $this->_tpl_vars['bookinfos']['countPage']; ?>
&nbsp;ҳ&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/listbook-<?php echo $this->_tpl_vars['bookinfos']['first']; ?>
-<?php echo $this->_tpl_vars['pltype']; ?>
-<?php echo $this->_tpl_vars['cctype']; ?>
-<?php echo $this->_tpl_vars['stid']; ?>
.html" class="a1">��ҳ</a>&nbsp;
              <a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/listbook-<?php echo $this->_tpl_vars['bookinfos']['previous']; ?>
-<?php echo $this->_tpl_vars['pltype']; ?>
-<?php echo $this->_tpl_vars['cctype']; ?>
-<?php echo $this->_tpl_vars['stid']; ?>
.html" class="a1">��һҳ</a>&nbsp;
              <a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/listbook-<?php echo $this->_tpl_vars['bookinfos']['next']; ?>
-<?php echo $this->_tpl_vars['pltype']; ?>
-<?php echo $this->_tpl_vars['cctype']; ?>
-<?php echo $this->_tpl_vars['stid']; ?>
.html" class="a1">��һҳ</a>&nbsp;
              <a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/listbook-<?php echo $this->_tpl_vars['bookinfos']['last']; ?>
-<?php echo $this->_tpl_vars['pltype']; ?>
-<?php echo $this->_tpl_vars['cctype']; ?>
-<?php echo $this->_tpl_vars['stid']; ?>
.html" class="a1">βҳ</a>
          </li>         
          <?php endif; ?>
    </div>   
  
    <div style="width:50px; height:10px; font-size:0px"></div> 
  
</div>