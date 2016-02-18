<?php /* Smarty version 2.6.19, created on 2009-06-05 08:10:43
         compiled from searchorder.phtml */ ?>

<div style="width:950px; background-color:#FFFFFF">
    <div style="width:930px; height:20px; background:url(<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/title4.gif); border-top:1px solid #CCCCCC; padding-top:3px; padding-left:20px; font-size:13px; text-align:left">
               您当前的位置：明日网上书店&nbsp;>>&nbsp;订单查询
    </div>
    <form name="search_order" method="post" action="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/searchorder.html" onsubmit="return chkSearchOrder(this)">
    <div style="width:800px; height:60px; text-align:left; padding-top:15px; font-size:13px">
        请输入订单号：<input type="text" name="orderno" size="50" class="input" <?php if ($this->_tpl_vars['isShow'] == 'T'): ?>value="<?php echo $this->_tpl_vars['order'][0]['orderno']; ?>
" <?php endif; ?> />&nbsp;&nbsp;<input type="submit" value="查询" /><br /><br />
   &nbsp;&nbsp;&nbsp;*&nbsp;请将您在本站订购图书的订单号码输入在上述文本框中，在此您可以查询到订单详细信息和购买及邮递状态
        
    </div>
    </form>
    <?php if ($this->_tpl_vars['isShow'] == 'T' && $this->_tpl_vars['isFind'] == 'T'): ?>
    <br /> 
    <div style="width:800px; border-top:1px dotted #CCCCCC; border-bottom:1px dotted #CCCCCC; padding:15px">
        <div style="width:750px; height:22px; text-align:left; padding-top:5px">
            <li style="display:inline; width:200px; height:22px; background-color:#006D84; padding-top:5px; padding-left:10px; color:#FFFFFF; float:left"> <strong>订单号：<?php echo $this->_tpl_vars['order'][0]['orderno']; ?>
</strong></li>
            <li style="display:inline; width:200px; height:22px; padding-top:5px; float:right">订购时间：<?php echo $this->_tpl_vars['order'][0]['addtime']; ?>
</li>
        </div>
        <div style="width:50px; height:2px; font-size:0px"></div>        
        <div style="width:750px; border:1px solid #006D84;padding-top:10px">
            <div>
                <li style="display:inline; width:50%; height:25px; float:left; text-align:left; padding-left:20px">收货人姓名：<?php echo $this->_reg_objects['util'][0]->unHtml($this->_tpl_vars['order'][0]['username']);?>
</li>
                <li style="display:inline; width:50%; height:25px; float:left; text-align:left;">性&nbsp;&nbsp;别：&nbsp;&nbsp;<?php echo $this->_tpl_vars['order'][0]['sex']; ?>
</li>
                <li style="display:inline; width:50%; height:25px; float:left; text-align:left; padding-left:20px">邮&nbsp;&nbsp;编：&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['order'][0]['yb']; ?>
</li>
                <li style="display:inline; width:50%; height:25px; float:left; text-align:left;">联系电话：<?php echo $this->_tpl_vars['order'][0]['tel']; ?>
</li>
                <li style="display:inline; width:50%; height:25px; float:left; text-align:left; padding-left:20px">收货方式：&nbsp;&nbsp;<?php echo $this->_tpl_vars['order'][0]['rectype']; ?>
</li>
                <li style="display:inline; width:50%; height:25px; float:left; text-align:left">支付方式：<?php echo $this->_tpl_vars['order'][0]['paytype']; ?>
</li>
                <li style="display:inline; width:100%; height:25px; float:left; text-align:left; padding-left:20px">收货地址：&nbsp;&nbsp;<?php echo $this->_reg_objects['util'][0]->unHtml($this->_tpl_vars['order'][0]['address']);?>
</li>
            </div>
           <br />
            <div style="width:88%; height:22px">
                <div style="width: 30%; height:22px; float:left; text-align:left">图书名称</div>  
                <div style="width: 15%; height:22px; float:left; text-align:center">市场价（元）</div> 
                <div style="width: 15%; height:22px; float:left; text-align:center">会员价（元）</div> 
                <div style="width: 15%; height:22px; float:left; text-align:center">订购数量（本）</div>   
                <div style="width: 20%; height:22px; float:left; text-align:center">价格小计（元）</div>    
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
        <div style="width:200px; float:right; padding-top:5px; text-align:right">图书价格总计：&nbsp;<strong><?php echo $this->_reg_objects['util'][0]->moneyFormat($this->_tpl_vars['order'][0]['goodsprice']);?>
</strong>&nbsp;元</div>
    </div>
    <div style="width:88%; height:25px">
        <div style="width:200px; float:right; padding-top:5px; text-align:right">运费：&nbsp;<strong><?php echo $this->_reg_objects['util'][0]->moneyFormat($this->_tpl_vars['order'][0]['yjprice']);?>
</strong>&nbsp;元</div>
    </div>    
    <div style="width:88%; height:25px">
        <div style="width:200px; float:right; padding-top:5px; text-align:right; border-top:1px solid #333333">您应该支付的总运费：&nbsp;<strong><?php echo $this->_reg_objects['util'][0]->moneyFormat($this->_tpl_vars['order'][0]['totalprice']);?>
</strong>&nbsp;元</div>
    </div>             
            <br />
         
        </div>
        
        
    </div> 
    <div style="width:800px; height:30px; padding-top:3px; text-align:left">
        <strong> 订购状态</strong>&nbsp;&nbsp;&nbsp;[&nbsp;已收款：<input type="checkbox" disabled <?php if ($this->_tpl_vars['order'][0]['isfk'] == 1): ?>checked<?php endif; ?> />&nbsp;&nbsp; 已发货：<input type="checkbox" disabled <?php if ($this->_tpl_vars['order'][0]['isfh'] == 1): ?>checked<?php endif; ?>/> 已收货：<input type="checkbox" disabled <?php if ($this->_tpl_vars['order'][0]['issh'] == 1): ?>checked<?php endif; ?>/>&nbsp;]
    </div>
    <?php elseif ($this->_tpl_vars['isShow'] == 'T' && $this->_tpl_vars['isFind'] == 'F'): ?>
    <div style="width:800px; height:80px; font-size:14px; border-top:1px dotted #333333">
        <br />
        <li style="display: inline; width:100%; color:#FF0000"><img src="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/mark_telllogin.gif"><br />
                    <strong>对不起，没有查找到您要找的订单信息！</strong></li>
        <li style="display: inline; width:100%; text-align:left; padding-top:10px; line-height:20px">
        &nbsp;&nbsp;·如果确定订单号输入正确，但没有查找到订单信息，请拨打我公司的服务热线咨<br />   
        </li>
                    
    </div>  
    <?php endif; ?>
    <br />   
</div>
       