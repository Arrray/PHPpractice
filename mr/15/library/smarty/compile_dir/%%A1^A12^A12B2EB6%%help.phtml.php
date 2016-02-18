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
/help-1.html" class="<?php if ($this->_tpl_vars['cctype'] == 1): ?>a2<?php else: ?>a1<?php endif; ?>"><strong>全部</strong></a></div>
                    
                    <div style="width:45px; height:25px;  float:left; padding-top:5px; <?php if ($this->_tpl_vars['cctype'] == 2): ?>background:url(<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/dg_button_bg.gif)<?php endif; ?>"><a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/help-2.html" class="<?php if ($this->_tpl_vars['cctype'] == 2): ?>a2<?php else: ?>a1<?php endif; ?>"><strong>初级</strong></a></div>
                
                    <div style="width:45px; height:25px;  float:left; padding-top:5px; <?php if ($this->_tpl_vars['cctype'] == 3): ?>background:url(<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/dg_button_bg.gif)<?php endif; ?>"><a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/help-3.html" class="<?php if ($this->_tpl_vars['cctype'] == 3): ?>a2<?php else: ?>a1<?php endif; ?>"><strong>中级</strong></a></div>
                    
                    <div style="width:45px; height:25px;  float:left; padding-top:5px; <?php if ($this->_tpl_vars['cctype'] == 4): ?>background:url(<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/dg_button_bg.gif)<?php endif; ?>"><a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/help-4.html" class="<?php if ($this->_tpl_vars['cctype'] == 4): ?>a2<?php else: ?>a1<?php endif; ?>"><strong>高级</strong></a></div>
                </div>    
                <div style="width:6px; height:30px; background:url(<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/dg_right.gif); float:right"></div>        
            </div>
            <div style="width:200px; background-color:#FDFBED; border-left:1px solid #FF6700; border-right:1px solid #FF6700; border-bottom:1px solid #FF6700">
                <div style="width:100%; height:22px; border-bottom:1px dotted #CCCCCC; background-color:#F7F7F7; padding-top:5px; text-align:left; padding-left:15px">
                                                     当前导航：
                    <?php if ($this->_tpl_vars['cctype'] == '1'): ?>
                                                                全部图书导航
                    <?php elseif ($this->_tpl_vars['cctype'] == '2'): ?>
                                                                  初级入门类图书
                    <?php elseif ($this->_tpl_vars['cctype'] == '3'): ?>
                                                                  提高必备类图书
                    <?php elseif ($this->_tpl_vars['cctype'] == '4'): ?>
                                                                  高级导向类图书
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
                        ·&nbsp;<?php echo $this->_reg_objects['util'][0]->unHtml($this->_tpl_vars['bigtypes'][$this->_sections['bID']['index']]['typename']);?>

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
                            ·&nbsp;<a href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
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
        <!-- 中间 -->
        
        <div style="width:700px; height:100%; float:right">
            <div style="width: 100%; height:30px; text-align:left; padding-top:5px; border-bottom:1px solid #CCCCCC">
                                         当前位置：明日网上书店&nbsp;>>&nbsp;帮助指南
            </div> 
            <br /> 
            <a name="1" id="1">
            <div style="width: 660px; height:22px; border-bottom:1px dotted #AED1EF">
                <div style="width: 120px; height:22px; float:left; background-color:#E7F0F8; text-align:center; padding-top:4px">QQ在线咨询</div>
            </div>
            
            <div style="width: 660px; text-align:left; line-height:20px; padding-top:10px; padding-bottom:10px; font-size:13px; padding-left:30px">
                企业QQ：100310063                  
            </div>
              <a name="2" id="2">  
            <div style="width: 660px; height:22px; border-bottom:1px dotted #AED1EF">
                <div style="width: 120px; height:22px; float:left; background-color:#E7F0F8; text-align:center; padding-top:4px">咨询热线</div>
            </div>
            
            <div style="width: 660px; text-align:left; line-height:20px; padding-top:10px; padding-bottom:10px; font-size:13px; padding-left:30px">
             400电话：400-657-1066&nbsp;&nbsp;&nbsp;&nbsp;  咨询电话：0431-84978981&nbsp;&nbsp;84978982                 
            </div>
            
            <a name="3" id="3">
            <div style="width: 660px; height:22px; border-bottom:1px dotted #AED1EF">
                <div style="width: 120px; height:22px; float:left; background-color:#E7F0F8; text-align:center; padding-top:4px">银行汇款</div>
            </div>
            <div style="width: 660px; height:100px; text-align:left; line-height:20px; padding-top:10px; padding-bottom:10px; font-size:13px; padding-left:30px">
            （1）企业账号：221000661018010002495<br />
·开户行：交行长春分行新曙光支行
·收款人：吉林省明日科技有限公司<br />
·收款地址：吉林省长春市二道区亚泰广场C座2205室<br /><br />
            （2）中国工商银行<br />
·银联：622202  4200003577105
·收款人：高春燕<br />
·收款地址：吉林省长春市二道区亚泰广场C座2205室<br /><br />

           （3）中国建设银行<br />
·一卡通：4367 4209 4212 0763 689
·收款人：高春燕<br />
·收款地址：吉林省长春市二道区亚泰广场C座2205室<br /><br />
    （4）中国交通银行<br />
·一卡通：622260  0340002607958
·收款人：高春燕<br />
·收款地址：吉林省长春市二道区亚泰广场C座2205室<br /><br />
  （5）中国农业银行<br />
·银联：622848  0530181373917
·收款人：高春燕<br />
·收款地址：吉林省长春市二道区亚泰广场C座2205室<br />




                                  
            </div>              
            <a name="4" id="4">
            <div style="width: 660px; height:22px; border-bottom:1px dotted #AED1EF">
                <div style="width: 120px; height:22px; float:left; background-color:#E7F0F8; text-align:center; padding-top:4px">邮局邮递</div>
            </div>
            <div style="width: 660px; text-align:left; line-height:20px; padding-top:10px; padding-bottom:10px; font-size:13px; padding-left:30px">
收款地址：吉林省长春市二道区东盛大街89号亚泰广场C座2205室<br />
·邮政编码：130031<br />
·收款人：吉林省明日科技有限公司<br />
·注意：请将订单号填写在附言栏里<br />
                                  
            </div>                              
 
 <a name="5" id="5">
            <div style="width: 660px; height:22px; border-bottom:1px dotted #AED1EF">
                <div style="width: 120px; height:22px; float:left; background-color:#E7F0F8; text-align:center; padding-top:4px">工行在线支付</div>
            </div>
            <div style="width: 660px; text-align:left; line-height:20px; padding-top:10px; padding-bottom:10px; font-size:13px; padding-left:30px">
             通过工行提供的在线支付接口进行在线支付<br />
·注意：用户需要到当地工行办理网上银行业务
                                  
            </div>  
 <a name="6" id="6">
            <div style="width: 660px; height:22px; border-bottom:1px dotted #AED1EF">
                <div style="width: 120px; height:22px; float:left; background-color:#E7F0F8; text-align:center; padding-top:4px">支付宝在线支付</div>
            </div>
             <div style="width: 660px; text-align:left; line-height:20px; padding-top:10px; padding-bottom:10px; font-size:13px; padding-left:30px">
                 通过支付宝进行在线支付<br />
·注意：用户需要到当地银行办理网上银行业务
                                  
            </div>  
 <a name="7" id="7">
            <div style="width: 660px; height:22px; border-bottom:1px dotted #AED1EF">
                <div style="width: 120px; height:22px; float:left; background-color:#E7F0F8; text-align:center; padding-top:4px">省内外快递邮寄 </div>
            </div>
             <div style="width: 660px; text-align:left; line-height:20px; padding-top:10px; padding-bottom:10px; font-size:13px; padding-left:30px">
                  平邮 （费用8元，支持国内包裹） <br />
  普通快递 （费用20元，到货时间约为2-4天，支持国内一二级城市）  <br />
  EMS快递 （费用30元，支持国内）                   
            </div>          
 <a name="8" id="8">
             <div style="width: 660px; height:22px; border-bottom:1px dotted #AED1EF">
                <div style="width: 120px; height:22px; float:left; background-color:#E7F0F8; text-align:center; padding-top:4px">自行取货 </div>
            </div>
            <div style="width: 660px; text-align:left; line-height:20px; padding-top:10px; padding-bottom:10px; font-size:13px; padding-left:30px">
                 用户可到明日电脑商城自行取书                 
            </div>        
        <a name="9" id="9">
             <div style="width: 660px; height:22px; border-bottom:1px dotted #AED1EF">
                <div style="width: 120px; height:22px; float:left; background-color:#E7F0F8; text-align:center; padding-top:4px">本市送货上门  </div>
            </div>
            <div style="width: 660px; text-align:left; line-height:20px; padding-top:10px; padding-bottom:10px; font-size:13px; padding-left:30px">
                  我公司可以为长春市区内购买图书的用户进行上门送货                
            </div>  
            <a name="10" id="10">
             <div style="width: 660px; height:22px; border-bottom:1px dotted #AED1EF">
                <div style="width: 120px; height:22px; float:left; background-color:#E7F0F8; text-align:center; padding-top:4px">购物流程   </div>
            </div>
            <div style="width: 660px; text-align:left; line-height:20px; padding-top:10px; padding-bottom:10px; font-size:13px; padding-left:30px">
                用户登录->选购图书->放入购物车->填写收货人信息->确认订单->选取付款方式->确认支付方式并按选择的支付方式付款                 
            </div> 
            <a name="11" id="11">
             <div style="width: 660px; height:22px; border-bottom:1px dotted #AED1EF">
                <div style="width: 120px; height:22px; float:left; background-color:#E7F0F8; text-align:center; padding-top:4px">取消订单  </div>
            </div>
            <div style="width: 660px; text-align:left; line-height:20px; padding-top:10px; padding-bottom:10px; font-size:13px; padding-left:30px">
            用户登录->用户中心->我的订单->查看要取消的订单->点击订单下方的取消订购按钮                      
            </div>                        
            
            
            
                        
            
            </div>             
        </div>
</div>