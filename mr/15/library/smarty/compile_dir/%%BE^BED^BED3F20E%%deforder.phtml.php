<?php /* Smarty version 2.6.19, created on 2009-06-05 06:38:34
         compiled from deforder.phtml */ ?>

<div style="width:950px; background-color:#FFFFFF">
    <div style="width:930px; height:20px; background:url(<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/title4.gif); border-top:1px solid #CCCCCC; padding-top:3px; padding-left:20px; font-size:13px; text-align:left">
               您当前的位置：明日网上书店&nbsp;>>&nbsp;确认订单
    </div>
    <br />
    <div>
        <img src="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/gulc3.gif" usemap="#Map" border="0"/>
        <map name="Map" id="Map">
            <area shape="rect" coords="190,45,296,80" href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/cart.html" />
            <area shape="rect" coords="312,23,446,60" href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/getbuyuserinfo.html" />
        </map>
    </div>
    <br />
    <div style="width:850px; height:22px; border-bottom:1px dotted #333333">
        <div style="width:120px; height:22px; float:left; background-color:#7C7C7C; color:#FFFFFF; padding-top:5px">您所订购的图书</div>
    </div>
    <br />    
    <div style="width:800px; height:22px; border-bottom:1px solid #333333">
        <div style="width: 40%; height:12px; float:left; text-align:center; font-size:13px; color:#003399">图书名称</div>  
        <div style="width: 20%; height:12px; float:left; text-align:center; font-size:13px; color:#003399">会员价（元）</div> 
        <div style="width: 20%; height:12px; float:left; text-align:center; font-size:13px; color:#003399">数量（本）</div>   
        <div style="width: 20%; height:12px; float:left; text-align:center; font-size:13px; color:#003399">价格小计（元）</div>       
    </div> 
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
    <div style="width:800px; height:22px; padding-top:10px">
        <div style="width: 40%; height:12px; float:left; text-align:center; font-size:13px; text-align:left"><strong><?php echo $this->_reg_objects['util'][0]->unHtml($this->_tpl_vars['arrayCarInfos'][$this->_sections['cbID']['index']]['bookname']);?>
</strong></div>  
        <div style="width: 20%; height:12px; float:left; text-align:center; font-size:13px"><strong><?php echo $this->_reg_objects['util'][0]->moneyFormat($this->_tpl_vars['arrayCarInfos'][$this->_sections['cbID']['index']]['newprice']);?>
</strong></div> 
        <div style="width: 20%; height:12px; float:left; text-align:center; font-size:13px"><strong><?php echo $this->_tpl_vars['arrayCarInfos'][$this->_sections['cbID']['index']]['num']; ?>
</strong></div>   
        <div style="width: 20%; height:12px; float:left; text-align:center; font-size:13px"><strong><?php echo $this->_reg_objects['util'][0]->moneyFormat($this->_tpl_vars['arrayCarInfos'][$this->_sections['cbID']['index']]['smallTotalPrice']);?>
</strong></div>       
    </div> 
    <?php endfor; endif; ?>
    <br /> 
    <div style="width:800px; height:25px; border-top:1px solid #333333">
        <div style="width:200px; float:right; padding-top:5px; text-align:right">图书价格总计：&nbsp;<strong><?php echo $this->_reg_objects['util'][0]->moneyFormat($this->_tpl_vars['totalPrice']);?>
</strong>&nbsp;元</div>
    </div>
    <div style="width:800px; height:25px">
        <div style="width:200px; float:right; padding-top:5px; text-align:right">运费：&nbsp;<strong><?php echo $this->_reg_objects['util'][0]->moneyFormat($_SESSION['recuserinfo']['recpay']);?>
</strong>&nbsp;元</div>
    </div>    
    <div style="width:800px; height:25px">
        <div style="width:200px; float:right; padding-top:5px; text-align:right; border-top:1px solid #333333">您应该支付的总运费：&nbsp;<strong><?php echo $this->_reg_objects['util'][0]->moneyFormat($_SESSION['recuserinfo']['recpayall']);?>
</strong>&nbsp;元</div>
    </div>    
    <div style="width:850px; height:22px; border-bottom:1px dotted #333333">
        <div style="width:120px; height:22px; float:left; background-color:#7C7C7C; color:#FFFFFF; padding-top:5px">收货人信息</div>
    </div>  
    <br /> 
    <div style="width:800px; height:25px">
        <li style="display:inline; height:25px; text-align:left; width:100%">订购用户昵称：<?php echo $_SESSION['recuserinfo']['unc']; ?>
</li>
        <li style="display:inline; height:25px; text-align:left; width:50%">收货人姓名：<?php echo $_SESSION['recuserinfo']['username']; ?>
</li>
        <li style="display:inline; height:25px; text-align:left; width:50%">性别：<?php echo $_SESSION['recuserinfo']['sex']; ?>
</li>
        <li style="display:inline; height:25px; text-align:left; width:100%">收货人详细地址：<?php echo $_SESSION['recuserinfo']['address']; ?>
</li>
        <li style="display:inline; height:25px; text-align:left; width:50%">邮政编码：<?php echo $_SESSION['recuserinfo']['yb']; ?>
</li>
        <li style="display:inline; height:25px; text-align:left; width:50%">联系电话：<?php echo $_SESSION['recuserinfo']['tel']; ?>
</li>   
        <li style="display:inline; height:25px; text-align:left; width:50%; float:left">发票抬头：<?php if ($_SESSION['recuserinfo']['tt'] == ''): ?>不要发票<?php else: ?><?php echo $_SESSION['recuserinfo']['tt']; ?>
<?php endif; ?></li>     
    
    </div> 
     <div style="width:930px; height:25px;  border-top:1px solid #333333; padding-top:10px">
              <a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/selectpaytype.html"><img src="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/button_selpaytype.gif" border="0" /></a>
    </div>  
    
    
     <br />
</div>
       