<?php /* Smarty version 2.6.19, created on 2009-06-05 08:10:43
         compiled from searchorder.phtml */ ?>

<div style="width:950px; background-color:#FFFFFF">
    <div style="width:930px; height:20px; background:url(<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/title4.gif); border-top:1px solid #CCCCCC; padding-top:3px; padding-left:20px; font-size:13px; text-align:left">
               ����ǰ��λ�ã������������&nbsp;>>&nbsp;������ѯ
    </div>
    <form name="search_order" method="post" action="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/searchorder.html" onsubmit="return chkSearchOrder(this)">
    <div style="width:800px; height:60px; text-align:left; padding-top:15px; font-size:13px">
        �����붩���ţ�<input type="text" name="orderno" size="50" class="input" <?php if ($this->_tpl_vars['isShow'] == 'T'): ?>value="<?php echo $this->_tpl_vars['order'][0]['orderno']; ?>
" <?php endif; ?> />&nbsp;&nbsp;<input type="submit" value="��ѯ" /><br /><br />
   &nbsp;&nbsp;&nbsp;*&nbsp;�뽫���ڱ�վ����ͼ��Ķ������������������ı����У��ڴ������Բ�ѯ��������ϸ��Ϣ�͹����ʵ�״̬
        
    </div>
    </form>
    <?php if ($this->_tpl_vars['isShow'] == 'T' && $this->_tpl_vars['isFind'] == 'T'): ?>
    <br /> 
    <div style="width:800px; border-top:1px dotted #CCCCCC; border-bottom:1px dotted #CCCCCC; padding:15px">
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
    <div style="width:800px; height:30px; padding-top:3px; text-align:left">
        <strong> ����״̬</strong>&nbsp;&nbsp;&nbsp;[&nbsp;���տ<input type="checkbox" disabled <?php if ($this->_tpl_vars['order'][0]['isfk'] == 1): ?>checked<?php endif; ?> />&nbsp;&nbsp; �ѷ�����<input type="checkbox" disabled <?php if ($this->_tpl_vars['order'][0]['isfh'] == 1): ?>checked<?php endif; ?>/> ���ջ���<input type="checkbox" disabled <?php if ($this->_tpl_vars['order'][0]['issh'] == 1): ?>checked<?php endif; ?>/>&nbsp;]
    </div>
    <?php elseif ($this->_tpl_vars['isShow'] == 'T' && $this->_tpl_vars['isFind'] == 'F'): ?>
    <div style="width:800px; height:80px; font-size:14px; border-top:1px dotted #333333">
        <br />
        <li style="display: inline; width:100%; color:#FF0000"><img src="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/mark_telllogin.gif"><br />
                    <strong>�Բ���û�в��ҵ���Ҫ�ҵĶ�����Ϣ��</strong></li>
        <li style="display: inline; width:100%; text-align:left; padding-top:10px; line-height:20px">
        &nbsp;&nbsp;�����ȷ��������������ȷ����û�в��ҵ�������Ϣ���벦���ҹ�˾�ķ���������<br />   
        </li>
                    
    </div>  
    <?php endif; ?>
    <br />   
</div>
       